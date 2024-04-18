<div class="site__body">
			<div class="holder" style="display: none;"><div class="preloader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
			</div>
			
<title>Check live Facebook - Tạp hóa MMO</title>
<style>
	.panel-custom{
		border: 1px solid #21bf73;
		box-sizing: border-box;
		border-radius: 4px;
		padding: 15px;
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
<footer class="site__footer">
	<div id="site_footer" class="site-footer">
		<div class="container">
			<div class="site-footer__widgets">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4">
						<div class="site-footer__widget footer-contacts">
							<h5 class="footer-contacts__title">Liên hệ</h5>
							<div class="footer-contacts__text">Liên hệ ngay nếu bạn có khó khăn khi sử dụng dịch vụ hoặc cần hợp tác.</div>
							<ul class="footer-contacts__contacts">
								<li><i class="footer-contacts__icon fa fa-paper-plane"></i><a rel="nofollow" href="/chat-box.html?chat_to=taphoammo" target="_blank">Chat với hỗ trợ viên</a></li>
								<li><i class="footer-contacts__icon fab fa-facebook"></i><a rel="nofollow" target="_blank" href="https://fb.com/taphoammo"> Tạp hóa MMO</a></li>
								<li><i class="footer-contacts__icon far fa-envelope"></i> support@taphoammo.net</li>
								<li><i class="footer-contacts__icon far fa-clock"></i> Mon-Sat 08:00am - 10:00pm</li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="site-footer__widget footer-links">
							<h5 class="footer-links__title">Thông tin</h5>
							<ul class="footer-links__list">
								<li class="footer-links__item"><span class="footer-links__link">Một ứng dụng nhằm kết nối, trao đổi, mua bán trong cộng đồng kiếm tiền online.</span></li>
								<li class="footer-links__item"><span class="footer-links__link">Thanh toán tự động, nhận hàng ngay tức thì.</span></li>
								<li class="footer-links__item"><a rel="nofollow" href="/FAQs.html" class="footer-links__link">Câu hỏi thường gặp</a></li>
								<li class="footer-links__item"><a rel="nofollow" href="/quy-dinh.html" class="footer-links__link">Điều khoản sử dụng</a></li>

							</ul>
						</div>
					</div>

					<div class="col-12 col-md-12 col-lg-4">
						<div class="site-footer__widget footer-newsletter">
							<h5 class="footer-newsletter__title">Đăng ký bán hàng</h5>
							<div class="footer-newsletter__text">Tạo một gian hàng của bạn trên trang của chúng tôi. Đội ngũ hỗ trợ sẽ liên lạc để giúp bạn tối ưu khả năng bán hàng.</div>
							<div>
								<a rel="nofollow" class="footer-newsletter__form-button btn btn-primary" href="/register.html" style="background-color:#21bf73; color: #fff;">Tham gia</a>
							</div>
							<div class="footer-newsletter__text footer-newsletter__text--social">Theo dõi chúng tôi trên mạng xã hội</div>
							<!-- social-links -->
							<div class="social-links footer-newsletter__social-links social-links--shape--circle">
								<ul class="social-links__list">
									<li class="social-links__item">
										<a class="social-links__link social-links__link--type--rss">
											<i class="fas fa-rss"></i>
										</a>
									</li>
									<li class="social-links__item">
										<a rel="nofollow" class="social-links__link social-links__link--type--youtube" href="https://www.youtube.com/channel/UCvd9HeIqxmO3omtS7PJSapQ" target="_blank">
												<i class="fab fa-youtube"></i>
										</a>
									</li>
									<li class="social-links__item">
										<a rel="nofollow" class="social-links__link social-links__link--type--facebook" href="https://fb.me/taphoammo" target="_blank">
												<i class="fab fa-facebook-f"></i>
										</a>
									</li>
								</ul>
							</div>
							<!-- social-links / end -->
						</div>
					</div>
				</div>
			</div>
			<div class="site-footer__bottom">
				<div class="site-footer__copyright">
					<a rel="nofollow" target="_blank" href="https://fb.com/taphoammo"> <b>All rights reserved:</b></a>
					<a rel="nofollow" target="_blank" href="https://fb.com/taphoammo"> <b>HCT DIGITAL TECHNOLOGY DEVELOPMENT COMPANY LIMITED</b></a>
				</div>
			</div>
		</div>
		<div class="totop">
			<div class="totop__body">
				<div class="totop__start" style="display: flex;">
					
				</div>
				<div class="totop__container container_fix"></div>
				<div class="totop__end">
					<button type="button" class="totop__button" style="background-color: #21bf73;">
						<svg width="13px" height="8px">
							<use xlink:href="/images/svg/sprite.svg#arrow-rounded-up-13x8"></use>
						</svg>
					</button>
				</div>
			</div>
		</div>
		
      <style>
      	.super_note{
			width: 350px; 
			border: 1px solid #21bf73;
			border-radius: 3px; 
			color: white; 
			background-color:#21bf73 ;
			z-index: 1000; 
			position: fixed;
    		bottom: 15px;
    		box-shadow:2px 3px 3px #888888;
    		overflow: hidden;
    		display:none
		}
      </style>
      <div id="super_note" class="super_note" style="display: none; width: 350px;">
      		<div class="row">
      			<div class="col-3">
      				<button onclick="hideNoteDetail();" style="background-color: #21bf73;padding: 13px;height: 100%;" class="indicator__area btn">
      					<i class="far fa-bell" style="font-size:20px;color:white;"></i>
      					<span style="display: inline;" class="indicator__value">1</span>
      				</button>
      			</div>
      			<div id="body_note" class="col-9" style="margin: auto; text-align: center; padding: 5px;">
      				<div>
      					<a id="note_url" href="/">
							<b><span id="note_header" style="font-size: 16px;color:white;"></span></b><br>
							<div id="note_body" style="font-size: 13px;color:white; "></div>
							<span id="note_status" class="badge badge-warning" style="font-size: 12px; "></span><br>
						</a>
						
					</div>
      			</div>
      		</div>
		</div>
		<script>
			var isHidden = false;
			function hideNoteDetail(){
				if(!isHidden){
					isHidden = true;
					localStorage.setItem("hide_note","true");
					$("#body_note").hide();
					$("#super_note").animate({
				        width: "50px"
				    }, 300 );
			    }else{
					isHidden=false;
					localStorage.setItem("hide_note","false");
					$("#super_note").animate({
				        width: "350px"
				    }, 300 );
				    $("#body_note").show();
				}
			}
			var hideNote = localStorage.getItem("hide_note");
			
			if(hideNote==null || hideNote=="false"){
				isHidden = true;
			}else{
				isHidden = false;
			}
			hideNoteDetail();
			var diffsecond = 0;
			$( document ).ready(function() {
			    checkSupperNote();
			    setInterval(checkSupperNote, 300000);
			});
			function countdownNote(){
				diffsecond = diffsecond-1;
				if(diffsecond<=0){
					$("#note_status").text("Đang diễn ra");
				}else{
					 var days = Math.floor(diffsecond / ( 60 * 60 * 24));
					 var hours = Math.floor((diffsecond % ( 60 * 60 * 24)) / ( 60 * 60));
					 var minutes = Math.floor((diffsecond % ( 60 * 60)) / ( 60));
					 var seconds = Math.floor((diffsecond % ( 60)) );
					
					  var displayCountdown = days + "d " + hours + "h "
					  + minutes + "m " + seconds + "s ";
					  $("#note_status").text("Sắp diễn ra: "+displayCountdown);
				}
				
			}
			function checkSupperNote(){
				$.ajax({
					url: "/get-event.html",
					type: "POST",
					async:false,
					success: function (response) {
						if(response.success){
							
							var note_header = response.event.header;
							var note_body = response.event.body;
							var note_start_time = response.event.startTime;
							var note_end_time = response.event.endTime;
							
							$("#note_header").text(note_header);
							$("#note_url").attr("href",response.event.link );
							if(note_body!=null){
								$("#note_body").text(note_body);
							}
							 var date1 = new Date(note_start_time);
							  var date2 = new Date(note_end_time);
							 var date3 = new Date();
							 var startSeconds = parseInt((date3-date1)/1000);
							 var endSeconds = parseInt((date3-date2)/1000);
							 if(endSeconds>0){
								$("#super_note").hide();
							}else{
								if(startSeconds>0 ){
									$("#note_status").text("Đang diễn ra");
								}else{
									diffsecond = -startSeconds;
									countdownNote();
									 setInterval(countdownNote, 1000);
								}
								$("#super_note").show();
							}
							
						}else{
							$("#super_note").hide();
						}
					}
				});
			}
		</script>

	</div>
</footer>
<!-- site__footer / end -->

		
	<!-- mobilemenu -->
	<div class="mobilemenu">
		<div class="mobilemenu__backdrop"></div>
		<div class="mobilemenu__body">
			<div class="mobilemenu__header">
				<div class="mobilemenu__title">Menu</div>
				<button type="button" class="mobilemenu__close">
					<svg width="20px" height="20px">
						<use xlink:href="/images/svg/sprite.svg#cross-20"></use>
					</svg>
				</button>
			</div>
			<div class="mobilemenu__content">
				<ul class="mobile-links mobile-links--level--0" data-collapse="" data-collapse-opened-class="mobile-links__item--open">
					<li class="mobile-links__item" data-collapse-item="">
						<div class="mobile-links__item-title">
							<a href="/" class="mobile-links__item-link">Trang chủ</a>
						</div>
					</li>

					<li class="mobile-links__item" data-collapse-item="">
						<div class="mobile-links__item-title">
							<a data-collapse-trigger="" class="mobile-links__item-link">Sản phẩm</a>
							<button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
								<svg class="mobile-links__item-arrow" width="12px" height="7px">
									<use xlink:href="/images/svg/sprite.svg#arrow-rounded-down-12x7"></use>
								</svg>
							</button>
						</div>
						<div class="mobile-links__item-sub-links" data-collapse-content="">
							<ul class="mobile-links mobile-links--level--1">
								
									<li class="mobile-links__item" data-collapse-item="">
										<div class="mobile-links__item-title">
											<a href="/danh-muc/email" class="mobile-links__item-link">Email</a>
										</div>
									</li>
								
									<li class="mobile-links__item" data-collapse-item="">
										<div class="mobile-links__item-title">
											<a href="/danh-muc/phan-mem" class="mobile-links__item-link">Phần mềm</a>
										</div>
									</li>
								
									<li class="mobile-links__item" data-collapse-item="">
										<div class="mobile-links__item-title">
											<a href="/danh-muc/tai-khoan" class="mobile-links__item-link">Tài khoản</a>
										</div>
									</li>
								
									<li class="mobile-links__item" data-collapse-item="">
										<div class="mobile-links__item-title">
											<a href="/danh-muc/danh-muc-khac" class="mobile-links__item-link">Khác</a>
										</div>
									</li>
								
							</ul>
						</div>
					</li>
					<li class="mobile-links__item" data-collapse-item="">
						<div class="mobile-links__item-title">
							<a data-collapse-trigger="" class="mobile-links__item-link">Dịch vụ</a>
							<button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
								<svg class="mobile-links__item-arrow" width="12px" height="7px">
									<use xlink:href="/images/svg/sprite.svg#arrow-rounded-down-12x7"></use>
								</svg>
							</button>
						</div>
						<div class="mobile-links__item-sub-links" data-collapse-content="">
							<ul class="mobile-links mobile-links--level--1">
								
									<li class="mobile-links__item" data-collapse-item="">
										<div class="mobile-links__item-title">
											<a href="/danh-muc/dich-vu-tuong-tac" class="mobile-links__item-link">Tăng tương tác</a>
										</div>
									</li>
								
									<li class="mobile-links__item" data-collapse-item="">
										<div class="mobile-links__item-title">
											<a href="/danh-muc/dich-vu-phan-mem" class="mobile-links__item-link">Dịch vụ phần mềm</a>
										</div>
									</li>
								
									<li class="mobile-links__item" data-collapse-item="">
										<div class="mobile-links__item-title">
											<a href="/danh-muc/dich-vu-blockchain" class="mobile-links__item-link">Blockchain</a>
										</div>
									</li>
								
									<li class="mobile-links__item" data-collapse-item="">
										<div class="mobile-links__item-title">
											<a href="/danh-muc/dich-vu-khac" class="mobile-links__item-link">Dịch vụ khác</a>
										</div>
									</li>
								
							</ul>
						</div>
					</li>

					<li class="mobile-links__item" data-collapse-item="">
						<div class="mobile-links__item-title">
							<a href="/support.html" class="mobile-links__item-link">Hỗ trợ</a>
						</div>
					</li>

					<li class="mobile-links__item" data-collapse-item="">
						<div class="mobile-links__item-title">
							<a data-collapse-trigger="" class="mobile-links__item-link">Công cụ</a>
							<button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
								<svg class="mobile-links__item-arrow" width="12px" height="7px">
									<use xlink:href="/images/svg/sprite.svg#arrow-rounded-down-12x7"></use>
								</svg>
							</button>
						</div>
						<div class="mobile-links__item-sub-links" data-collapse-content="">
							<ul class="mobile-links mobile-links--level--1">
								<li class="mobile-links__item" data-collapse-item="">
									<div class="mobile-links__item-title">
										<a href="/2FA.html" class="mobile-links__item-link">2FA</a>
									</div>
								</li>
								<li class="mobile-links__item" data-collapse-item="">
									<div class="mobile-links__item-title">
										<a href="/check-live-facebook.html" class="mobile-links__item-link">Check live FB</a>
									</div>
								</li>
							</ul>
						</div>
					</li>
					
					
					<li class="mobile-links__item" data-collapse-item="">
						<div class="mobile-links__item-title">
							<a class="mobile-links__item-link" href="/post/list.html">
								Chia sẻ kinh nghiệm MMO
							</a>
						</div>
					</li>

<!--					<li class="mobile-links__item" data-collapse-item>-->
<!--						<div class="mobile-links__item-title">-->
<!--							<a class="mobile-links__item-link" th:href="@{/post/your-self.html}" >Bài viết của bạn</a></span>-->
<!--						</div>-->
<!--					</li>-->
					<li class="mobile-links__item" data-collapse-item="">
						<div class="mobile-links__item-title">
							<a href="#" data-collapse-trigger="" class="mobile-links__item-link">Thông tin tài khoản</a>
							<button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
								<svg class="mobile-links__item-arrow" width="12px" height="7px">
									<use xlink:href="/images/svg/sprite.svg#arrow-rounded-down-12x7"></use>
								</svg>
							</button>
						</div>
						<div class="mobile-links__item-sub-links" data-collapse-content="">
							<ul class="mobile-links mobile-links--level--1">
								
									<li class="mobile-links__item" data-collapse-item="">
										<div class="mobile-links__item-title">
											<a href="/login.html" class="mobile-links__item-link">Đăng nhập</a>
										</div>
									</li>
								

								
							</ul>
						</div>
					</li>

					<li class="mobile-links__item" data-collapse-item="">
						<div class="mobile-links__item-title">
							<a data-collapse-trigger="" class="mobile-links__item-link">Ngôn ngữ:</a>
							<button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
								<svg class="mobile-links__item-arrow" width="12px" height="7px">
									<use xlink:href="/images/svg/sprite.svg#arrow-rounded-down-12x7"></use>
								</svg>
							</button>
						</div>
						<div class="mobile-links__item-sub-links" data-collapse-content="">
							<ul class="mobile-links mobile-links--level--1">
								<li class="mobile-links__item" data-collapse-item="">
									<div class="mobile-links__item-title">
										<a href="" class="mobile-links__item-link">English</a>
									</div>
								</li>
								<li class="mobile-links__item" data-collapse-item="">
									<div class="mobile-links__item-title">
										<a href="" class="mobile-links__item-link">Việt Nam</a>
									</div>
								</li>

							</ul>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	<!-- mobilemenu / end -->


		
		
	<!-- js -->
	<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="/vendor/nouislider/nouislider.min.js"></script>
	<script src="/vendor/photoswipe/photoswipe.min.js"></script>
	<script src="/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
	<script src="/vendor/select2/js/select2.min.js"></script>
	<script src="/js/number.js"></script>
	<script src="/js/main.js"></script>
	<script src="/js/header.js"></script>
	<script src="/vendor/svg4everybody/svg4everybody.min.js"></script>
	<script src="/js/jquery.dataTables.min.js"></script>
	<script src="/js/plugins/sweetalert.min.js"></script>
	<script src="/js/plugins/toastr.min.js"></script>
	<script src="/js/plugins/summernote/summernote.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
	<script>
		hideLoading();
		function showLoading() {
			$('.holder').show();
		}
		function hideLoading() {
			$('.holder').hide();
		}
		svg4everybody();

		const token = $("meta[name='_csrf']").attr("content");
		const header = $("meta[name='_csrf_header']").attr("content");
		$(document).ajaxSend(function (e, xhr, options) {
			xhr.setRequestHeader(header, token);
		});
	</script>
	
			<!-- Global site tag (gtag.js) - Google Analytics -->
		<!-- Google tag (gtag.js) -->
		<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-1DX3JZJ613"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-1DX3JZJ613');
		</script>


	  



		
	</div>