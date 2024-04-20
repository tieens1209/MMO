<div class="main-body">
			
<title>Quản lý reseller - Tạp hóa MMO</title>
<script type="text/javascript">
	$(() => {
		document.getElementById("reseller").className += " active";
	});
		
	function approval(action, id) {
		var serverContext = "\/";
		
		var title = '';
		if(action == 'APPROVAL'){
			title = 'Bạn có chắc chắn ĐỒNG Ý!';
		}else {
			title = 'Bạn có chắc chắn TỪ CHỐI!';
		}
		swal({
            title: title,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            cancelButtonText: "Cancel",
            closeOnConfirm: false,
            closeOnCancel: false },
            function (isConfirm) {
                if (isConfirm) {
					$.ajax({
						url: "/approval.html",
						type: "POST",
						data: { action: action, id: id },
						success: function (response) {
							if (response.errorMsg == 'success') {
								swal("Thành công!", "Xử lý thành công duyệt Resller!", "success");
								response.errorMsg
								window.location.href = serverContext + "reseller-for-shop.html";
							} else {
								swal("Lỗi", response.errorMsg, "error");
							}
						}
					})
                } else {
                    swal("Hủy", "", "error");
                }
            });
		}
	</script>
	
	<div class="card">
		<div class="card-body">
		
			<h5>Quản lý reseller</h5>
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<select onchange="location = this.value;" class="form-control">
						  <option value="/reseller-for-shop.html">Tất cả</option>
						  <option value="/reseller-for-shop.html?f=PENDING">Đang chờ</option>
						  <option value="/reseller-for-shop.html?f=APPROVED">Đã duyệt</option>
						  <option value="/reseller-for-shop.html?f=DECLINE">Đã từ chối</option>
						</select>
					</div>
				</div>
			</div>
								
			<table class="table table-hover">
				<thead>
					<tr>
						<th class="text-center" scope="col">Thao tác</th>
						<th scope="col">Gian hàng</th>
						<th scope="col">Tên Reseller</th>
						<th scope="col" class="text-right">Chiết khấu(%)</th>
						<th scope="col">Ngày yêu cầu</th>
						<th scope="col">Lời giới thiệu</th>
						<th scope="col" class="text-right">Trạng thái</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
	</div>

		</div>