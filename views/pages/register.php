<link href="./view/assets/css/style.css" rel="stylesheet">
<div class="site__body">
			<div class="holder" style="display: none;"><div class="preloader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
			</div>
			
	<title>Đăng ký trở thành người bán - Tạp hóa MMO</title>
	<script type="text/javascript">
		function doAddUser() {
			$.ajax({
				url: "/register/error.json",
				type: "POST",
				data: $("#formRegister").serialize(),
				success: function (response) {
					if (response.hasError) {
						$('#err_phone').html('');
						$('#err_bankAccNm').html('');
						$('#err_facebook').html('');
						var len = $.map(response.lstErr, function (n, i) {
							return i;
						}).length;
						for (var i = 0; i < len; i++) {
							$('#err_' + response.lstErr[i].propertyName).html(
								response.lstErr[i].message);
						}
					} else {
						$("#formRegister").submit();
					}
				}
			})
		}
	</script>

	<div>&nbsp;</div>
	<div class="block">
		<div class="container">
			<div class="card mb-0">
				<div class="card-body contact-us">
					<div class="contact-us__container">
						<div class="row">
							<div class="col-12 col-lg-5 pb-4 pb-lg-0">
								<h4 class="contact-us__header card-title">Cơ hội hợp tác</h4>
								<div class="contact-us__address">
									<li>
										Thông tin này <b>hoàn toàn được bảo mật</b>, được dùng để bên mình liên
										lạc với bên bạn trong những lúc cần thiết (xác thực người bán, khi có tranh chấp xảy ra...). 
									</li>
									
									<li>
										Cùng nhau kết nối, hợp tác, cùng phát
										triển cộng đồng kiếm tiền online.
									</li>
									<li>
										<strong>Tối ưu hóa</strong><br>
										Đội ngũ hỗ trợ sẽ liên lạc để giúp bạn tối ưu khả năng bán hàng.
									</li>
									<li>
										<strong>Đẩy tin nhắn</strong><br>
										Hãy vào phần thông tin tài khoản (profile), cập nhật thêm phần đẩy tin nhắn của khách về Telegram để không bỏ lỡ khách nào nhé.
									</li>
									<li>
										<strong>Bật bảo mật 2 lớp (2FA)</strong><br>
										Đây là quy định bắt buộc trước khi đăng ký bán hàng, vui lòng cập nhật thêm trong profile.
									</li>
									
								</div>
							</div>
							<div class="col-12 col-lg-7">
								<h4 class="contact-us__header card-title">Thông tin cửa hàng</h4>
								<form id="formRegister" action="/register.html" method="post"><input type="hidden" name="_csrf" value="a469c684-109a-49e6-a04f-cc335634d451">
									
									
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>Số điện thoại</label>
											<input type="text" class="form-control" id="phone" name="phone" value="" fdprocessedid="nsm9zi">
											<label id="err_phone" class="text-danger"></label>
										</div>

										<div class="form-group col-md-6">
											<label>Tên tài khoản ngân hàng</label>
											<input type="text" class="form-control" id="bankAccNm" name="bankAccNm" value="" fdprocessedid="pq3qx">
											<label id="err_bankAccNm" class="text-danger"></label>
										</div>

										<div class="form-group col-md-6">
											<label>Facebook</label>
											<input type="text" class="form-control" id="facebook" name="facebook" value="" fdprocessedid="zocseu">
											<label id="err_facebook" class="text-danger"></label>
										</div>
									</div>
									<button type="button" class="btn btn-primary" onclick="doAddUser();" fdprocessedid="wyqg69">Đăng ký</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



		</div>