@extends('layouts.home')
@section('content')
<main class="container-fluid">
		<div class="col">
			<ol class="breadcrumb bg-white">
				<li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
			</ol>
		</div>
		<section>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="60%">Sản Phẩm</th>
							<th width="15%">Giá</th>
							<th width="10%">Số Lượng</th>
							<th width="10%">Tổng tiền</th>
							<th width="5%">Xóa</th>
						</tr>
					</thead>
					<tbody>
						<tr>

							<td class="product-name-thumb">
								<div class="cart-product-thumb-info">
									<div class="cart-product-thumbnil">
										<a href="detail.html" class="d-inline">
											<img src="asset/img/product01.png" alt="">
										</a>
									</div>
									<div class="cart-product-title">
										<h3 class="d-inline"><a href="#" title="Floral gold collar chunky - s2">Laptop -
												DELL</a></h3>
										<p>Nam tristique porta ligula, vel viverra sem eleifend nec. Nu...</p>
									</div>
								</div>
							</td>
							<td>
								3.000.000 <span>VND</span></td>
							<td><input type="number" value="1"></td>
							<td class="total">3 triệu</td>
							<td>
								<a href="" class="btn btn-danger btn-sm">X</a>
							</td>
						</tr>
						<tr>

							<td class="product-name-thumb">
								<div class="cart-product-thumb-info">
									<div class="cart-product-thumbnil">
										<a href="detail.html" class="d-inline">
											<img src="asset/img/product01.png" alt="">
										</a>
									</div>
									<div class="cart-product-title">
										<h3 class="d-inline"><a href="#" title="Floral gold collar chunky - s2">Floral
												gold collar chunky - s2</a></h3>
										<p>Nam tristique porta ligula, vel viverra sem eleifend nec. Nu...</p>
									</div>
								</div>
							</td>
							<td>
								3.000.000 <span>VND</span></td>
							<td><input type="number" value="1"></td>
							<td class="total">3 triệu</td>
							<td>
								<a href="" class="btn btn-danger btn-sm">X</a>
							</td>
						</tr>
						<tr>

							<td class="product-name-thumb">
								<div class="cart-product-thumb-info">
									<div class="cart-product-thumbnil">
										<a href="detail.html" class="d-inline">
											<img src="asset/img/product01.png" alt="">
										</a>
									</div>
									<div class="cart-product-title">
										<h3 class="d-inline"><a href="#" title="Floral gold collar chunky - s2">Floral
												gold collar chunky - s2</a></h3>
										<p>Nam tristique porta ligula, vel viverra sem eleifend nec. Nu...</p>
									</div>
								</div>
							</td>
							<td>
								3.000.000 <span>VND</span></td>
							<td><input type="number" value="1"></td>
							<td class="total">3 triệu</td>
							<td>
								<a href="" class="btn btn-danger btn-sm">X</a>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="3"></td>
							<td colspan="2" class="text-right">Tổng tiền : 9 triệu</td>
						</tr>
					</tfoot>
				</table>
			</div>
			<a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-long-arrow-left"></i> Tiếp tục mua sắm</a>
			<a href="" class="btn btn-outline-danger btn-sm">Cập nhật giỏ hàng</a>
		</section>
		<section class="row checkout">
			<div class="col-md-7">
				<!-- Billing Details -->
				<div class="billing-details">
					<div class="section-title">
						<h2 class="title"><span>THÔNG TIN THANH TOÁN</span></h2>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="first-name" placeholder="Họ lót">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="last-name" placeholder="Tên">
					</div>
					<div class="form-group">
						<input class="form-control" type="email" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="address" placeholder="Số nhà">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="city" placeholder="Thành phố">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="country" placeholder="Tỉnh thành">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="zip-code" placeholder="Mã giới thiệu">
					</div>
					<div class="form-group">
						<input class="form-control" type="tel" name="tel" placeholder="Số điện thoại">
					</div>
					<div class="form-group">
						<div class="input-checkbox">
							<input type="checkbox" id="create-account">
							<label for="create-account">
								<span></span>
								Tạo tài khoản?
							</label>
							<div class="caption">
								<p>Vui lòng cung cấp thông tin đầy đủ và chính xác để việc giao nhanh hàng nhanh chóng.
								</p>
								<input class="form-control" type="password" name="password"
									placeholder="Xác nhận mật khẩu">
							</div>
						</div>
					</div>
				</div>
				<!-- /Billing Details -->

				<!-- Shiping Details -->
				<div class="shiping-details">
					<div class="section-title">
						<h2 class="title"><span>ĐỊA CHỈ GIAO HÀNG</span></h2>
					</div>
					<div class="input-checkbox">
						<input type="checkbox" id="shiping-address">
						<label for="shiping-address">
							<span></span>
							Ship to a diffrent address?
						</label>
						<div class="caption">
							<div class="form-group">
								<input class="form-control" type="text" name="first-name" placeholder="Họ lót">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="last-name" placeholder="Tên">
							</div>
							<div class="form-group">
								<input class="form-control" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="address" placeholder="Số nhà">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="city" placeholder="Thành phố">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="country" placeholder="Tỉnh thành">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="zip-code" placeholder="Mã giới thiệu">
							</div>
							<div class="form-group">
								<input class="form-control" type="tel" name="tel" placeholder="Số điện thoại">
							</div>
						</div>
					</div>
				</div>
				<!-- /Shiping Details -->

				<!-- Order notes -->
				<div class="order-notes">
					<textarea class="form-control" placeholder="Ghi chú đơn hàng"></textarea>
				</div>
				<!-- /Order notes -->
			</div>

			<!-- Order Details -->
			<div class="col-md-5">
				<div class="order-details">
					<div class="section-title text-center">
						<h2 class="title"><span>ĐƠN HÀNG CỦA BẠN</span></h2>
					</div>
					<div class="order-summary">
						<div class="order-col">
							<div><strong>Sản phẩm</strong></div>
							<div><strong>Tổng cộng</strong></div>
						</div>
						<div class="order-products">
							<div class="order-col">
								<div>Laptop - DELL</div>
								<div>3 triệu</div>
							</div>
							<div class="order-col">
								<div>Floral gold collar chunky - s2</div>
								<div>3 triệu</div>
							</div>
							<div class="order-col">
								<div>Floral gold collar chunky - s2</div>
								<div>3 triệu</div>
							</div>
						</div>
						<div class="order-col">
							<div>Tiền giao hàng</div>
							<div><strong>FREE</strong></div>
						</div>
						<div class="order-col">
							<div><strong>Tổng cộng</strong></div>
							<div><strong class="order-total">9 triệu</strong></div>
						</div>
					</div>
					<div class="payment-method">
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-1">
							<label for="payment-1">
								<span></span>
								Tặng cho khách lần đầu mua hàng online tại web
							</label>
							<div class="caption">
								<p class="first-pap"> - Mã giảm <strong>20% tối đa 100.000đ</strong></p>

								<p> - 5 lần <b>FREEship</b></p>
							</div>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-2">
							<label for="payment-2">
								<span></span>
								Ưu đãi
							</label>
							<div class="caption">
								<p>- Ưu đãi voucher trị giá đến 4,000,000đ.</p>
								<p>- Giảm thêm 5% khi mua cùng sản phẩm bất kỳ có giá cao hơn.</p>
							</div>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-3">
							<label for="payment-3">
								<span></span>
								Giảm giá
							</label>
							<div class="caption">
								<p>- Giảm 30% tai nghe khi mua kèm điện thoại(không áp dụng tai nghe hãng).</p>
							</div>
						</div>
					</div>
					<div class="input-checkbox">
						<input type="checkbox" id="terms">
						<label for="terms">
							<span></span>
							Tôi đã đọc và chấp nhận <a href="#">điều khoản và điều kiện</a>
						</label>
					</div>
					<a href="#" class="btn btn-success order-submit">Đặt hàng</a>
				</div>
			</div>
			<!-- /Order Details -->
		</section>
	</main>
@endsection