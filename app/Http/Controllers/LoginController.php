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
             ->orWhere('username', '=',$username); })->where('password',$password);
    
        
    if($login->count() > 0){
        $login = User::where(function($query) use ($username) {
            $query->where('email', '=', $username)
            ->orWhere('username', '=',$username); })->where('password',$password)->first();
             Session::put('username',$login->username);
             Session::put('user_id',$login->id);
             Session::put('ma_gioi_thieu',$login->ma_gioi_thieu);
             return Redirect::to('/');        
    }else{
            Session::put('message','Mật khẩu hoặc tài khoản bị sai.Làm ơn nhập lại');
            Session::flash('ok', "Special message goes here");
            return Redirect::back();
        }
    }
    public function register_user_show(Request $request)
    {
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Có gì mới?";
        $url_canonical = $request->url();
        $sidebar_active='new-post';
        $post = DB::table('tbl_post')->orderBy('created_at', 'desc')->paginate(10); 
        //--seo
        return view('pages.register_user_show')->with('post',$post)->with('sidebar_active',$sidebar_active)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
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
        ],
        [
            'username.required'=> 'Vui lòng nhập tên tài khoản', // custom message
            'username.required'=> 'Tên tài khoản không được dưới 3 kí tự', // custom message
            'email.required'=> 'Vui lòng nhập email', // custom message
            'email.regex'=> 'Vui lòng nhập đúng định dạng email', // custom message
            'password.required'=> 'Vui lòng nhập mật khẩu', // custom message
            'password.min'=> 'Mật khẩu không được dưới 6 kí tự', // custom message
        
        ]);
        $data_user = array();
        $rand = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);
        $data_user['background_color'] = ('#' . $rand);
    	$data_user['email'] = $data['email'];
    	$data_user['username'] = $data['username'];
    	$data_user['password'] = md5($data['password']);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
 
        $data_user['ma_gioi_thieu'] = $randomString;
        $username = $data['username'];
        $email = $data['email'];
        $username = User::where(function($query) use ($username) {
            $query->where('username', '=', $username); });

        if($username->count() > 0){
            Session::put('message','Tên người dùng đã tồn tại');
            Session::flash('oklogin', "Special message goes here");
            return Redirect::to('/register');
        }
        else
        {
            $user_id = DB::table('users')->insertGetId($data_user);
            Session::put('username',$data_user['username']);
            Session::put('email',$data_user['email']);
            Session::put('user_id',$user_id);
           
            Session::put('ma_gioi_thieu',$randomString);
            return Redirect::to('/');
            
        }
    }
  
}