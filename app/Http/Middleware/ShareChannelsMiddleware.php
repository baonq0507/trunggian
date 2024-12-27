<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Channel;
use Illuminate\Support\Facades\Auth;
use App\Models\UserChannel;
class ShareChannelsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            $channels = Channel::where('created_by', Auth::user()->id)
            ->orWhereHas('userChannels', function($query) {
                $query->where('user_id', Auth::user()->id);
            })->paginate(7);
            view()->share('channels', $channels);

            $invites = UserChannel::where('user_id', Auth::user()->id)
            ->where('status', 'pending')
            ->orderBy('created_at', 'desc')
            ->whereHas('channel', function($query) {
                $query->where('created_by', '!=', Auth::user()->id);
            })
            ->get();
            view()->share('invites', $invites);
        }
        return $next($request);
    }
}
