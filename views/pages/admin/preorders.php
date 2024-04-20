<div class="main-body">
			
	<script src="/vendor/jquery/jquery.min.js"></script>

	<title>Đơn hàng đặt trước - Tạp hóa MMO</title>
	<div class="card">
		<div class="card-body">
			<h5>Đơn hàng đặt trước</h5>
			<form method="GET" action="/preorders.html">
				<div class="row form-group">
					<div class="col-4">
						<input placeholder="Nhập mã đơn hàng" value="" class="form-control" name="orderId" type="text" fdprocessedid="zvujf3">
					</div>
					<div class="col-5" style="text-align: left;">
						<button class="btn btn-success" type="submit" fdprocessedid="0m7qjcl">Tìm đơn hàng</button>
					</div>
				</div>
			</form>

			<p class="text-danger">* Thời gian hoàn thành đơn hàng tính bằng ngày, trong thời gian đó, nếu kho hàng đủ số lượng thì đơn hàng sẽ tự động hoàn thành. Ngược lại đơn sẽ tự hủy và hoàn tiền cho khách.</p>
			<p class="text-success">* Bạn có thể hủy đơn trước khi làm mới kho nếu thấy giá bán cũ không còn hợp lý.</p>

			<table class="table table-hover table-responsive1">
				<thead>
					<tr>
						<th class="text-nowrap">Thao tác</th>
						<th>Mã đơn hàng</th>
						<th>Ngày đặt</th>
						<th>Thời gian</th>
						<th>Người mua</th>
						<th>Gian hàng</th>
						<th>Mặt hàng</th>
						<th class="text-right">Số lượng</th>
						<th class="text-right">Giá</th>
						<th class="text-right">Đã giảm</th>
						<th class="text-right">Tổng tiền</th>
						<th class="text-right">Reseller</th>
						<th class="text-right">Sàn</th>
						<th class="text-center">Trạng thái</th>
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
			document.getElementById("preorders").className += " active";
		})

		function cancelPreOrder(id){
			swal({
				title: "Bạn có chắc hủy đơn hàng này không?",
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
						url: "/cancel-preorder.html",
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