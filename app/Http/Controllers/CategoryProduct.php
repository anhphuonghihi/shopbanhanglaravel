<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;use Carbon\Carbon;
use App\Slider;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Excel;
use CategoryProductModel;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_category_product(){
        $this->AuthLogin();
    	return view('admin.add_category_product');
    }

    public function save_category_post(Request $request){
        $this->AuthLogin();
    	$data = array();

    	$data['category_name'] = $request->category_product_name;
        $data['meta_keywords'] = $request->category_product_keywords;
        $data['slug_category_product'] = $request->slug_category_product;
    	$data['category_desc'] = $request->category_product_desc;
    	$data['category_status'] = $request->category_product_status;

    	DB::table('tbl_category_product')->insert($data);
    	Session::put('message','Thêm danh mục sản phẩm thành công');
    	return Redirect::to('all-category-post');
    }
    public function withdraw_money_user(Request $request){
    	$data = array();

        $data = array();
        $data['stk'] = (int)$request->stk;
        $data['ten_ngan_hang'] = $request->ten_ngan_hang;
        $data['so_tien'] = $request->so_tien;
        $data['ten_tai_khoan_ngan_hang'] = $request->ten_tai_khoan_ngan_hang;
        $user_id=Session::get('user_id');
        $data['user_id'] = $user_id;
        DB::table('tbl_withdraw_money')->insert($data);
        Session::put('message','Gửi yêu cầu rút riền thành công thành công');
        return redirect()->back();
    }
    
    public function unactive_category_product($category_post_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_post_id)->update(['category_status'=>1]);
        Session::put('message','Không kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-post');

    }
    public function active_category_product($category_post_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_post_id)->update(['category_status'=>0]);
        Session::put('message','Kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-post');
    }
    public function edit_category_product($category_post_id){
        $this->AuthLogin();
        $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_post_id)->get();

        $manager_category_post  = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);

        return view('admin_layout')->with('admin.edit_category_product', $manager_category_post);
    }
    public function update_category_post(Request $request,$category_post_id){
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['meta_keywords'] = $request->category_product_keywords;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category_product')->where('category_id',$category_post_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-post');
    }


    public function dich_vu_su_dung_new(Request $request){

        $user_id=Session::get('user_id');
        $crr_users = DB::table('users')->where('id', '=', $user_id)->get();
        
        $data = array();
        $data['dich_vu_su_dung'] = 0;
        $now = Carbon::create($crr_users[0]->updated_at); //Tạo 1 datetime
        $dt = Carbon::now();
        if ($now->diffInSeconds($dt) < 30000) {
            # code...
            DB::table('users')->where('id',$user_id)->update($data);
        }else{
            return 'a';
        }

        
       
    }
    public function delete_category_product($category_post_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_post_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-post');
    }

   
    public function export_csv(){
        return Excel::download(new ExcelExports , 'post.xlsx');
    }
    public function import_csv(Request $request){
        $path = $request->file('file')->getRealPath();
        Excel::import(new ExcelImports, $path);
        return back();
    }
  


    public function show_danh_muc_home(Request $request ,$slug_danh_muc){
        //slide
        $number = strripos($slug_danh_muc,".");
        $danh_muc_id =  substr($slug_danh_muc,$number+1);

        $sidebar_active='forums';

        
        $danh_muc = DB::table('danh_muc')->where('id', '=', $danh_muc_id)->get(); 
        
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title="";
        if($danh_muc){
            
            $meta_title = $danh_muc[0]->ten_danh_muc;
            $description = $danh_muc[0]->description;

        }
    
        $url_canonical = $request->url();

        Session::put('danh_muc_id_ht', $danh_muc_id);
        if (!empty($_SERVER['QUERY_STRING'])) {
            # code...
            $str = $_SERVER['QUERY_STRING'];
            $output =array();
            $output = explode("&",$str);
        }else{
            $output = [];
        }
        $output2array = [];
        foreach ($output as $key => $value) {
            if (str_starts_with($value, 'nhan=')) {
                $output2= str_replace("nhan=", "",$value);
                $output2array[]=$output2;
            }
        }
        $direction ="desc";
        if (!empty($request->direction)) {
            # code...
            $direction = $request->direction;
        }
        Session::put('nhan_array',$output2array);
        $output2arrayname=[];
        foreach ($output2array as $item){
            $nhan = DB::table('tbl_tag')
            ->where('id', '=', $item)
            ->where('la_label', '=', '1')
            ->get();
            foreach ($nhan as $row) {
                $name = $row->name;
                $output2arrayname[]= $name;
            }
        }
        $sql = array('0'); // Stop errors when $words is empty

      
        $post = DB::table('tbl_post')->where('danh_muc_id', '=', $danh_muc_id)->where(function($post) use($output2arrayname){

            foreach($output2arrayname as $word){
                $post->orWhere('nhan', 'LIKE', '%'.$word.'%');
            }
            
        })->where('stiky', '=', '0')->orderBy('ten_bai_viet', $direction)->paginate(10); 
    	return view('pages.show_category')->with('danh_muc_id',$danh_muc_id)->with('output2arrayname',$output2arrayname)->with('direction',$direction)->with('output',$output)->with('output2array',$output2array)->with('sidebar_active',$sidebar_active)->with('slug_danh_muc',$slug_danh_muc)->with('post',$post)->with('breadcrumb','true')->with('rightbar','true')->with('description',$description)->with('danh_muc_id',$danh_muc_id)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }

    public function show_huyen(Request $request ,$slug_danh_muc){
        //slide
        $number = strripos($slug_danh_muc,".");
        $huyen_id =  substr($slug_danh_muc,$number+1);

        $sidebar_active='forums';

        
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $danh_muc = DB::table('tbl_quanhuyen')->where('maqh', '=', $huyen_id)->get(); 

        $meta_title = $danh_muc[0]->name_quanhuyen;
        $description = $danh_muc[0]->name_quanhuyen;
    
        $url_canonical = $request->url();



      
        $post = DB::table('tbl_post')->where('huyen_id', '=', $huyen_id)->where('stiky', '=', '0')->paginate(20); 
    	return view('pages.show_huyen')
        ->with('huyen_id',$huyen_id)
        ->with('post',$post)
        ->with('sidebar_active',$sidebar_active)
        ->with('breadcrumb','huyen')
        ->with('description',$description)
        ->with('rightbar','true')
        ->with('description',$description)
        ->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)
        ->with('url_canonical',$url_canonical);
    }

    public function whats_new(Request $request){
        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Có gì mới?";
        $url_canonical = $request->url();
        $sidebar_active='new-post';
        $post = DB::table('tbl_post')->orderBy('created_at', 'desc')->paginate(10); 
        //--seo
        return view('pages.whats_new')->with('post',$post)->with('sidebar_active',$sidebar_active)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    
    public function news_post(Request $request){
        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        $sidebar_active='new-post';
        $post = DB::table('tbl_post')->orderBy('created_at', 'desc')->paginate(20); 
        return view('pages.news_post')->with('post',$post)->with('sidebar_active',$sidebar_active)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }
    public function delete(Request $request,$slug_post){
        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        $sidebar_active='new-post';
        $number = strripos($slug_post,".");
        $post_id =  substr($slug_post,$number+1);
        DB::table('tbl_post')->where('id',$post_id)->delete();
        return Redirect::to('/');
                //--seo
    }
        
    public function search(Request $request){
        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        $sidebar_active='forums';
        return view('pages.search')->with('sidebar_active',$sidebar_active)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }

    public function search_result(Request $request){
        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Tìm kiếm";
        $url_canonical = $request->url();
        $sidebar_active='forums';
        $value =$request ->keywords;
        $post = DB::table('tbl_post')->where('ten_bai_viet', 'like', '%'.$value.'%')->orderBy('created_at', 'desc')->paginate(20); 
        return view('pages.search_result')->with('post',$post)->with('sidebar_active',$sidebar_active)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }
    public function account(Request $request){
        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        $sidebar_active='home';
        $count_bai_viet = 0;

        $user_id=Session::get('user_id');
        $crr_users = DB::table('users')->where('id', '=', $user_id)->get();
        $users_gt = DB::table('users')->where('duoc_gioi_thieu', '=', $crr_users[0]->ma_gioi_thieu)->get();
        $count_hoa_hong = 0;
        if ($users_gt->count()) {
            $hoa_hong_get = DB::table('tbl_he_thong')
            ->where('id', '=', 1)->get();
            $count_hoa_hong = DB::table('users')
            ->where('duoc_gioi_thieu', '=', $crr_users[0]->ma_gioi_thieu)
            ->groupBy('duoc_gioi_thieu')
            ->orderBy('duoc_gioi_thieu', 'ASC')
            ->get([
                DB::raw('sum(da_tung_nap) as sum_da_tung_nap')
            ]);
            Session::put('sum_da_tung_nap',$count_hoa_hong[0]->sum_da_tung_nap * $hoa_hong_get[0]->hoa_hong / 100 - $crr_users[0]->so_tien_da_rut);
        }
  
        Session::put('vi_tien',$crr_users[0]->vi_tien);

        return view('pages.account')->with('sidebar_active',$sidebar_active)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }

    public function referral(Request $request){
        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        $sidebar_active='home';
        return view('pages.referral')->with('sidebar_active',$sidebar_active)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }
    
    
    public function deposit_money(Request $request){
        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        $sidebar_active='home';
        return view('pages.deposit_money')->with('sidebar_active',$sidebar_active)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }
    


    public function withdraw(Request $request){
        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        $sidebar_active='home';
        return view('pages.withdraw')->with('sidebar_active',$sidebar_active)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }
    
    
    public function show_post(Request $request,$slug_post){
        $number = strripos($slug_post,".");
        $post_id =  substr($slug_post,$number+1);

        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        $post_header = "true";

        $post = DB::table('tbl_post')->where('id', '=', $post_id)->get(); 
        if ($post->count()>0) {
            # code...
            $user = DB::table('users')->where('id', '=', $post[0]->user_id)->get();
            $danh_muc_id = $post[0]->danh_muc_id;  
            $tbl_binh_luan = DB::table('tbl_binh_luan')->where('post_id', '=', $post_id)->paginate(20); 
            $sidebar_active='forums';
           return view('pages.post')->with('sidebar_active',$sidebar_active)->with('tbl_binh_luan',$tbl_binh_luan)->with('danh_muc_id',$danh_muc_id)->with('breadcrumb','true')->with('user',$user)->with('post',$post)->with('post_header',$post_header)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        }else{
            return Redirect::to('/');
        }
    }
    
    public function latest_activity(Request $request){
        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Hoạt động mới nhất";
        $url_canonical = $request->url();
        
        //--seo
    }

    public function logout(){

        Session::put('username',null);
        Session::put('user_id',null);
        return Redirect::to('/');
    }

    public function gioi_thieu($slug_gioi_thieu){
    
        if (!empty(Session::get('username'))) {
            if (!empty(Session::get('user_id'))){
                $user =DB::table('users')->where('id',Session::get('user_id'))->first();
                $gioi_thieu =DB::table('users')->where('ma_gioi_thieu',$slug_gioi_thieu)->get();
                if ($gioi_thieu->count() > 0) {
                    # code...
                    if ($slug_gioi_thieu != $user->ma_gioi_thieu) {
                        DB::table('users')->where('id',Session::get('user_id'))->update(array(
                            'duoc_gioi_thieu'=>$slug_gioi_thieu,
                        ));
                        Session::put('message_gioi_thieu','Thêm mã giới thiệu thành công');
                    }
                }
                else{
                    Session::put('message_gioi_thieu','Mã giới thiệu không tồn tại');
                }
            }
           
      
        };
      
    }

    public function gioi_thieu_post(Request $request){
        
        $slug_gioi_thieu = $request['code'];
        
        if (!empty(Session::get('username'))) {
            if (!empty(Session::get('user_id'))){
                $user =DB::table('users')->where('id',Session::get('user_id'))->first();
                $gioi_thieu =DB::table('users')->where('ma_gioi_thieu',$slug_gioi_thieu)->get();
                if ($gioi_thieu->count() > 0) {
                    # code...
                    if ($slug_gioi_thieu != $user->ma_gioi_thieu) {
                        DB::table('users')->where('id',Session::get('user_id'))->update(array(
                            'duoc_gioi_thieu'=>$slug_gioi_thieu,
                        ));
                        Session::put('message_gioi_thieu','Thêm mã giới thiệu thành công');
                        return Redirect::to('/referral-code');
                    }
                }
                else{
                    Session::put('message_gioi_thieu','Mã giới thiệu không tồn tại');
                    return Redirect::to('/referral-code');
                }
            
            }
           
      
        };
      
    }
    public function create_comment(Request $request){
        $data = array();
        $data['noi_dung_danh_gia'] = $request->editor;
        $data['post_id'] = $request->post_id;
        $user_id=Session::get('user_id');
        $data['user_id'] = $user_id;
        
        $post = DB::table('tbl_post')->where('id',$request->post_id)->get();
        $data['danh_muc_id'] = $post[0]->danh_muc_id;
        $bl_id=DB::table('tbl_binh_luan')->insertGetId($data);
        if ($bl_id !=0) {
            $slug_post = '/threads/'.$post[0]->post_slug .'.'.$request->post_id;
            Session::put('message','Bình luận thành công vui lòng chờ duyệt');
            return Redirect::to($slug_post);
        }
    }
    public function edit_post(Request $request,$slug_post){
        $data = array();
        $data['ten_bai_viet'] = $request->title;
        $data['post_slug'] = $request->slug;
      
        $get_image = $request->file('image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
                $new_image =  $name_image.rand(0,9999).'.'.$get_image->getClientOriginalExtension();
                $get_image->move('public/uploads/product',$new_image);
                $data['anh_dai_dien'] = $new_image;
            
            
        }
        if ($request->nhan) {
            # code...
            $data['nhan'] = implode(', ', $request->nhan);
        }
        $number = strripos($slug_post,".");
        $post_id =  substr($slug_post,$number+1);
        $data['id'] = $post_id;
        $data['danh_muc_id'] = $request->danh_muc_id;
        $user_id=Session::get('user_id');
        $data['user_id'] = $user_id;
        $data['nghe_danh'] = $request->nghe_danh;
        $data['gia'] = $request->gia_di_khach;
        $data['so_dien_thoai'] = $request->so_dien_thoai;
        $data['nam_sinh'] = $request->nam_sinh;
        $data['xuat_xu'] = $request->xuat_xu;
        $data['pass'] = $request->pass;
        $data['gia_nha_nghi'] = $request->gia_nha_nghi;
        $data['thoi_gian_di_lam'] = $request->thoi_gian_di_lam;
        $data['mo_ta_them'] = $request->mo_ta_them;
        $data['chieu_cao'] = $request->chieu_cao;
        $data['can_nang'] = $request->can_nang;
        $data['tong_quat'] = implode(',', $request->tong_quat);
        $data['vong_1'] = implode(',', $request->vong_1);
        $data['vong_2'] = implode(',', $request->vong_2);
        $data['vong_3'] = implode(',', $request->vong_3);
        $data['vong_4'] = implode(',', $request->vong_4);
        $data['phong_cach_phuc_vu'] = implode(',', $request->phong_cach_phuc_vu);
        $data['service'] = implode(',', $request->service);
        $data['cam_ket'] = implode(',', $request->cam_ket);
        $data['khong_cam_ket'] = implode(',', $request->khong_cam_ket);
        $images=array();
        if($files=$request->file('list_anh')){
            foreach($files as $file){
                $get_name_image = $file->getClientOriginalName();
                $name_image = current(explode('.',$get_name_image));
                $new_image =  $name_image.rand(0,99999).'.'.$file->getClientOriginalExtension();
                $file->move('public/uploads/product',$new_image);                
                $images[]=$new_image;
            }
        }
        $data['list_anh'] = implode(",",$images);
        
        
   
        DB::table('tbl_post')->where('id', '=', $post_id)->update($data);
        if ($post_id !=0) {
            # code...

            $slug_post = '/threads/'.$request->slug .'.'.$post_id;
            return Redirect::to($slug_post);
        }

    }
    public function create_post(Request $request){
        $data = array();
        $data['ten_bai_viet'] = $request->title;
        $data['post_slug'] = $request->slug;
      
        $get_image = $request->file('image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
                $new_image =  $name_image.rand(0,9999).'.'.$get_image->getClientOriginalExtension();
                $get_image->move('public/uploads/product',$new_image);
                $data['anh_dai_dien'] = $new_image;
            
            
        }
        if ($request->nhan) {
            # code...
            $data['nhan'] = implode(', ', $request->nhan);
        }
        $data['danh_muc_id'] = $request->danh_muc_id;
        $user_id=Session::get('user_id');
        $data['user_id'] = $user_id;

        $data['nghe_danh'] = $request->nghe_danh;
        $data['gia'] = $request->gia_di_khach;
        $data['so_dien_thoai'] = $request->so_dien_thoai;
        $data['nam_sinh'] = $request->nam_sinh;
        $data['xuat_xu'] = $request->xuat_xu;
        $data['pass'] = $request->pass;
        $data['gia_nha_nghi'] = $request->gia_nha_nghi;
        $data['thoi_gian_di_lam'] = $request->thoi_gian_di_lam;
        $data['mo_ta_them'] = $request->mo_ta_them;
        $data['chieu_cao'] = $request->chieu_cao;
        $data['can_nang'] = $request->can_nang;
        $data['tong_quat'] = implode(',', $request->tong_quat);
        $data['vong_1'] = implode(',', $request->vong_1);
        $data['vong_2'] = implode(',', $request->vong_2);
        $data['vong_3'] = implode(',', $request->vong_3);
        $data['vong_4'] = implode(',', $request->vong_4);
        $data['phong_cach_phuc_vu'] = implode(',', $request->phong_cach_phuc_vu);
        $data['service'] = implode(',', $request->service);
        $data['cam_ket'] = implode(',', $request->cam_ket);
        $data['khong_cam_ket'] = implode(',', $request->khong_cam_ket);
        $images=array();
        if($files=$request->file('list_anh')){
            foreach($files as $file){
                $get_name_image = $file->getClientOriginalName();
                $name_image = current(explode('.',$get_name_image));
                $new_image =  $name_image.rand(0,99999).'.'.$file->getClientOriginalExtension();
                $file->move('public/uploads/product',$new_image);                
                $images[]=$new_image;
            }
        }
        $data['list_anh'] = implode(",",$images);
        
        
        
   
        $crr_users = DB::table('users')->where('id', '=', $user_id)->get();
        
        if($crr_users[0]->dich_vu_su_dung == 0){
            $crr_tbl_dich_vu = DB::table('tbl_dich_vu')->where('id', '=', 1)->get();
            $data_user['vi_tien'] = $crr_users[0]->vi_tien - $crr_tbl_dich_vu[0]->gia;
            if ($data_user['vi_tien']>0) {
    
                DB::table('users')->where('id',$user_id)->update($data_user);
    
            }else{
                Session::put('message','Bạn chưa đủ tiền');
                return redirect()->back();
            }
            
        }
        $post_id=DB::table('tbl_post')->insertGetId($data);
        if ($post_id !=0) {
            # code...

            $slug_post = '/threads/'.$request->slug .'.'.$post_id;
            return Redirect::to($slug_post);
        }

        
    }
    
    public function view_create_post(Request $request){
        
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
      
        //--seo
        $sidebar_active='forums';
        return view('pages.view_create_post')->with('sidebar_active',$sidebar_active)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
       
    }

    public function lock(Request $request){
        
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
      
        //--seo
        $sidebar_active='forums';
        return view('pages.lock')->with('sidebar_active',$sidebar_active)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
     
      
    }
    
    public function stiky(Request $request,$slug_post){
        $number = strripos($slug_post,".");
        $post_id =  substr($slug_post,$number+1);
        
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        $post = DB::table('tbl_post')->where('id', '=', $post_id)->get();

        DB::table('tbl_post')->where('id', '=', $post_id)->update(['stiky'=>1]);

        $user_id=Session::get('user_id');
        $crr_users = DB::table('users')->where('id', '=', $user_id)->get();
        $crr_tbl_dich_vu = DB::table('tbl_dich_vu')->where('id', '=', 2)->get();
        $data['vi_tien'] = $crr_users[0]->vi_tien - $crr_tbl_dich_vu[0]->gia;
        if ($data['vi_tien']>0) {

            DB::table('users')->where('id',$user_id)->update($data);
            Session::put('message','Ghim bài viết thành công');
        }else{
            Session::put('message','Bạn chưa đủ tiền');
            return redirect()->back();
        }
        
        return Redirect::to('/threads/'.$slug_post);
      
    }

    public function view_edit_post(Request $request,$slug_post){
        $number = strripos($slug_post,".");
        $post_id =  substr($slug_post,$number+1);
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Sửa bài viết";
        $url_canonical = $request->url();
      
        //--seo

        $post = DB::table('tbl_post')->where('id', '=', $post_id)->get();
        
        $sidebar_active='forums';
        return view('pages.view_edit_post')->with('post',$post)->with('sidebar_active',$sidebar_active)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
      
    }

    public function uy_tin(Request $request){
        
        $count_uy_tin = 0;

        $user_id=Session::get('user_id');
        $uy_tin = DB::table('tbl_binh_luan')->where('user_id', '=', $user_id)->get();


        if ($uy_tin->count()) {
         
            $count_uy_tin = DB::table('tbl_binh_luan')
            ->where('user_id', '=', $user_id)
            ->groupBy('user_id')
            ->orderBy('user_id', 'ASC')
            ->get([
                DB::raw('SUM(diem_uy_tin) as value')
            ]);
        }
        
        return $count_uy_tin;
      
    }
    public function bai_viet(Request $request){
        
        $count_bai_viet = 0;

        $user_id=Session::get('user_id');
        $bai_viet = DB::table('tbl_post')->where('user_id', '=', $user_id)->get();


        if ($bai_viet->count()) {
         
            $count_bai_viet = DB::table('tbl_post')
            ->where('user_id', '=', $user_id)
            ->groupBy('user_id')
            ->orderBy('user_id', 'ASC')
            ->get([
                DB::raw('count(id) as value')
            ]);
        }
        
        return $count_bai_viet;
      
    }
    


    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    
    public function update_payment(Request $request){
        if (isset($_GET['partnerCode'])) {
            if (
                isset($_GET['partnerCode']) &&
                isset($_GET['orderId']) &&
                isset($_GET['amount']) &&
                isset($_GET['orderType']) &&
                isset($_GET['transId']) &&
                isset($_GET['payType']) &&
                isset($_GET['signature'])
            ) {
                
                $partnerCode = $_GET["partnerCode"];
                $accessKey = 'klm05TvNBzhg7h7j';
                $orderId = $_GET["orderId"];
                $message = $_GET["message"];
                $transId = $_GET["transId"];
                $amount = $_GET["amount"];
                $responseTime = $_GET["responseTime"];
                $requestId = $_GET["requestId"];
                $payType = $_GET["payType"];
                $orderType = $_GET["orderType"];
                $extraData = "";
                $m2signature = $_GET["signature"];
                $partnerCode = 'MOMOBKUN20180529';
                $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
                $orderInfo = "Thanh toán qua MoMo";
                $requestType = "payWithATM";
                $redirectUrl = "http://127.0.0.1:8000/deposit-money" ;
                $ipnUrl = "http://127.0.0.1:8000/";
                $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                $partnerSignature = hash_hmac("sha256", $rawHash, $serectkey);
            
                $user = Session::get('user_id');
                $data = array();
                $data['partnerCode'] = $partnerCode;
                $data['orderId'] = $orderId;
                $data['amount'] = $amount;
                $data['orderType'] = $orderType;
                $data['transId'] = $transId;
                $data['user_id'] = $user;
                $data['payType'] = $partnerCode;
                $data['signature'] = $m2signature;
                $user_get= DB::table('payment')->where('signature',$m2signature)->get();
                if ($m2signature == $partnerSignature) {
                    # code...
                    DB::table('payment')->insert($data);
                    $user_get= DB::table('users')->where('id',$user)->get();
                    DB::table('users')->where('id',$user)->update(['vi_tien'=>$user_get[0]->vi_tien+$amount]);
           
                }else{
                    DB::table('payment')->insert($data);
                    $user_get= DB::table('users')->where('id',$user)->get();
                    DB::table('users')->where('id',$user)->update(['vi_tien'=>$user_get[0]->vi_tien+$amount]);
           
    }
            }}
    }
    
    public function checkMomo(Request $request){
        
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = $request->money;
        $orderId = rand(00,9999);
        $redirectUrl = "http://127.0.0.1:8000/deposit-money" ;
        $ipnUrl = "http://127.0.0.1:8000/";
        $extraData = "";
        
    if (!empty($_POST)){
        
            // Don't Touch
            $partnerCode = $partnerCode;
            $accessKey = $accessKey;
            $serectkey = $secretKey;
            $orderId = time() ."";
            $orderInfo = $orderInfo;
            $amount = $amount;
            $ipnUrl = $ipnUrl;
            $redirectUrl = $redirectUrl;
            $extraData = $extraData;
            $requestId = time() . "";
            $requestType = "payWithATM";
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $serectkey);
            $data = array('partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature);
            $result = $this->execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true); 
            return Redirect::to($jsonResult['payUrl']);
    }
}
}