<div class="main-body">
			
	<title>Trả lời khách hàng - Tạp hóa MMO</title>
	<div class="card">
		<div class="card-body">
			<h5>Trả lời đánh giá</h5>
			<table class="table table-hover table-responsive">
				<thead>
					<tr>
						<th class="text-center">Thao tác</th>
						<th>Mã đơn hàng</th>
						<th>Tên gian hàng</th>
						<th>Comment</th>
						<th>Trả lời</th>
						<th class="text-center" scope="col">Rating(Sao)</th>
						<th>Ngày tạo</th>
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

	<!-- ------------------------------------------- Reply modal  ----------------------------------------------------- -->
	<div class="modal inmodal" id="replyModel" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<form method="post" id="formReseller" action="/shop/reply-comment.json"><input type="hidden" name="_csrf" value="09e81db3-51f8-465d-be17-e9bd042f3b2b">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Trả lời khách hàng</h5>
					</div>
					<div class="modal-body">
						<input id="ratingId" type="hidden">
						<label id="err_msg" class="text-danger"></label>
						<div class="row">
							<div class="col-12 col-lg-12 col-xl-12">
								<div class="form-group">
									<label>Trả lời</label>
									<textarea class="form-control" rows="3" maxlength="1000" id="replyRating" name="reply" required="required"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" onclick="close()" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
						<button type="button" onclick="doSubmitReseller()" class="btn btn-primary">Gửi</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	
	<script type="text/javascript">
		$(() => {
			document.getElementById("reply").className += " active";
		})
		
		function replayComment(id){
			$('#ratingId').val(id);
			$('#replyRating').val("");
			$('#err_msg').val("");
		}

		function close(){
			window.location.reload();
		}

		function doSubmitReseller() {
			$.ajax({
				url : "/shop/reply.json",
				data : {
					id: $('#ratingId').val(),
					reply: $('#replyRating').val()
				},
				type : "POST",
				success : function(result) {
					$('#err_msg').html('');
					$('#err_msg').html(result.errorMsg);
				}
			});
		}
	</script>


		</div>