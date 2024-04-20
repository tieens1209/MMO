

<div class="main-body">
			
	<title>Đơn hàng khiếu nại, tranh chấp - Tạp hóa MMO</title>
	<div class="card">
		<div class="card-body">
			<h5>Đơn hàng khiếu nại</h5>
			<div style="padding-top:10px;padding-bottom:10px;font-size: 14px;">
				<p class="text-danger">Xin lưu ý:</p>
				<li class="text-success"> Đơn khiếu nại sẽ có 2 trạng thái. 1.Khiếu nại: Khách hàng khiếu nại về đơn hàng của bạn. 2.Tranh chấp: Bạn không đồng ý với khiếu nại trên và chủ động chuyển sang trạng thái 2 bên tranh chấp. </li>
				<li class="text-success"> Khi đơn hàng ở trạng thái "Khiếu nại", nếu trong vòng 72h, khách không hủy khiếu nại, hoặc bạn không chủ động chuyển sang tranh chấp, thì đơn hàng sẽ tự động hoàn tiền.</li>
				<li class="text-success"> Đa phần khách khiếu nại là đợi các bạn bảo hành, nên hãy chủ động liên hệ và xử lý cho khách nhé.</li>
				<li class="text-success"> Nếu tỷ lệ khiếu nại quá cao (so với tổng số đơn hàng), hệ thống sẽ tự động đóng gian hàng, các bạn hãy kiểm tra lại hàng trước khi mở bán lại nhé.</li>
			</div>
								
			<table class="table table-hover table-responsive1">
				<thead>
					<tr>
						<th class="text-center">STT</th>
						<th class="text-center">Thao tác</th>
						<th>Ngày</th>
						<th>Mã</th>
						<th>Gian hàng</th>
						<th>Người mua</th>
						<th class="text-right">Số lượng</th>
						<th class="text-right">Tổng</th>
						<th class="text-left">Nội dung</th>
						<th>Trạng thái</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
	</div>

	<!-- ------------------------------------------- Modify  ----------------------------------------------------- -->
	<div class="modal inmodal" id="resellerModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<form method="post" id="formComplain">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Giải quyết khiếu nại</h5>
				</div>
				<div class="modal-body">
					<input id="orderId" type="hidden">
					<label id="err_msg" class="text-danger"></label>

					<div class="row">
						<div style="padding-bottom:20px;" class="col-12 col-lg-12 col-xl-12">
							<span>Trong trường hợp khách không đồng ý hủy khiếu nại, bạn có thể giải quyết bằng 2 lựa chọn:</span><br>
							<span class="text-success"><i>1. Hoàn tiền: Hủy đơn hàng và hoàn lại tiền cho người mua.</i></span><br>
							<span class="text-danger"><i>2. Tranh chấp: Đưa khiếu nại ra tranh chấp.</i></span>
						</div>
						<div class="col-12 col-lg-12 col-xl-12">
							<div style="margin-bottom: 0px;" class="form-group">
								<label>Ghi chú</label>
								<textarea class="form-control" rows="3" maxlength="1000" id="feedback"></textarea>
							</div>
							<div style="margin-bottom: 2rem;" class="form-check">
								  <input class="form-check-input" type="checkbox" value="" checked="" id="sendMessage">
								  <label class="form-check-label" for="sendMessage">
								    Đồng thời gởi tin nhắn cho khách
								  </label>
							</div>
						</div>
						
						<div class="col-6 col-lg-6 col-xl-6 text-center">
							 <button onclick="resolveComplain('REFUND')" type="button" class="btn btn-primary" style="background-color: #21bf73;">Hoàn tiền</button>
						</div>
						<div class="col-6 col-lg-6 col-xl-6 text-center">
							<button onclick="resolveComplain('DISPUTE')" type="button" class="btn btn-danger">Tranh chấp</button>
						</div>
					</div>
				</div>
				<div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
			      </div>
			</div>
		</div>
		</form>
	</div>
		
	<script type="text/javascript">
		$(() => {
			document.getElementById("dispute").className += " active";
		})
		
		function disputeModal(id) {
			$('#orderId').html('');
			$('#orderId').val(id);
		}
		
		function resolveComplain(action){
			var orderId = $('#orderId').val();
			var feedback = $('#feedback').val();
			var sendMessage = $('#sendMessage').is(':checked');
			if(orderId == null || orderId == '') return false;
			$.ajax({
				url : "/api/dispute/resolve",
				data : { action: action, orderId: orderId, feedback: feedback,sendMessage:sendMessage },
				async:false,
				type : "POST",
				success : function(response) {
					$('#err_msg').html('');
					if (response.statusCode == 'OK') {
						$('#err_msg').html(response.message);
						window.location.reload();
					} else {
						$('#err_msg').html(response.message);
					}
				},
				error : function(XMLHttpRequest, textStatus, errorThrown) {
					$('#err_msg').html('');
					$('#err_msg').html('Có lỗi xảy ra, Liên hệ nhân viên để được hỗ trợ.');
				}
			});
		}
	</script>


		</div>