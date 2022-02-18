<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sàn thương mại điện tử</title>
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="{{asset('frontend/asset/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/asset/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/asset/css/slick.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/asset/css/slick-theme.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/asset/css/style.css')}}">
	<!--Google -Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin-ext' rel='stylesheet'
	type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<style>
	body {
		position: relative; 
	}
	.rotate {
		-moz-transition: all .5s linear;
		-webkit-transition: all .5s linear;
		transition: all .5s linear;
	}
	.rotate.down {
		-moz-transform:rotate(90deg);
		-webkit-transform:rotate(90deg);
		transform:rotate(90deg);
	}
	dl, ol, ul {
    margin-top: 0;
    
}
</style>
@include('frontend.includes.header')
</head>

<body>
	@include('frontend.includes.navbar')
	<main class="container-fluid">
		@yield('content-header')
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="" id="scroll-to" style="min-height: 209px;">
					<!-- Content Header (Page header) -->
					<div class="content-header bg-white mb-3">
						<div class="container-fluid">
							<div class="row mb-2">
								<div class="col-sm-6">
									<h1 class="m-0">Thông tin tài khoản</h1>
								</div><!-- /.col -->
								<div class="col-sm-6">
									<ol class="breadcrumb float-sm-right">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active">Dashboard v1</li>
									</ol>
								</div><!-- /.col -->
							</div><!-- /.row -->
						</div><!-- /.container-fluid -->
					</div>
					<!-- /.content-header -->

					<!-- Main content -->
					<section class="content">
						<div class="container-fluid">
							<div class="row add-container">
								<div class="col-3">
									<div id="list-card" class="list-group sticky-top" style="top:20px;">
										<a class="list-group-item list-group-item-action open-card-1" href="#scroll-to">1. Thông tin tài khoản</a>
										<a class="list-group-item list-group-item-action open-card-2" href="#card-1">2. Thông báo của tôi</a>
										<a class="list-group-item list-group-item-action open-card-3 " href="#card-2">3. Quản lí đơn hàng</a>
										<a class="list-group-item list-group-item-action open-card-3 " href="#card-2">4. Sổ địa chỉ</a>
										<a class="list-group-item list-group-item-action open-card-3 " href="#card-2">5. Thông tin thanh toán</a>
										<a class="list-group-item list-group-item-action open-card-3 " href="#card-2">6. Nhận xét sản phẩm đã mua</a>
										<a class="list-group-item list-group-item-action open-card-3 " href="#card-2">7. Sản phẩm đã xem</a>
										<a class="list-group-item list-group-item-action open-card-3 " href="#card-2">8. Sản phẩm yêu thích</a>
										<a class="list-group-item list-group-item-action open-card-3 " href="#card-2">9. Sản phẩm xem sau</a>
										<a class="list-group-item list-group-item-action open-card-3 " href="#card-2">10. Nhận xét của tôi</a>
										<a class="list-group-item list-group-item-action open-card-3 " href="#card-2">11. Mã giảm giá</a>
									</div>
								</div>
								<div class="col-9">
									@yield('content')
								</div>
							</div>

						</div><!-- /.container-fluid -->
					</section>
					<!-- /.content -->
				</div>

				
			</div><!-- /.container-fluid -->
		</section>
	</main>
	@include('frontend.includes.footer')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="{{asset('frontend/asset/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('frontend/asset/js/popper.min.js')}}"></script>
	<script src="{{asset('frontend/asset/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/asset/js/slick.js')}}"></script>
	<script src="{{asset('frontend/asset/js/main.js')}}"></script>
	
	<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
	</script>
	
</body>

</html>