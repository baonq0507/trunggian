<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterSuccessMail;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Cookie;
class AuthController extends Controller
{
    
    public function ShowFormLogin(Request $request)
    {
        return view("auth.login");
    }

    public function ShowFormRegister(Request $request)
    {
        return view("auth.signup");
    }

    public function register(Request $request)
    {
        $request->validate([
            "email"=> "required|email|max:255|unique:users,email",
            "password"=> "required|min:6|max:30",
            'name'=> 'required|min:3|max:50'
        ], [
            'email.required'=> 'Email không được để trống',
            'email.email'=> 'Email không đúng định dạng',
            'email.max'=> 'Email không được quá 255 ký tự',
            'email.unique'=> 'Email đã được sử dụng',
            'password.required'=> 'Mật khẩu không được để trống',
            'password.min'=> 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.max'=> 'Mật khẩu không được quá 30 ký tự',
            'name.required'=> 'Tên không được để trống',
            'name.min'=> 'Tên phải có ít nhất 3 ký tự',
            'name.max'=> 'Tên không được quá 50 ký tự',
        ]);
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);

        $token = Str::random(10);
        $userVerify = UserVerify::create([
            'user_id'=> $user->id,
            'token'=> $token
        ]);

        // send email to user
        Mail::to($request->email)->send(new RegisterSuccessMail([
            'name'=> $user->name,
            'token'=> $userVerify->token
        ]));

        return redirect()->back()->with('success','Đăng ký thành công, vui lòng kiểm tra email để xác thực tài khoản');
    }

    public function verify(Request $request)
    {
        $userVerify = UserVerify::where('token',$request->token)->first();
        if($userVerify && !$userVerify->is_used){
            $userVerify->is_used = true;
            $userVerify->save();
            return redirect()->route('login')->with('success','Xác thực tài khoản thành công, bạn có thể đăng nhập vào hệ thống');
        }
        return redirect()->route('login')->with('error','Xác thực tài khoản thất bại');
    }

    public function login(Request $request)
    {
        $request->validate([
            "email"=> "required|email|max:255",
            "password"=> "required|min:6|max:30",
        ], [
            'email.required'=> 'Email không được để trống',
            'email.email'=> 'Email không đúng định dạng',
            'email.max'=> 'Email không được quá 255 ký tự',
            'password.required'=> 'Mật khẩu không được để trống',
            'password.min'=> 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.max'=> 'Mật khẩu không được quá 30 ký tự',
        ]);

        $user = User::where('email',$request->email)->first();
        if(Auth::attempt($request->only('email','password'))){
            $token = JWTAuth::fromUser($user);
            // lưu cookie bằng thời gian session SESSION_LIFETIME
            Cookie::queue('token', $token, env('SESSION_LIFETIME'));
            return redirect()->route('home')->with('success','Đăng nhập thành công');
        }
        return redirect()->route('login')->with('error','Đăng nhập thất bại');
    }
}

