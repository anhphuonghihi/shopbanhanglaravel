<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// Start

Route::get('/home','HomeController@index2' );
Route::get('/trang-chu','HomeController@index');
// Route::get('/404','HomeController@error_page');
Route::post('/tim-kiem','HomeController@search');


//Backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');

Route::post('/admin-dashboard','AdminController@dashboard');


//Category Product
Route::get('/add-category-post','AdminController@add_category_product');
Route::get('/edit-category-post/{category_post_id}','AdminController@edit_category_post');
Route::get('/delete-category-post/{category_post_id}','AdminController@delete_category_post');
Route::get('/all-category-post','AdminController@all_category_post');
Route::get('/unactive-category-menu/{category_post_id}','AdminController@unactive_category_post_menu');
Route::get('/active-category-menu/{category_post_id}','AdminController@active_category_post_menu');
Route::get('/unactive-category-home/{category_post_id}','AdminController@unactive_category_post_home');
Route::get('/active-category-home/{category_post_id}','AdminController@active_category_post_home');
Route::post('/export-csv','CategoryProduct@export_csv');
Route::post('/import-csv','CategoryProduct@import_csv');

//Send Mail 
Route::get('/send-mail','HomeController@send_mail');

//Login facebook
Route::get('/login-facebook','AdminController@login_facebook');
Route::get('/admin/callback','AdminController@callback_facebook');

//Login google
Route::get('/login-google','AdminController@login_google');
Route::get('/google/callback','AdminController@callback_google');

Route::post('/save-category-post','AdminController@save_category_post');
Route::post('/update-category-post/{category_post_id}','AdminController@update_category_post');


//Product
// Route::group(['middleware' => 'roles', 'roles'=>['admin','author']], function () {
	Route::get('/add-product','ProductController@add_product');
	Route::get('/edit-product/{product_id}','ProductController@edit_product');
// });
Route::get('users',
		[
			'uses'=>'AdminController@all_user',
			'as'=> 'Users',
		]);
Route::get('users/{user_id}',
[
	'uses'=>'AdminController@all_user_id',
	'as'=> 'Users',
]);
Route::get('add-users','UserController@add_users');

Route::get('/api-payment','AdminController@payment');
  
Route::post('store-users','UserController@payment');
Route::post('assign-roles','UserController@assign_roles');



Route::get('/delete-post/{post_id}','AdminController@delete_product');
Route::get('/all-post','AdminController@all_post');
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');
Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');

//Coupon
Route::post('/check-coupon','CartController@check_coupon');

Route::get('/unset-coupon','CouponController@unset_coupon');
Route::get('/insert-coupon','CouponController@insert_coupon');
Route::get('/delete-coupon/{coupon_id}','CouponController@delete_coupon');
Route::get('/withdraw-money','AdminController@list_withdraw_money');
Route::get('/agree-withdraw/{withdraw_id}','AdminController@list_withdraw_money_agree');
Route::get('/refused-withdraw/{withdraw_id}','AdminController@list_withdraw_money_refused');
Route::post('/change-password','AdminController@change_password');
Route::get('/change-password','AdminController@change_password_view');
Route::post('/lock-account/{user_id}','AdminController@lock_account');
Route::post('/open-account/{user_id}','AdminController@open_account');
Route::get('/all-service','AdminController@service');
Route::get('/all-ranks','AdminController@ranks');
Route::get('/all-service-edit','AdminController@service_edit');
Route::post('/rank-edit/{rank_id}','AdminController@rank_edit');
Route::post('/service-edit/{service_id}','AdminController@service_edit_id');
Route::get('/all-comment','AdminController@all_comments');
Route::get('/rose','AdminController@rose');
Route::post('/change-rose','AdminController@rose_change');
Route::get('/all-telegram','AdminController@telegram');
Route::post('/change-telegram/{telegram_id}','AdminController@telegram_change');
Route::post('/comment/{comment_id}','AdminController@edit_comments');
//Cart
Route::post('/update-cart-quantity','CartController@update_cart_quantity');
Route::post('/update-cart','CartController@update_cart');
Route::post('/save-cart','CartController@save_cart');
Route::post('/add-cart-ajax','CartController@add_cart_ajax');
Route::get('/show-cart','CartController@show_cart');
Route::get('/gio-hang','CartController@gio_hang');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::get('/del-product/{session_id}','CartController@delete_product');
Route::get('/del-all-post','CartController@delete_all_product');

//Checkout

Route::get('/del-fee','CheckoutController@del_fee');

Route::get('/logout-checkout','CheckoutController@logout_checkout');
Route::post('/add-customer','CheckoutController@add_customer');
Route::post('/order-place','CheckoutController@order_place');
Route::post('/login-customer','CheckoutController@login_customer');
Route::get('/checkout','CheckoutController@checkout');
Route::get('/payment','CheckoutController@payment');
Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');
Route::post('/calculate-fee','CheckoutController@calculate_fee');
Route::post('/select-delivery-home','CheckoutController@select_delivery_home');
Route::post('/confirm-order','CheckoutController@confirm_order');

//Order
Route::get('/delete-order/{order_code}','OrderController@order_code');
Route::get('/print-order/{checkout_code}','OrderController@print_order');
Route::get('/manage-payment','AdminController@manage_payment');
Route::get('/view-order/{order_code}','OrderController@view_order');
Route::post('/update-order-qty','OrderController@update_order_qty');
Route::post('/update-qty','OrderController@update_qty');


//Delivery
Route::get('/delivery','DeliveryController@delivery');
Route::post('/select-delivery','DeliveryController@select_delivery');
Route::post('/insert-delivery','DeliveryController@insert_delivery');
Route::post('/select-feeship','DeliveryController@select_feeship');
Route::post('/update-delivery','DeliveryController@update_delivery');

//Banner
Route::get('/manage-slider','SliderController@manage_slider');
Route::get('/add-slider','SliderController@add_slider');
Route::get('/delete-slide/{slide_id}','SliderController@delete_slide');
Route::post('/insert-slider','SliderController@insert_slider');
Route::get('/unactive-slide/{slide_id}','SliderController@unactive_slide');
Route::get('/active-slide/{slide_id}','SliderController@active_slide');




Route::get('/','HomeController@trang_chu' );


Route::get('/forums','HomeController@forums' );


Route::post('/login','LoginController@login_user');

Route::post('/register','LoginController@register_user');

Route::get('/forums/{slug_danh_muc}','CategoryProduct@show_danh_muc_home');

Route::get('/whats-new','CategoryProduct@whats_new');

Route::get('/whats-new/news-post','CategoryProduct@news_post');

Route::get('/whats-new/latest-activity','CategoryProduct@latest_activity');

Route::get('/search','CategoryProduct@search');

Route::get('/search-result','CategoryProduct@search_result');

Route::get('/account','CategoryProduct@account');

Route::get('/referral-code','CategoryProduct@referral');

Route::get('/deposit-money','CategoryProduct@deposit_money');

Route::get('/threads/{slug_post}','CategoryProduct@show_post');

Route::get('/serve','CategoryProduct@serve');

Route::get('/logout','CategoryProduct@logout');

Route::get('/referral-code/{slug_gioi_thieu}','CategoryProduct@gioi_thieu');


Route::post('/referral-code','CategoryProduct@gioi_thieu_post');

Route::get('/create-thread','CategoryProduct@view_create_post');

Route::post('/create-thread','CategoryProduct@create_post');

Route::post('/comment','CategoryProduct@create_comment');

Route::post('/threads/{slug_post}/stiky','CategoryProduct@stiky');


Route::post('/momo','CategoryProduct@checkMomo');

Route::get('/lock','CategoryProduct@lock');