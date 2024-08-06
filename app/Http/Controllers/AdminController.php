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
        $this->AuthLogin();
    	$payments = DB::table('tbl_payment')->orderby('created_at','DESC')->paginate(20);
    	return view('admin.manage_payment')->with(compact('payments'));
    }

    public function list_withdraw_money(){
        $this->AuthLogin();
    	$moneys = DB::table('tbl_withdraw_money')->orderby('id','DESC')->paginate(20);
    	return view('admin.list_withdraw_money')->with(compact('moneys'));
    }

    public function list_withdraw_money_agree(Request $request){
        $this->AuthLogin();
        DB::table('tbl_withdraw_money')->where('id', '=', $request->withdraw_id)->update(['status'=>1]);
        $money_cu=DB::table('tbl_withdraw_money')->where('id', '=', $request->withdraw_id)->get();
        $tien_cu=DB::table('users')->where('id', '=', $money_cu[0]->user_id)->get();
        DB::table('users')->where('id', '=', $money_cu[0]->user_id)->update(['so_tien_da_rut'=> $tien_cu[0]->so_tien_da_rut + $money_cu[0]->so_tien]);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('/withdraw-money');
    }
    public function list_withdraw_money_refused(Request $request){
        $this->AuthLogin();
        DB::table('tbl_withdraw_money')->where('id', '=', $request->withdraw_id)->update(['status'=>2]);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('/withdraw-money');
    }

    public function change_password_view(Request $request){
        $this->AuthLogin();
    	return view('admin.change_password');
    }
    public function change_password(Request $request) {
        $this->AuthLogin();
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

    public function all_user(Request $request) {
        $this->AuthLogin();
        $search = $request->input('search');
        $admin = DB::table('users')->where('username', 'LIKE', "%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")->orderby('created_at','DESC')->paginate(20);
        return view('admin.all_users')->with(compact('admin'));
    }
    public function all_user_id(Request $request) {
        $this->AuthLogin();
        $admin = DB::table('users')->where('id', '=', $request->user_id)->paginate(1);
        return view('admin.all_users')->with(compact('admin'));
    }
    public function lock_account(Request $request) {
        $this->AuthLogin();
        DB::table('users')->where('id', '=', $request->user_id)->update(['lock'=>1]);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('/users');
    }
    public function open_account(Request $request) {
        $this->AuthLogin();
        DB::table('users')->where('id', '=', $request->user_id)->update(['lock'=>0]);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('/users');
    }
    public function service(Request $request) {
        $this->AuthLogin();
        $services = DB::table('tbl_dich_vu')->paginate(20);
        return view('admin.all_services')->with(compact('services'));
    }
    
    public function service_edit(Request $request) {
        $this->AuthLogin();
        $services = DB::table('tbl_dich_vu')->paginate(20);
        $edit= 'true';
        return view('admin.all_services')->with(compact('edit'))->with(compact('services'));
    }

    public function service_edit_id(Request $request) {
        $this->AuthLogin();
        DB::table('tbl_dich_vu')->where('id', '=', $request->service_id)->update(['gia'=>$request->gia]);
        Session::put('message','Cập nhật thành công');
return Redirect::to('/all-service');
    }

    public function all_comments(Request $request) {
        $this->AuthLogin();
        $comments = DB::table('tbl_binh_luan')->paginate(20);
        return view('admin.all_comments')->with(compact('comments'));
    }
    public function edit_comments(Request $request) {
        $this->AuthLogin();
        $comments = DB::table('tbl_binh_luan')->where('id', '=', $request->comment_id)->update(['diem_uy_tin'=>$request->number]);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('/all-comment');
    }

    public function all_category_post(Request $request){
        $this->AuthLogin();
        $search = $request->input('search');
    	$all_category_post = DB::table('danh_muc')->where('ten_danh_muc', 'LIKE', "%{$search}%")->paginate(20);
        return view('admin.all_category_post')->with(compact('all_category_post'));
    }
    

    public function unactive_category_post_menu($category_post_id){
        $this->AuthLogin();
        DB::table('danh_muc')->where('id',$category_post_id)->update(['menu'=>0]);
        Session::put('message','Ẩn danh mục trên menu thành công');
        return Redirect::to('all-category-post');

    }
    public function active_category_post_menu($category_post_id){
        $this->AuthLogin();
        DB::table('danh_muc')->where('id',$category_post_id)->update(['menu'=>1]);
        Session::put('message','Hiện thị danh mục trên menu thành công');
        return Redirect::to('all-category-post');
    }
    public function unactive_category_post_home($category_post_id){
        $this->AuthLogin();
        DB::table('danh_muc')->where('id',$category_post_id)->update(['show_trang_chu'=>0]);
        Session::put('message','Ẩn danh mục lên trang chủ thành công');
        return Redirect::to('all-category-post');

    }
    public function active_category_post_home($category_post_id){
        $this->AuthLogin();
        DB::table('danh_muc')->where('id',$category_post_id)->update(['show_trang_chu'=>1]);
        Session::put('message','Hiện thị danh mục lên trang chủ thành công');
        return Redirect::to('all-category-post');
    }

    public function add_category_product(){
        $this->AuthLogin();
        $danh_muc=DB::table('danh_muc')->get();       
        return view('admin.add_category_product')->with(compact('danh_muc'));

    }

    public function edit_category_post($category_post_id){
        $this->AuthLogin();
        $danh_muc=DB::table('danh_muc')->get();   
        $danh_muc_item=DB::table('danh_muc')->where('id',$category_post_id)->get();   
        return view('admin.edit_category_product')->with(compact('danh_muc_item'))->with(compact('category_post_id'))->with(compact('danh_muc'));
    }
    
    public function delete_category_post($category_post_id){
        $this->AuthLogin();
        DB::table('danh_muc')->where('id',$category_post_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-post');
    }
    
    public function save_category_post(Request $request){
        $this->AuthLogin();
    	$data = array();

    	$data['ten_danh_muc'] = $request->ten_danh_muc;
    	$data['mau_chu'] = $request->mau_chu;
        $data['danh_muc_slug'] = $request->danh_muc_slug;
        $data['description'] = $request->description;
        $data['icon'] = $request->icon;
        $data['new'] = $request->new;
        $data['id_danh_muc_cha'] = $request->id_danh_muc_cha;
        $data['menu'] = $request->menu;
        $data['icon_menu'] = $request->icon_menu;
        $data['mau_chu_menu'] = $request->mau_chu_menu;
        $data['show_trang_chu'] = $request->show_trang_chu;
    	 DB::table('danh_muc')->insert($data);
    	Session::put('message','Thêm danh mục sản phẩm thành công');
    	return Redirect::to('all-category-post');
    }
    public function update_category_post(Request $request,$category_post_id){
        $this->AuthLogin();
        $data = array();
        $data['ten_danh_muc'] = $request->ten_danh_muc;
    	$data['mau_chu'] = $request->mau_chu;
        $data['danh_muc_slug'] = $request->danh_muc_slug;
        $data['description'] = $request->description;
        $data['icon'] = $request->icon;
        $data['new'] = $request->new;
        $data['id_danh_muc_cha'] = $request->id_danh_muc_cha;
        $data['menu'] = $request->menu;
        $data['icon_menu'] = $request->icon_menu;
        $data['mau_chu_menu'] = $request->mau_chu_menu;
        $data['show_trang_chu'] = $request->show_trang_chu;
        
        DB::table('danh_muc')->where('id',$category_post_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-post');
    }

    public function all_post(Request $request){
        $this->AuthLogin();
        $search = $request->input('search');
    	$all_post = DB::table('tbl_post')
        ->where('ten_bai_viet', 'LIKE', "%{$search}%")
        ->orderby('tbl_post.id','desc')->paginate(20);
        return view('admin.all_posts')->with(compact('all_post'));


    }

    public function delete_product($post_id){
        $this->AuthLogin();
        DB::table('tbl_post')->where('id',$post_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return Redirect::to('all-post');
    }

    public function ranks(Request $request) {
        $this->AuthLogin();
        $ranks = DB::table('tbl_ranks')->paginate(20);
        return view('admin.all_ranks')->with(compact('ranks'));
    }
    
    public function rank_edit(Request $request) {
        $this->AuthLogin();
        DB::table('tbl_ranks')->where('id', '=', $request->rank_id)->update(['gioi_han_max'=>$request->rank]);
        if ($request->rank_id < 10) {
            DB::table('tbl_ranks')->where('id', '=', $request->rank_id+1)->update(['gioi_han_min'=>$request->rank+1]);
        }
        Session::put('message','Cập nhật thành công');
        return Redirect::to('/all-ranks');
    }
    
    public function rose(Request $request) {
        $this->AuthLogin();
        $rose = DB::table('tbl_he_thong')->where('id',1)->paginate(1);
        return view('admin.rose')->with(compact('rose'));
    }
    public function rose_change(Request $request) {
        $this->AuthLogin();
        DB::table('tbl_he_thong')->where('id', '=',1)->update(['hoa_hong'=>$request->get('number_rose')]);
        return redirect()->back()->with("success","Thay đổi tỉ lệ hoa hồng thành công");
    }

    public function telegram(Request $request) {
        $this->AuthLogin();
        $telegrams = DB::table('table_telegram')->paginate(20);
        return view('admin.telegram')->with(compact('telegrams'));
    }
    public function telegram_change(Request $request) {
        $this->AuthLogin();
        DB::table('table_telegram')->where('id', '=',$request->telegram_id)->update(['link'=>$request->number_telegram]);
        return redirect()->back()->with("success","Thay đổi đường dẫn telegram thành công");
    }
    
}