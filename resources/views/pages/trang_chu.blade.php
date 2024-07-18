@extends('layout_dang_tin')
@section('content')
<div class="w3layouts-main">
	<h2>Đăng nhập</h2>
	<?php
	$message = Session::get('message');
	if($message){
		echo '<span class="text-alert">'.$message.'</span>';
		Session::put('message',null);
	}
	?>
		<div class="login-box">
			Đăng nhập
			<form action="{{URL::to('/login')}}" method="post">
				{{ csrf_field() }}
				@foreach($errors->all() as $val)
				<ul>
					<li>{{$val}}</li>
				</ul>
				@endforeach
				<input type="text"  class="ggg" name="username" placeholder="Tên tài khoản hoặc email" >
				<input type="password" class="ggg" name="password" placeholder="Mật khẩu" >
	
				<span><input type="checkbox" />Nhớ đăng nhập</span>
				<h6><a href="#">Quên mật khẩu</a></h6>
					<div class="clearfix"></div>
					<input type="submit" value="Đăng nhập" name="login">
	
			</form>
			<a href="{{url('/login-facebook')}}">Login Facebook</a> |
			<a href="{{url('/login-google')}}">Login Google</a>
			<p>Don't Have an Account ?<a href="{{URL::to('/dang-ky')}}">Create an account</a></p> 
		</div>
		<div class="register-box">
			Đăng ký
			<form action="{{URL::to('/register')}}" method="post">
				{{ csrf_field() }}
				@foreach($errors->all() as $val)
				<ul>
					<li>{{$val}}</li>
				</ul>
				@endforeach
				<input type="text"  class="ggg" name="username" placeholder="Tên tài khoản" >
				<input type="text"  class="ggg" name="email" placeholder="Email" >
				<input type="password" class="ggg" name="password" placeholder="Mật khẩu" >
				<input type="password" class="ggg" name="password_confirmation" placeholder="Mật khẩu xác nhận" >
					<div class="clearfix"></div>
					<input type="submit" value="Đăng kí" name="register">
			</form>
			<a href="{{url('/login-facebook')}}">Đăng kí bằng fb</a> |
			<a href="{{url('/login-google')}}">Đăng kí Google</a>
			<a href="{{URL::to('/dang-ky')}}">Đã có tài khoản</a>
		</div>
	<div class="list-post">
		<div class="">
			
		</div>
	</div>
</div>
@endsection