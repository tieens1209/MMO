<div class="site__body">
			<div class="holder" style="display: none;"><div class="preloader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
			</div>
			<link href="./view/assets/css/style.css" rel="stylesheet">			
<title>Authenticator - Tạp hóa MMO</title>
	<div>&nbsp;</div>
	<div class="block">
		<div class="container">
			<h5>Authenticator - Lấy mã code từ chuỗi 2FA</h5>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label>Chuỗi mã 2FA</label>
					<input onchange="hideSaveDiv();" required="" class="form-control" id="secret_key" fdprocessedid="thd0iw">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<p class="text-danger" id="error"></p>
					<button onclick="getCode()" type="button" class="btn btn-success" fdprocessedid="ux0qep">Submit</button>
					<button onclick="showSaveDiv();" type="button" class="btn btn-secondary" fdprocessedid="ep6dsb">Lưu</button>
				</div>
			</div>
			<div id="result" style="display:none;" class="form-row">
				<div class="form-group col-md-6">
					<div class="row">
						<div class="col-6">
								<p style="font-size: 25px;"> Mã đăng nhập: <span class="badge badge-success" id="code_out"></span></p>
						</div>
						<div class="col-6">
							<p style="font-size: 25px;"> Timeout: <a class="badge badge-warning" id="timeout"></a></p>
						</div>
					</div>
				
					
				</div>
			</div>
			<div style="display: none;" id="save_div" class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
				<div class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
					<div class="products-list__body">
						<div class="products-list__item">
							<div style="flex-direction: column;" class="product-card product-card--hidden-actions">
								<div style="padding:15px;">
									<h6>Lưu lại chuỗi này: <span id="save_code"></span></h6>
									<div class="row">
										<div class="col-6">
											<input placeholder="Tên gợi nhớ" class="form-control" id="code_name_save">
										</div>
										<div class="col-6">
												<button onclick="saveCode()" type="button" class="btn btn-success">Lưu</button>
												<p class="text-danger" id="error"></p>
										</div>
										<p id="save_error" style="padding-left:15px" class="text-danger"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="saved_table" class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
				<div class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
					<div class="products-list__body">
						<div class="products-list__item">
							<div style="flex-direction: column;" class="product-card product-card--hidden-actions">
								<div style="padding:15px;">
									<h6>Danh sách chuỗi mã đã lưu</h6>
									<p id="save_error" style="padding-left:15px" class="text-danger">*Lưu ý: Tính năng này sẽ lưu trên trình duyệt của bạn, nếu bạn đổi trình duyệt hoặc xóa cookie sẽ bị mất.</p>
										<div class="table" id="table-orders">
											<table class="table table-hover">
												<thead class="thead-light">
													<tr>
														<th class="text-nowrap">Thao tác</th>
														<th>Tên</th>
														<th>Chuỗi mã</th>
													</tr>
												</thead>
												<tbody id="body_table_2fa"><tr><td><button onclick="getMyCode(&quot;463934&quot;);" type="button" class="btn btn-primary btn-sm" fdprocessedid="co1ha">Lấy mã</button><button style="margin-left:10px;'" onclick="deleteMyCode(&quot;tiees&quot;);" type="button" class="btn btn-danger btn-sm" fdprocessedid="6g4w9">Xóa</button></td><td>tiees</td><td> <a id="tiees" onclick="showMyCode(&quot;463934&quot;,this);" style="cursor:pointer;"><u>Hiện</u></a></td></tr></tbody>
											</table>
										</div>
									
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
				<div class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
					<div class="products-list__body">
						<div class="products-list__item">
							<div class="product-card product-card--hidden-actions">
								<div style="padding:15px;">
									<span class="text-success"><li>Authenticator là một ứng dụng tạo ra mã 2FA (mã code gồm 6 số ngẫu nhiên thay đổi ngẫu nhiên mỗi 30 giây) và được thiết kế để chỉ có bạn mới đăng nhập vào tài khoản của bạn được, kể cả nếu như có người khác biết mật khẩu của bạn.
										</li></span>
									<span class="text-success"><li>Khi bạn đăng nhập vào tài khoản, có yêu cầu xác thực 2 yếu tố bằng chuỗi 2FA, bạn buộc phải sử dụng Authenticator để nhận mã đăng nhập</li></span>
									<span class="text-success"><li>Các gian hàng trên Tạp hóa MMO bán các sản phẩm thường kèm theo 2FA, hãy dùng ứng dụng này để lấy mã đăng nhập nhé.</li></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<script>
	var timeout =0;
	var start= false;
	var ListSave =null;
	function hideSaveDiv(){
		$("#save_code").text($("#secret_key").val());
		$("#save_div").hide();
	}
	function showSaveDiv(){
		$("#save_code").text($("#secret_key").val());
		$("#save_div").show();
		$("#code_name_save").val("");
	}
	function saveCode(){
		$("#save_error").text("");
		var codeString = $("#save_code").text();
		var nameHint = $("#code_name_save").val();
		if(codeString=="" || nameHint==""){
			$("#save_error").text("Lỗi. Chưa điền đủ thông tin.");
		}else{
			var newSaveOb = {name:nameHint, secret:codeString};
			ListSave = [newSaveOb].concat(ListSave) ;
			localStorage.setItem("ListSave", JSON.stringify( ListSave));
			loadSaveList();
			$("#save_error").text("Thành công.");
		}
	}
	setInterval(function(){
		if( start){
			if(timeout>0){
				timeout = timeout-1;
				$("#timeout").text(timeout);
			}else{
				getCode();
			}
			
		}
		
		 }, 1000);
	 function getCode(){
		start= false;
		var code = $("#secret_key").val();
		if(code!=""){
			$.ajax({
					url : "/api/get2Fa",
					data :{secret:code},
					type : "POST",
					async: false,
					success : function(result) {
						if(result=="error"){
							$("#error").text("Chuỗi 2FA không hợp lệ!");
							$("#result").hide();
							start= false;
						}else{
							$("#error").text("");
							$("#result").show();
							var arr = result.split("|");
							$("#code_out").text(arr[0]);
							$("#timeout").text(arr[1]);
							timeout = arr[1];
							start= true;
						}
					},
					error : function(XMLHttpRequest, textStatus, errorThrown) {
						$("#error").text("Có lỗi xảy ra!");
						start= false;
					}
				});
		}else{
			$("#error").text("Chưa nhập mã");
		}
	}
	function loadSaveList(){
		 ListSave =JSON.parse( localStorage.getItem("ListSave"));
		 $("#body_table_2fa").empty();
		 var sumHtml="";
		 for(var k in ListSave) {
			if(ListSave[k]!=null){
				sumHtml = sumHtml+
				"<tr>"+
					"<td>"+
						"<button onclick= 'getMyCode(\""+ListSave[k].secret+"\");' type='button' class='btn btn-primary btn-sm'>Lấy mã</button>"+
						"<button style=margin-left:10px;' onclick= 'deleteMyCode(\""+ListSave[k].name+"\");' type='button' class='btn btn-danger btn-sm'>Xóa</button>"+
					"</td>"+
					"<td>"+ListSave[k].name+"</td>"+
					"<td> <a id='"+ListSave[k].name+"' onclick='showMyCode(\""+ListSave[k].secret+"\",this);' style='cursor:pointer;'><u>Hiện</u></a></td>"+
				"/tr";
			}
			 $("#body_table_2fa").html(sumHtml);
			  
		}
	}
	function showMyCode(secret,elem){
		elem.text=secret;
	}
	function getMyCode(secret){
		$("#save_div").hide();
		$("#secret_key").val(secret);
		getCode();
		window.scrollTo(0, 0);
	}
	function deleteMyCode(nameHint){
		
		swal({
				title: "Bạn có chắc chắn muốn xóa!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Xóa",
				cancelButtonText: "Hủy",
				closeOnConfirm: true,
				closeOnCancel: true
			},
            function (isConfirm) {
                if (isConfirm) {
					 for(var k in ListSave) {
						if(ListSave[k]!=null){
							if(ListSave[k].name==nameHint){
								 ListSave.splice(k,1);
								 break;
							}
						}
					}
					localStorage.setItem("ListSave", JSON.stringify( ListSave));
					loadSaveList();
                }
            });
	}
	$( document ).ready(function() {
	    loadSaveList();
	});
	</script>

		</div>
		