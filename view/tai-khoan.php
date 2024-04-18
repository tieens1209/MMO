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

			<script src="./view/assets/js/jquery.min.js"></script>
			<script src="./view/assets/js/feather.min.js"></script>
			<script src="./view/assets/js/script.min.js"></script>
			<style>
				.services {
					border: 1px solid #21bf73;
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
									<div class="widget-filters widget widget-filters--offcanvas--mobile"
										data-collapse="" data-collapse-opened-class="filter--opened">
										<h4 class="widget-filters__title widget__title">Bộ lọc</h4>
										<div class="widget-filters__list">

											<div class="widget-filters__item" style="border-bottom: none;">
												<div class="filter filter--opened" data-collapse-item="">
													<button type="button" class="filter__title"
														data-collapse-trigger="">
														Chọn 1 hoặc nhiều sản phẩm
														<svg class="filter__arrow" width="12px" height="7px">
															<use
																xlink:href="/images/svg/sprite.svg#arrow-rounded-down-12x7">
															</use>
														</svg>
													</button>
													<div class="filter__body" data-collapse-content="">
														<div class="filter__container">
															<div class="filter-categories">
																<ul class="filter-categories__list">

																	<li style="padding-left: 24px;"
																		class="filter-categories__item filter-categories__item--child">
																		<input
																			name="46e67305-ed25-4edf-938c-cf0924a3b089"
																			class="form-check-input" type="checkbox"
																			value="46e67305-ed25-4edf-938c-cf0924a3b089"
																			id="subCategories">
																		<label style="cursor: pointer;"
																			onclick="checkSubCategory(&quot;46e67305-ed25-4edf-938c-cf0924a3b089&quot;);"
																			class="form-check-label">Tài khoản
																			FB</label>
																	</li>

																	<li style="padding-left: 24px;"
																		class="filter-categories__item filter-categories__item--child">
																		<input
																			name="8e0e7c78-c4ae-4997-b08a-b9b91c0e0b4c"
																			class="form-check-input" type="checkbox"
																			value="8e0e7c78-c4ae-4997-b08a-b9b91c0e0b4c"
																			id="subCategories">
																		<label style="cursor: pointer;"
																			onclick="checkSubCategory(&quot;8e0e7c78-c4ae-4997-b08a-b9b91c0e0b4c&quot;);"
																			class="form-check-label">Tài Khoản
																			BM</label>
																	</li>

																	<li style="padding-left: 24px;"
																		class="filter-categories__item filter-categories__item--child">
																		<input
																			name="a7708c42-788c-49f4-afab-2ba1a038df3f"
																			class="form-check-input" type="checkbox"
																			value="a7708c42-788c-49f4-afab-2ba1a038df3f"
																			id="subCategories">
																		<label style="cursor: pointer;"
																			onclick="checkSubCategory(&quot;a7708c42-788c-49f4-afab-2ba1a038df3f&quot;);"
																			class="form-check-label">Tài Khoản
																			Zalo</label>
																	</li>

																	<li style="padding-left: 24px;"
																		class="filter-categories__item filter-categories__item--child">
																		<input
																			name="a7708c42-788c-49f4-afab-2ba1a038df3r"
																			class="form-check-input" type="checkbox"
																			value="a7708c42-788c-49f4-afab-2ba1a038df3r"
																			id="subCategories">
																		<label style="cursor: pointer;"
																			onclick="checkSubCategory(&quot;a7708c42-788c-49f4-afab-2ba1a038df3r&quot;);"
																			class="form-check-label">Tài Khoản
																			Twitter</label>
																	</li>

																	<li style="padding-left: 24px;"
																		class="filter-categories__item filter-categories__item--child">
																		<input
																			name="b7708c42-788c-49f4-afab-2ba1a038df3r"
																			class="form-check-input" type="checkbox"
																			value="b7708c42-788c-49f4-afab-2ba1a038df3r"
																			id="subCategories">
																		<label style="cursor: pointer;"
																			onclick="checkSubCategory(&quot;b7708c42-788c-49f4-afab-2ba1a038df3r&quot;);"
																			class="form-check-label">Tài Khoản
																			Telegram</label>
																	</li>

																	<li style="padding-left: 24px;"
																		class="filter-categories__item filter-categories__item--child">
																		<input
																			name="f7708c42-788c-49f4-afab-2ba1a038df3r"
																			class="form-check-input" type="checkbox"
																			value="f7708c42-788c-49f4-afab-2ba1a038df3r"
																			id="subCategories">
																		<label style="cursor: pointer;"
																			onclick="checkSubCategory(&quot;f7708c42-788c-49f4-afab-2ba1a038df3r&quot;);"
																			class="form-check-label">Tài Khoản
																			Instagram</label>
																	</li>

																	<li style="padding-left: 24px;"
																		class="filter-categories__item filter-categories__item--child">
																		<input
																			name="8c42h770-788c-49f4-afab-2b038df3ra1a"
																			class="form-check-input" type="checkbox"
																			value="8c42h770-788c-49f4-afab-2b038df3ra1a"
																			id="subCategories">
																		<label style="cursor: pointer;"
																			onclick="checkSubCategory(&quot;8c42h770-788c-49f4-afab-2b038df3ra1a&quot;);"
																			class="form-check-label">Tài Khoản
																			Shopee</label>
																	</li>

																	<li style="padding-left: 24px;"
																		class="filter-categories__item filter-categories__item--child">
																		<input
																			name="cc938237-d4b0-4592-853f-fd27d2aea7c2"
																			class="form-check-input" type="checkbox"
																			value="cc938237-d4b0-4592-853f-fd27d2aea7c2"
																			id="subCategories">
																		<label style="cursor: pointer;"
																			onclick="checkSubCategory(&quot;cc938237-d4b0-4592-853f-fd27d2aea7c2&quot;);"
																			class="form-check-label">Tài Khoản
																			Discord</label>
																	</li>

																	<li style="padding-left: 24px;"
																		class="filter-categories__item filter-categories__item--child">
																		<input
																			name="59ee6915-9e6d-4a8c-96d8-c9fb076e1919"
																			class="form-check-input" type="checkbox"
																			value="59ee6915-9e6d-4a8c-96d8-c9fb076e1919"
																			id="subCategories">
																		<label style="cursor: pointer;"
																			onclick="checkSubCategory(&quot;59ee6915-9e6d-4a8c-96d8-c9fb076e1919&quot;);"
																			class="form-check-label">Tài khoản
																			TikTok</label>
																	</li>

																	<li style="padding-left: 24px;"
																		class="filter-categories__item filter-categories__item--child">
																		<input
																			name="617c653a-c8de-4908-b581-e72e445b68fd"
																			class="form-check-input" type="checkbox"
																			value="617c653a-c8de-4908-b581-e72e445b68fd"
																			id="subCategories">
																		<label style="cursor: pointer;"
																			onclick="checkSubCategory(&quot;617c653a-c8de-4908-b581-e72e445b68fd&quot;);"
																			class="form-check-label">Key Diệt
																			Virus</label>
																	</li>

																	<li style="padding-left: 24px;"
																		class="filter-categories__item filter-categories__item--child">
																		<input
																			name="6d31b928-fdd8-43b6-a400-783a42897d13"
																			class="form-check-input" type="checkbox"
																			value="6d31b928-fdd8-43b6-a400-783a42897d13"
																			id="subCategories">
																		<label style="cursor: pointer;"
																			onclick="checkSubCategory(&quot;6d31b928-fdd8-43b6-a400-783a42897d13&quot;);"
																			class="form-check-label">Key Window</label>
																	</li>

																	<li style="padding-left: 24px;"
																		class="filter-categories__item filter-categories__item--child">
																		<input
																			name="h7708c42-788c-49f4-afab-2ba1a038df3r"
																			class="form-check-input" type="checkbox"
																			value="h7708c42-788c-49f4-afab-2ba1a038df3r"
																			id="subCategories">
																		<label style="cursor: pointer;"
																			onclick="checkSubCategory(&quot;h7708c42-788c-49f4-afab-2ba1a038df3r&quot;);"
																			class="form-check-label">Tài Khoản
																			Khác</label>
																	</li>

																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="widget-filters__item" style="border-bottom: none;">
													<div class="filter filter--opened" data-collapse-item="">
														<button type="submit" onclick="doSearchBoLoc();"
															class="btn btn-primary btn-sm">Tìm kiếm</button>
													</div>
												</div>
											</div>

										</div>
									</div>

									<div class="block-sidebar__item">
										<div class="widget-posts widget widget-filters--offcanvas--mobile">
											<h4 class="widget__title" style="margin-bottom: -5px;">Bài viết tham khảo
											</h4>
											<div class="widget-posts__list">

												<div class="widget-posts__item" style="display: block;">
													<hr>
													<div class="widget-posts__image" style="width: 100%">
														<a href="https://taphoammo.net/post/detail/chia-se-tut-moi-nhat-va-code-f12-mien-phi-cho-anh-chi-em_794823">
															<img style="width: 100%" src="./view/assets/images/chia-se-tut-moi-nhat-va-code-f12-mien-phi-cho-anh-chi-em_794823.png" alt="CHIA SẼ TUT MỚI NHẤT VÀ CODE F12 MIỄN PHÍ CHO ANH CHỊ EM">
														</a>
													</div>
													<div class="widget-posts__info" style="margin-top: 10px;">
														<div class="widget-posts__name" style="font-weight: 800">
															<a href="https://taphoammo.net/post/detail/chia-se-tut-moi-nhat-va-code-f12-mien-phi-cho-anh-chi-em_794823">CHIA SẼ TUT MỚI NHẤT VÀ CODE F12 MIỄN PHÍ CHO ANH CHỊ EM</a>
														</div>
														<div class="widget-posts__date">

															<div class="stats">
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt xem: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-eye"></i>
																	1.5 K
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt thích: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-thumbs-up"></i>
																	4
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Bình luận: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-comments"></i>
																	0
																</span> -
																<a style="color: #21bf73; font-size: 15px;"
																	href="https://taphoammo.net/thong-tin/calum_f0sszu"
																	target="_blank">calum_f0sszu</a>
															</div>
														</div>
													</div>
												</div>

												<div class="widget-posts__item" style="display: block;">
													<hr>
													<div class="widget-posts__image" style="width: 100%">
														<a
															href="https://taphoammo.net/post/detail/nhung-antidetect-browser-nao-uoc-anh-em-lam-mmo-viet-nam-su-dung-nhieu-nhat_249666">
															<img style="width: 100%"
																src="./view/assets/images/nhung-antidetect-browser-nao-uoc-anh-em-lam-mmo-viet-nam-su-dung-nhieu-nhat_249666.png"
																alt="Những antidetect browser nào được anh em làm MMO Việt Nam sử dụng nhiều nhất">
														</a>
													</div>
													<div class="widget-posts__info" style="margin-top: 10px;">
														<div class="widget-posts__name" style="font-weight: 800">
															<a
																href="https://taphoammo.net/post/detail/nhung-antidetect-browser-nao-uoc-anh-em-lam-mmo-viet-nam-su-dung-nhieu-nhat_249666">Những
																antidetect browser nào được anh em làm MMO Việt Nam sử
																dụng nhiều nhất</a>
														</div>
														<div class="widget-posts__date">

															<div class="stats">
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt xem: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-eye"></i>
																	901
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt thích: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-thumbs-up"></i>
																	0
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Bình luận: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-comments"></i>
																	0
																</span> -
																<a style="color: #21bf73; font-size: 15px;"
																	href="https://taphoammo.net/thong-tin/ngolinh1502"
																	target="_blank">ngolinh1502</a>
															</div>
														</div>
													</div>
												</div>

												<div class="widget-posts__item" style="display: block;">
													<hr>
													<div class="widget-posts__image" style="width: 100%">
														<a
															href="https://taphoammo.net/post/detail/-ung-xay-kenh-tik-tok-neu-ban-chua-biet-en-5-ieu-quan-trong-duoi-ay_662139">
															<img style="width: 100%"
																src="./view/assets/images/-ung-xay-kenh-tik-tok-neu-ban-chua-biet-en-5-ieu-quan-trong-duoi-ay_662139.png"
																alt="ĐỪNG XÂY KÊNH TIK TOK, NẾU BẠN CHƯA BIẾT ĐẾN 5 ĐIỀU QUAN TRỌNG DƯỚI ĐÂY">
														</a>
													</div>
													<div class="widget-posts__info" style="margin-top: 10px;">
														<div class="widget-posts__name" style="font-weight: 800">
															<a
																href="https://taphoammo.net/post/detail/-ung-xay-kenh-tik-tok-neu-ban-chua-biet-en-5-ieu-quan-trong-duoi-ay_662139">ĐỪNG
																XÂY KÊNH TIK TOK, NẾU BẠN CHƯA BIẾT ĐẾN 5 ĐIỀU QUAN
																TRỌNG DƯỚI ĐÂY</a>
														</div>
														<div class="widget-posts__date">

															<div class="stats">
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt xem: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-eye"></i>
																	2.8 K
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt thích: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-thumbs-up"></i>
																	1
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Bình luận: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-comments"></i>
																	3
																</span> -
																<a style="color: #21bf73; font-size: 15px;"
																	href="https://taphoammo.net/thong-tin/digiaic"
																	target="_blank">digiaic</a>
															</div>
														</div>
													</div>
												</div>

												<div class="widget-posts__item" style="display: block;">
													<hr>
													<div class="widget-posts__image" style="width: 100%">
														<a
															href="https://taphoammo.net/post/detail/huong-dan-sao-luu-va-khoi-phuc-ban-quyen-windows-office_191545">
															<img style="width: 100%"
																src="./view/assets/images/huong-dan-sao-luu-va-khoi-phuc-ban-quyen-windows-office_191545.png"
																alt="Hướng dẫn sao lưu và khôi phục bản quyền Windows / Office">
														</a>
													</div>
													<div class="widget-posts__info" style="margin-top: 10px;">
														<div class="widget-posts__name" style="font-weight: 800">
															<a
																href="https://taphoammo.net/post/detail/huong-dan-sao-luu-va-khoi-phuc-ban-quyen-windows-office_191545">Hướng
																dẫn sao lưu và khôi phục bản quyền Windows / Office</a>
														</div>
														<div class="widget-posts__date">

															<div class="stats">
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt xem: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-eye"></i>
																	730
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt thích: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-thumbs-up"></i>
																	0
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Bình luận: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-comments"></i>
																	0
																</span> -
																<a style="color: #21bf73; font-size: 15px;"
																	href="https://taphoammo.net/thong-tin/storekey247"
																	target="_blank">storekey247</a>
															</div>
														</div>
													</div>
												</div>

												<div class="widget-posts__item" style="display: block;">
													<hr>
													<div class="widget-posts__image" style="width: 100%">
														<a
															href="https://taphoammo.net/post/detail/khong-login-uoc-tai-khoan-telegram-khi-mua-tu-taphoammo_758630">
															<img style="width: 100%"
																src="./view/assets/images/khong-login-uoc-tai-khoan-telegram-khi-mua-tu-taphoammo_758630.png"
																alt="Không Login Được Tài Khoản Telegram Khi Mua Từ TapHoaMMo">
														</a>
													</div>
													<div class="widget-posts__info" style="margin-top: 10px;">
														<div class="widget-posts__name" style="font-weight: 800">
															<a
																href="https://taphoammo.net/post/detail/khong-login-uoc-tai-khoan-telegram-khi-mua-tu-taphoammo_758630">Không
																Login Được Tài Khoản Telegram Khi Mua Từ TapHoaMMo</a>
														</div>
														<div class="widget-posts__date">

															<div class="stats">
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt xem: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-eye"></i>
																	1.8 K
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt thích: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-thumbs-up"></i>
																	2
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Bình luận: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-comments"></i>
																	0
																</span> -
																<a style="color: #21bf73; font-size: 15px;"
																	href="https://taphoammo.net/thong-tin/lvdshop"
																	target="_blank">lvdshop</a>
															</div>
														</div>
													</div>
												</div>

												<div class="widget-posts__item" style="display: block;">
													<hr>
													<div class="widget-posts__image" style="width: 100%">
														<a
															href="https://taphoammo.net/post/detail/huong-dan-login-tai-khoan-twitter-x-va-nhung-luu-y_47509">
															<img style="width: 100%"
																src="./view/assets/images/huong-dan-login-tai-khoan-twitter-x-va-nhung-luu-y_47509.png"
																alt="Hướng dẫn login tài khoản Twitter  - X và những lưu ý !!!">
														</a>
													</div>
													<div class="widget-posts__info" style="margin-top: 10px;">
														<div class="widget-posts__name" style="font-weight: 800">
															<a
																href="https://taphoammo.net/post/detail/huong-dan-login-tai-khoan-twitter-x-va-nhung-luu-y_47509">Hướng
																dẫn login tài khoản Twitter - X và những lưu ý !!!</a>
														</div>
														<div class="widget-posts__date">

															<div class="stats">
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt xem: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-eye"></i>
																	1.5 K
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt thích: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-thumbs-up"></i>
																	0
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Bình luận: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-comments"></i>
																	0
																</span> -
																<a style="color: #21bf73; font-size: 15px;"
																	href="https://taphoammo.net/thong-tin/dauxanh88"
																	target="_blank">dauxanh88</a>
															</div>
														</div>
													</div>
												</div>

												<div class="widget-posts__item" style="display: block;">
													<hr>
													<div class="widget-posts__image" style="width: 100%">
														<a
															href="https://taphoammo.net/post/detail/kinh-nghiem-tiktok-beta-global_693559">
															<img style="width: 100%"
																src="./view/assets/images/kinh-nghiem-tiktok-beta-global_693559.png"
																alt="Kinh nghiệm Tiktok Beta Global">
														</a>
													</div>
													<div class="widget-posts__info" style="margin-top: 10px;">
														<div class="widget-posts__name" style="font-weight: 800">
															<a
																href="https://taphoammo.net/post/detail/kinh-nghiem-tiktok-beta-global_693559">Kinh
																nghiệm Tiktok Beta Global</a>
														</div>
														<div class="widget-posts__date">

															<div class="stats">
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt xem: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-eye"></i>
																	4.5 K
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt thích: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-thumbs-up"></i>
																	3
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Bình luận: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-comments"></i>
																	3
																</span> -
																<a style="color: #21bf73; font-size: 15px;"
																	href="https://taphoammo.net/thong-tin/gianhangmmo"
																	target="_blank">gianhangmmo</a>
															</div>
														</div>
													</div>
												</div>

												<div class="widget-posts__item" style="display: block;">
													<hr>
													<div class="widget-posts__image" style="width: 100%">
														<a
															href="https://taphoammo.net/post/detail/nhung-luu-y-nho-nho-cho-anh-em-lam-tiktok-beta-chat-loc-uoc-sau-khoang-thoi-gian-tu-may-mo_718490">
															<img style="width: 100%"
																src="./view/assets/images/nhung-luu-y-nho-nho-cho-anh-em-lam-tiktok-beta-chat-loc-uoc-sau-khoang-thoi-gian-tu-may-mo_718490.png"
																alt="Những lưu ý nho nhỏ cho anh em làm TIKTOK BETA - chắt lọc được sau khoảng thời gian tự mày mò">
														</a>
													</div>
													<div class="widget-posts__info" style="margin-top: 10px;">
														<div class="widget-posts__name" style="font-weight: 800">
															<a
																href="https://taphoammo.net/post/detail/nhung-luu-y-nho-nho-cho-anh-em-lam-tiktok-beta-chat-loc-uoc-sau-khoang-thoi-gian-tu-may-mo_718490">Những
																lưu ý nho nhỏ cho anh em làm TIKTOK BETA - chắt lọc được
																sau khoảng thời gian tự mày mò</a>
														</div>
														<div class="widget-posts__date">

															<div class="stats">
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt xem: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-eye"></i>
																	2.9 K
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Lượt thích: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-thumbs-up"></i>
																	2
																</span>
																<span class="stats-item text-muted" data-tippy=""
																	data-original-title="Bình luận: ">
																	<i aria-hidden="true"
																		class="stats-item__icon fa fa-comments"></i>
																	2
																</span> -
																<a style="color: #21bf73; font-size: 15px;"
																	href="https://taphoammo.net/thong-tin/mmoteam1"
																	target="_blank">mmoteam1</a>
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
										<h1 style="font-size: 28px;" class="subheading text">Gian hàng tài khoản </h1>
										<div class="view-options__legend">Tổng 3112 gian hàng</div>
									</div>

									<div class="product-tabs__list-container">
										<a id="sortPoint" onclick="doSearchBoLoc(&#39;sortPoint&#39;);"
											style="margin-left: inherit;"
											class="product-tabs__item product-tabs__item--active">Phổ biến</a>
										<a id="sortPriceLow" onclick="doSearchBoLoc(&#39;sortPriceLow&#39;);"
											class="product-tabs__item">Giá tăng dần</a>
										<a id="sortPriceHeight" onclick="doSearchBoLoc(&#39;sortPriceHeight&#39;);"
											class="product-tabs__item">Giá giảm dần</a>
									</div>
								</div>

								<div style="padding-right: 15px;" class="products-view__list products-list"
									data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
									<div class="products-view__list products-list" data-layout="list"
										data-with-features="false" data-mobile-grid-columns="2">
										<div class="products-list__body">
											<div class="products-list__item">
												<div class="product-card product-card--hidden-actions">
													<div style="padding:15px;">
														<span class="text-success"><i>Đối với gian hàng không trùng,
																chúng tôi
																cam kết sản phẩm được bán ra 1 lần duy nhất trên hệ
																thống, tránh
																trường hợp sản phẩm đó được bán nhiều lần.
															</i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="products-view__list products-list" data-layout="list"
									data-with-features="false" data-mobile-grid-columns="2">
									<div class="products-list__body">
										<div class="row" style="width: 100%;">


											<!-- -----Kiosk start----- -->

											<div class="col-xl-12 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/acc-telegram-session-uoc-reg-phone-that_549842"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/acc-telegram-session-uoc-reg-phone-that_549842.png"
																	alt="TELEGRAM TDATA KÈM SS-TRÂU BÒ (ĐỦ AVATAR|USERNAME)">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">0</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">10.990 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/acc-telegram-session-uoc-reg-phone-that_549842"><span
																			class="badge badge-success">Sản phẩm</span>
																		TELEGRAM TDATA KÈM SS-TRÂU BÒ (ĐỦ
																		AVATAR|USERNAME)</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.5591397849462405"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>1674 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>985855</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/telesoft">telesoft</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=b7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Telegram</a>
															</div>
															<ul class="product-card__features-list">
																<li>Acc có 2fa đầy đủ Avatar, username và được reg =
																	phone thật. Tặng tools tổng hợp list sđt khi mua. Có
																	giá tốt khi mua số lượng lớn</li>
																<li>Kinh doanh: Telegram TDATA kèm Session new</li>
																<div style="display: inline;">
																	<i class="fa fa-star"
																		style="color:#e3cd39;font-size: 15px; "></i>
																	<span style="font-size: 13px; "
																		class="badge badge-warning">Tài trợ</span>
																</div>


															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/tai-khoan-telegram-tdata-session-a-qua-su-dung_832654"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/tai-khoan-telegram-tdata-session-a-qua-su-dung_832654700.png"
																	alt="Telegram | TDATA+SESSION Trâu Bò (Reg Phone Thật)">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">496</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">4.800 đ - 22.990 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/tai-khoan-telegram-tdata-session-a-qua-su-dung_832654"><span
																			class="badge badge-success">Sản phẩm</span>
																		Telegram | TDATA+SESSION Trâu Bò (Reg Phone
																		Thật)</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.740938166311297"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>938 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>218158</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/avalo02">avalo02</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=b7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Telegram</a>
															</div>
															<ul class="product-card__features-list">
																<li>VOUCHER: SALE_TELE123 | CHÚ Ý ĐỌC KỸ MÔ TẢ TRƯỚC KHI
																	MUA HÀNG | TẤT CẢ TÀI KHOẢN ĐƯỢC ĐĂNG KÝ TRÊN PHONE
																	THẬT</li>
																<li>Kinh doanh: Telegram | TDATA Kèm SESSION NEW |
																	Telegram | TDATA Kèm SESSION Ngâm &gt; 3 Tháng | AE
																	cần cứ đặt trước. Bên mình đang up hàng liên tục^^
																</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/telegram-ngam-lau-3-6-thang-chi-file-session_71449"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/telegram-ngam-lau-3-6-thang-chi-file-session_7144937.png"
																	alt="Telegram TDATA+SESSION, Reg Phone Thật, FULL INFO">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">2046</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">9.480 đ - 26.860 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/telegram-ngam-lau-3-6-thang-chi-file-session_71449"><span
																			class="badge badge-success">Sản phẩm</span>
																		Telegram TDATA+SESSION, Reg Phone Thật, FULL
																		INFO</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.637283236994214"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>692 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>395548</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/hieule9898">hieule9898</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=b7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Telegram</a>
															</div>
															<ul class="product-card__features-list">
																<li>Telegram reg mới hoặc đã qua sử dụng ngâm từ 6 tháng
																	trở lên. Reg bằng phone thật, có tdata và session.
																	Bảo hành: VUI LÒNG ĐỌC KỸ MÔ TẢ.</li>
																<li>Kinh doanh: Telegram NEW chỉ có TDATA(Portable) |
																	Telegram NEW TDATA+SESSION tuổi 2 -&gt; 24 tháng
																	(ĐỌC KỸ MÔ TẢ)</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/acc-tele-gia-re-bao-trau-cho-anh-em_228852"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/acc-tele-gia-re-bao-trau-cho-anh-em_228852513.png"
																	alt="TELE NEW 100% TDATA+SS | REG PHONE UPDATE MỚI NHẤT">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">373</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">9.999 đ - 123.456.789 đ
															</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/acc-tele-gia-re-bao-trau-cho-anh-em_228852"><span
																			class="badge badge-success">Sản phẩm</span>
																		TELE NEW 100% TDATA+SS | REG PHONE UPDATE MỚI
																		NHẤT</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.405017921146956"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>279 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>74915</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/tongkhotele">tongkhotele</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=b7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Telegram</a>
															</div>
															<ul class="product-card__features-list">
																<li>MÃ GIẢM 5% | TELEGRAM NGÂM &gt;72H | VUI LÒNG ĐỌC KĨ
																	HƯỚNG DẪN SỬ DỤNG VÀ CHÍNH SÁCH BẢO HÀNH CỦA SHOP
																</li>
																<li>Kinh doanh: TDATA + SS NEW | CHỈ CÓ TDATA ( HÀNG ĐẶC
																	BIỆT-XEM CLIP HƯỚNG DẪN ) | CHỈ CÓ SS ( DÀNH CHO
																	KHÁCH CHẠY TOOL ) LƯU Ý KHI SỬ DỤNG | TELEGRAM VIP -
																	HÀNG LÊN LIÊN TỤC, ANH EM CỨ ĐẶT HÀNG NHÉ</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/tele-ngoai-new-100-tdata-ss-reg-phone-update-moi-nhat_308062"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/tele-ngoai-new-100-tdata-ss-reg-phone-update-moi-nhat_308062.png"
																	alt="TELE NGOẠI NEW 100% TDATA+SS | REG PHONE UPDATE MỚI NHẤT">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">97</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">5.555 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/tele-ngoai-new-100-tdata-ss-reg-phone-update-moi-nhat_308062"><span
																			class="badge badge-success">Sản phẩm</span>
																		TELE NGOẠI NEW 100% TDATA+SS | REG PHONE UPDATE
																		MỚI NHẤT</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.838461538461538"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>130 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>12731</span>
																	<span>| Khiếu nại:</span>
																	<span>0.1%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/dailytele">dailytele</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=b7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Telegram</a>
															</div>
															<ul class="product-card__features-list">
																<li>TELE NGOẠI NEW 100% TDATA+SS | REG PHONE UPDATE MỚI
																	NHẤT QUÝ KHÁCH VUI LÒNG ĐỌC KỸ MÔ TẢ TRƯỚC KHI MUA
																	HÀNG</li>
																<li>Kinh doanh: TDATA|SESSION NAM PHI +27 NEW</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/tk-facebook-viet-chat-luong-chuyen-spam-nhom-nhan-tin-hang-chon-loc-nhieu-ban-be-nam-tao-2k9-2022_72689"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/tk-facebook-viet-chat-luong-chuyen-spam-nhom-nhan-tin-hang-chon-loc-nhieu-ban-be-nam-tao-2k9-2022_72689461.png"
																	alt="Facebook Việt chất lượng, chuyên spam nhóm, nhắn tin. Hàng chọn lọc nhiều bạn bè">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">21</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">14.890 đ - 99.000 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/tk-facebook-viet-chat-luong-chuyen-spam-nhom-nhan-tin-hang-chon-loc-nhieu-ban-be-nam-tao-2k9-2022_72689"><span
																			class="badge badge-success">Sản phẩm</span>
																		Facebook Việt chất lượng, chuyên spam nhóm, nhắn
																		tin. Hàng chọn lọc nhiều bạn bè</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.519531250000003"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>256 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>70142</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/tuyenpv283">tuyenpv283</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=46e67305-ed25-4edf-938c-cf0924a3b089">Tài
																	khoản FB</a>
															</div>
															<ul class="product-card__features-list">
																<li>Facebook chuyên dùng để spam link, nhắn tin. Hàng
																	tuyển chọn năm tạo từ 2016 - 2023</li>
																<li>Kinh doanh: Acc Việt 100-300bạn,full info,bài
																	đăng+có hotmail | Acc Việt VIP 500-1k bạn+full
																	info+bài đăng+hotmail | Acc Khủng 1000-5K bạn, full
																	thông tin, có bài đăng | Acc Việt 2022 gần 1k bạn,
																	hotmail+2FA, có bài | Acc Việt Ngon 300-500bạn, full
																	info,bài đăng,có mail</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/tai-khoan-tiktok-ngon-a-bat-live-1000-3000-follow-co-hotmail-khong-vi-pham-chuyen-dung-lam-shop_72689"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/tai-khoan-tiktok-ngon-a-bat-live-1000-3000-follow-co-hotmail-khong-vi-pham-chuyen-dung-lam-shop_72689778.png"
																	alt="Tài khoản tiktok ngon đã bật Live 1000-3000 follow có hotmail, Không vi phạm, Chuyên dùng làm shop">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">197</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">30.000 đ - 139.000 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/tai-khoan-tiktok-ngon-a-bat-live-1000-3000-follow-co-hotmail-khong-vi-pham-chuyen-dung-lam-shop_72689"><span
																			class="badge badge-success">Sản phẩm</span>
																		Tài khoản tiktok ngon đã bật Live 1000-3000
																		follow có hotmail, Không vi phạm, Chuyên dùng
																		làm shop</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.539176626826028"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>753 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>60776</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/tuyenpv283">tuyenpv283</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=59ee6915-9e6d-4a8c-96d8-c9fb076e1919">Tài
																	khoản TikTok</a>
															</div>
															<ul class="product-card__features-list">
																<li>TÀI KHOẢN TIKTOK CỔ CHẤT LƯỢNG - ĐỦ ĐIỀU KIỆN: Mở
																	Giỏ Hàng - Live Stream - Quảng bá - Affiliate
																	Marketing - Live Stream Game</li>
																<li>Kinh doanh: 1000+ FL Cổ Mở Shop+Live (0 Video-No
																	studio) | 1100-1K5 Follow Đã Bật Live Studio (ko bao
																	mở shop) | 2100+ FL Cổ có trên 20 video Shop + Live
																	Studio + Nhiều Tim | 1000+ FL 2018-2021 Có Video
																	Shop+ Live Studio+ Link | 2000+ FL Cổ Mở Shop+Live
																	(Đã Bật Live Studio - Chưa Video)</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/tai-khoan-telegram-reg-phone-that-khoe-tdata-session_499336"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/tai-khoan-telegram-reg-phone-that-khoe-tdata-session_499336857.png"
																	alt="Tài khoản Telegram - Reg Phone Thật - Khỏe | TDATA+SESSION">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">1</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">9.999 đ - 10.000.000 đ
															</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/tai-khoan-telegram-reg-phone-that-khoe-tdata-session_499336"><span
																			class="badge badge-success">Sản phẩm</span>
																		Tài khoản Telegram - Reg Phone Thật - Khỏe |
																		TDATA+SESSION</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.591304347826091"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>115 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>11793</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/cuong11bka">cuong11bka</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=b7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Telegram</a>
															</div>
															<ul class="product-card__features-list">
																<li>Telegram TDATA/SESSION Reg phone thật chuyên spam,
																	add mem (đọc kĩ mỗ tả trước khi sử dụng)</li>
																<li>Kinh doanh: Telegram TDATA+SS New (Có thể login
																	Phone, Giả lập) | Tài khoản Telegram 1 đến 3 tháng |
																	TDATA+SESSION hàng sịn | Tài khoản Telegram 3 tháng
																	| TDATA+SESSION trâu bò</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/twitter-new-tren-7-ngay-co-avatar-name-username-us-ep-very-hotmail-cuc-trust_990008"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/twitter-new-tren-7-ngay-co-avatar-name-username-us-ep-very-hotmail-cuc-trust_990008799.png"
																	alt="Twitter trên 15 ngày Full Avatar Name US cực trust">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">3824</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">1.111 đ - 22.000 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/twitter-new-tren-7-ngay-co-avatar-name-username-us-ep-very-hotmail-cuc-trust_990008"><span
																			class="badge badge-success">Sản phẩm</span>
																		Twitter trên 15 ngày Full Avatar Name US cực
																		trust</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.743816254416957"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>566 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>1758992</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/ronan_v8t5wa">ronan_v8t5wa</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=a7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Twitter</a>
															</div>
															<ul class="product-card__features-list">
																<li>Chúng tôi cam kết tài khoản siêu chất lượng tỉ lệ
																	ckeckpoint SDT dưới 1% ( lỗi 1 đổi 1 ) chất lượng uy
																	tín nhất thị trường !!! Khuyến mãi 10% </li>
																<li>Kinh doanh: Twitter Cổ Random nước -50&gt;500 Follow
																	- 2FA - 2008&gt;2018 | Twitter cổ Random Nước - Full
																	Avatar - 2FA - 2008&gt;2018 | Twitter Search Hiện
																	Bài Đăng 100% -2FA- đã đăng bài Ckeck | Twitter Tên
																	US - Avatar Random - 2FA - Mail Domain - NEW</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/tai-khoan-telegram-u-avatar-username_549842"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/tai-khoan-telegram-u-avatar-username_549842.png"
																	alt="TÀI KHOẢN TELEGRAM (ĐỦ AVATAR|USERNAME)">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">100</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">10.490 đ - 1.000.000.000 đ
															</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/tai-khoan-telegram-u-avatar-username_549842"><span
																			class="badge badge-success">Sản phẩm</span>
																		TÀI KHOẢN TELEGRAM (ĐỦ AVATAR|USERNAME)</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.598009950248756"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>1005 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>660045</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/telesoft">telesoft</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=b7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Telegram</a>
															</div>
															<ul class="product-card__features-list">
																<li>TÀI KHOẢN ĐẦY ĐỦ MẬT KHẨU (2FA), AVATAR, USERNAME.
																	ĐẢM BẢO ADD MEM/SPAM KHÔNG VI PHẠM. HỖ TRỢ GET OTP
																	ĐỂ ĐĂNG NHẬP</li>
																<li>Kinh doanh: TELEGRAM TDATA kèm SESSION | Đang lên
																	hàng</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>

															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/tai-khoan-telegram-viet-sieu-trau-dang-tdata-session"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/tai-khoan-telegram-viet-sieu-trau-dang-tdata-session.png"
																	alt="Telegram TDATA/Session Ngâm Trâu (Đủ Chức Năng)⭐⭐⭐">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">230</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">9.490 đ - 9.990 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/tai-khoan-telegram-viet-sieu-trau-dang-tdata-session"><span
																			class="badge badge-success">Sản phẩm</span>
																		Telegram TDATA/Session Ngâm Trâu (Đủ Chức
																		Năng)⭐⭐⭐</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.365217391304343"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>460 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>540570</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/yanbi2207">yanbi2207</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=b7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Telegram</a>
															</div>
															<ul class="product-card__features-list">
																<li>Telegram dạng TDATA/SESSION (Add Mem/Spam/Seeding)
																</li>
																<li>Kinh doanh: +84 Telegram New Spam/Tương Tác ( Chỉ
																	Dùng Tdata ) | +84 Telegram Ngâm 4 - 7 ngày | +855 (
																	Tdata + Session )</li>



															</ul>

														</div>



													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/twitter-co-twitter-search-top-hien-bai-ang-a-bat-2fa_630007"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/twitter-co-twitter-search-top-hien-bai-ang-a-bat-2fa_630007.png"
																	alt="Twitter Cổ - Very Phone - Có ADS - Đã bật 2FA">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">524</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">9.999 đ - 40.000 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/twitter-co-twitter-search-top-hien-bai-ang-a-bat-2fa_630007"><span
																			class="badge badge-success">Sản phẩm</span>
																		Twitter Cổ - Very Phone - Có ADS - Đã bật
																		2FA</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.820105820105818"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>189 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>160346</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/cosentino88">cosentino88</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=a7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Twitter</a>
															</div>
															<ul class="product-card__features-list">
																<li>Tài khoản Twitter Cổ, Twitter Search TOP Hiện Bài
																	Đăng, Có ADS, Đã Add Phone, Đã bật 2FA, Random
																	Avatar, Bảo Hành Login 1 Đổi 1 Trong 3 Ngày.</li>
																<li>Kinh doanh: Twitter Cổ 10K chất lượng - Có ADS - 2FA
																	| Twitter Cổ - Ver Phone - Có ADS - 2FA - Chỉ việc
																	lên tick | Twitter Cổ (100-500 Followers) - Có Phone
																	- 2FA | Twitter Cổ United Kingdom (UK) - Ver Phone -
																	Có ADS - 2FA | Twitter Cổ United States (US) - Ver
																	Phone - Có ADS - 2FA</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/twitter-sieu-co-cac-loai-search-top-saudi-arabia-us-uk-sieu-co-2007-2008-full-real_652726"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/twitter-sieu-co-cac-loai-search-top-saudi-arabia-us-uk-sieu-co-2007-2008-full-real_652726356.png"
																	alt="Twitter Siêu Cổ các loại  Search Top - Saudi Arabia - US UK - Siêu Cổ 2007 2008 Full REAL">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">7546</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">12.000 đ - 40.000 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/twitter-sieu-co-cac-loai-search-top-saudi-arabia-us-uk-sieu-co-2007-2008-full-real_652726"><span
																			class="badge badge-success">Sản phẩm</span>
																		Twitter Siêu Cổ các loại Search Top - Saudi
																		Arabia - US UK - Siêu Cổ 2007 2008 Full REAL</a>
																</h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.8500000000000005"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>80 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>127163</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/TrumTaiNguyen">TrumTaiNguyen</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=a7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Twitter</a>
															</div>
															<ul class="product-card__features-list">
																<li>Chuyên cung cấp tài khoản siêu cổ - cổ các loại - UY
																	TÍN TRÁCH NHIỆM CHẤT LƯỢNG </li>
																<li>Kinh doanh: Twitter Cổ ver Phone - có ADS - Chỉ việc
																	lên tick -2FA | Twitter UK ver Phone - có ADS - Chỉ
																	việc lên tick -2FA | Twitter cổ Random Nước - Full
																	Avatar - 2FA - 2008&gt;2018 | Twitter US ver Phone -
																	có ADS - Chỉ việc lên tick -2FA | Twitter cổ Brazil
																	- Full Avatar - 2FA - 2008&gt;2018</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>

															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/canva-pro-uy-tin-chat-luong-1nam-3-nam-vinh-vien_453619"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/canva-pro-uy-tin-chat-luong-1nam-3-nam-vinh-vien_453619.png"
																	alt="Canva pro Uy tín chất lượng (1năm,3 Năm, Vĩnh viễn )">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">90</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">49.000 đ - 99.000 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/canva-pro-uy-tin-chat-luong-1nam-3-nam-vinh-vien_453619"><span
																			class="badge badge-success">Sản phẩm</span>
																		Canva pro Uy tín chất lượng (1năm,3 Năm, Vĩnh
																		viễn )</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="0.0"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-empty</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-empty</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-empty</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-empty</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-empty</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>0 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>0</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/Manhkvph51735">Manhkvph51735</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=h7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Khác</a>
															</div>
															<ul class="product-card__features-list">
																<li>Sản phẩm TÀI KHOẢN CANVA PRO VĨNH VIỄN, 1 NĂM GIÁ
																	CỰC RẺ</li>
																<li>Kinh doanh: Canva Pro Full Tính Năng 1 năm Bảo Hành
																	thời gian sử dụng | Canva Pro Full tính Năng 3 năm
																	Bảo Hành thời gian sử | Canva Pro Vĩnh Viễn Full
																	Tính Năng Bảo Hành trọn đời</li>

																<div style="display: inline;">
																	<span style="font-size: 13px;"
																		class="badge badge-primary">GH mới</span>
																</div>

															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/tai-khoan-tiktok-1k-fl-nuoi-tren-6-thang-cuc-trau_521999"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/tai-khoan-tiktok-1k-fl-nuoi-tren-6-thang-cuc-trau_521999687.png"
																	alt="TK TIKTOK HÀNG ĐÃ ĐƯỢC NUÔI DỄ CẮN VIEW XU HƯỚNG">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">228</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">25.000 đ - 250.000 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/tai-khoan-tiktok-1k-fl-nuoi-tren-6-thang-cuc-trau_521999"><span
																			class="badge badge-success">Sản phẩm</span>
																		TK TIKTOK HÀNG ĐÃ ĐƯỢC NUÔI DỄ CẮN VIEW XU
																		HƯỚNG</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.784722222222221"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>432 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>23669</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/armando_tzlx5k">armando_tzlx5k</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=59ee6915-9e6d-4a8c-96d8-c9fb076e1919">Tài
																	khoản TikTok</a>
															</div>
															<ul class="product-card__features-list">
																<li>TK TẠO TRÊN 1 NĂM SIÊU CỨNG,LƯỚT VIDEO-THẢ TIM-XEM
																	LIVE-CMT HẰNG NGÀY,CÓ ĐỘ TRUST NHẤT ĐỊNH,MỞ
																	"LIVE-TIKTOKSHOP-QUẢNG BÁ-GIẢM GIÁ KHI MUA SLL</li>
																<li>Kinh doanh: 1000 FL ĐÃ NUÔI MỞ ĐƯỢC SHOP+STUDIO |
																	1000 FL Đủ điều kiện mở TikTokShop + Live | 2000 FL
																	đã nuôi mở Shop-Studio $1000/$1000 | 3000 FL đã nuôi
																	mở Shop-Studio $1000/$1000 | 5000 FL ĐÃ NUÔI MỞ ĐƯỢC
																	SHOP+STUDIO</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>

															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/via-nguoi-dung-that-sieu-chat-1000-5000-ban-be_264092"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/via-nguoi-dung-that-sieu-chat-1000-5000-ban-be_264092.png"
																	alt="Nick fb  thật siêu chất 1000-5000 bạn bè cp mail">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">1452</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">49.999 đ - 129.999 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/via-nguoi-dung-that-sieu-chat-1000-5000-ban-be_264092"><span
																			class="badge badge-success">Sản phẩm</span>
																		Nick fb thật siêu chất 1000-5000 bạn bè cp
																		mail</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.158878504672899"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>107 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>34667</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/clonegiare">clonegiare</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=46e67305-ed25-4edf-938c-cf0924a3b089">Tài
																	khoản FB</a>
															</div>
															<ul class="product-card__features-list">
																<li>Nick fb thật siêu chất Siêu Trâu CP 956 Mở Bằng Mail
																	1000-5000 bạn bè Định dạng ID|PASS|2FA|MAIL|PASSMAIL
																</li>
																<li>Kinh doanh: FB Thật 200-500 bạn bè | Nick FB Thật
																	Siêu Trâu 50-500 bạn bè | FB Nam Thật 2000-5000 bạn
																	bè trên 18t | FB Nam 1000-3000 bạn trên 18t | Nick
																	FB Nữ 2000-5000 bạn bè trên 18t </li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/telegram-new-reg-phone-dang-tdata-kem-file-session"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/telegram-new-reg-phone-dang-tdata-kem-file-session70.png"
																	alt="Telegram Định Dạng Tdata/Session Ngâm Trên 3 Ngày">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">836</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">6.000 đ - 40.000 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/telegram-new-reg-phone-dang-tdata-kem-file-session"><span
																			class="badge badge-success">Sản phẩm</span>
																		Telegram Định Dạng Tdata/Session Ngâm Trên 3
																		Ngày</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.861163227016884"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>533 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>156054</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/mailonggit">mailonggit</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=b7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Telegram</a>
															</div>
															<ul class="product-card__features-list">
																<li>Account Telegram Được Đăng Ký Bằng Phone Thật Ngâm
																	Trên 3 Ngày Trước Khi Bán. Nhập Voucher Tại Mô Tả Để
																	Được Hưởng Ưu Đãi Hấp Dẫn</li>
																<li>Kinh doanh: TELEGRAM CÓ SESSION + TDATA | TELEGRAM
																	CHỈ CÓ TDATA | TELEGRAM CHỈ CÓ TDATA TRÊN 6 THÁNG |
																	TELEGRAM CÓ SESSION + TDATA TRÊN 1 NĂM | NHẬP
																	VOUCHER VIP_500K ĐỂ ĐƯỢC GIẢM 5% ĐƠN 500k</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>

															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/tk-tiktok-live-studio-1k-10k-fl-tren-6-thang_860462"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/tk-tiktok-live-studio-1k-10k-fl-tren-6-thang_860462186.png"
																	alt="TÀI KHOẢN TIKTOK CỔ TRÊN 100 TUẦN TUỔI CỰC TRÂU">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">176</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">25.000 đ - 500.000 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/tk-tiktok-live-studio-1k-10k-fl-tren-6-thang_860462"><span
																			class="badge badge-success">Sản phẩm</span>
																		TÀI KHOẢN TIKTOK CỔ TRÊN 100 TUẦN TUỔI CỰC
																		TRÂU</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.833333333333333"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>36 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>3354</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/oscar_01jk65">oscar_01jk65</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=59ee6915-9e6d-4a8c-96d8-c9fb076e1919">Tài
																	khoản TikTok</a>
															</div>
															<ul class="product-card__features-list">
																<li>TÀI KHOẢN TIKTOK CỔ NICK TỰ NHIÊN ĐÃ TỪNG QUA SỬ
																	DỤNG NÊN RẤT TRÂU CÓ ĐỘ TRUST NHẤT ĐỊNH</li>
																<li>Kinh doanh: 5903 Follower 180.8K Thích 2021 (đã mở
																	Shop) | 1000 FL TRÊN 6 THÁNG MỞ ĐƯỢC TIKTOKSHOP |
																	1000 FL TRÊN 6 THÁNG ĐÃ NHẬN QUYỀN STUDIO | 1000 FL
																	LIVE STUDIO CỔ 2022 | 10K FL Nhiều Video, Tim View
																</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/acc-fb-viet-nam-tao-2010-2022-ban-be-4000-5000bb-acc-tuyen-chon-loc_866913"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/acc-fb-viet-nam-tao-2010-2022-ban-be-4000-5000bb-acc-tuyen-chon-loc_866913460.png"
																	alt="Acc FB Việt - Năm tạo: 2010-2022 - Bạn Bè: 4000 - 5000bb Acc tuyển chọn lọc">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">425</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">37.999 đ - 109.999 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/acc-fb-viet-nam-tao-2010-2022-ban-be-4000-5000bb-acc-tuyen-chon-loc_866913"><span
																			class="badge badge-success">Sản phẩm</span>
																		Acc FB Việt - Năm tạo: 2010-2022 - Bạn Bè: 4000
																		- 5000bb Acc tuyển chọn lọc</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="3.536231884057971"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-empty</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>276 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>115682</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/sale02">sale02</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=46e67305-ed25-4edf-938c-cf0924a3b089">Tài
																	khoản FB</a>
															</div>
															<ul class="product-card__features-list">
																<li>Acc FB Việt - Năm tạo: 2010-2022 - Bạn Bè: 4000 -
																	5000bb Acc tuyển chọn lọc nhiều bạn bè và tương tác
																	cao - Thích hợp về làm acc phụ, bán hàng, seedin
																</li>
																<li>Kinh doanh: Acc FB Việt,Năm:2015-2024 BB: 1000-5000
																	cp ra mail | FB VN 2008-2023, GT Nữ cổ, ,trên 20t.
																	BB 3k-5k | FB Việt Cổ 1000-5000 Bạn, nữ cổ, trên 22
																	t ,randoom BÀI ĐĂNG | FB Việt Nam , thật, Nam, tren
																	1000 bạn, 18 tuổi trỏ lên | Acc FB Việt ,tạo:
																	2010-2023, - Bạn Bè:3000-5000bb </li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/clone-facebook-us_258455"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/clone-facebook-us_258455.png"
																	alt="Clone Facebook US spam cực trâu không dính ip việt">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">116</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">16.000 đ - 29.000 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/clone-facebook-us_258455"><span
																			class="badge badge-success">Sản phẩm</span>
																		Clone Facebook US spam cực trâu không dính ip
																		việt</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="0.0"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-empty</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-empty</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-empty</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-empty</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-empty</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-6.983 3.671 1.334-7.776-5.65-5.507 7.808-1.134 3.492-7.075 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>0 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>0</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/clonene">clonene</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=46e67305-ed25-4edf-938c-cf0924a3b089">Tài
																	khoản FB</a>
															</div>
															<ul class="product-card__features-list">
																<li>clone chuyển spam </li>
																<li>Kinh doanh: CLONE US - REG IOS - AVT_k có mật khẩu
																	mail có sll | CLONE US MỸ CÓ 2FA K CÓ MK MAIL ĐẶT CÓ
																	SLL | CLONE US LIMIT 50$ - ĐÃ KHÁNG 282</li>

																<div style="display: inline;">
																	<span style="font-size: 13px;"
																		class="badge badge-primary">GH mới</span>
																</div>

															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/twitter-new-us-co-avatar_630007"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/twitter-new-us-co-avatar_630007.png"
																	alt="Twitter Name US - Twitter có 2FA - Trên 30 Ngày">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">7166</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">999 đ - 130.000 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/twitter-new-us-co-avatar_630007"><span
																			class="badge badge-success">Sản phẩm</span>
																		Twitter Name US - Twitter có 2FA - Trên 30
																		Ngày</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.809352517985615"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>278 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>773319</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/cosentino88">cosentino88</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=a7708c42-788c-49f4-afab-2ba1a038df3r">Tài
																	Khoản Twitter</a>
															</div>
															<ul class="product-card__features-list">
																<li>Tài khoản Twitter tên đẹp US, Twitter trắng, Twitter
																	có 2FA, Full avatar Verify Hotmail , bảo hành Login
																	1 đổi 1 trong 3 ngày.</li>
																<li>Kinh doanh: Loại 1: NEW - Hotmail (Ưu tiên IP VN) |
																	Loại 2 : New - Hotmail - 2FA (All IP) | Loại 2 :
																	Twitter Cổ 500 - 1000 fl - Đã Add Phone - 2FA |
																	Twitter Search hiện TOP - Có tương tác - 2FA</li>



															</ul>

														</div>






													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/clone-chuyen-spam-a-qua-282-sieu-trau-20-50bb"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/clone-very-phone-tao-1-30-ngay-co-mail-pass-mail.png"
																	alt="Clone chuyên spam siêu trâu 100-1000 bạn bè ">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">1060</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">10.000 đ - 13.456 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/clone-chuyen-spam-a-qua-282-sieu-trau-20-50bb"><span
																			class="badge badge-success">Sản phẩm</span>
																		Clone chuyên spam siêu trâu 100-1000 bạn bè </a>
																</h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.5361216730038025"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>263 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>188985</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/clonegiare">clonegiare</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=46e67305-ed25-4edf-938c-cf0924a3b089">Tài
																	khoản FB</a>
															</div>
															<ul class="product-card__features-list">
																<li>Clone chuyên spam 100-1000 bạn bè tạo 1-9 tháng Định
																	dạng: UID|Pass|2FA|Mail|PassMail|</li>
																<li>Kinh doanh: Clone spam 100-500 bạn cp mail ( mail
																	generator ) | Clone chuyên spam 100-500 bạn (mail
																	generator live 6 tháng) | Via ngoại new chuyên spam
																	mới đổi tên việt 10-500bb</li>



															</ul>

														</div>



													</div>
												</div>
											</div>
											<!-- -----Kiosk stop----- -->


											<!-- -----Kiosk start----- -->

											<div class="col-xl-6 col-lg-12 col-md-12" style="padding-right: 0px;">
												<div class="products-list__item" style="height: 100%;">
													<div class="product-card product-card--hidden-actions"
														style="height: 96%;">
														<!--<div class="product-card__badges-list">
												<div class="product-card__badge product-card__badge--new">New</div>
											</div>-->
														<div style="padding:5px; "
															class="product-card__image product-image">
															<div
																style="position: absolute;left:1px; top:3px;z-index: 1;">
																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">Không trùng</div>

															</div>
															<div
																style="position: absolute;left:1px; top:25px;z-index: 1;">

																<div class="product-card__badge product-card__badge--new"
																	style="background-color: #67b740;">
																	<a data-toggle="tooltip" title=""
																		data-original-title="Đánh giá đơn hàng từ gian hàng này sẽ được hoàn 1 phần tiền.">
																		<i class="fa fa-star"
																			style="color:#e3cd39;font-size: 13px; "></i>
																	</a>

																</div>
															</div>
															<div>

															</div>
															<a style="padding-bottom: 80%;padding-top: 10px;"
																href="https://taphoammo.net/gian-hang/clone-tiktok-ngam-72h-kem-cookie_521999"
																class="product-image__body">
																<img class="product-image__img"
																	src="./view/assets/images/clone-tiktok-ngam-72h-kem-cookie_521999633.png"
																	alt="TIKTOK LIVE STUDIO CỔ NHIỀU VIDEO,TIM,VIEW TỰ NHÊN">
															</a>
															<div style="padding-top:15px;text-align:center;"
																class="product-card__availability">
																Tồn kho: <span class="text-success">167</span>
															</div>
															<div style="text-align: center; font-size: 15px; margin-top: 12px;"
																class="product-card__prices">30.000 đ - 150.000 đ</div>
														</div>
														<div class="product-card__info"
															style="position: relative; padding-left: 10px;padding-top: 10px;">
															<div class="product-card__name">
																<h2 style="font-size: 16px; font-weight:500;"><a
																		href="https://taphoammo.net/gian-hang/clone-tiktok-ngam-72h-kem-cookie_521999"><span
																			class="badge badge-success">Sản phẩm</span>
																		TIKTOK LIVE STUDIO CỔ NHIỀU VIDEO,TIM,VIEW TỰ
																		NHÊN</a></h2>
															</div>
															<div class="product-card__rating">
																<span class="rating" style="padding:2px;"
																	data-value="4.91089108910891"><svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-full</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z">
																		</path>
																	</svg>
																	<svg version="1.1"
																		xmlns="http://www.w3.org/2000/svg" width="14"
																		height="14" viewBox="0 0 32 32">
																		<title>star-half</title>
																		<path
																			d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798zM16 23.547l-0.029 0.015 0.029-17.837 3.492 7.075 7.807 1.134-5.65 5.507 1.334 7.776-6.983-3.671z">
																		</path>
																	</svg>
																</span>
																<div class="product-card__rating-legend">
																	<span>101 Reviews</span>
																	<span>| Đã bán:</span>
																	<span>20556</span>
																	<span>| Khiếu nại:</span>
																	<span>0.0%</span>

																</div>

															</div>
															<div class="product-card__name product-card__features-list">
																Người bán: <a style="color: #21bf73;"
																	href="https://taphoammo.net/thong-tin/armando_tzlx5k">armando_tzlx5k</a>
															</div>
															<div class="product-card__name product-card__features-list">
																Sản phẩm: <a style="color: #21bf73;"
																	href="https://taphoammo.net/danh-muc/tai-khoan?q=59ee6915-9e6d-4a8c-96d8-c9fb076e1919">Tài
																	khoản TikTok</a>
															</div>
															<ul class="product-card__features-list">
																<li>TIKTOK 1K-10K FL TẠO TỪ 2018-2022 CỰC TRÂU,MỞ "
																	TIKTOK SHOP " LIVESTUDIO - QUẢNG BÁ - ĐÃ CÓ NHIỀU
																	VIDEO,VIEW,TIM TỰ NHIÊN</li>
																<li>Kinh doanh: 1000 FL Mở Live Studio + TikTok Shop |
																	3000 FL Nick Cổ Nhiều Video,View,Tim | 2000 FL Nick
																	Cổ Nhiều Video,View,Tim | 1000 FL Cổ 2018-2021 mở
																	live studio | 1000 FL Nick Cổ 2022 mở live studio
																</li>



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
											<ul class="pagination">
												<li class="page-item disabled">
													<a class="page-link"
														href="https://taphoammo.net/danh-muc/tai-khoan?page=0"
														tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
												</li>

												<li class="page-item active">
													<a class="page-link"
														href="https://taphoammo.net/danh-muc/tai-khoan?page=1">1</a>
												</li>


												<li class="page-item">
													<a class="page-link"
														href="https://taphoammo.net/danh-muc/tai-khoan?page=2">2</a>
												</li>


												<li class="page-item">
													<a class="page-link"
														href="https://taphoammo.net/danh-muc/tai-khoan?page=3">3</a>
												</li>


												<li class="page-item">
													<a class="page-link"
														href="https://taphoammo.net/danh-muc/tai-khoan?page=4">4</a>
												</li>


												<li class="page-item">
													<a class="page-link"
														href="https://taphoammo.net/danh-muc/tai-khoan?page=5">5</a>
												</li>


												<li class="page-item">
													<a class="page-link"
														href="https://taphoammo.net/danh-muc/tai-khoan?page=6">6</a>
												</li>


												<li class="page-item">
													<a class="page-link"
														href="https://taphoammo.net/danh-muc/tai-khoan?page=7">7</a>
												</li>



												<li class="page-item disabled">
													<a class="page-link"
														href="https://taphoammo.net/danh-muc/tai-khoan#">...</a>
												</li>

												<li class="page-item">
													<a class="page-link"
														href="https://taphoammo.net/danh-muc/tai-khoan?page=156">156</a>
												</li>


												<li class="page-item">
													<a class="page-link"
														href="https://taphoammo.net/danh-muc/tai-khoan?page=2"><i
															class="fas fa-angle-double-right"></i></a>
												</li>
											</ul>
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

						<div class="block block-features block-features--layout--boxed">
							<div class="block-features__list">
								<div id="description"
									style="font-size:13px; padding:5px; text-align: left; height: 45px;overflow: hidden;"
									class="block-features__item services">
									<div><b>Tài khoản phục vụ MMO (Kiếm tiền online) - Tạp Hóa MMO</b><br>
										Tài khoản là gì:<br>
										Tài khoản là một cách để một website hay ứng dụng định danh người dùng của họ,
										theo cách thông thường chúng ta sẽ đăng ký 1 tài khoản và sử dụng. Tuy nhiên đối
										với MMO, chúng ta thường cần rất nhiều tài khoản với mục tiêu là
										tăng tối đa lợi nhuận. Vẫn là tích tiểu thành đại, với một tài khoản có khi
										chúng ta chỉ kiếm được vài nghìn đồng, nhưng hàng nghìn tài khoản thì mọi chuyện
										sẽ khác, con số khác. Với sự bổ trợ của phần mềm, MMO hiện tại đã
										rất dễ dàng trong việc sử dụng tài khoản hàng loạt, các bạn có cách kiếm tiền từ
										1 tài khoản, thì đừng bỏ qua taphoammo nhé, nhân rộng lên hàng nghìn tài khoản
										như vậy, và sử dụng phần mềm, bạn sẽ cải thiện được doanh số của mình đấy.
										<br> Tạp hóa MMO - sàn thương mại điện tử, kinh doanh, mua bán tài khoản phục vụ
										MMO (Kiếm tiền online).
									</div>
									<div>
										<b>Xem thêm:</b><br>
										<span>

											<a
												href="https://taphoammo.net/danh-muc/tai-khoan?q=46e67305-ed25-4edf-938c-cf0924a3b089">Mua
												bán Tài khoản FB</a> |

											<a
												href="https://taphoammo.net/danh-muc/tai-khoan?q=8e0e7c78-c4ae-4997-b08a-b9b91c0e0b4c">Mua
												bán Tài Khoản BM</a> |

											<a
												href="https://taphoammo.net/danh-muc/tai-khoan?q=a7708c42-788c-49f4-afab-2ba1a038df3f">Mua
												bán Tài Khoản Zalo</a> |

											<a
												href="https://taphoammo.net/danh-muc/tai-khoan?q=a7708c42-788c-49f4-afab-2ba1a038df3r">Mua
												bán Tài Khoản Twitter</a> |

											<a
												href="https://taphoammo.net/danh-muc/tai-khoan?q=b7708c42-788c-49f4-afab-2ba1a038df3r">Mua
												bán Tài Khoản Telegram</a> |

											<a
												href="https://taphoammo.net/danh-muc/tai-khoan?q=f7708c42-788c-49f4-afab-2ba1a038df3r">Mua
												bán Tài Khoản Instagram</a> |

											<a
												href="https://taphoammo.net/danh-muc/tai-khoan?q=8c42h770-788c-49f4-afab-2b038df3ra1a">Mua
												bán Tài Khoản Shopee</a> |

											<a
												href="https://taphoammo.net/danh-muc/tai-khoan?q=cc938237-d4b0-4592-853f-fd27d2aea7c2">Mua
												bán Tài Khoản Discord</a> |

											<a
												href="https://taphoammo.net/danh-muc/tai-khoan?q=59ee6915-9e6d-4a8c-96d8-c9fb076e1919">Mua
												bán Tài khoản TikTok</a> |

											<a
												href="https://taphoammo.net/danh-muc/tai-khoan?q=617c653a-c8de-4908-b581-e72e445b68fd">Mua
												bán Key Diệt Virus</a> |

											<a
												href="https://taphoammo.net/danh-muc/tai-khoan?q=6d31b928-fdd8-43b6-a400-783a42897d13">Mua
												bán Key Window</a> |

											<a
												href="https://taphoammo.net/danh-muc/tai-khoan?q=h7708c42-788c-49f4-afab-2ba1a038df3r">Mua
												bán Tài Khoản Khác</a> |

										</span>
									</div>
								</div>
							</div>
							<center style="padding:0px; margin-top: -45px;"><a onclick="readMore()"><span
										id="readMoreBtn" style="background-color: #21bf73; cursor: pointer;"
										class="badge badge-info">Xem thêm</span></a></center>
						</div>
					</div>
				</div>

				<!-- ------------------------------------------- Reseller  ----------------------------------------------------- -->
				<div class="modal inmodal" id="resellerModal" tabindex="-1" role="dialog" aria-hidden="true"
					data-backdrop="static" data-keyboard="false">
					<form method="post" id="formReseller" action="https://taphoammo.net/create-reseller.html"><input
							type="hidden" name="_csrf" value="58e6a292-ed30-4aea-b7c8-d06c9086ea4c">
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
											<span class="text-success">Trở thành reseller của gian hàng này, bạn sẽ được
												hưởng % doanh thu từ chiết khấu trên mỗi đơn hàng bạn bán
												được.</span><br>
											<span class="text-danger">Lưu ý: Khách chỉ cần vào 1 lần bằng link ref, thì
												sẽ áp dụng với mọi đơn hàng về sau.</span>
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
												<textarea class="form-control" rows="3" maxlength="1000" name="intro"
													required="required"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
									<button type="button" onclick="doSubmitReseller()"
										class="btn btn-primary">Gửi</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<script>
				function checkSubCategory(actionId) {
					var actionCheckbox = document.getElementsByName(actionId)[0];
					actionCheckbox.checked = !actionCheckbox.checked;

				}
				function readMore() {
					if ($("#readMoreBtn").text() == "Xem thêm") {
						$("#description").height("auto");
						$("#readMoreBtn").text("Thu gọn");
					} else {
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
					let alias = "tai-khoan";
					$("input[id='filterType']:checked").each(function (index) {
						filterType += $(this).val() + ",";
					})
					$("input[id='subCategories']:checked").each(function (index) {
						subCategory += $(this).val() + ",";
					});
					if (!filterType) { filterType = ''; };

					if (sort == null || sort == 'undefined') {
						sort = 'sortPoint';
					}
					window.location.href = `${this.location.origin}/danh-muc/${alias}?q=${subCategory}&t=${filterType}&sort=${sort}`;
				}

				function doSearchUser(userId) {
					let filterType = "";
					let subCategory = "";
					let alias = "tai-khoan";
					$("input[id='filterType']:checked").each(function (index) {
						filterType += $(this).val() + ",";
					})
					$("input[id='subCategories']:checked").each(function (index) {
						subCategory += $(this).val() + ",";
					});
					if (!filterType) { filterType = ''; };
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
						data: { kioskId: kioskId },
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
		