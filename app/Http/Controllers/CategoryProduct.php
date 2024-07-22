<?php

namespace App\Http\Controllers;

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

        $danh_muc = DB::table('danh_muc')->where('id', '=', $danh_muc_id)->get(); 
        
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title="";
        if($danh_muc){
            
            $meta_title = $danh_muc[0]->ten_danh_muc;
            $description = $danh_muc[0]->description;

        }
    
        $url_canonical = $request->url();

        $post = DB::table('tbl_post')->where('danh_muc_id', '=', $danh_muc_id)->where('stiky', '=', '0')->paginate(1); 

        
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
    
    public function latest_activity(Request $request){
        //seo 
        $meta_desc = "Chuyên bán những phụ kiện ,thiết bị game"; 
        $meta_keywords = "thiet bi game,phu kien game,game phu kien,game giai tri";
        $meta_title = "Hoạt động mới nhất";
        $url_canonical = $request->url();
        //--seo
    }
}