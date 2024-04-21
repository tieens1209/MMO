<div class="main-body">
			
	<title>Bạn có tin nhắn mới - Tạp Hóa MMO</title>
	<div class="card">
		<div class="card-body">
			<h5>Chọn gian hàng top 1</h5>
			<small class="text-success">Nếu bạn chiến thắng trong cuộc đấu giá gian hàng xếp đầu danh mục, bạn có thể lựa chọn gian hàng đứng đầu</small>
			<br><small class="text-success">Buổi đấu giá sẽ diễn ra 20h Chủ Nhật hàng tuần <a href="/dau-gia.html">tại đây</a></small>
			<br><small class="text-success">Gian hàng của bạn sẽ luôn đứng vị trí đầu tiên dù còn hàng hay không</small><hr>
			<div><h6>Bạn không chiến thắng trong cuộc đấu giá nào!</h6></div>
			
		</div>
	</div>
	<script type="text/javascript">
		$(() => {
			document.getElementById("topKiosk").className += " active";
		})
		function setTopKiosk(elm){
			var cateId = elm.getAttribute("data-id");
			var topKiosk = $("#"+cateId).val();
			$.ajax({
				url : "/set-top-kiosk.html",
				data : {topKiosk :topKiosk},
				type : "POST",
				success : function(result) {
					if(result.success){
						location.reload();
					}
					
				}
				
			});
		}
		
	</script>

		</div>