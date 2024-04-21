<div class="main-body">
			
	<title>Đơn hàng dịch vụ - Tạp hóa MMO</title>
	<div class="card">

		<div class="card-body">
			<h5>Đơn hàng dịch vụ</h5>

			<form method="GET" action="/orders-sell.html">
				<input type="hidden" name="page_type" value="SERVICE">
				<div class="row">
					<div class="col-3">
						<div class="form-group">
							<input placeholder="Nhập mã đơn hàng" value="" class="form-control" id="orderId" name="search_ordernumber" type="text" fdprocessedid="czams">
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
							<input placeholder="Nhập tên người mua" value="" class="form-control" id="orderId" name="search_username" type="text" fdprocessedid="cmslkf">
						</div>
					</div>
					<div class="col-6">
						<div class="row">
							<div class="col-6">
								<select name="search_status" id="order_search_option" class="form-control" fdprocessedid="2d8tha">
									<option value="">Tất cả</option>
									<option value="BOOKING">Đang đợi chấp nhận</option>
									<option value="WORKING">Đang thực hiện</option>
									<option value="ACCEPT">Tạm giữ tiền</option>
									<option value="FINISH">Hoàn thành</option>
									<option value="CANCEL">Hủy</option>
									<option value="REJECT">Thất bại</option>

								</select>
							</div>
							<div class="col-6">
								<button class="btn btn-success" type="submit" fdprocessedid="c9cjgb">Tìm đơn hàng</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<table class="table table-hover table-responsive">
				<thead>
					<tr>
						<th class="text-nowrap">Thao tác</th>
						<th>Mã đơn hàng</th>
						<th>Ngày bán</th>
						<th class="text-right">Thời gian</th>
						<th>Người mua</th>
						<th>Gian hàng</th>
						<th>Mặt hàng</th>
						<th class="text-right">Số lượng</th>

						<th class="text-right">Giá</th>
						<th class="text-right">Đã giảm</th>
						<th class="text-right">Tổng tiền</th>
						<th class="text-right"><a data-toggle="tooltip" title="" data-original-title="Số tiền hoàn từ đánh giá đơn hàng ở gian hàng cho phép đánh giá hoàn tiền">Hoàn tiền<i style="font-size:10px" class="fa fa-question-circle"></i></a></th>
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

	<!-- ------------------------------------------- Modify  ----------------------------------------------------- -->
	<div class="modal inmodal" id="insuranceModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Thông tin bảo hành</h5>
				</div>
				<div class="modal-body">


					<div class="row">
						<div style="padding-bottom:20px;" class="col-12 col-lg-12 col-xl-12">
							<span>Đơn hàng: <a class="badge badge-success" id="insuranceOrderId"></a></span><br>
							<span>Số lượng mua: <a id="insuranceSum"></a></span><br>
							<span>Số lượng bảo hành: <input class="form-control" type="number" name="insuranceQuanlity" id="insuranceQuanlity" min="1" value="1"></span><br>

							<span class="text-danger" id="insuranceError"></span>
						</div>


					</div>
				</div>

				<div class="modal-footer">
				 <button onclick="resolveInsurance()" type="button" class="btn btn-primary" style="background-color: #21bf73;">Submit</button>
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
			      </div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(() => {
			document.getElementById("orderService").className += " active";
		})

		function changeOption(){
			if($("#order_search_option").val()=="orderId"){
				$("#orderId").attr("placeholder", "Nhập mã đơn hàng");
			}else{
				$("#orderId").attr("placeholder", "Nhập tên người mua");
			}
		}

		function cancelServiceOrder(id){
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
						url: "/cancel-order-service.html",
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