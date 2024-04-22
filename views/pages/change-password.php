
<div class="site__body">
			<div class="holder" style="display: none;"><div class="preloader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
			</div>
			
<title>Đổi mật khẩu - Tạp hóa MMO</title>
	<script type="text/javascript">
		function doUpdateUser() {
			$.ajax({
				url: "/change-password/error.json",
				type: "POST",
				data: $("#formChangePassword").serialize(),
				success: function (response) {
					if (response.hasError) {
						$('#err_newPassword').html('');
						$('#err_confirmNewPassword').html('');
						var len = $.map(response.lstErr, function (n, i) {
							return i;
						}).length;
						for (var i = 0; i < len; i++) {
							$('#err_' + response.lstErr[i].propertyName).html(
								response.lstErr[i].message);
						}
					} else {
						$("#formChangePassword").submit();
					}
				}
			})
		}
	</script>
	<div>&nbsp;</div>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-12 mt-4 mt-lg-0">
					<div class="card">
						<div class="card-header">
							<h5>Đổi mật khẩu</h5>
						</div>
						<div class="card-divider"></div>
						<div class="card-body">
							
							<form id="formChangePassword" action="/change-password.html" method="post"><input type="hidden" name="_csrf" value="a469c684-109a-49e6-a04f-cc335634d451">
								<div class="row">
									<div class="col-12 col-lg-6 col-xl-6">
										<div class="form-group">
											<label>Mật khẩu cũ</label>
											<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" value="" fdprocessedid="6qpc2">
											<label id="err_confirmPassword" class="text-danger"></label>
										</div>
									</div>
									<div class="col-12 col-lg-6 col-xl-6"></div>

									<div class="col-12 col-lg-6 col-xl-6">
										<div class="form-group">
											<label>Mật khẩu mới</label>
											<input type="password" class="form-control" id="newPassword" name="newPassword" value="" fdprocessedid="3j69y">
											<label id="err_newPassword" class="text-danger"></label>
										</div>
									</div>
									<div class="col-12 col-lg-6 col-xl-6">
										<div class="form-group">
											<label>Nhập lại mật khẩu mới</label>
											<input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword" value="" fdprocessedid="va8huj">
											<label id="err_confirmNewPassword" class="text-danger"></label>
										</div>
									</div>
									<div class="form-group col-12">
										<button type="button" class="btn btn-primary" onclick="doUpdateUser();" style="background-color: #21bf73;" fdprocessedid="d3q67o">Cập nhật</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		</div>