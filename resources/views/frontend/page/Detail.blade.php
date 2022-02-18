@extends('layouts.home')
@section('content')
	<main class="container-fluid" id="main-detail">
		<section class="row">
			<div class="col">
				<ol class="breadcrumb bg-white">
					<li class="breadcrumb-item"><a class="text-dark" href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a class="text-dark" href="#">Laptop</a></li>
					<li class="breadcrumb-item active" aria-current="page">Dell Vostro</li>
				</ol>
			</div>
		</section>
		<section class="row">
			<!-- Product main img -->
			<div class="col-12">
				<h3>Thông tin chi tiết sản phẩm</h3>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-12">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="asset/img/product01.png" alt="">
							</div>

							<div class="product-preview">
								<img src="asset/img/product03.png" alt="">
							</div>

							<div class="product-preview">
								<img src="asset/img/product06.png" alt="">
							</div>

							<div class="product-preview">
								<img src="asset/img/product08.png" alt="">
							</div>
						</div>
						<!-- Product thumb imgs -->
						<div class="col-md-12">
							<div id="product-imgs">
								<div class="product-preview">
									<img src="asset/img/product01.png" alt="">
								</div>

								<div class="product-preview">
									<img src="asset/img/product03.png" alt="">
								</div>

								<div class="product-preview">
									<img src="asset/img/product06.png" alt="">
								</div>

								<div class="product-preview">
									<img src="asset/img/product08.png" alt="">
								</div>
								<div class="product-preview">
									<img src="asset/img/product01.png" alt="">
								</div>

								<div class="product-preview">
									<img src="asset/img/product03.png" alt="">
								</div>

								<div class="product-preview">
									<img src="asset/img/product06.png" alt="">
								</div>

								<div class="product-preview">
									<img src="asset/img/product08.png" alt="">
								</div>
							</div>
						</div>
						<!-- /Product thumb imgs -->
					</div>
				</div>
			</div>

			<!-- /Product main img -->



			<!-- Product details -->
			<div class="col-md-8">
				<div class="product-details">
					<h2 class="product-name">Laptop Dell Vostro 3405 V4R53500U001W</h2>
					<div>
						<div class="product-rating text-warning">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<!-- <a href="" class="badge badge-primary d-inline"><i class="fa fa-facebook"></i> Share</a> -->
						<!-- <a href="" class="badge badge-danger"><i class="fa fa-heart"></i> Yêu thích</a> -->
					</div>
					<div>
						<h3 class="product-price text-danger">15.690.000 VND <del
								class="product-old-price text-dark">16.000.000 VND</del></h3>
					</div>

					<div class="product-options">
						<label>
							Phiên bản hiện có :
							<select class="input-select form-control-sm">
								<option value="0">8GB - 20.000.000</option>
								<option value="0">6GB - 15.000.000</option>
								<option value="0">4GB - 10.000.000</option>
							</select>
						</label>
						<label>
							Màu hiện có :
							<select class="input-select form-control-sm">
								<option value="0">Đỏ</option>
								<option value="0">Đen</option>
							</select>
						</label>
					</div>
					<ul class="product-btns">
						<li><a href="#" class="btn btn-outline-danger btn-sm"><i class="fa fa-heart-o"></i> Yêu
								thích</a></li>
						<li><a href="#" class="btn btn-outline-success btn-sm"><i class="fa fa-search"></i> So sánh</a>
						</li>
					</ul>
					<div class="add-to-cart mt-2">
						<div class="qty-label">
							Số lượng :
							<div class="input-number">
								<input style="max-width: 50px;" type="number" value="1" class="form-control-sm">
								<button class="add-to-cart-btn position-relative"><i class="fa fa-shopping-cart"></i>
									Cho vào giỏ</button>
							</div>
						</div>

					</div>



					<ul class="product-links">
						<li>Danh mục:</li><br>
						<li><a href="#" class="badge badge-primary">Headphones</a></li>
						<li><a href="#" class="badge badge-primary">Headphones</a></li>
						<li><a href="#" class="badge badge-primary">Headphones</a></li>
						<li><a href="#" class="badge badge-primary">Headphones</a></li>
						<li><a href="#" class="badge badge-primary">Headphones</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>

					<ul class="product-links">
						<li>Chia sẻ:</li><br>
						<li><a href="#" class="badge badge-primary"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="badge badge-info"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="badge badge-danger"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="badge badge-primary"><i class="fa fa-envelope"></i></a></li>
					</ul>

				</div>
			</div>
			<!-- /Product details -->

			<!-- Product tab -->
			<div class="col-12">

				<div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
						aria-controls="nav-home" aria-selected="true">Thông tin sản phẩm</a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
						aria-controls="nav-profile" aria-selected="false">Chi tiết</a>
					<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
						aria-controls="nav-contact" aria-selected="false">Nhận xét</a>
				</div>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<p class="mt-3">
							Dell Gaming sở hữu bộ CPU AMD Ryzen 5 5600H có 6 nhân 12 luồng cho tốc độ xung nhịp cơ bản
							là 3.30 GHz và đạt tối đa nhờ Turbo Boost lên đến 4.2 GHz đem đến khả năng xử lý nhanh chóng
							ở mọi tác vụ phần mềm từ văn phòng cho đến đồ họa chuyên nghiệp hay chơi game đều vô cùng
							hoàn hảo.

							Máy hỗ trợ bộ nhớ RAM 8 GB chuẩn DDR4 2 khe (1 khe 8 GB + 1 khe rời) cho khả năng đa nhiệm
							mượt mà, bạn hoàn toàn có thể mở cùng lúc hàng chục cửa sổ làm việc mà không sợ máy bị đơ
							giữa chừng với tốc độ bus RAM 3200 MHz. Ngoài ra, laptop còn hỗ trợ nâng cấp RAM lên tối đa
							32 GB để phục vụ tốt nhất cho nhu cầu của bạn.


						</p>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<p class="mt-3">
							Kích thước màn hình 15.6 inch cho không gian hiển thị rộng lớn cùng độ phân giải Full HD
							(1920 x 1080) sẽ mang đến cho bạn những khung hình sắc nét, màu sắc chân thật và các chuyển
							động vô cùng mượt mà giúp bạn đắm chìm vào thế giới giải trí. Màn hình LED Backlit cho màu
							sắc tươi mới, hạn chế sinh nhiệt trên màn hình và không gây mỏi mắt khi bạn dùng lâu.

							Công nghệ chống chói Anti Glare, độ sáng màn hình 250 nits và công nghệ Wide Viewing Angle
							(WVA) đem đến cho bạn những khung hình chất lượng bất kể cường độ sáng của môi trường xung
							quanh, bất chấp góc nhìn giúp bạn tận hưởng những bộ phim kịch tích hay các trận chiến căng
							thẳng nhờ góc nhìn lên đến 178 độ, bảo vệ thị giác của bạn trước cường độ ánh sáng cao.
						</p>
					</div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

						<div class="media mt-3">
							<img class="mr-3" src="asset/img/user.png" alt="Generic placeholder image">
							<div class="media-body">
								<h5 class="mt-0">Tú</h5>
								Nghĩa đàn nghệ an có không shop

								<div class="media mt-3">
									<a class="pr-3" href="#">
										<img src="asset/img/user.png" alt="Generic placeholder image">
									</a>
									<div class="media-body">
										<h5 class="mt-0">QTV</h5>
										chào anh
										dạ khu vực này hết hàng ạ, anh vui lòng cho em xin thông tin địa chỉ (xã/
										phường, quận/huyện) để bên em kiểm tra sản phẩm có chuyển hàng về khu vực mình
										không giúp mình ạ.
										xin thông tin đến anh ạ.
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- /product tab -->
		</section>
		<section class="row bg-white flash-sale mt-3 mb-3">

			<div class="section-title col-12">
				<h2><span>CÓ THỂ BẠN QUAN TÂM</span></h2>
				<div class="btn-slick">
					<button class="prev-slick"><i class="fa fa-long-arrow-left"></i></button>
					<button class="next-slick"><i class="fa fa-long-arrow-right"></i></button>
				</div>
			</div>


			<div class="slider-flash-sale col-12">
				<article class="single-product-inner">
					<div class="single-product">
						<div class="product-thumbnail-wrapper">
							<a href="#">
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
							<a href="#" class="heading-title">Tai nghe chụp tai Bluetooth AirPods Max Apple MGYH3</a>
							<p class="product-short-content">AirPods Max tai nghe chụp tai chống ồn chủ động…</p>
							<span class="price">
								<del class="amount">13.990.000₫</del>
								<span class="amount">13.990.000₫</span>
							</span>
						</div>
					</div>
				</article>
				<article class="single-product-inner">
					<div class="single-product">
						<div class="product-thumbnail-wrapper">
							<a href="#">
								<div class="product-label">
									<span class="featured">New</span>
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
							<a href="#" class="heading-title">Laptop GIGABYTE Gaming G5 i5 10500H/16GB/512GB/6GB
								RTX3060/144Hz/Win10 (5S11130SH)</a>
							<p class="product-short-content">Được trang bị bộ vi xử lý Intel Core i5 Comet Lake 10500H
								với 6 nhân 12 luồng mạnh mẽ…</p>
							<span class="price">
								<del class="amount">29.990.000₫</del>
								<span class="amount">27.990.000₫</span>
							</span>
						</div>
					</div>
				</article>
				<article class="single-product-inner">
					<div class="single-product">
						<div class="product-thumbnail-wrapper">
							<a href="detail.html">
								<div class="product-label">
									<span class="featured">New</span>
								</div>
								<div class="product-image d-flex justify-content-center">
									<img src="asset/img/product04.png" />
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
							<a href="#" class="heading-title">Máy tính bảng iPad Pro M1 12.9 inch WiFi Cellular 512GB
								(2021)</a>
							<p class="product-short-content">Mọi trải nghiệm từ chơi game nặng, giải trí, lướt web hay
								xem phim đều không là vấn đề với máy khi máy có thể hoạt động trơn tru và mượt mà.…</p>
							<span class="price">
								<del class="amount">12.630.000₫</del>
								<span class="amount">12.250.000₫</span>
							</span>
						</div>
					</div>
				</article>
				<article class="single-product-inner">
					<div class="single-product">
						<div class="product-thumbnail-wrapper">
							<a href="#">
								<div class="product-label">
									<span class="featured">New</span>
								</div>
								<div class="product-image d-flex justify-content-center">
									<img src="asset/img/product05.png" />
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
							<a href="#" class="heading-title">Tai nghe chụp tai Rapoo H120 Đen</a>
							<p class="product-short-content">Kiểu dáng đơn giản, năng động, dễ dàng kéo dài hệ thống
								treo để đeo vừa vặn.…</p>
							<span class="price">
								<del class="amount">350.000₫</del>
								<span class="amount">280.000₫</span>
							</span>
						</div>
					</div>
				</article>
				<article class="single-product-inner">
					<div class="single-product">
						<div class="product-thumbnail-wrapper">
							<a href="#">
								<div class="product-label">
									<span class="featured">New</span>
								</div>
								<div class="product-image d-flex justify-content-center">
									<img src="asset/img/product06.png" />
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
							<a href="#" class="heading-title">Laptop GIGABYTE Gaming G5 i5 10500H/16GB/512GB/6GB
								RTX3060/144Hz/Win10 (5S11130SH)</a>
							<p class="product-short-content">Được trang bị bộ vi xử lý Intel Core i5 Comet Lake 10500H
								với 6 nhân 12 luồng mạnh mẽ…</p>
							<span class="price">
								<del class="amount">29.990.000₫</del>
								<span class="amount">27.990.000₫</span>
							</span>
						</div>
					</div>
				</article>
				<article class="single-product-inner">
					<div class="single-product">
						<div class="product-thumbnail-wrapper">
							<a href="#">
								<div class="product-label">
									<span class="featured">New</span>
								</div>
								<div class="product-image d-flex justify-content-center">
									<img src="asset/img/product01.png" />
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
							<a href="#" class="heading-title">Laptop Gigabyte Gaming G5 i5 11400H/16GB/512GB/4GB
								RTX3050/144Hz/Win10 (51S1121SH)</a>
							<p class="product-short-content">Laptop Gigabyte được trang bị chip Intel Core i5 Tiger Lake
								dòng 11400H với 6 nhân, 12 luồng…</p>
							<span class="price">
								<del class="amount">26.990.000₫</del>
								<span class="amount">24.990.000₫</span>
							</span>
						</div>
					</div>
				</article>
			</div>
		</section>
	</main>
@endsection