		<div class="site__body">
			<div class="holder" style="display: none;">
				<div class="preloader">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>

			<style>
				.subheading {
					color: #0866ff;
					font-size: 20px;
					font-weight: 600;
					letter-spacing: 2px;
					text-transform: uppercase;
					position: relative;
					text-align: center !important;
					padding-top: 10px;
					padding-bottom: 25px;
				}

				.services {
					border: 1px solid #0866ff;
					margin-bottom: 40px;
					margin-right: 10px;
					;
					width: 100%;
					border-radius: 4px;
					-moz-transition: all 0.3s ease;
					-o-transition: all 0.3s ease;
					-webkit-transition: all 0.3s ease;
					-ms-transition: all 0.3s ease;
					transition: all 0.3s ease;
				}

				.has-search .form-control-feedback {
					position: absolute;
					z-index: 2;
					display: block;
					padding-left: 0.4rem;
					line-height: 2.375rem;
					text-align: center;
					pointer-events: none;
					color: #aaa;
				}
			</style>

			<div class="block-finder block-finder--layout--full block">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="block-finder__body"
								style="background-image: url(./view/assets/images/finder.jpg); height:300px;">
								<div class="block-finder__form" style="padding-top:3rem;">
									<div class="block-finder__form-item">
										<select id="firstFilter" onchange="onChangeFirstFilter(this)"
											class="block-finder__select select2-hidden-accessible"
											data-select2-id="firstFilter" tabindex="-1" aria-hidden="true">
											<option value="none" data-select2-id="2">Tùy chọn tìm kiếm</option>
											<option value="USERNAME">Tên người bán</option>

											<option value="cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3">Email</option>

											<option value="2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3">Phần mềm</option>

											<option value="d8150a22-ca37-4740-8c15-af07124d0dc3">Tài khoản</option>

											<option value="1bb467da-87e5-406b-b2b2-a28628379a47">Khác</option>


											<option value="3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7">Tăng tương tác</option>

											<option value="518e256c-0b0f-4974-be2d-3df558625c3f">Dịch vụ phần mềm
											</option>

											<option value="13829aa7-d19c-4073-9a43-e1235301ccd7">Blockchain</option>

											<option value="d3bd0d76-3a00-4a8f-b7e9-4edf7e2f0baa">Dịch vụ khác</option>

										</select><span class="select2 select2-container select2-container--default"
											dir="ltr" data-select2-id="1"><span class="selection">

												<!-- <span
													class="select2-selection select2-selection--single" role="combobox"
													aria-haspopup="true" aria-expanded="false" tabindex="0"
													aria-disabled="false"
													aria-labelledby="select2-firstFilter-container"><span
														class="select2-selection__rendered"
														id="select2-firstFilter-container" role="textbox"
														aria-readonly="true" title="Tùy chọn tìm kiếm">Tùy chọn tìm
														kiếm</span><span class="select2-selection__arrow"
														role="presentation"><b
															role="presentation"></b></span></span> -->


											</span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
									</div>
									<div class="block-finder__form-item">
										<select id="secondFilter" class="block-finder__select select2-hidden-accessible"
											disabled="" data-select2-id="secondFilter" tabindex="-1" aria-hidden="true">
										</select>

										<!-- <span
											class="select2 select2-container select2-container--default select2-container--disabled"
											dir="ltr" data-select2-id="3"><span class="selection"><span
													class="select2-selection select2-selection--single" role="combobox"
													aria-haspopup="true" aria-expanded="false" tabindex="-1"
													aria-disabled="true"
													aria-labelledby="select2-secondFilter-container"><span
														class="select2-selection__rendered"
														id="select2-secondFilter-container" role="textbox"
														aria-readonly="true"></span><span
														class="select2-selection__arrow" role="presentation"><b
															role="presentation"></b></span></span></span><span
												class="dropdown-wrapper" aria-hidden="true"></span></span> -->
									</div>
									<div class="block-finder__form-item">
										<select id="thirdFilter" class="block-finder__select select2-hidden-accessible"
											disabled="" data-select2-id="thirdFilter" tabindex="-1" aria-hidden="true">
											<option value="" selected="" data-select2-id="5">Tất cả</option>
											<option value="NOTDUPLICATE">Loại không trùng</option>
											<option value="DUPLICATED">Có thể trùng</option>
										</select>
									</div>
								</div>

								<div class="block-finder__form has-searchs" style="padding-top:1.2rem;">
									<div class="block-finder__form-item" style="width: 100%;">
										<input id="keywork" class="form-control" type="text"
											placeholder="Tìm gian hàng hoặc người bán">
									</div>
								</div>

								<button type="button" onclick="doSearch()" class="block-finder__button btn btn-primary"
									style="background-color:#0866ff;">Tìm kiếm</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="block block-features block-features--layout--boxed">
				<div class="container">
					<h2 class="subheading text-center">-- Danh sách sản phẩm --</h2>
					<div class="block-features__list">

						<div class="block-features__item services">
							<div class="block-features__icon" style="height:100px;width:100px;">
								<a href="?act=email"><img src="./view/assets/images/mail.png"></a>
							</div>
							<style>
								.block-features__title a{
									color:#0866ff !important;
								}
							</style>
							<div class="block-features__content">
								<div class="block-features__title" style="font-size: 22px;line-height: 40px;">
									<h3><a style="font-size: 22px;"
											href="?act=email">Email</a></h3>
								</div>
								<div class="block-features__subtitle">
									<p>Gmail, yahoo mail, hot mail... và nhiều hơn thế nữa</p>
								</div>
							</div>
						</div>

						<div class="block-features__item services">
							<div class="block-features__icon" style="height:100px;width:100px;">
								<a href="?act=phan-mem"><img src="./view/assets/images/soft2.png"></a>
							</div>
							<div class="block-features__content">
								<div class="block-features__title" style="font-size: 22px;line-height: 40px;">
									<h3><a style="font-size: 22px;" href="?act=phan-mem">Phần
											mềm</a></h3>
								</div>
								<div class="block-features__subtitle">
									<p>Các phần mềm chuyên dụng cho kiếm tiền online từ những coder uy tín</p>
								</div>
							</div>
						</div>

						<div class="block-features__item services">
							<div class="block-features__icon" style="height:100px;width:100px;">
								<a href="?act=tai-khoan"><img src="./view/assets/images/account.png"></a>
							</div>
							<div class="block-features__content">
								<div class="block-features__title" style="font-size: 22px;line-height: 40px;">
									<h3><a style="font-size: 22px;" href="?act=tai-khoan">Tài
											khoản</a></h3>
								</div>
								<div class="block-features__subtitle">
									<p>Fb, BM, key window, kaspersky....</p>
								</div>
							</div>
						</div>

						<div class="block-features__item services">
							<div class="block-features__icon" style="height:100px;width:100px;">
								<a href="?act=danh-muc-khac"><img src="./view/assets/images/more.png"></a>
							</div>
							<div class="block-features__content">
								<div class="block-features__title" style="font-size: 22px;line-height: 40px;">
									<h3><a style="font-size: 22px;"
											href="?act=danh-muc-khac">Khác</a></h3>
								</div>
								<div class="block-features__subtitle">
									<p>Các sản phẩm số khác</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="block block-features block-features--layout--boxed">
				<div class="container">
					<h2 class="subheading text-center">-- Danh sách dịch vụ --</h2>
					<div class="block-features__list">

						<div class="block-features__item services">
							<div class="block-features__icon" style="height:100px;width:100px;">
								<a href="?act=dich-vu-tuong-tac"><img
										src="./view/assets/images/boost2.png"></a>
							</div>
							<div class="block-features__content">
								<div class="block-features__title" style="font-size: 22px;line-height: 40px;">
									<h3><a style="font-size: 22px;"
											href="?act=dich-vu-tuong-tac">Tăng tương tác</a>
									</h3>
								</div>
								<div class="block-features__subtitle">
									<p>Tăng like, view.share, comment... cho sản phẩm của bạn</p>
								</div>
							</div>
						</div>

						<div class="block-features__item services">
							<div class="block-features__icon" style="height:100px;width:100px;">
								<a href="?act=dich-vu-phan-mem"><img
										src="./view/assets/images/soft-service.png"></a>
							</div>
							<div class="block-features__content">
								<div class="block-features__title" style="font-size: 22px;line-height: 40px;">
									<h3><a style="font-size: 22px;"
											href="?act=dich-vu-phan-mem">Dịch vụ phần mềm</a>
									</h3>
								</div>
								<div class="block-features__subtitle">
									<p>Dịch vụ code tool MMO, đồ họa, video... và các dịch vụ liên quan</p>
								</div>
							</div>
						</div>

						<div class="block-features__item services">
							<div class="block-features__icon" style="height:100px;width:100px;">
								<a href="?act=dich-vu-blockchain"><img
										src="./view/assets/images/block2.png"></a>
							</div>
							<div class="block-features__content">
								<div class="block-features__title" style="font-size: 22px;line-height: 40px;">
									<h3><a style="font-size: 22px;"
											href="?act=dich-vu-blockchain">Blockchain</a></h3>
								</div>
								<div class="block-features__subtitle">
									<p>Dịch vụ tiền ảo, NFT, coinlist... và các dịch vụ blockchain khác</p>
								</div>
							</div>
						</div>

						<div class="block-features__item services">
							<div class="block-features__icon" style="height:100px;width:100px;">
								<a href="?act=dich-vu-khac"><img
										src="./view/assets/images/more-service.png"></a>
							</div>
							<div class="block-features__content">
								<div class="block-features__title" style="font-size: 22px;line-height: 40px;">
									<h3><a style="font-size: 22px;"
											href="?act=dich-vu-khac">Dịch vụ khác</a></h3>
								</div>
								<div class="block-features__subtitle">
									<p>Các dịch vụ MMO phổ biến khác hiện nay</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- .block-products-carousel -->
			<div class="block block-products-carousel" data-layout="grid-5" data-mobile-grid-columns="2">
				<div class="container">
					<div class="block-header">
						<h3 class="block-header__title">Lối tắt</h3>
						<div class="block-header__divider"></div>
						<div class="block-header__arrows-list">
							<button class="block-header__arrow block-header__arrow--left" type="button">
								<svg width="7px" height="11px">
									<use xlink:href="/images/svg/sprite.svg#arrow-rounded-left-7x11"></use>
								</svg>
							</button>
							<button class="block-header__arrow block-header__arrow--right" type="button">
								<svg width="7px" height="11px">
									<use xlink:href="/images/svg/sprite.svg#arrow-rounded-right-7x11"></use>
								</svg>
							</button>
						</div>
					</div>
					<div class="block-products-carousel__slider">
						<div class="block-products-carousel__preloader"></div>
						<div class="owl-carousel owl-loaded owl-drag">

							<div class="owl-stage-outer">
								<div class="owl-stage" style=""></div>
							</div>
							<div class="owl-nav disabled"><button type="button" role="presentation"
									class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button"
									role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
							<div class="owl-dots disabled"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="block block-features block-features--layout--boxed">
				<div class="container">
					<div class="block-features__list">
						<div id="description"
							style="font-size: 13px; padding: 5px; text-align: left; height: 46.6px; overflow: hidden;"
							class="block-features__item services">
							<center>
								<h1 style="font-size: 15px;">Tạp hóa MMO - Chuyên trang thương mại điện tử sản phẩm số -
									Phục vụ cộng đồng MMO (Kiếm tiền online)</h1>
							</center>
							<p>Một sản phẩm ra đời với mục đích thuận tiện và an toàn hơn trong các giao dịch mua bán
								sản phẩm số.</p>
							<p> Như các bạn đã biết, tình trạng lừ.a đảo trên mạng xã hội kéo dài bao nhiêu năm nay, mặc
								dù đã có rất nhiều giải pháp từ cộng đồng
								như là trung gian hay bảo hiểm, nhưng vẫn rất nhiều người dùng lựa chọn mua bán nhanh
								gọn mà bỏ qua các bước kiểm tra, hay trung gian, từ đó tạo cơ hội cho s.c.a.m.m.e.r hoạt
								động.
								Ở Taphoammo, bạn sẽ có 1 trải nghiệm mua hàng yên tâm hơn rất nhiều, chúng tôi sẽ giữ
								tiền người bán 3 ngày, kiểm tra toàn bộ sản phẩm bán ra
								có trùng với người khác hay không, nhắm mục đích tạo ra một nơi giao dịch mà người dùng
								có thể tin tưởng, một trang mà người bán có thể yên tâm đặt kho hàng, và cạnh tranh sòng
								phẳng.</p>
							<h2 style="font-size: 14px;">Các tính năng trên trang:</h2>
							<ul>
								<li>Check trùng sản phẩm bán ra: toàn bộ gian hàng cam kết không bán trùng, hệ thống của
									chúng tôi sẽ kiểm tra từng sản phẩm một, để đảm bảo hàng đến tay người dùng chưa
									từng được bán cho ai khác trên trang, và hàng bạn đã mua, cũng không thể bán cho ai
									khác nữa.</li>
								<li>Nạp tiền và thanh toán tự động: Bạn chỉ cần nạp tiền đúng cú pháp, số dư của bạn sẽ
									đc cập nhật sau 1-5 phút. Mọi bước thanh toán và giao hàng đều được thực hiện ngay
									tức thì.</li>
								<li>Giữ tiền đơn hàng 3 ngày: Sau khi bạn mua hàng, đơn hàng đó sẽ ở trạng thái Tạm giữ
									tiền 3 ngày, đủ thời gian để bạn kiểm tra, đổi pass sản phẩm. Nếu có vấn đề gì, hãy
									nhanh chóng dùng tính năng "Khiếu nại" nhé.</li>
								<li>Tính năng dành cho cộng tác viên (Reseller): Các bạn đọc thêm ở mục "FAQs - Câu hỏi
									thường gặp" nhé.</li>
							</ul>
							<h2 style="font-size: 14px;">Các mặt hàng đang kinh doanh tại Tạp Hóa MMO</h2>
							<ul>
								<li>Mua bán email: Mua bán gmail, mail outlook, domain... tất cả đều có thể được tự do
									mua bán trên trang.</li>
								<li>Mua bán phần mềm MMO: các phần mềm phục vụ cho kiếm tiền online, như phần mềm
									youtube, phần mềm chạy facebook, phần mềm PTC, PTU, phần mềm gmail....</li>
								<li>Mua bán tài khoản: mua bán facebook, mua bán twitter, mua bán zalo, mua bán
									instagram.</li>
								<li>Các sản phẩm số khác: VPS, key window, key diệt virus, tất cả sản phẩm số không vi
									phạm chính sách của chúng tôi đều được phép kinh doanh trên trang.</li>
								<li>Các dịch vụ tăng tương tác (like, comment, share...), dịch vụ phần mềm, blockchain
									và các dịch vụ số khác.</li>
							</ul>
						</div>
					</div>
					<center style="padding:0px; margin-top: -45px;"><a onclick="readMore()"><span id="readMoreBtn"
								style="background-color: #0866ff; cursor: pointer;" class="badge badge-info">Xem
								thêm</span></a></center>
				</div>
			</div>

			<!--	<th:block th:if="${keywords.size() > 0}">-->
			<!--		<div class="block block-features block-features&#45;&#45;layout&#45;&#45;boxed">-->
			<!--			<div class="container">-->
			<!--				&lt;!&ndash;			<h2 class="subheading text-center">&#45;&#45; Từ khóa được tìm kiếm nhiều &#45;&#45;</h2>&ndash;&gt;-->
			<!--				<div class="block-header" style="padding-bottom: 1em;">-->
			<!--					<h3 class="block-header__title"> Top tìm kiếm </h3>-->
			<!--					<div class="block-header__divider" style="margin-right: 10px;"></div>-->
			<!--				</div>-->
			<!--				<div class="block-features__list">-->
			<!--					<div id="hot-keyword" style="font-size:13px; padding:5px; text-align: left; height: auto;overflow: hidden;" class="block-features__item services">-->
			<!--					<span>-->
			<!--						<th:block th:each="key, index : ${keywords}" th:switch="${index.last}">-->
			<!--							<th:block th:case="false">-->
			<!--								<a th:href="${'/danh-muc/' + key.get('alias') + '?keywork=' + key.get('keyword')}" th:text="${key.get('keyword')}"></a> |-->
			<!--							</th:block>-->
			<!--							<th:block th:case="true">-->
			<!--								<a th:href="${'/danh-muc/' + key.get('alias') + '?keywork=' + key.get('keyword')}" th:text="${key.get('keyword')}"></a>-->
			<!--							</th:block>-->
			<!--						</th:block>-->
			<!--					</span>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</th:block>-->

			<script src="./js/jquery.min.js"></script>
			<script src="./js/feather.min.js"></script>
			<script src="./js/script.min.js"></script>

			<script type="text/javascript">
				$(function () {
					App.rating();
				});

				var subCategory_tmp = '[{"id":"1c9f0f31-3642-4174-81eb-67d131bf2a22","name":"D\u1ECBch v\u1EE5 ti\u1EC1n \u1EA3o","category_id":"13829aa7-d19c-4073-9a43-e1235301ccd7"},{"id":"3dd4c490-8fd5-4a9c-8030-6587a8368323","name":"D\u1ECBch v\u1EE5 code tool","category_id":"518e256c-0b0f-4974-be2d-3df558625c3f"},{"id":"46e67305-ed25-4edf-938c-cf0924a3b089","name":"T\u00E0i kho\u1EA3n FB","category_id":"d8150a22-ca37-4740-8c15-af07124d0dc3"},{"id":"89bb7573-0285-4083-8484-3eab3495f2b5","name":"The\u0309 Na\u0323p","category_id":"1bb467da-87e5-406b-b2b2-a28628379a47"},{"id":"cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3","name":"Gmail","category_id":"cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3"},{"id":"d6812855-a2b1-44dd-844d-35f7f027a61d","name":"Ph\u1EA7n M\u1EC1m FB","category_id":"2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3"},{"id":"035de332-8e9f-434d-b2e6-767fe10c7136","name":"Ph\u1EA7n M\u1EC1m Google","category_id":"2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3"},{"id":"286bbc36-6217-4520-b933-f282e35dc2be","name":"D\u1ECBch v\u1EE5 NFT","category_id":"13829aa7-d19c-4073-9a43-e1235301ccd7"},{"id":"2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3","name":"HotMail","category_id":"cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3"},{"id":"6d31b966-fdd8-43b6-a400-763a42897d77","name":"VPS","category_id":"1bb467da-87e5-406b-b2b2-a28628379a47"},{"id":"8e0e7c78-c4ae-4997-b08a-b9b91c0e0b4c","name":"T\u00E0i Kho\u1EA3n BM","category_id":"d8150a22-ca37-4740-8c15-af07124d0dc3"},{"id":"92acdd02-7a2e-4d7f-b58c-4ef3f23b7ba0","name":"D\u1ECBch v\u1EE5 \u0111\u1ED3 h\u1ECDa","category_id":"518e256c-0b0f-4974-be2d-3df558625c3f"},{"id":"0b9040e3-4378-40d3-bfdf-6b37cb29b0d0","name":"D\u1ECBch v\u1EE5 video","category_id":"518e256c-0b0f-4974-be2d-3df558625c3f"},{"id":"4346ad13-1cc4-4859-899c-74d894c19254","name":"D\u1ECBch v\u1EE5 Coinlist","category_id":"13829aa7-d19c-4073-9a43-e1235301ccd7"},{"id":"4a14cc2f-e4f6-4e32-81cc-2bc89a449f0c","name":"Ph\u1EA7n M\u1EC1m Youtube","category_id":"2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3"},{"id":"9ce819df-761b-4af0-a02e-c24896df011d","name":"OutlookMail","category_id":"cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3"},{"id":"a7708c42-788c-49f4-afab-2ba1a038df3f","name":"T\u00E0i Kho\u1EA3n Zalo","category_id":"d8150a22-ca37-4740-8c15-af07124d0dc3"},{"id":"66491c52-ffc6-4683-8c74-d3dc40e9daa4","name":"RuMail","category_id":"cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3"},{"id":"a7708c42-788c-49f4-afab-2ba1a038df3r","name":"T\u00E0i Kho\u1EA3n Twitter","category_id":"d8150a22-ca37-4740-8c15-af07124d0dc3"},{"id":"ab195111-65d0-4244-9318-98b89c81c976","name":"Ph\u1EA7n M\u1EC1m Ti\u1EC1n \u1EA2o","category_id":"2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3"},{"id":"140c9788-2944-43c2-8ff5-fafc13601f9d","name":"Ph\u1EA7n M\u1EC1m PTC","category_id":"2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3"},{"id":"86545aac-d52d-46b9-b706-632b8a0dcf89","name":"DomainMail","category_id":"cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3"},{"id":"b7708c42-788c-49f4-afab-2ba1a038df3r","name":"T\u00E0i Kho\u1EA3n Telegram","category_id":"d8150a22-ca37-4740-8c15-af07124d0dc3"},{"id":"4accce6a-60e4-4dbc-900c-79fb8e16df22","name":"Ph\u1EA7n M\u1EC1m Capcha","category_id":"2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3"},{"id":"5bcfd44d-6728-4c18-bcf9-1dbed436d975","name":"YahooMail","category_id":"cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3"},{"id":"f7708c42-788c-49f4-afab-2ba1a038df3r","name":"T\u00E0i Kho\u1EA3n Instagram","category_id":"d8150a22-ca37-4740-8c15-af07124d0dc3"},{"id":"5c6816f4-afd3-470e-a32f-95364143276a","name":"ProtonMail","category_id":"cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3"},{"id":"8c42h770-788c-49f4-afab-2b038df3ra1a","name":"T\u00E0i Kho\u1EA3n Shopee","category_id":"d8150a22-ca37-4740-8c15-af07124d0dc3"},{"id":"cc938237-d4b0-4592-853f-fd27d2aea7c2","name":"T\u00E0i Kho\u1EA3n Discord","category_id":"d8150a22-ca37-4740-8c15-af07124d0dc3"},{"id":"f9a88905-c90c-4cdf-90ec-5762f4c1014d","name":"Ph\u1EA7n M\u1EC1m Offer","category_id":"2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3"},{"id":"59ee6915-9e6d-4a8c-96d8-c9fb076e1919","name":"Ta\u0300i khoa\u0309n TikTok","category_id":"d8150a22-ca37-4740-8c15-af07124d0dc3"},{"id":"c39d37d7-412f-4444-99b7-f054bd3ac8da","name":"Ph\u1EA7n M\u1EC1m PTU","category_id":"2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3"},{"id":"617c653a-c8de-4908-b581-e72e445b68fd","name":"Key Di\u1EC7t Virus","category_id":"d8150a22-ca37-4740-8c15-af07124d0dc3"},{"id":"cfb23f2f-0440-4523-9b8c-1ac7c1ca41e7","name":"D\u1ECBch v\u1EE5 Facebook","category_id":"3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7"},{"id":"15133e00-96d8-467a-a74f-5dc68a9ec1b2","name":"D\u1ECBch v\u1EE5 Tiktok","category_id":"3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7"},{"id":"94506c68-777d-4f8b-b619-b2636c2b1e11","name":"D\u1ECBch v\u1EE5 Google","category_id":"3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7"},{"id":"ea560f5e-4a8b-45c1-a5d1-994c114a9d6f","name":"D\u1ECBch v\u1EE5 Telegram","category_id":"3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7"},{"id":"6d668673-2197-4756-ae16-864cb32f018f","name":"D\u1ECBch v\u1EE5 Shopee","category_id":"3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7"},{"id":"68e10286-6afd-4c7e-8225-ec740c4bb47e","name":"D\u1ECBch v\u1EE5 Discord","category_id":"3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7"},{"id":"86004292-8308-4863-a88e-0a2b437d07a4","name":"Lo\u1EA1i Mail Kh\u00E1c","category_id":"cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3"},{"id":"a8c3c6a9-1891-4625-9002-aabc0a8e6f1c","name":"D\u1ECBch v\u1EE5 Twitter","category_id":"3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7"},{"id":"dc1784c9-0e9e-4781-bd71-e13a3809daec","name":"Ph\u1EA7n M\u1EC1m Kh\u00E1c","category_id":"2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3"},{"id":"d70e7471-cd5b-4b3c-bb30-85a93b4c4021","name":"D\u1ECBch v\u1EE5 Youtube","category_id":"3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7"},{"id":"c1d589f2-a6fb-4b95-a553-5c97564abc37","name":"D\u1ECBch v\u1EE5 Zalo","category_id":"3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7"},{"id":"c437f229-1818-4280-9320-6fabad255e51","name":"D\u1ECBch v\u1EE5 Instagram","category_id":"3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7"},{"id":"505487e7-d4a7-44a4-a3d3-5467bf0f21ab","name":"Blockchain kh\u00E1c","category_id":"13829aa7-d19c-4073-9a43-e1235301ccd7"},{"id":"58a557fb-944c-4ed8-be73-4c7748655b0e","name":"D\u1ECBch v\u1EE5 kh\u00E1c","category_id":"d3bd0d76-3a00-4a8f-b7e9-4edf7e2f0baa"},{"id":"6d31b928-fdd8-43b6-a400-783a42897d13","name":"Key Window","category_id":"d8150a22-ca37-4740-8c15-af07124d0dc3"},{"id":"6d31b966-fdd8-43b6-a400-763a42897d79","name":"Kh\u00E1c","category_id":"1bb467da-87e5-406b-b2b2-a28628379a47"},{"id":"88221bad-4d4a-4dab-9d33-2597d5ce0230","name":"D\u1ECBch v\u1EE5 tool kh\u00E1c","category_id":"518e256c-0b0f-4974-be2d-3df558625c3f"},{"id":"f6ac2535-d293-4eed-a44d-bc95cad10629","name":"T\u01B0\u01A1ng t\u00E1c kh\u00E1c","category_id":"3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7"},{"id":"h7708c42-788c-49f4-afab-2ba1a038df3r","name":"T\u00E0i Kho\u1EA3n Kh\u00E1c","category_id":"d8150a22-ca37-4740-8c15-af07124d0dc3"}]';
				var subCategory = JSON.parse(subCategory_tmp);
				let secondFilterTemplate = `<option value="" selected>Tất cả</option>`;
				function onChangeFirstFilter(e) {
					const val = $(e).val();
					if (val == 'none')
						return;
					bindingDataSecondFilter(val);
				}
				function readMore() {
					if ($("#readMoreBtn").text() == "Xem thêm") {
						$("#description").height("auto");
						$("#readMoreBtn").text("Thu gọn");
						localStorage.setItem("content", "show");
					} else {
						$("#description").height("35px");
						$("#readMoreBtn").text("Xem thêm");
						localStorage.setItem("content", "hide");
					}

				}
				$(document).ready(function () {
					var contentAction = localStorage.getItem("content");
					if (contentAction == null || contentAction == "show") {
						$("#description").height("auto");
						$("#readMoreBtn").text("Thu gọn");
					}
					else {
						$("#description").height("35px");
						$("#readMoreBtn").text("Xem thêm");
					}
				});
				function bindingDataSecondFilter(categoryId) {
					if (categoryId == 'none')
						return;
					let result = secondFilterTemplate;
					const data = subCategory.map(item => {
						if (item.category_id == categoryId) {
							result += `<option value="${item.id}">${item.name}</option>`;
						}
					});
					$('#secondFilter').html(result);
				}

				function doSearch() {
					var firstFilter = $('#firstFilter').val();
					var secondFilter = $('#secondFilter').val();
					if (!secondFilter) { secondFilter = ''; }
					var thirdFilter = $('#thirdFilter').val();
					var keyworkFilter = $('#keywork').val();
					if (!thirdFilter) { thirdFilter = ''; }
					if (!keyworkFilter) { keyworkFilter = ''; }

					window.location.href = `danh-muc/${firstFilter}?q=${secondFilter}&t=${thirdFilter}&keywork=${keyworkFilter}`;
				}
			</script>

		</div>
		