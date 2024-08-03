<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
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
    public function all_category_product(){
        $this->AuthLogin();
    	$all_category_product = DB::table('tbl_category_product')->paginate(2);
    	$manager_category_product  = view('admin.all_category_product')->with('all_category_product',$all_category_product);
    	return view('admin_layout')->with('admin.all_category_product', $manager_category_product);


    }
    public function save_category_product(Request $request){
        $this->AuthLogin();
    	$data = array();

    	$data['category_name'] = $request->category_product_name;
        $data['meta_keywords'] = $request->category_product_keywords;
        $data['slug_category_product'] = $request->slug_category_product;
    	$data['category_desc'] = $request->category_product_desc;
    	$data['category_status'] = $request->category_product_status;

    	DB::table('tbl_category_product')->insert($data);
    	Session::put('message','Thêm danh mục sản phẩm thành công');
    	return Redirect::to('all-category-product');
    }
    public function unactive_category_product($category_product_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update(['category_status'=>1]);
        Session::put('message','Không kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');

    }
    public function active_category_product($category_product_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update(['category_status'=>0]);
        Session::put('message','Kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function edit_category_product($category_product_id){
        $this->AuthLogin();
        $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();

        $manager_category_product  = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);

        return view('admin_layout')->with('admin.edit_category_product', $manager_category_product);
    }
    public function update_category_product(Request $request,$category_product_id){
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['meta_keywords'] = $request->category_product_keywords;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function delete_category_product($category_product_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    //End Function Admin Page
    public function show_category_home(Request $request ,$slug_category_product){
       //slide
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 

        $category_by_id = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_category_product.slug_category_product',$slug_category_product)->paginate(6);
     
       
        
        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.slug_category_product',$slug_category_product)->limit(1)->get();
        foreach($category_name as $key => $val){
                //seo 
                $meta_desc = $val->category_desc; 
                $meta_keywords = $val->meta_keywords;
                $meta_title = $val->category_name;
                $url_canonical = $request->url();
                //--seo
                }
         

        return view('pages.category.show_category')->with('category',$cate_product)->with('brand',$brand_product)->with('category_by_id',$category_by_id)->with('category_name',$category_name)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->with('slider',$slider);
    }
    public function export_csv(){
        return Excel::download(new ExcelExports , 'category_product.xlsx');
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

        echo $request->direction;
        
        $danh_muc = DB::table('danh_muc')->where('id', '=', $danh_muc_id)->get(); 
        
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title="";
        if($danh_muc){
            
            $meta_title = $danh_muc[0]->ten_danh_muc;
            $description = $danh_muc[0]->description;

        }
    
        $url_canonical = $request->url();

        $post = DB::table('tbl_post')->where('danh_muc_id', '=', $danh_muc_id)->where('stiky', '=', '0')->paginate(3); 
        Session::put('danh_muc_id_ht', $danh_muc_id);
        
    	return view('pages.show_category')->with('slug_danh_muc',$slug_danh_muc)->with('post',$post)->with('breadcrumb','true')->with('rightbar','true')->with('description',$description)->with('danh_muc_id',$danh_muc_id)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);


    }

    public function whats_new(Request $request){
        //seo 
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Có gì mới?";
        $url_canonical = $request->url();
        //--seo
        return view('pages.whats_new')->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    
    public function news_post(Request $request){
        //seo 
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        return view('pages.whats_new')->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }

        
    public function search(Request $request){
        //seo 
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        return view('pages.search')->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }

    public function search_result(Request $request){
        //seo 
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        return view('pages.search_result')->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }
    public function account(Request $request){
        //seo 
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        return view('pages.account')->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }

    public function referral(Request $request){
        //seo 
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        return view('pages.referral')->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }
    
    
    public function deposit_money(Request $request){
        //seo 
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        return view('pages.deposit_money')->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }
    
    public function serve(Request $request){
        //seo 
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        return view('pages.serve')->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }
    
    public function show_post(Request $request,$slug_post){
        $number = strripos($slug_post,".");
        $post_id =  substr($slug_post,$number+1);

        //seo 
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        $post_header = "true";

        $post = DB::table('tbl_post')->where('id', '=', $post_id)->get(); 
         $user = DB::table('users')->where('id', '=', $post[0]->user_id)->get();
         $danh_muc_id = $post[0]->danh_muc_id;  
         $tbl_binh_luan = DB::table('tbl_binh_luan')->where('post_id', '=', $post_id)->paginate(20); 

        return view('pages.post')->with('tbl_binh_luan',$tbl_binh_luan)->with('danh_muc_id',$danh_muc_id)->with('breadcrumb','true')->with('user',$user)->with('post',$post)->with('post_header',$post_header)->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        //--seo
    }
    
    public function latest_activity(Request $request){
        //seo 
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
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
        $danh_muc_id=Session::get('danh_muc_id_ht');
        $data['danh_muc_id'] = $danh_muc_id;
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
        
        
   
   
        $post_id=DB::table('tbl_post')->insertGetId($data);
        if ($post_id !=0) {
            # code...

            $slug_post = '/threads/'.$request->slug .'.'.$post_id;
            return Redirect::to($slug_post);
        }

        
    }
    
    public function view_create_post(Request $request){
        
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
      
        //--seo
        return view('pages.view_create_post')->with('meta_desc',$meta_desc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
     
      
    }
    public function stiky(Request $request,$slug_post){
        $number = strripos($slug_post,".");
        $post_id =  substr($slug_post,$number+1);
        
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Bài viết mới";
        $url_canonical = $request->url();
        $post = DB::table('tbl_post')->where('id', '=', $post_id)->get();

        DB::table('tbl_post')->where('id', '=', $post_id)->update(['stiky'=>1]);

        $user_id=Session::get('user_id');
        

        
        
        return Redirect::to($slug_post);
      
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
    
    public function checkMomo(){
        
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = "10000";
        $orderId = rand(00,9999);
        $redirectUrl = "http://127.0.0.1:8000/" ;
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
            // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
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