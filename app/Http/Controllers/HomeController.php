<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Mail;
use App\Slider;
use Illuminate\Support\Facades\Redirect;

session_start();

class HomeController extends BaseController 
{
    public function error_page(){
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Dịch vụ gái gọi";
        $url_canonical = $request->url();
        //--seo

        $danh_muc_0 = DB::table('danh_muc')->where('id_danh_muc_cha','0')->get(); 
        $danh_muc_con = DB::table('danh_muc')->where('id_danh_muc_cha', '>=', '1')->get(); 
        //group by id_danh_muc_cha => Bài viết mới nhất
        //Count số bài viết
        // Count lượt xem
   
        
    	return view('pages.forums2')->with('rightbar','true')->with('danh_muc_0',$danh_muc_0)->with('danh_muc_con',$danh_muc_con)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function send_mail(){
         //send mail
                $to_name = "Hieu Tan Tutorial";
                $to_email = "hieuchance2018@gmail.com";//send to this email
               
             
                $data = array("name"=>"Mail từ tài khoản Khách hàng","body"=>'Mail gửi về vấn về hàng hóa'); //body of mail.blade.php
                
                Mail::send('pages.send_mail',$data,function($message) use ($to_name,$to_email){

                    $message->to($to_email)->subject('Test thử gửi mail google');//send this mail with subject
                    $message->from($to_email,$to_name);//send from this mail
                });
                // return redirect('/')->with('message','');
                //--send mail
    }

    public function index2(Request $request){
        //slide
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Dịch vụ gái gọi";
        $url_canonical = $request->url();
        //--seo
        
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 

        // $all_product = DB::table('tbl_product')
        // ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        // ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        // ->orderby('tbl_product.product_id','desc')->get();
        
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby(DB::raw('RAND()'))->paginate(6); 

    	return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->with('slider',$slider); //1
        // return view('pages.home')->with(compact('cate_product','brand_product','all_product')); //2
    }
    public function search(Request $request){
         //slide
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();

        //seo 
        $meta_desc = "Tìm kiếm sản phẩm"; 
        $meta_keywords = "Tìm kiếm sản phẩm";
        $meta_title = "Tìm kiếm sản phẩm";
        $url_canonical = $request->url();
        //--seo
        $keywords = $request->keywords_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get(); 
        $sidebar_active='forums';

        return view('pages.sanpham.search')->with('sidebar_active',$sidebar_active)->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->with('slider',$slider);

    }
    public function forums(Request $request){

        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Danh sách diễn đàn";
        $url_canonical = $request->url();
        //--seo

        $danh_muc_0 = DB::table('danh_muc')->where('id_danh_muc_cha','0')->get(); 
        $danh_muc_con = DB::table('danh_muc')->where('id_danh_muc_cha', '>=', '1')->get(); 
        $nhan = DB::table('tbl_tag')->where('la_label','1')->get(); 
        
        Session::put('nhan',$nhan);
        $sidebar_active='forums';
    	return view('pages.forums')->with('sidebar_active',$sidebar_active)->with('rightbar','true')->with('danh_muc_0',$danh_muc_0)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }

    public function address(Request $request){

        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Danh sách diễn đàn";
        $url_canonical = $request->url();
        //--seo

        $danh_muc_0 = DB::table('tbl_tinhthanhpho')->get(); 
        $danh_muc_con = DB::table('tbl_quanhuyen')->get(); 
        $nhan = DB::table('tbl_tag')->where('la_label','1')->get(); 
        
        Session::put('nhan',$nhan);
        $sidebar_active='address';
    	return view('pages.address')->with('sidebar_active',$sidebar_active)->with('rightbar','true')->with('danh_muc_0',$danh_muc_0)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    
    public function trang_chu(Request $request){

        //seo 
        $meta_desc = "Chuyên cung cấp dịch vụ gái gọi"; 
        $meta_keywords = "gai goi ha noi,gai goi sai gon";
        $meta_title = "Trang chủ";
        $url_canonical = $request->url();
        //--seo

        $danh_muc = DB::table('danh_muc')->where('show_trang_chu','1')->get(); 
      

        $nhan = DB::table('tbl_tag')->where('la_label','1')->get(); 
        Session::put('nhan',$nhan);
        $sidebar_active='home';
        
    	return view('pages.trang_chu')->with('sidebar_active',$sidebar_active)->with('danh_muc',$danh_muc)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
}