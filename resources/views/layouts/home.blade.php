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
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
	<!-- JQVMap -->
	<link rel="stylesheet" href="{{asset('backend/plugins/jqvmap/jqvmap.min.css')}}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
	<!-- summernote -->
	<link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/plugins/toastr/toastr.min.css')}}">
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
</style>
@include('frontend.includes.header')
</head>

<body>
	@include('frontend.includes.navbar')
	<main class="container-fluid">
		@yield('content-header')
		<!-- Main content -->
		<section class="content">
			
				@yield('content')
			
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