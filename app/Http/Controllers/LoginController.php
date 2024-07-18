<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Social;
use Socialite;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Rules\Captcha; 
class LoginController extends Controller
{   
    public function login_user(Request $request){
    $data = $request->validate([
        //validation laravel 
        'username' => 'required',
        'password' => 'required',
    ],
    [
        'username.required'=> 'Vui lòng nhập tên tài khoản', // custom message
        'password.required'=> 'Vui lòng nhập mật khẩu' // custom message
    ]);

    $username = $data['username'];
    $password = md5($data['password']);
    $login = User::where(function($query) use ($username) {
             $query->where('email', '=', $username)
             ->orWhere('username', '=',$username); })->where('password',$password)->first();

    if($login){
        $login_count = $login->count();
        if($login_count>0){
            Session::put('username',$login->username);
            Session::put('user_id',$login->id);
            return Redirect::to('/');
        }
    }else{
            Session::put('message','Mật khẩu hoặc tài khoản bị sai.Làm ơn nhập lại');
            return Redirect::to('/');
        }
    }
    public function register_user(Request $request){
        $data = $request->validate([
            //validation laravel 
            'username' => [
                'required',
                'min:3',
            ],
            'email' => [
                'required',
                'regex:/(.+)@(.+)\.(.+)/i',
            ],
            'password' => [
                'required',
                'min:6',
            ],
            'password_confirmation' => 'required|same:password'
        ],
        [
            'username.required'=> 'Vui lòng nhập tên tài khoản', // custom message
            'username.required'=> 'Tên tài khoản không được dưới 3 kí tự', // custom message
            'email.required'=> 'Vui lòng nhập email', // custom message
            'email.regex'=> 'Vui lòng nhập đúng định dạng email', // custom message
            'password.required'=> 'Vui lòng nhập mật khẩu', // custom message
            'password.min'=> 'Mật khẩu không được dưới 6 kí tự', // custom message
            'password_confirmation.required'=> 'Vui lòng nhập mật khẩu xác nhận', // custom message
            'password_confirmation.same'=> 'Mật khẩu xác nhận không trùng khớp' // custom message
        ]);
        $data_user = array();
    	$data_user['email'] = $data['username'];
    	$data_user['username'] = $data['email'];
    	$data_user['password'] = md5($data['password']);
        $user_id = DB::table('users')->insertGetId($data_user);
     
        if ($user_id < 0) {
            Session::put('message','Đăng kí tài khoản không thành công');
            return Redirect::to('/');
        }else{
            Session::put('username',$data['username']);
            Session::put('email',$data['email']);
            Session::put('user_id',$user_id);
            return Redirect::to('/');
        }
    }
}