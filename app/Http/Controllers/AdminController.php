<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Session;
use App\Social;
use Socialite;
use App\Login;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Rules\Captcha; 
use Hash;

class AdminController extends Controller
{
    public function login_google(){
        return Socialite::driver('google')->redirect();
    }
    public function callback_google(){
            $users = Socialite::driver('google')->stateless()->user(); 
            // // return $users->id;
            // return $users->name;
            // return $users->email;
            $authUser = $this->findOrCreateUser($users,'google');
            $account_name = Login::where('admin_id',$authUser->user)->first();

            Session::put('admin_name',$account_name->admin_name);
            Session::put('admin_id',$account_name->admin_id);
            return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');  
    }
    public function findOrCreateUser($users, $provider){
            $authUser = Social::where('provider_user_id', $users->id)->first();
            if($authUser){

                return $authUser;
            }
          
            $hieu = new Social([
                'provider_user_id' => $users->id,
                'provider' => strtoupper($provider)
            ]);

            $orang = Login::where('admin_email',$users->email)->first();

                if(!$orang){
                    $orang = Login::create([
                        'admin_name' => $users->name,
                        'admin_email' => $users->email,
                        'admin_password' => '',
                        'admin_phone' => '',
                        'admin_status' => 1
                        
                    ]);
                }

            $hieu->login()->associate($orang);
                
            $hieu->save();

            $account_name = Login::where('admin_id',$hieu->user)->first();
            Session::put('admin_name',$account_name->admin_name);
            Session::put('admin_id',$account_name->admin_id); 
          
            return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');


    }


    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook(){
        $provider = Socialite::driver('facebook')->user();
        $account = Social::where('provider','facebook')->where('provider_user_id',$provider->getId())->first();
        if($account){
            //login in vao trang quan tri  
            $account_name = Login::where('admin_id',$account->user)->first();
            Session::put('admin_name',$account_name->admin_name);
            Session::put('admin_id',$account_name->admin_id);
            return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');
        }else{

            $hieu = new Social([
                'provider_user_id' => $provider->getId(),
                'provider' => 'facebook'
            ]);

            $orang = Login::where('admin_email',$provider->getEmail())->first();

            if(!$orang){
                $orang = Login::create([
                    'admin_name' => $provider->getName(),
                    'admin_email' => $provider->getEmail(),
                    'admin_password' => '',
                    'admin_phone' => ''
                    
                ]);
            }
            $hieu->login()->associate($orang);
            $hieu->save();

            $account_name = Login::where('admin_id',$account->user)->first();
            Session::put('admin_name',$account_name->admin_name);
            Session::put('admin_id',$account_name->admin_id);
            return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');
        } 
    }

    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function index(){
    	return view('admin_login');
    }
    public function show_dashboard(){
        $this->AuthLogin();
    	return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        //$data = $request->all();
        $data = $request->validate([
            //validation laravel 
            'admin_email' => 'required',
            'admin_password' => 'required',
            'g-recaptcha-response' => new Captcha(),    //dòng kiểm tra Captcha
        ]);

        $admin_email = $data['admin_email'];
        $admin_password = md5($data['admin_password']);
        $login = Login::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($login){
            $login_count = $login->count();
            if($login_count>0){
                Session::put('admin_name',$login->admin_name);
                Session::put('admin_id',$login->admin_id);
                return Redirect::to('/dashboard');
            }
        }else{
                Session::put('message','Mật khẩu hoặc tài khoản bị sai.Làm ơn nhập lại');
                return Redirect::to('/admin');
        }
       

    }
    public function logout(){
        $this->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }

    public function payment(Request $request){
        // Get the number of days to show data for, with a default of 7
        $days =  $request->days;

        $range = Carbon::now()->subDays($days);
      
        
        $stats = DB::table('tbl_payment')
        ->where('created_at', '>=', $range)
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get([
            DB::raw('Date(created_at) as date'),
            DB::raw('SUM(so_tien) as value')
        ]);

        return $stats;
    }

    public function manage_payment(){
    	$payments = DB::table('tbl_payment')->orderby('created_at','DESC')->paginate(20);
    	return view('admin.manage_payment')->with(compact('payments'));
    }

    public function list_withdraw_money(){
    	$moneys = DB::table('tbl_withdraw_money')->orderby('id','DESC')->paginate(20);
    	return view('admin.list_withdraw_money')->with(compact('moneys'));
    }

    public function list_withdraw_money_agree(Request $request){
        DB::table('tbl_withdraw_money')->where('id', '=', $request->withdraw_id)->update(['status'=>1]);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('/withdraw-money');
    }
    public function list_withdraw_money_refused(Request $request){
        DB::table('tbl_withdraw_money')->where('id', '=', $request->withdraw_id)->update(['status'=>2]);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('/withdraw-money');
    }

    public function change_password_view(Request $request){
    	return view('admin.change_password');
    }
    public function change_password(Request $request) {
        $admin_id =   Session::get('admin_id');
        $admin_user = DB::table('tbl_admin')->where('admin_id', '=',$admin_id)->get();
        
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);
        if (md5($request->get('current-password')) != $admin_user[0]->admin_password) {
           
            return redirect()->back()->with("error","Mật khẩu xác nhận không trùng");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","Mật khẩu xác nhận không trùng");
        }



        //Change Password
        DB::table('tbl_admin')->where('admin_id', '=',$admin_id)->update(['admin_password'=>md5($request->get('new-password'))]);


        return redirect()->back()->with("success","Đổi mật khẩu thành công");
    }
}