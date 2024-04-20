<link href="./view/assets/css/style.css" rel="stylesheet">
<div class="site__body">
			<div class="holder" style="display: none;"><div class="preloader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
			</div>
			
<title>Check live Facebook - Tạp hóa MMO</title>
<style>
	.panel-custom{
		border: 1px solid #0866ff;
		box-sizing: border-box;
		border-radius: 4px;
		padding: 15px;
	}
	[dir=ltr] .totop__button {
  background: #0866ff !important;
}

span#readMoreBtn {
  background: #0866ff !important;
}


div#description {
  border: 1px solid #0866ff !important;
}
</style>
	<div>&nbsp;</div>
	<div class="block">
		<div class="container">
		<br>
			<h3>Check UID facebook - Kiểm tra tài khoản facebook</h3>
			
			<div class="col-12">
				<div class="panel-custom">
					
					<div class="panel-body">
						<div class="form-group">
							<label for="textarea" class="col-sm-12 control-label"> <b>Nhập List UID (Tối đa 1000/ lần)</b></label>
							<textarea name="" id="list_uid" class="form-control" rows="3" required="required"></textarea>
						</div>
						<div class="form-group">
							<label for="input" class="control-label"><b>Ký Tự Ngăn Cách</b></label>
							<input type="text" name="" id="ngancach" class="form-control" value="|" required="required" pattern="" title="" fdprocessedid="wradj">
						</div>
						<div class="form-group">
							<label for="input" class="control-label"><b>Cột</b></label>
							<input type="text" name="" id="cot" class="form-control" value="0" required="required" pattern="" title="" fdprocessedid="dfvvas">
						</div>
						<div class="form-group">
							<span class="badge badge-primary">Tổng: <b id="total">0</b></span>
							<span class="badge badge-success">Live: <b id="live">0</b></span>
							<span class="badge badge-danger">Dead: <b id="dead">0</b></span>
						</div>
						<div class="form-group">
							<label for="textarea" class="col-sm-12 control-label"><b>UID Live</b></label>
							<textarea name="" id="list_uid_live" class="form-control" rows="3"></textarea>
						</div>
						<div class="form-group">
							<label for="textarea" class="col-sm-12 control-label"><b>UID Dead</b></label>
							<textarea name="" id="list_uid_dead" class="form-control" rows="3"></textarea>
						</div>
						<button type="button" onclick="checklive();" class="btn btn-primary" fdprocessedid="ue4ulm">Check</button>
					</div>
				</div>
			</div>
			<br><br>
			<div class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
				<div class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
					<div class="products-list__body">
						<div class="products-list__item">
							<div class="product-card product-card--hidden-actions">
								<div style="padding:15px;">
									<span class="text-success"><li>Mã nguồn thuộc về bạn :<b><a href="/thong-tin/taikhoanfb">taikhoanfb</a></b>
										</li></span>
									<span class="text-success"><li>
										Chỉ check được tài khoản sống hay đã chết, các trường hợp checkpoint khi đăng nhập sẽ không kiểm tra được.
										</li></span>
									<span class="text-success"><li>Không ảnh hưởng tới tài khoản, full code chạy bằng javascript nên sẽ không lưu lại trên server.</li></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<script>
			
 			function totaluid() {
				var lists = $("#list_uid").val().trim().split("\n");
				$("#total").html(lists.length);
			}
 			function checklive(){
				var live = 0;
 				var dead = 0;
 				$("#list_uid_live").val('');
 				$("#list_uid_dead").val('');
 				var list_uid = $("#list_uid").val().trim();
 				var ngancach = $("#ngancach").val().trim();
 				var cot = $("#cot").val().trim();
 				var ar_uid = list_uid.split("\n");
 				$("#total").text(ar_uid.length);
 				$.each(ar_uid, (i, item) => {
 					var uid = item.split(ngancach);
 					uid = uid[cot];
 					$.ajax({
 						url: 'https://graph2.facebook.com/v3.3/'+uid+'/picture?redirect=0',
 						type: 'GET',
 						dataType: 'JSON',
 						data: {

 						},
 						complete: e => {
 							var d = e.responseJSON;
 							if (d.data && d.data.url && d.data.url != 'https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/UlIqmHJn-SK.gif') {
 								live++;
 								$("#live").text(live);
 								$("#list_uid_live").val($("#list_uid_live").val()+item+"\n");
 								
 							} else {
								$("#list_uid_dead").val($("#list_uid_dead").val()+item+"\n");
 								dead++;
 								$("#dead").text(dead);
 							}
 						}
 					});
 				})
 			}
	</script>

		</div>
		<!-- site__footer -->
