
<link href="./view/assets/css/style.css" rel="stylesheet">
<div class="site__body">
			<div class="holder" style="display: none;"><div class="preloader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
			</div>
			
	<script src="/js/jquery.min.js"></script>
	<script src="/js/feather.min.js"></script>
	<script src="/js/script.min.js"></script>
	<style>
		.services {
			border: 1px solid #21bf73;
			margin-bottom: 40px;
			margin-right: 10px;;
			width: 100%;
			border-radius: 4px;
			-moz-transition: all 0.3s ease;
			-o-transition: all 0.3s ease;
			-webkit-transition: all 0.3s ease;
			-ms-transition: all 0.3s ease;
			transition: all 0.3s ease;
		}

		.product-tabs__item {
			padding: 11px 22px !important;
			font-size: 1rem;
			cursor: pointer;
		}

	</style>
	<div>&nbsp;</div>
	<div class="container_fix">
		<div class="shop-layout shop-layout--sidebar--start">
			<div class="shop-layout__sidebar">
				<div class="block block-sidebar block-sidebar--offcanvas--mobile">
					<div class="block-sidebar__backdrop"></div>
					<div class="block-sidebar__body">
						<div class="block-sidebar__header">
							<div class="block-sidebar__title">Tìm kiếm</div>
							<button class="block-sidebar__close" type="button">
								<svg width="20px" height="20px">
									<use xlink:href="/images/svg/sprite.svg#cross-20"></use>
								</svg>
							</button>
						</div>
						<div class="block-sidebar__item">
							<div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse="" data-collapse-opened-class="filter--opened">
								<h4 class="widget-filters__title widget__title">Bộ lọc</h4>
								<div class="widget-filters__list">

									<div class="widget-filters__item" style="border-bottom: none;">
										<div class="filter filter--opened" data-collapse-item="">
											<button type="button" class="filter__title" data-collapse-trigger="">
												Chọn 1 hoặc nhiều sản phẩm
												<svg class="filter__arrow" width="12px" height="7px">
													<use xlink:href="/images/svg/sprite.svg#arrow-rounded-down-12x7">
													</use>
												</svg>
											</button>
											<div class="filter__body" data-collapse-content="">
												<div class="filter__container">
													<div class="filter-categories">
														<ul class="filter-categories__list">
															
																<li style="padding-left: 24px;" class="filter-categories__item filter-categories__item--child">
																	<input name="3dd4c490-8fd5-4a9c-8030-6587a8368323" class="form-check-input" type="checkbox" value="3dd4c490-8fd5-4a9c-8030-6587a8368323" id="subCategories">
																	<label style="cursor: pointer;" onclick="checkSubCategory(&quot;3dd4c490-8fd5-4a9c-8030-6587a8368323&quot;);" class="form-check-label">Dịch vụ code tool</label>
																</li>
															
																<li style="padding-left: 24px;" class="filter-categories__item filter-categories__item--child">
																	<input name="92acdd02-7a2e-4d7f-b58c-4ef3f23b7ba0" class="form-check-input" type="checkbox" value="92acdd02-7a2e-4d7f-b58c-4ef3f23b7ba0" id="subCategories">
																	<label style="cursor: pointer;" onclick="checkSubCategory(&quot;92acdd02-7a2e-4d7f-b58c-4ef3f23b7ba0&quot;);" class="form-check-label">Dịch vụ đồ họa</label>
																</li>
															
																<li style="padding-left: 24px;" class="filter-categories__item filter-categories__item--child">
																	<input name="0b9040e3-4378-40d3-bfdf-6b37cb29b0d0" class="form-check-input" type="checkbox" value="0b9040e3-4378-40d3-bfdf-6b37cb29b0d0" id="subCategories">
																	<label style="cursor: pointer;" onclick="checkSubCategory(&quot;0b9040e3-4378-40d3-bfdf-6b37cb29b0d0&quot;);" class="form-check-label">Dịch vụ video</label>
																</li>
															
																<li style="padding-left: 24px;" class="filter-categories__item filter-categories__item--child">
																	<input name="88221bad-4d4a-4dab-9d33-2597d5ce0230" class="form-check-input" type="checkbox" value="88221bad-4d4a-4dab-9d33-2597d5ce0230" id="subCategories">
																	<label style="cursor: pointer;" onclick="checkSubCategory(&quot;88221bad-4d4a-4dab-9d33-2597d5ce0230&quot;);" class="form-check-label">Dịch vụ tool khác</label>
																</li>
															
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="widget-filters__item" style="border-bottom: none;">
											<div class="filter filter--opened" data-collapse-item="">
												<button type="submit" onclick="doSearchBoLoc();" class="btn btn-primary btn-sm">Tìm kiếm</button>
											</div>
										</div>
									</div>

								</div>
							</div>

							<div class="block-sidebar__item">
								<div class="widget-posts widget widget-filters--offcanvas--mobile">
									<h4 class="widget__title" style="margin-bottom: -5px;">Bài viết tham khảo</h4>
									<div class="widget-posts__list">
										
											<div class="widget-posts__item" style="display: block;">
												<hr>
												<div class="widget-posts__image" style="width: 100%">
													<a href="/post/detail/chia-se-tut-moi-nhat-va-code-f12-mien-phi-cho-anh-chi-em_794823">
														<img style="width: 100%" src="./view/assets/images/chia-se-tut-moi-nhat-va-code-f12-mien-phi-cho-anh-chi-em_794823.png" alt="CHIA SẼ TUT MỚI NHẤT VÀ CODE F12 MIỄN PHÍ CHO ANH CHỊ EM">
													</a>
												</div>
												<div class="widget-posts__info" style="margin-top: 10px;">
													<div class="widget-posts__name" style="font-weight: 800">
														<a href="/post/detail/chia-se-tut-moi-nhat-va-code-f12-mien-phi-cho-anh-chi-em_794823">CHIA SẼ TUT MỚI NHẤT VÀ CODE F12 MIỄN PHÍ CHO ANH CHỊ EM</a>
													</div>
													<div class="widget-posts__date">
														
														<div class="stats">
		                                                    <span class="stats-item text-muted" data-tippy="" data-original-title="Lượt xem: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-eye"></i>
		                                                        1.9 K
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Lượt thích: ">
		                                                        <i aria-hidden="true" class="stats-item__icon fa fa-thumbs-up"></i>
		                                                        5
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Bình luận: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-comments"></i>
		                                                        0
                                                   			 </span> - 
                                                   			 <a style="color: #21bf73; font-size: 15px;" href="/thong-tin/calum_f0sszu" target="_blank">calum_f0sszu</a>
														</div>
													</div>
												</div>
											</div>
										
											<div class="widget-posts__item" style="display: block;">
												<hr>
												<div class="widget-posts__image" style="width: 100%">
													<a href="/post/detail/nhung-antidetect-browser-nao-uoc-anh-em-lam-mmo-viet-nam-su-dung-nhieu-nhat_249666">
														<img style="width: 100%" src="./view/assets/images/nhung-antidetect-browser-nao-uoc-anh-em-lam-mmo-viet-nam-su-dung-nhieu-nhat_249666.png" alt="Những antidetect browser nào được anh em làm MMO Việt Nam sử dụng nhiều nhất">
													</a>
												</div>
												<div class="widget-posts__info" style="margin-top: 10px;">
													<div class="widget-posts__name" style="font-weight: 800">
														<a href="/post/detail/nhung-antidetect-browser-nao-uoc-anh-em-lam-mmo-viet-nam-su-dung-nhieu-nhat_249666">Những antidetect browser nào được anh em làm MMO Việt Nam sử dụng nhiều nhất</a>
													</div>
													<div class="widget-posts__date">
														
														<div class="stats">
		                                                    <span class="stats-item text-muted" data-tippy="" data-original-title="Lượt xem: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-eye"></i>
		                                                        1.0 K
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Lượt thích: ">
		                                                        <i aria-hidden="true" class="stats-item__icon fa fa-thumbs-up"></i>
		                                                        0
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Bình luận: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-comments"></i>
		                                                        0
                                                   			 </span> - 
                                                   			 <a style="color: #21bf73; font-size: 15px;" href="/thong-tin/ngolinh1502" target="_blank">ngolinh1502</a>
														</div>
													</div>
												</div>
											</div>
										
											<div class="widget-posts__item" style="display: block;">
												<hr>
												<div class="widget-posts__image" style="width: 100%">
													<a href="/post/detail/-ung-xay-kenh-tik-tok-neu-ban-chua-biet-en-5-ieu-quan-trong-duoi-ay_662139">
														<img style="width: 100%" src="./view/assets/images/-ung-xay-kenh-tik-tok-neu-ban-chua-biet-en-5-ieu-quan-trong-duoi-ay_662139.png" alt="ĐỪNG XÂY KÊNH TIK TOK, NẾU BẠN CHƯA BIẾT ĐẾN 5 ĐIỀU QUAN TRỌNG DƯỚI ĐÂY">
													</a>
												</div>
												<div class="widget-posts__info" style="margin-top: 10px;">
													<div class="widget-posts__name" style="font-weight: 800">
														<a href="/post/detail/-ung-xay-kenh-tik-tok-neu-ban-chua-biet-en-5-ieu-quan-trong-duoi-ay_662139">ĐỪNG XÂY KÊNH TIK TOK, NẾU BẠN CHƯA BIẾT ĐẾN 5 ĐIỀU QUAN TRỌNG DƯỚI ĐÂY</a>
													</div>
													<div class="widget-posts__date">
														
														<div class="stats">
		                                                    <span class="stats-item text-muted" data-tippy="" data-original-title="Lượt xem: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-eye"></i>
		                                                        2.9 K
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Lượt thích: ">
		                                                        <i aria-hidden="true" class="stats-item__icon fa fa-thumbs-up"></i>
		                                                        1
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Bình luận: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-comments"></i>
		                                                        3
                                                   			 </span> - 
                                                   			 <a style="color: #21bf73; font-size: 15px;" href="/thong-tin/digiaic" target="_blank">digiaic</a>
														</div>
													</div>
												</div>
											</div>
										
											<div class="widget-posts__item" style="display: block;">
												<hr>
												<div class="widget-posts__image" style="width: 100%">
													<a href="/post/detail/huong-dan-sao-luu-va-khoi-phuc-ban-quyen-windows-office_191545">
														<img style="width: 100%" src="./view/assets/images/huong-dan-sao-luu-va-khoi-phuc-ban-quyen-windows-office_191545.png" alt="Hướng dẫn sao lưu và khôi phục bản quyền Windows / Office">
													</a>
												</div>
												<div class="widget-posts__info" style="margin-top: 10px;">
													<div class="widget-posts__name" style="font-weight: 800">
														<a href="/post/detail/huong-dan-sao-luu-va-khoi-phuc-ban-quyen-windows-office_191545">Hướng dẫn sao lưu và khôi phục bản quyền Windows / Office</a>
													</div>
													<div class="widget-posts__date">
														
														<div class="stats">
		                                                    <span class="stats-item text-muted" data-tippy="" data-original-title="Lượt xem: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-eye"></i>
		                                                        751
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Lượt thích: ">
		                                                        <i aria-hidden="true" class="stats-item__icon fa fa-thumbs-up"></i>
		                                                        0
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Bình luận: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-comments"></i>
		                                                        0
                                                   			 </span> - 
                                                   			 <a style="color: #21bf73; font-size: 15px;" href="/thong-tin/storekey247" target="_blank">storekey247</a>
														</div>
													</div>
												</div>
											</div>
										
											<div class="widget-posts__item" style="display: block;">
												<hr>
												<div class="widget-posts__image" style="width: 100%">
													<a href="/post/detail/khong-login-uoc-tai-khoan-telegram-khi-mua-tu-taphoammo_758630">
														<img style="width: 100%" src="./view/assets/images/khong-login-uoc-tai-khoan-telegram-khi-mua-tu-taphoammo_758630.png" alt="Không Login Được Tài Khoản Telegram Khi Mua Từ TapHoaMMo">
													</a>
												</div>
												<div class="widget-posts__info" style="margin-top: 10px;">
													<div class="widget-posts__name" style="font-weight: 800">
														<a href="/post/detail/khong-login-uoc-tai-khoan-telegram-khi-mua-tu-taphoammo_758630">Không Login Được Tài Khoản Telegram Khi Mua Từ TapHoaMMo</a>
													</div>
													<div class="widget-posts__date">
														
														<div class="stats">
		                                                    <span class="stats-item text-muted" data-tippy="" data-original-title="Lượt xem: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-eye"></i>
		                                                        1.9 K
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Lượt thích: ">
		                                                        <i aria-hidden="true" class="stats-item__icon fa fa-thumbs-up"></i>
		                                                        2
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Bình luận: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-comments"></i>
		                                                        0
                                                   			 </span> - 
                                                   			 <a style="color: #21bf73; font-size: 15px;" href="/thong-tin/lvdshop" target="_blank">lvdshop</a>
														</div>
													</div>
												</div>
											</div>
										
											<div class="widget-posts__item" style="display: block;">
												<hr>
												<div class="widget-posts__image" style="width: 100%">
													<a href="/post/detail/huong-dan-login-tai-khoan-twitter-x-va-nhung-luu-y_47509">
														<img style="width: 100%" src="./view/assets/images/huong-dan-login-tai-khoan-twitter-x-va-nhung-luu-y_47509.png" alt="Hướng dẫn login tài khoản Twitter  - X và những lưu ý !!!">
													</a>
												</div>
												<div class="widget-posts__info" style="margin-top: 10px;">
													<div class="widget-posts__name" style="font-weight: 800">
														<a href="/post/detail/huong-dan-login-tai-khoan-twitter-x-va-nhung-luu-y_47509">Hướng dẫn login tài khoản Twitter  - X và những lưu ý !!!</a>
													</div>
													<div class="widget-posts__date">
														
														<div class="stats">
		                                                    <span class="stats-item text-muted" data-tippy="" data-original-title="Lượt xem: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-eye"></i>
		                                                        1.6 K
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Lượt thích: ">
		                                                        <i aria-hidden="true" class="stats-item__icon fa fa-thumbs-up"></i>
		                                                        1
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Bình luận: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-comments"></i>
		                                                        0
                                                   			 </span> - 
                                                   			 <a style="color: #21bf73; font-size: 15px;" href="/thong-tin/dauxanh88" target="_blank">dauxanh88</a>
														</div>
													</div>
												</div>
											</div>
										
											<div class="widget-posts__item" style="display: block;">
												<hr>
												<div class="widget-posts__image" style="width: 100%">
													<a href="/post/detail/kinh-nghiem-tiktok-beta-global_693559">
														<img style="width: 100%" src="./view/assets/images/kinh-nghiem-tiktok-beta-global_693559.png" alt="Kinh nghiệm Tiktok Beta Global">
													</a>
												</div>
												<div class="widget-posts__info" style="margin-top: 10px;">
													<div class="widget-posts__name" style="font-weight: 800">
														<a href="/post/detail/kinh-nghiem-tiktok-beta-global_693559">Kinh nghiệm Tiktok Beta Global</a>
													</div>
													<div class="widget-posts__date">
														
														<div class="stats">
		                                                    <span class="stats-item text-muted" data-tippy="" data-original-title="Lượt xem: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-eye"></i>
		                                                        4.7 K
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Lượt thích: ">
		                                                        <i aria-hidden="true" class="stats-item__icon fa fa-thumbs-up"></i>
		                                                        3
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Bình luận: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-comments"></i>
		                                                        3
                                                   			 </span> - 
                                                   			 <a style="color: #21bf73; font-size: 15px;" href="/thong-tin/gianhangmmo" target="_blank">gianhangmmo</a>
														</div>
													</div>
												</div>
											</div>
										
											<div class="widget-posts__item" style="display: block;">
												<hr>
												<div class="widget-posts__image" style="width: 100%">
													<a href="/post/detail/nhung-luu-y-nho-nho-cho-anh-em-lam-tiktok-beta-chat-loc-uoc-sau-khoang-thoi-gian-tu-may-mo_718490">
														<img style="width: 100%" src="./view/assets/images/nhung-luu-y-nho-nho-cho-anh-em-lam-tiktok-beta-chat-loc-uoc-sau-khoang-thoi-gian-tu-may-mo_718490.png" alt="Những lưu ý nho nhỏ cho anh em làm TIKTOK BETA - chắt lọc được sau khoảng thời gian tự mày mò">
													</a>
												</div>
												<div class="widget-posts__info" style="margin-top: 10px;">
													<div class="widget-posts__name" style="font-weight: 800">
														<a href="/post/detail/nhung-luu-y-nho-nho-cho-anh-em-lam-tiktok-beta-chat-loc-uoc-sau-khoang-thoi-gian-tu-may-mo_718490">Những lưu ý nho nhỏ cho anh em làm TIKTOK BETA - chắt lọc được sau khoảng thời gian tự mày mò</a>
													</div>
													<div class="widget-posts__date">
														
														<div class="stats">
		                                                    <span class="stats-item text-muted" data-tippy="" data-original-title="Lượt xem: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-eye"></i>
		                                                        3.1 K
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Lượt thích: ">
		                                                        <i aria-hidden="true" class="stats-item__icon fa fa-thumbs-up"></i>
		                                                        3
		                                                    </span>
																	<span class="stats-item text-muted" data-tippy="" data-original-title="Bình luận: ">
		                                                      <i aria-hidden="true" class="stats-item__icon fa fa-comments"></i>
		                                                        2
                                                   			 </span> - 
                                                   			 <a style="color: #21bf73; font-size: 15px;" href="/thong-tin/mmoteam1" target="_blank">mmoteam1</a>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="shop-layout__content">
				<div class="block">
					<div class="products-view">
						<div class="products-view__options">
							<div class="view-options view-options--offcanvas--mobile">
								<div class="view-options__filters-button">
									<button type="button" class="filters-button">
										<svg class="filters-button__icon" width="16px" height="16px">
											<use xlink:href="/images/svg/sprite.svg#filters-16"></use>
										</svg>
										<span class="filters-button__title">Bộ lọc</span>
									</button>
								</div>
								<h1 style="font-size: 28px;" class="subheading text">Gian hàng dịch vụ phần mềm </h1>
								<div class="view-options__legend">Tổng 17 gian hàng</div>
							</div>

							<div class="product-tabs__list-container">
								<a id="sortPoint" onclick="doSearchBoLoc('sortPoint');" style="margin-left: inherit;" class="product-tabs__item product-tabs__item--active">Phổ biến</a>
								<a id="sortPriceLow" onclick="doSearchBoLoc('sortPriceLow');" class="product-tabs__item">Giá tăng dần</a>
								<a id="sortPriceHeight" onclick="doSearchBoLoc('sortPriceHeight');" class="product-tabs__item">Giá giảm dần</a>
							</div>
						</div>

						<div style="padding-right: 15px;" class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
							<div class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
								<div class="products-list__body">
									<div class="products-list__item">
										<div class="product-card product-card--hidden-actions">
											<div style="padding:15px;">
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
							<div class="products-list__body">
								<div class="row" style="width: 100%;">
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/code-website-theo-yeu-cau-mmo-e-commerce-e-learning-lms-shop-account" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/code-website-theo-yeu-cau-mmo-e-commerce-e-learning-lms-shop-account601.png" alt="Dịch vụ thiết kế website / phần mềm theo yêu cầu">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">Giá thỏa thuận</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/code-website-theo-yeu-cau-mmo-e-commerce-e-learning-lms-shop-account"><span class="badge badge-success">Dịch vụ</span>  Dịch vụ thiết kế website / phần mềm theo yêu cầu</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="5.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>10 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>21</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/ducthanhit">ducthanhit</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=88221bad-4d4a-4dab-9d33-2597d5ce0230">Dịch vụ tool khác</a>
												</div>
												<ul class="product-card__features-list">
													<li>Đội ngũ hơn 2 năm kinh nghiệm trong lĩnh vực lập trình website , phần mềm . Sử dụng công nghệ cao ✅</li>
													<li>Kinh doanh: Code website theo yêu cầu | Yêu cầu code thêm tính năng | Code phần mềm / api theo yêu cầu</li>
													
													

												</ul>
												
											</div>


											

												
											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												<div style="position: absolute;left:1px; top:25px;z-index: 1;">

														<div class="product-card__badge product-card__badge--new" style="background-color: #67b740;">
															<a data-toggle="tooltip" title="" data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																<i class="fa fa-star" style="color:#e3cd39;font-size: 13px; "></i>
															</a>

														</div>
												</div>
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/dich-vu-viet-tool-phan-mem-theo-yeu-cau-gia-re_689440" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/dich-vu-viet-tool-phan-mem-theo-yeu-cau-gia-re_689440.png" alt="DỊCH VỤ VIẾT TOOL, PHẦN MỀM THEO YÊU CẦU GIÁ RẺ">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">Giá thỏa thuận</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/dich-vu-viet-tool-phan-mem-theo-yeu-cau-gia-re_689440"><span class="badge badge-success">Dịch vụ</span>  DỊCH VỤ VIẾT TOOL, PHẦN MỀM THEO YÊU CẦU GIÁ RẺ</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="5.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>1 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>39</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/Viet4u">Viet4u</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=3dd4c490-8fd5-4a9c-8030-6587a8368323">Dịch vụ code tool</a>
												</div>
												<ul class="product-card__features-list">
													<li>Nhận viết Tool, Phần mềm, Thiết kế Website theo yêu cầu giá rẻ</li>
													<li>Kinh doanh: THIẾT KẾ WEBSITE | VIẾT TOOL, PHẦN MỀM | VIẾT ĐỒ ÁN THEO YÊU CẦU | VIẾT ỨNG DỤNG ĐT</li>
													
													

												</ul>
												
											</div>


											

												
											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/bunny-dream-technology_264583" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/bunny-dream-technology_264583359.png" alt="Dịch vụ code tool - bot - extension theo yêu cầu">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">Giá thỏa thuận</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/bunny-dream-technology_264583"><span class="badge badge-success">Dịch vụ</span>  Dịch vụ code tool - bot - extension theo yêu cầu</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="5.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>1 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>1</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/nedsion">nedsion</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=3dd4c490-8fd5-4a9c-8030-6587a8368323">Dịch vụ code tool</a>
												</div>
												<ul class="product-card__features-list">
													<li>Dịch vụ code tool - bot - extension theo yêu cầu</li>
													<li>Kinh doanh: Extension auto chat PlayerDuo | Tool cào truyện | Source tool nhặt xu Shopee Live bằng phone farm | THUÊ VIẾT TOOL - EXTENSION - BOT KHÁC</li>
													
													

												</ul>
												
											</div>


											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												<div style="position: absolute;left:1px; top:25px;z-index: 1;">

														<div class="product-card__badge product-card__badge--new" style="background-color: #67b740;">
															<a data-toggle="tooltip" title="" data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																<i class="fa fa-star" style="color:#e3cd39;font-size: 13px; "></i>
															</a>

														</div>
												</div>
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/dich-vu-viet-tool-thiet-ke-website-banner-logo-theo-yeu-cau-gia-hat-re_939353" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/dich-vu-viet-tool-thiet-ke-website-banner-logo-theo-yeu-cau-gia-hat-re_939353639.png" alt="DỊCH VỤ VIẾT TOOL, EXTENSION THEO YÊU CẦU">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">Giá thỏa thuận</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/dich-vu-viet-tool-thiet-ke-website-banner-logo-theo-yeu-cau-gia-hat-re_939353"><span class="badge badge-success">Dịch vụ</span>  DỊCH VỤ VIẾT TOOL, EXTENSION THEO YÊU CẦU</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="5.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>14 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>52</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/Minhtam6868">Minhtam6868</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=3dd4c490-8fd5-4a9c-8030-6587a8368323">Dịch vụ code tool</a>
												</div>
												<ul class="product-card__features-list">
													<li>Nhận viết Tool, Extension, Thiết kế Website, Getlink Source code theo yêu cầu giá rẻ, giao file nhanh, hướng dẫn tận tình...</li>
													<li>Kinh doanh: VIẾT TOOL CRAW DATA | THIẾT KẾ WEBSITE | VIẾT TOOL, ADD-ON | VIẾT PHẦN MỀM | VIẾT ALL BOT, AI TOOL</li>
													
													

												</ul>
												
											</div>


											

												
											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/copartpro-com_130790" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/copartpro-com_130790448.png" alt="Adobe Full App Giá rẻ">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">1.099.000 đ - 1.599.000 đ</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/copartpro-com_130790"><span class="badge badge-success">Dịch vụ</span>  Adobe Full App Giá rẻ</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="0.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>0 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>5</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/copartpro">copartpro</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=92acdd02-7a2e-4d7f-b58c-4ef3f23b7ba0">Dịch vụ đồ họa</a>
												</div>
												<ul class="product-card__features-list">
													<li>Gói tài khoản bản qu.y.ền Adobe Full App bao gồm toàn bộ các phần mềm trong bộ Creative Cloud của Adobe.</li>
													<li>Kinh doanh: Adobe Full App + 80GB Cloud | Adobe Full App 100GB Cloud | Adobe Full App + 1000GB Cloud Email chính chủ</li>
													
													

												</ul>
												
											</div>


											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												<div style="position: absolute;left:1px; top:25px;z-index: 1;">

														<div class="product-card__badge product-card__badge--new" style="background-color: #67b740;">
															<a data-toggle="tooltip" title="" data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																<i class="fa fa-star" style="color:#e3cd39;font-size: 13px; "></i>
															</a>

														</div>
												</div>
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/thiet-ke-website-theo-yeu-cau-designwebsite_846655" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/thiet-ke-website-theo-yeu-cau-designwebsite_846655.png" alt="Thiết Kế Website theo yêu cầu - Designwebsite">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">Giá thỏa thuận</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/thiet-ke-website-theo-yeu-cau-designwebsite_846655"><span class="badge badge-success">Dịch vụ</span>  Thiết Kế Website theo yêu cầu - Designwebsite</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="4.8"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-half</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>5 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>8</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/romeo_jvdzdy">romeo_jvdzdy</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=3dd4c490-8fd5-4a9c-8030-6587a8368323">Dịch vụ code tool</a>
												</div>
												<ul class="product-card__features-list">
													<li>Thiết Kế Website theo yêu cầu</li>
													<li>Kinh doanh: Dịch vụ code tool auto cho WEB/API | Dịch vụ code BOT telegram | Dịch vụ thiết kế theo yêu cầu | Dịch vụ thiết kế trang web landing page</li>
													
													

												</ul>
												
											</div>


											

												
											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/nhan-code-tool-tu-ong-cho-web-app-mobile-api-bot-telegram-thiet-ke-website-bot-airdrop_314083" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/nhan-code-tool-tu-ong-cho-web-app-mobile-api-bot-telegram-thiet-ke-website-bot-airdrop_314083.png" alt="Nhận Code Tool Tự Động Cho Web,App Mobile,API,Bot Telegram,Thiết Kế Website,Bot Airdrop">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">Giá thỏa thuận</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/nhan-code-tool-tu-ong-cho-web-app-mobile-api-bot-telegram-thiet-ke-website-bot-airdrop_314083"><span class="badge badge-success">Dịch vụ</span>  Nhận Code Tool Tự Động Cho Web,App Mobile,API,Bot Telegram,Thiết Kế Website,Bot Airdrop</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="5.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>1 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>13</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/present2k">present2k</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=3dd4c490-8fd5-4a9c-8030-6587a8368323">Dịch vụ code tool</a>
												</div>
												<ul class="product-card__features-list">
													<li>Nhận Code Tool Tự Động Cho Web,App Mobile,API,Bot Telegram,Thiết Kế Website,Bot Airdrop</li>
													<li>Kinh doanh: Code Bot Telegram | Thiết Kế Website | Code Tool Tự Động Cho App Mobile | Code Tool Tự Động Cho Web/API | Code Tool Tự Động Cho Telegram</li>
													
													

												</ul>
												
											</div>


											

												
											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/dich-vu-code-tool-x-buff-view-folow_354838" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/dich-vu-code-tool-x-buff-view-folow_354838.png" alt="Dịch Vụ Code Tool X - Buff view - Folow">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">40.000 đ - 5.000.000 đ</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/dich-vu-code-tool-x-buff-view-folow_354838"><span class="badge badge-success">Dịch vụ</span>  Dịch Vụ Code Tool X - Buff view - Folow</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="5.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>3 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>3</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/jecminest">jecminest</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=3dd4c490-8fd5-4a9c-8030-6587a8368323">Dịch vụ code tool</a>
												</div>
												<ul class="product-card__features-list">
													<li>nhận code tool đủ chức năng về nền tảng X , Buff view, folow , request , API sịn hơn ELON</li>
													<li>Kinh doanh: Tính năng demo ( view + folow ) | Auto X theo yêu cầu ( buff view 5m | folow v..v)</li>
													
													

												</ul>
												
											</div>


											

												
											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/nang-cap-adobe-stock-750-assets-chinh-chu_325390" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/nang-cap-adobe-stock-750-assets-chinh-chu_325390233.png" alt="Google One - Google Drive - Nâng Cấp Chính Chủ">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">Giá thỏa thuận</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/nang-cap-adobe-stock-750-assets-chinh-chu_325390"><span class="badge badge-success">Dịch vụ</span>  Google One - Google Drive - Nâng Cấp Chính Chủ</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="5.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>2 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>4</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/langtri29498">langtri29498</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=92acdd02-7a2e-4d7f-b58c-4ef3f23b7ba0">Dịch vụ đồ họa</a>
												</div>
												<ul class="product-card__features-list">
													<li>Nâng cấp dung lượng lưu trữ Google One - Google Drive - Google Photo Chính Chủ</li>
													<li>Kinh doanh: Google One 1T 12 Tháng | Google One 100G 12 Tháng | Google One 200G 12 Tháng | Google One 2T 12 Tháng | Giao nguyên Acc - Dung lượng trao đổi</li>
													
													

												</ul>
												
											</div>


											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/dich-vu-thiet-ke-website-landing-page-theo-yeu-cau_368537" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/dich-vu-thiet-ke-website-landing-page-theo-yeu-cau_368537.png" alt="Dịch vụ thiết kế website, landing page theo yêu cầu">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">Giá thỏa thuận</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/dich-vu-thiet-ke-website-landing-page-theo-yeu-cau_368537"><span class="badge badge-success">Dịch vụ</span>  Dịch vụ thiết kế website, landing page theo yêu cầu</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="0.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>0 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>2</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/michael_sekyky">michael_sekyky</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=88221bad-4d4a-4dab-9d33-2597d5ce0230">Dịch vụ tool khác</a>
												</div>
												<ul class="product-card__features-list">
													<li>Đội ngũ có kinh nghiệm trong lĩnh vực lập trình và thiết kế website, làm đồ án hỗ trợ cho sinh viên tốt nghiệp</li>
													<li>Kinh doanh: Code trang web theo yêu cầu | Code trang web landing page</li>
													
													

												</ul>
												
											</div>


											

												
											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												<div style="position: absolute;left:1px; top:25px;z-index: 1;">

														<div class="product-card__badge product-card__badge--new" style="background-color: #67b740;">
															<a data-toggle="tooltip" title="" data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																<i class="fa fa-star" style="color:#e3cd39;font-size: 13px; "></i>
															</a>

														</div>
												</div>
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/tang-luot-tai-ung-dung-tren-ios-va-android_261958" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/tang-luot-tai-ung-dung-tren-ios-va-android_261958272.png" alt="Tăng Lượt Tải Ứng Dụng Trên IOS Và Android">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">220.000 đ - 31.000.000 đ</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/tang-luot-tai-ung-dung-tren-ios-va-android_261958"><span class="badge badge-success">Dịch vụ</span>  Tăng Lượt Tải Ứng Dụng Trên IOS Và Android</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="0.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>0 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>0</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/mjhongoc1">mjhongoc1</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=88221bad-4d4a-4dab-9d33-2597d5ce0230">Dịch vụ tool khác</a>
												</div>
												<ul class="product-card__features-list">
													<li>Chúng tôi cung cấp dịch vụ tăng lượt tải ứng dụng uy tín, quảng bá ứng dụng nhanh chóng và dễ dàng hơn.</li>
													<li>Kinh doanh: 10000 Lượt Tải Google Play Store (Android) | 5000 Lượt Tải Google Play Store (Android) | 1000 Lượt Tải Google Play Store (Android) | 100 Lượt Tải Google Play Store (Android) | 50 Lượt Tải Google Play Store (Android)</li>
													
													

												</ul>
												
											</div>


											

												
											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/nhan-code-phan-mem-ung-dung-bot-website_170322" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/nhan-code-phan-mem-ung-dung-bot-website_170322.png" alt="Nhận code: Phần mềm - Ứng dụng - Bot - Website">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">Giá thỏa thuận</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/nhan-code-phan-mem-ung-dung-bot-website_170322"><span class="badge badge-success">Dịch vụ</span>  Nhận code: Phần mềm - Ứng dụng - Bot - Website</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="5.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>2 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>6</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/mrsimple">mrsimple</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=3dd4c490-8fd5-4a9c-8030-6587a8368323">Dịch vụ code tool</a>
												</div>
												<ul class="product-card__features-list">
													<li>Team mình nhận viết code cho đa nền tảng theo mọi yêu cầu của quý khách.</li>
													<li>Kinh doanh: Lập trình theo yêu cầu</li>
													
													

												</ul>
												
											</div>


											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												<div style="position: absolute;left:1px; top:25px;z-index: 1;">

														<div class="product-card__badge product-card__badge--new" style="background-color: #67b740;">
															<a data-toggle="tooltip" title="" data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																<i class="fa fa-star" style="color:#e3cd39;font-size: 13px; "></i>
															</a>

														</div>
												</div>
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/nang-cap-adobe-full-apps-1tb-cloud-stock-unlimited-chinh-chu_325390" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/nang-cap-adobe-full-apps-1tb-cloud-stock-unlimited-chinh-chu_325390745.png" alt="Nâng Cấp Adobe Full Apps Bản Quyền">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">119.000 đ - 899.000 đ</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/nang-cap-adobe-full-apps-1tb-cloud-stock-unlimited-chinh-chu_325390"><span class="badge badge-success">Dịch vụ</span>  Nâng Cấp Adobe Full Apps Bản Quyền</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="5.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>56 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>164</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/langtri29498">langtri29498</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=92acdd02-7a2e-4d7f-b58c-4ef3f23b7ba0">Dịch vụ đồ họa</a>
												</div>
												<ul class="product-card__features-list">
													<li>Gói tài khoản bản quyền Adobe Full Apps bao gồm toàn bộ các phần mềm trong bộ Creative Cloud của Adobe.</li>
													<li>Kinh doanh: Adobe All Apps Cấp Tài Khoản 1 Tháng | Adobe All Apps 100G Cấp Tài Khoản 1 Thiết bị 12 Tháng | Adobe All Apps 100G Cloud Add Email 12 Tháng | Adobe All Apps 100G Cloud Email Cá Nhân 12 Tháng</li>
													
													

												</ul>
												
											</div>


											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												<div style="position: absolute;left:1px; top:25px;z-index: 1;">

														<div class="product-card__badge product-card__badge--new" style="background-color: #67b740;">
															<a data-toggle="tooltip" title="" data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																<i class="fa fa-star" style="color:#e3cd39;font-size: 13px; "></i>
															</a>

														</div>
												</div>
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/nhan-viet-tool-extension-add-on-theo-yeu-cau_994463" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/nhan-viet-tool-extension-add-on-theo-yeu-cau_994463.png" alt="NHẬN VIẾT TOOL, EXTENSION, ADD-ON THEO YÊU CẦU">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">Giá thỏa thuận</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/nhan-viet-tool-extension-add-on-theo-yeu-cau_994463"><span class="badge badge-success">Dịch vụ</span>  NHẬN VIẾT TOOL, EXTENSION, ADD-ON THEO YÊU CẦU</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="0.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>0 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>0</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/emilio_4a0hal">emilio_4a0hal</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=3dd4c490-8fd5-4a9c-8030-6587a8368323">Dịch vụ code tool</a>
												</div>
												<ul class="product-card__features-list">
													<li>Nhận viết Tool, Extension, ADD-ON, Thiết kế Website theo yêu cầu, Giá cả cạnh tranh, hướng dẫn tận tình...</li>
													<li>Kinh doanh: Code website bán hàng, quảng cáo | Code tool auto phone | Code extention, add-on | Code tool auto chrome</li>
													
													

												</ul>
												
											</div>


											

												
											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												<div style="position: absolute;left:1px; top:25px;z-index: 1;">

														<div class="product-card__badge product-card__badge--new" style="background-color: #67b740;">
															<a data-toggle="tooltip" title="" data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																<i class="fa fa-star" style="color:#e3cd39;font-size: 13px; "></i>
															</a>

														</div>
												</div>
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/ban-quyen-adobe-full-apps-chinh-chu-goi-trial-gia-han-theo-thang_518151" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/ban-quyen-adobe-full-apps-chinh-chu-goi-trial-gia-han-theo-thang_518151.png" alt="Bản quyền Adobe Full Apps Chính Chủ - Gói Trial Gia Hạn Theo Tháng">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">65.000 đ - 195.000 đ</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/ban-quyen-adobe-full-apps-chinh-chu-goi-trial-gia-han-theo-thang_518151"><span class="badge badge-success">Dịch vụ</span>  Bản quyền Adobe Full Apps Chính Chủ - Gói Trial Gia Hạn Theo Tháng</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="5.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>14 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>354</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/phanhien">phanhien</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=92acdd02-7a2e-4d7f-b58c-4ef3f23b7ba0">Dịch vụ đồ họa</a>
												</div>
												<ul class="product-card__features-list">
													<li>Nâng cấp Adobe Full Apps vào tk Adobe chính chủ</li>
													<li>Kinh doanh: Add TK Adobe - 1 tháng | Shop cấp acc - 1 tháng | Shop cấp acc - 3 tháng | Add TK Adobe - 3 tháng</li>
													
													

												</ul>
												
											</div>


											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/tai-khoan-adobe-gia-re_130790" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/tai-khoan-adobe-gia-re_130790.png" alt="Tài khoản Adobe Giá rẻ">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">749.000 đ - 849.000 đ</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/tai-khoan-adobe-gia-re_130790"><span class="badge badge-success">Dịch vụ</span>  Tài khoản Adobe Giá rẻ</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="0.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-empty</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>0 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>0</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/copartpro">copartpro</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=92acdd02-7a2e-4d7f-b58c-4ef3f23b7ba0">Dịch vụ đồ họa</a>
												</div>
												<ul class="product-card__features-list">
													<li>Tài khoản Adobe các gói app lẻ như PS,LR,PR,AE,Acrobat Pro... và gói Photography (LR+PTS)</li>
													<li>Kinh doanh: Adobe Photography (LR+PTS) | Adobe Lẻ App</li>
													
													

												</ul>
												
											</div>


											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								

								<!-- -----Kiosk start----- -->

									<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
									<div class="products-list__item" style="height: 100%;">
										<div class="product-card product-card--hidden-actions" style="height: 96%;">
											<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
											<div style="padding:5px; " class="product-card__image product-image">
												
												<div style="position: absolute;left:1px; top:25px;z-index: 1;">

														<div class="product-card__badge product-card__badge--new" style="background-color: #67b740;">
															<a data-toggle="tooltip" title="" data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																<i class="fa fa-star" style="color:#e3cd39;font-size: 13px; "></i>
															</a>

														</div>
												</div>
												<div>

												</div>
												<a style="padding-bottom: 80%;padding-top: 10px;" href="/gian-hang/dich-vu-code-tools-chat-luong-gia-re-thbtools_588079" class="product-image__body">
													<img class="product-image__img" src="./view/assets/images/dich-vu-code-tools-chat-luong-gia-re-thbtools_588079.png" alt="Dịch vụ code tools chất lượng - giá rẻ - bảo mật">
												</a>
												
												<div style="text-align: center; font-size: 15px; margin-top: 12px;" class="product-card__prices">Giá thỏa thuận</div>
											</div>
											<div class="product-card__info" style="position: relative; padding-left: 10px;padding-top: 10px;">
												<div class="product-card__name">
													<h2 style="font-size: 16px; font-weight:500;"><a href="/gian-hang/dich-vu-code-tools-chat-luong-gia-re-thbtools_588079"><span class="badge badge-success">Dịch vụ</span>  Dịch vụ code tools chất lượng - giá rẻ - bảo mật</a></h2>
												</div>
												<div class="product-card__rating">
													<span class="rating" style="padding:2px;" data-value="5.0"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><title>star-full</title><path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path></svg>
</span>
													<div class="product-card__rating-legend">
														<span>2 Reviews</span>
														<span>| Đơn hoàn thành:</span>
														<span>4</span>
														<span>| Khiếu nại:</span>
														<span>0.0%</span>

													</div>

												</div>
												<div class="product-card__name product-card__features-list">
													Người bán: <a style="color: #21bf73;" href="/thong-tin/lemytu1997">lemytu1997</a>
												</div>
												<div class="product-card__name product-card__features-list">
													Sản phẩm: <a style="color: #21bf73;" href="/danh-muc/dich-vu-phan-mem?q=3dd4c490-8fd5-4a9c-8030-6587a8368323">Dịch vụ code tool</a>
												</div>
												<ul class="product-card__features-list">
													<li>UY TÍN - NHANH CHÓNG - HIỆU QUẢ - BẢO MẬT Ý TƯỞNG KHÁCH HÀNG</li>
													<li>Kinh doanh: Code Tools theo yêu cầu | Max Twitter Pro (Vĩnh viễn)</li>
													
													

												</ul>
												
											</div>


											

												
											
										</div>
									</div>
									</div>
									<!-- -----Kiosk stop----- -->
								
								</div>
							</div>
						</div>
						<div class="products-view__pagination" style="padding-bottom: 25px;">
							
<!-- Paging-->
<div class="text-center">
    <nav aria-label="Page navigation" class="paging" style="display: inline-block;">
        
    </nav>
</div>


<!--<ul th:if="${paging.totalPage > 1}" class="pagination justify-content-center">
  <li th:onclick="prevPage()" th:if="${paging.totalPage > 1}" class="page-item" th:classappend="${paging.start == 0 ? 'disabled' : ''}">
    <a class="page-link page-link&#45;&#45;with-arrow" aria-label="Previous">
      <svg class="page-link__arrow page-link__arrow&#45;&#45;left" aria-hidden="true" width="8px" height="13px">
        <use th:xlink:href="@{/images/svg/sprite.svg#arrow-rounded-left-8x13}"></use>
      </svg>
    </a>
  </li>
  <th:block th:each="i : ${#numbers.sequence(0, paging.totalPage - 1)}">
    <li  class="page-item" th:classappend="${paging.start == i ? 'active' : ''}">
        <a th:href="${pageLink.getPage(fullUrl, i)}" class="page-link" th:text="${i + 1}"></a>
    </li>
  </th:block>
  <li th:onclick="nextPage()" th:if="${paging.totalPage > 1}" class="page-item" th:classappend="${paging.start == (paging.totalPage - 1) ? 'disabled' : ''}">
    <a class="page-link page-link&#45;&#45;with-arrow" aria-label="Next">
      <svg class="page-link__arrow page-link__arrow&#45;&#45;right" aria-hidden="true" width="8px" height="13px">
        <use th:xlink:href="@{/images/svg/sprite.svg#arrow-rounded-right-8x13}"></use>
      </svg>
    </a>
  </li>
</ul>-->



						</div>
					</div>
				</div>

				
			</div>
		</div>

		<!-- ------------------------------------------- Reseller  ----------------------------------------------------- -->
		<div class="modal inmodal" id="resellerModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
			<form method="post" id="formReseller" action="/create-reseller.html"><input type="hidden" name="_csrf" value="09cd78fa-e7a2-4245-9035-5d9ab5a5c25d">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Reseller</h5>
					</div>
					<div class="modal-body">
						<input name="kiosk.id" id="kioskId" type="hidden">
						<label id="err_msg" class="text-danger"></label>

						<div class="row">
						<div style="padding-bottom:20px;" class="col-12 col-lg-12 col-xl-12">
								<span class="text-success">Trở thành reseller của gian hàng này, bạn sẽ được hưởng % doanh thu từ chiết khấu trên mỗi đơn hàng bạn bán được.</span><br>
								<span class="text-danger">Lưu ý: Khách chỉ cần vào 1 lần bằng link ref, thì sẽ áp dụng với mọi đơn hàng về sau.</span>
							</div>
							<div class="col-12 col-lg-12 col-xl-12">
								<div class="form-group">
									<label>Chiết khấu mong muốn(%)</label>
									<input name="percent" type="number" class="form-control" required="">
								</div>
							</div>

							<div class="col-12 col-lg-12 col-xl-12">
								<div class="form-group">
									<label>Lời chào hợp tác</label>
									<textarea class="form-control" rows="3" maxlength="1000" name="intro" required="required"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
				        <button type="button" onclick="doSubmitReseller()" class="btn btn-primary">Gửi</button>
				      </div>
				</div>
			</div>
			</form>
		</div>
	</div>
	<script>
		function checkSubCategory(actionId){
			 var actionCheckbox= document.getElementsByName(actionId)[0];
			 actionCheckbox.checked = !actionCheckbox.checked;

		}
		function readMore() {
			if($("#readMoreBtn").text()=="Xem thêm"){
				$("#description").height("auto");
				$("#readMoreBtn").text("Thu gọn");
			}else{
				$("#description").height("35px");
				$("#readMoreBtn").text("Xem thêm");

			}

		}
		$(function () {
			let sort = "sortPoint";

			$("#" + sort).addClass('product-tabs__item--active');

			App.rating();
		})

		$("input[id='filterType']").each(function (index) {
			if ("".includes($(this).val())) {
				$(this).click();
			}
		})
		$("input[id='subCategories']").each(function (index) {
			if ("".includes($(this).val())) {
				$(this).click();
			}
		});

		function doSearchBoLoc(sort) {
			let filterType = "";
			let subCategory = "";
			let alias = "dich-vu-phan-mem";
			$("input[id='filterType']:checked").each(function (index) {
				filterType += $(this).val() + ",";
			})
			$("input[id='subCategories']:checked").each(function (index) {
				subCategory += $(this).val() + ",";
			});
			if(!filterType){filterType='';};

			if(sort == null || sort == 'undefined') {
				sort = 'sortPoint';
			}
			window.location.href = `${this.location.origin}/danh-muc/${alias}?q=${subCategory}&t=${filterType}&sort=${sort}`;
		}

		function doSearchUser(userId) {
			let filterType = "";
			let subCategory = "";
			let alias = "dich-vu-phan-mem";
			$("input[id='filterType']:checked").each(function (index) {
				filterType += $(this).val() + ",";
			})
			$("input[id='subCategories']:checked").each(function (index) {
				subCategory += $(this).val() + ",";
			});
			if(!filterType){filterType='';};
			window.location.href = `${this.location.origin}/danh-muc/none?q=${subCategory}&t=${filterType}&u=${userId}`;
		}

		function detailKiosk(alias) {
			window.location.href = `${this.location.origin}/gian-hang/${alias}`;
		}

		function doReseller(kioskId) {
			$('#err_msg').html('');
			$('#kioskId').val(kioskId);
		}

		function doSubmitReseller() {
			$.ajax({
				url: "/create-reseller.html",
				data: $('#formReseller').serialize(),
				type: "POST",
				success: function (result) {
					$('#err_msg').html('');
					$('#err_msg').html(result.errorMsg);
				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
				}
			});
		}

		function wishlist(kioskId) {
			$.ajax({
				url: "/create-wishlist.html",
				data: {kioskId: kioskId},
				type: "POST",
				success: function (result) {
					if (result.code == 'OK') {
						toastr.options = {
							closeButton: true,
							progressBar: true,
							positionClass: 'toast-top-right',
							showMethod: 'slideDown',
							timeOut: 7000
						};
						toastr.success(result.message);
					} else {
						toastr.options = {
							closeButton: true,
							progressBar: true,
							showMethod: 'slideDown',
							positionClass: 'toast-top-right',
							timeOut: 7000
						};
						toastr.error(result.message);
					}
				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
					toastr.options = {
						closeButton: true,
						progressBar: true,
						showMethod: 'slideDown',
						positionClass: 'toast-top-right',
						timeOut: 7000
					};
					toastr.error('Lỗi! Liên hệ nhân viên để được hỗ trợ!');
				}
			});
		}
	</script>

		</div>