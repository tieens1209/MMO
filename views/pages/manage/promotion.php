<div class="main-body">
			
	<title>Danh sách giảm giá - Tạp hóa MMO</title>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<h5 class="col-6">Mã giảm giá</h5>
				<div class="col-6" style="text-align: right;">
					<a href="?act=add" class="btn rounded-pill btn-primary">Thêm mới</a>
				</div>
			</div>

			<table class="table table-hover table-responsive1">
				<thead>
					<tr>
						<th class="text-center">STT</th>
						<th class="text-center">Thao tác</th>
						<th>Mã giảm giá</th>
						<th>Gian hàng</th>
						<th>Bắt đầu</th>
						<th>Kết thúc</th>
						<th class="text-right">Tỷ lệ giảm</th>
						<th class="text-right">Giảm tối đa</th>
						<th class="text-right">Lượt sử dụng</th>
						<th>Trạng thái</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
			<!-- Paging-->
			<nav aria-label="Page navigation" class="paging">
                
            </nav>
		</div>
	</div>

	<script type="text/javascript">
		$(() => {
			document.getElementById("promotion").className += " active";
		})

		function deletePromotion(id) {
			swal({
				title: "Bạn có chắc chắn xóa các mã giảm giá này không?",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Đồng ý",
				cancelButtonText: "Hủy",
				closeOnConfirm: true,
				closeOnCancel: true
			},
			function (isConfirm) {
				if (isConfirm) {
					$.ajax({
						url: "/promotion/in-active.html",
						type: "POST",
						data: {id: id},
						success: function (response) {
							window.location.reload();
						}
					})
				}
			});
		}
	</script>


		</div>