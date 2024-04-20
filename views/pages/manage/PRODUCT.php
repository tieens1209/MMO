<div class="main-body">
			
	<title>Đơn hàng đã bán - Tạp hóa MMO</title>
	<div class="card">

		<div class="card-body">
			<h5>Sản phẩm đã bán</h5>
			<form method="GET" action="/orders-sell.html">
				<input type="hidden" name="page_type" value="PRODUCT">
				<div class="row">
					<div class="col-3">
						<div class="form-group">
							<input placeholder="Nhập mã đơn hàng" value="" class="form-control" id="orderId" name="search_ordernumber" type="text" fdprocessedid="h4ucsk">
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
							<input placeholder="Nhập tên người mua" value="" class="form-control" id="orderId" name="search_username" type="text" fdprocessedid="i00fk7">
						</div>
					</div>
					<div class="col-6">
						<div class="row">
							<div class="col-6">
								<select name="search_status" id="order_search_option" class="form-control" fdprocessedid="vizwt7">
									<option value="">Tất cả</option>
									<option value="ACCEPT">Tạm giữ tiền</option>
									<option value="FINISH">Hoàn thành</option>
									<option value="CANCEL">Hủy</option>
									<option value="REJECT">Thất bại</option>
								</select>
							</div>
							<div class="col-6">
								<button class="btn btn-success" type="submit" fdprocessedid="apcxcx">Tìm đơn hàng</button>
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
			document.getElementById("orders").className += " active";
		})

		function changeOption(){
			if($("#order_search_option").val()=="orderId"){
				$("#orderId").attr("placeholder", "Nhập mã đơn hàng");
			}else{
				$("#orderId").attr("placeholder", "Nhập tên người mua");
			}
		}
		function insuranceModal(orderPublicId,sumOrder) {
			$('#insuranceError').html('');
			$('#insuranceOrderId').html(orderPublicId);
			$('#insuranceSum').html(sumOrder);
		}

		function resolveInsurance(){
			var orderSerialCode = $('#insuranceOrderId').text();
			var insuranceQuanlity = $('#insuranceQuanlity').val();
			//if(orderId == null || orderId == '') return false;
			$.ajax({
				url : "/api/order/insurance",
				data : { insuranceQuanlity: insuranceQuanlity, orderSerialCode: orderSerialCode},
				type : "POST",
				success : function(response) {
					$('#insuranceError').html(response);
				},
				error : function(XMLHttpRequest, textStatus, errorThrown) {
					$('#insuranceError').html('Có lỗi xảy ra, Liên hệ nhân viên để được hỗ trợ.');
				}
			});
		}
	</script>


		</div>