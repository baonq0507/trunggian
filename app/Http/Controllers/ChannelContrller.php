<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Channel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Messgae;
use App\Models\User;
use App\Models\UserChannel;
class ChannelContrller extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'type' => 'required|string|in:buy,sell',
            'email' => 'nullable|email',
        ], [
            'name.required' => 'Tên nhóm không được để trống',
            'amount.required' => 'Số lượng không được để trống',
            'type.required' => 'Loại không được để trống',
            'email.email' => 'Email không đúng định dạng',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()], 422);
        }

        $data = $validator->validated();
        $user = Auth::user();
        $data['created_by'] = $user->id;
        $data['status'] = 'pending';
        if($data['type'] == 'buy'){
            if($user->balance < $data['amount']){
                return response()->json(['message' => 'Số dư không đủ'], 422);
            }
        }
        $channel = Channel::create($data);
        $channel->userChannels()->create([
            'user_id' => Auth::user()->id,
            'status' => 'trading',
        ]);
        if ($data['email']) {
            $user = User::where('email', $data['email'])->first();
            if ($user) {
                $channel->userChannels()->create([
                    'user_id' => $user->id,
                    'status' => 'pending',
                ]);
            }
        }
        $url_invite = route('join.channel', $channel->slug);
        return response()->json(['message' => 'Tạo nhóm thành công', 'data' => $channel, 'url_invite' => $url_invite], 200);
    }

    public function message(Request $request, $slug)
    {
        $user = Auth::user();
        $channel = Channel::where('slug', $slug)->firstOrFail();
        $messages = Messgae::where('channel_id', $channel->id)->with('messageFiles')->get();
        $users = User::where('id', '!=', $user->id)->get();
        if($request->ajax()){
            if($request->has('time')){
                $messages = Messgae::where('channel_id', $channel->id)->where('created_at', '<', $request->time)->limit(10)->orderBy('created_at', 'desc')->get();
            }
            return response()->json(['messages' => $messages, 'users' => $users]);
        }
        
        return view('message', compact('channel', 'messages', 'users'));
    }
    // join channel
    public function joinChannel($slug)
    {
        $user = Auth::user();
        $channel = Channel::where('slug', $slug)->firstOrFail();
        if($channel->userChannels()->where('user_id', $user->id)->exists()){
            $channel->userChannels()->where('user_id', $user->id)->update(['status' => 'trading']);
            return redirect()->route('message', $slug);
        }
        if($channel->userChannels()->where('user_id', $user->id)->exists()){
            return response()->json(['message' => 'Bạn đã tham gia nhóm này'], 422);
        }

        //type
        // if($channel->type == 'buy'){
        //     if($user->balance < $channel->amount){
        //         return response()->json(['message' => 'Số dư không đủ'], 422);
        //     }
        // }
        $channel->userChannels()->create([
            'user_id' => $user->id,
            'status' => 'trading',
        ]);

        $channel->update(['status' => 'trading']);
        return redirect()->route('message', $slug);
    }
    // leave channel
    public function leaveChannel($slug)
    {
        $channel = Channel::where('slug', $slug)->firstOrFail();
        $channel->userChannels()->where('user_id', Auth::user()->id)->delete();
        $channel->update(['status' => 'pending']);
        return redirect()->route('message', $slug);
    }

    public function rejectInvite($id)
    {
        $invite = UserChannel::find($id);

        // xóa user auth trong user_channels
        $invite->where('user_id', Auth::user()->id)->where('channel_id', $invite->channel_id)->delete();
        return redirect()->back();
    }

    public function loadChannels(Request $request)
    {
        $page = $request->page ?? 1;
        $channels = Channel::where('created_by', Auth::user()->id)
            ->orWhereHas('userChannels', function($query) {
                $query->where('user_id', Auth::user()->id);
            })->where('status', 'trading')->paginate(7, ['*'], 'page', $page);
        return response()->json(['data' => $channels, 'current_page' => $channels->currentPage()]);
    }

    public function uploadMessage(Request $request)
    {
        dd($request->all());
    }

    public function updateStatus(Request $request, $slug)
    {
        $user = Auth::user();
        $channel = Channel::where('slug', $slug)->firstOrFail();
        if($channel->userChannels()->where('user_id', $user->id)->first()->status == 'trading'){
            $channel->userChannels()->where('user_id', $user->id)->update(['status' => $request->status]);
            return response()->json(['message' => 'Cập nhật trạng thái thành công'], 200);
        }
        // nếu tất cả user đồng ý
        if($channel->userChannels()->where('status', 'completed')->count() == $channel->userChannels()->count()){
            $channel->update(['status' => 'completed']);
            return response()->json(['message' => 'Cập nhật trạng thái thành công'], 200);
        }
        return response()->json(['message' => 'Bạn không thể cập nhật trạng thái'], 422);
    }
}


