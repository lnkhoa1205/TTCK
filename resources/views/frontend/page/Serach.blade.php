@extends('layouts.home')
@section('content')
	<main class="container-fluid">
		<section class="row p-0">
			<div class="col ">
				<ol class="breadcrumb bg-white">
					<li class="breadcrumb-item"><a class="text-dark" href="#"><i class="fa fa-home"></i> Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Shop</li>
				</ol>
			</div>
		</section>
		<section class="row p-0">
			<aside class="col-md-3">
				<div class="card">
					<!-- Tìm kiếm theo tên sản phẩm -->
					<article class="card-group-item">
						
						<h6 class="card-header">Tên sản phẩm </h6>
						
						<div class="filter-content">
							<div class="card-body">
								<input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="Search"
									name="keyword_tensanpham" value="">
							</div> <!-- card-body.// -->
						</div>
					</article> <!-- // Tìm kiếm theo Tên sản phẩm -->

					<!-- Tìm kiếm theo Loại sản phẩm -->
					<article class="card-group-item">
						<h6 class="card-header">Loại sản phẩm </h6>
						<div class="filter-content">
							<div class="card-body">
								<div class="custom-control custom-checkbox">
									<span class="float-right badge badge-light round">3</span>
									<input type="checkbox" class="custom-control-input" name="keyword_loaisanpham[]"
										value="1" id="chk-loaisanpham-1">
									<label class="custom-control-label" for="chk-loaisanpham-1">Máy tính
										bảng</label>
								</div> <!-- form-check.// -->
								<div class="custom-control custom-checkbox">
									<span class="float-right badge badge-light round">1</span>
									<input type="checkbox" class="custom-control-input" name="keyword_loaisanpham[]"
										value="2" id="chk-loaisanpham-2">
									<label class="custom-control-label" for="chk-loaisanpham-2">Máy tính xách
										tay</label>
								</div> <!-- form-check.// -->
								<div class="custom-control custom-checkbox">
									<span class="float-right badge badge-light round">4</span>
									<input type="checkbox" class="custom-control-input" name="keyword_loaisanpham[]"
										value="3" id="chk-loaisanpham-3">
									<label class="custom-control-label" for="chk-loaisanpham-3">Điện
										thoại</label>
								</div> <!-- form-check.// -->
								<div class="custom-control custom-checkbox">
									<span class="float-right badge badge-light round">1</span>
									<input type="checkbox" class="custom-control-input" name="keyword_loaisanpham[]"
										value="4" id="chk-loaisanpham-4">
									<label class="custom-control-label" for="chk-loaisanpham-4">Linh phụ
										kiện</label>
								</div> <!-- form-check.// -->
							</div> <!-- card-body.// -->
						</div>
					</article> <!-- // Tìm kiếm theo Loại sản phẩm -->

					<!-- Tìm kiếm theo Nhà sản xuất -->
					<article class="card-group-item">
						<h6 class="card-header">Nhà sản xuất </h6>
						<div class="filter-content">
							<div class="card-body">
								<div class="custom-control custom-checkbox">
									<span class="float-right badge badge-light round">3</span>
									<input type="checkbox" class="custom-control-input" name="keyword_nhasanxuat[]"
										value="1" id="chk-nhasanxuat-1">
									<label class="custom-control-label" for="chk-nhasanxuat-1">Apple</label>
								</div> <!-- form-check.// -->
								<div class="custom-control custom-checkbox">
									<span class="float-right badge badge-light round">3</span>
									<input type="checkbox" class="custom-control-input" name="keyword_nhasanxuat[]"
										value="2" id="chk-nhasanxuat-2">
									<label class="custom-control-label" for="chk-nhasanxuat-2">Samsung</label>
								</div> <!-- form-check.// -->
								<div class="custom-control custom-checkbox">
									<span class="float-right badge badge-light round">1</span>
									<input type="checkbox" class="custom-control-input" name="keyword_nhasanxuat[]"
										value="3" id="chk-nhasanxuat-3">
									<label class="custom-control-label" for="chk-nhasanxuat-3">HTC</label>
								</div> <!-- form-check.// -->
								<div class="custom-control custom-checkbox">
									<span class="float-right badge badge-light round">1</span>
									<input type="checkbox" class="custom-control-input" name="keyword_nhasanxuat[]"
										value="4" id="chk-nhasanxuat-4">
									<label class="custom-control-label" for="chk-nhasanxuat-4">Nokia</label>
								</div> <!-- form-check.// -->
							</div> <!-- card-body.// -->
						</div>
					</article> <!-- // Tìm kiếm theo Nhà sản xuất -->

					<!-- Tìm kiếm theo Khuyến mãi -->
					<article class="card-group-item">
						<h6 class="card-header">Khuyến mãi </h6>
						<div class="filter-content">
							<div class="card-body">
							</div> <!-- card-body.// -->
						</div>
					</article> <!-- // Tìm kiếm theo Nhà sản xuất -->

					<!-- Tìm kiếm theo khoảng giá tiền -->
					<article class="card-group-item">
						<h6 class="card-header">Lọc theo giá </h6>
						<div class="filter-content">
							<div class="card-body">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>Từ</label>
										<input type="range" class="custom-range" min="0" max="50000000" step="100000"
											id="sotientu" name="keyword_sotientu" value="0">
										<span><span id="sotientu-text">0</span></span>
									</div>
									<div class="form-group col-md-6 text-right">
										<label>Đến</label>
										<input type="range" class="custom-range" min="0" max="50000000" step="100000"
											id="sotienden" name="keyword_sotienden" value="50000000">
										<span><span id="sotienden-text">50000000</span></span>
									</div>
								</div>
							</div> <!-- card-body.// -->
						</div>
					</article> <!-- // Tìm kiếm theo khoảng giá tiền -->

					<!-- Tìm kiếm theo màu sắc sản phẩm -->
					<article class="card-group-item">
						<h6 class="card-header">Màu sắc </h6>
						<div class="filter-content">
							<div class="card-body">
								<label class="btn btn-danger">
									<input class="" type="checkbox" value="">
									<span class="form-check-label">Đỏ</span>
								</label>
								<label class="btn btn-success">
									<input class="" type="checkbox" value="">
									<span class="form-check-label">Xanh lá</span>
								</label>
								<label class="btn btn-primary">
									<input class="" type="checkbox" value="">
									<span class="form-check-label">Xanh dương</span>
								</label>
							</div> <!-- card-body.// -->
						</div>
					</article> <!-- // Tìm kiếm theo màu sắc sản phẩm -->
					<article class="card-group-item">
						<h6 class="card-header">Đang giảm giá </h6>
						<div class="filter-content">
							<div class="card-body">
								<div class="product-widget">
									<div class="product-img">
										<img src="asset/img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
										</h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="asset/img/product02.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
										</h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="asset/img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
										</h4>
									</div>
								</div>
							</div> <!-- card-body.// -->
						</div>
					</article>
				</div>
			</aside>
			<div class="col-md-9" id="store">
				<div class="row">
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									
									<div class="_3NVV-i">
										<div class="_3yCxz- _3aFlEb _3Kq1-f">
											<span class="percent">50%</span>
											<span class="WL8HRl">giảm</span>
										</div>
									</div>
								
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product03.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true"
												class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Asus Zenbook 14 Q408UG</a>
								<p class="product-short-content">Ultrabook cao cấp mỏng nhẹ, hiệu năng cao, HOT nhất 2021…
								</p>
								<span class="price">
									<del class="amount">21.990.000 đ</del>
									<span class="amount">20.990.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									<div class="product-label">
										<span class="featured">New</span>
									</div>
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product02.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true" class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Tai nghe Skullcandy Crusher ANC</a>
								<p class="product-short-content">công nghệ mới và những cải thiện về chất âm vô cùng đáng sở hữu…</p>
								<span class="price">
									<del class="amount">8.206.000 đ</del>
									<span class="amount">6.590.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									<span class="icon-hot position-absolute" style="top:10px;left: 10px;"></span>
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product02.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true" class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Tai nghe Skullcandy Crusher ANC</a>
								<p class="product-short-content">công nghệ mới và những cải thiện về chất âm vô cùng đáng sở hữu…</p>
								<span class="price">
									<del class="amount">8.206.000 đ</del>
									<span class="amount">6.590.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									
									<div class="_3NVV-i">
										<div class="_3yCxz- _3aFlEb _3Kq1-f">
											<span class="percent">50%</span>
											<span class="WL8HRl">giảm</span>
										</div>
									</div>
								
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product03.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true"
												class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Asus Zenbook 14 Q408UG</a>
								<p class="product-short-content">Ultrabook cao cấp mỏng nhẹ, hiệu năng cao, HOT nhất 2021…
								</p>
								<span class="price">
									<del class="amount">21.990.000 đ</del>
									<span class="amount">20.990.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									
									<div class="_3NVV-i">
										<div class="_3yCxz- _3aFlEb _3Kq1-f">
											<span class="percent">50%</span>
											<span class="WL8HRl">giảm</span>
										</div>
									</div>
								
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product03.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true"
												class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Asus Zenbook 14 Q408UG</a>
								<p class="product-short-content">Ultrabook cao cấp mỏng nhẹ, hiệu năng cao, HOT nhất 2021…
								</p>
								<span class="price">
									<del class="amount">21.990.000 đ</del>
									<span class="amount">20.990.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									<div class="product-label">
										<span class="featured">New</span>
									</div>
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product02.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true" class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Tai nghe Skullcandy Crusher ANC</a>
								<p class="product-short-content">công nghệ mới và những cải thiện về chất âm vô cùng đáng sở hữu…</p>
								<span class="price">
									<del class="amount">8.206.000 đ</del>
									<span class="amount">6.590.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									<span class="icon-hot position-absolute" style="top:10px;left: 10px;"></span>
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product02.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true" class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Tai nghe Skullcandy Crusher ANC</a>
								<p class="product-short-content">công nghệ mới và những cải thiện về chất âm vô cùng đáng sở hữu…</p>
								<span class="price">
									<del class="amount">8.206.000 đ</del>
									<span class="amount">6.590.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									
									<div class="_3NVV-i">
										<div class="_3yCxz- _3aFlEb _3Kq1-f">
											<span class="percent">50%</span>
											<span class="WL8HRl">giảm</span>
										</div>
									</div>
								
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product03.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true"
												class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							<a href="#" class="heading-title">Asus Zenbook 14 Q408UG</a>
								<p class="product-short-content">Ultrabook cao cấp mỏng nhẹ, hiệu năng cao, HOT nhất 2021…
								</p>
								<span class="price">
									<del class="amount">21.990.000 đ</del>
									<span class="amount">20.990.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									
									<div class="_3NVV-i">
										<div class="_3yCxz- _3aFlEb _3Kq1-f">
											<span class="percent">50%</span>
											<span class="WL8HRl">giảm</span>
										</div>
									</div>
								
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product03.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true"
												class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Asus Zenbook 14 Q408UG</a>
								<p class="product-short-content">Ultrabook cao cấp mỏng nhẹ, hiệu năng cao, HOT nhất 2021…
								</p>
								<span class="price">
									<del class="amount">21.990.000 đ</del>
									<span class="amount">20.990.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									<div class="product-label">
										<span class="featured">New</span>
									</div>
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product02.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true" class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Tai nghe Skullcandy Crusher ANC</a>
								<p class="product-short-content">công nghệ mới và những cải thiện về chất âm vô cùng đáng sở hữu…</p>
								<span class="price">
									<del class="amount">8.206.000 đ</del>
									<span class="amount">6.590.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									<span class="icon-hot position-absolute" style="top:10px;left: 10px;"></span>
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product02.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true" class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Tai nghe Skullcandy Crusher ANC</a>
								<p class="product-short-content">công nghệ mới và những cải thiện về chất âm vô cùng đáng sở hữu…</p>
								<span class="price">
									<del class="amount">8.206.000 đ</del>
									<span class="amount">6.590.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									
									<div class="_3NVV-i">
										<div class="_3yCxz- _3aFlEb _3Kq1-f">
											<span class="percent">50%</span>
											<span class="WL8HRl">giảm</span>
										</div>
									</div>
								
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product03.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true"
												class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							<a href="#" class="heading-title">Asus Zenbook 14 Q408UG</a>
								<p class="product-short-content">Ultrabook cao cấp mỏng nhẹ, hiệu năng cao, HOT nhất 2021…
								</p>
								<span class="price">
									<del class="amount">21.990.000 đ</del>
									<span class="amount">20.990.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									
									<div class="_3NVV-i">
										<div class="_3yCxz- _3aFlEb _3Kq1-f">
											<span class="percent">50%</span>
											<span class="WL8HRl">giảm</span>
										</div>
									</div>
								
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product03.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true"
												class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Asus Zenbook 14 Q408UG</a>
								<p class="product-short-content">Ultrabook cao cấp mỏng nhẹ, hiệu năng cao, HOT nhất 2021…
								</p>
								<span class="price">
									<del class="amount">21.990.000 đ</del>
									<span class="amount">20.990.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									<div class="product-label">
										<span class="featured">New</span>
									</div>
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product02.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true" class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Tai nghe Skullcandy Crusher ANC</a>
								<p class="product-short-content">công nghệ mới và những cải thiện về chất âm vô cùng đáng sở hữu…</p>
								<span class="price">
									<del class="amount">8.206.000 đ</del>
									<span class="amount">6.590.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									<span class="icon-hot position-absolute" style="top:10px;left: 10px;"></span>
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product02.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true" class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Tai nghe Skullcandy Crusher ANC</a>
								<p class="product-short-content">công nghệ mới và những cải thiện về chất âm vô cùng đáng sở hữu…</p>
								<span class="price">
									<del class="amount">8.206.000 đ</del>
									<span class="amount">6.590.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<article class="single-product-inner col-6 col-sm-4 col-md-4 col-lg-3">
						<div class="single-product">
							<div class="product-thumbnail-wrapper">
								<a href="detail.html">
									
									<div class="_3NVV-i">
										<div class="_3yCxz- _3aFlEb _3Kq1-f">
											<span class="percent">50%</span>
											<span class="WL8HRl">giảm</span>
										</div>
									</div>
								
									<div class="product-image d-flex justify-content-center">
										<img src="asset/img/product03.png" />
									</div>
								</a>
								<div class="product-button-list">
									<div class="add-to-cart-list">
										<a href="#" class="btn-product btn-cart">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
									</div>
									<div class="product-button-group">
										<a href="#" class="add-to-wishlist"><i class="fa fa-heart"
												aria-hidden="true"></i></a>
										<a href="#" class="add-to-compare"><i class="fa fa-refresh"
												aria-hidden="true"></i></a>
										<a data-target="#productModal" class="btn-quickview" data-toggle="modal"
											title="Quick view" href="#"><i aria-hidden="true"
												class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="product-details-content text-center">
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a href="#" class="heading-title">Asus Zenbook 14 Q408UG</a>
								<p class="product-short-content">Ultrabook cao cấp mỏng nhẹ, hiệu năng cao, HOT nhất 2021…
								</p>
								<span class="price">
									<del class="amount">21.990.000 đ</del>
									<span class="amount">20.990.000 đ</span>
								</span>
							</div>
						</div>
					</article>
					<div class="col-12 mt-2 mb-2">

						<ul class="pagination pagination-sm justify-content-end">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
										class="fa fa-chevron-left"></i></a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</section>

	</main>
@endsection