<!DOCTYPE html>
<!-- saved from url=(0032)https://taphoammo.net/login.html -->
<html lang="en" dir="ltr" xmlns:with="http://www.thymeleaf.org/extras/with">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Required meta tags -->

	<meta name="_csrf" content="a9e690c8-55d6-4b77-8903-132bab5f304d">
	<!-- default header name is X-CSRF-TOKEN -->
	<meta name="_csrf_header" content="X-CSRF-TOKEN">
    

    <link href="./public/css/style.css" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="https://taphoammo.net/images/logo/logo.jpg">
	<link rel="icon" href="https://taphoammo.net/images/icon/favicon.ico" type="image/ico">
	<!-- fonts -->
	<link rel="stylesheet" href="./public/css/css">
	<!-- css -->
	<link rel="stylesheet" href="./public/css/bootstrap.min.css">
	<link rel="stylesheet" href="./public/css/owl.carousel.min.css">
	<link rel="stylesheet" href="./public/css/photoswipe.css">
	<link rel="stylesheet" href="./public/css/default-skin.css">
	<link rel="stylesheet" href="./public/css/select2.min.css">
	<link rel="stylesheet" href="./public/css/style.css">
	<!-- font - fontawesome -->
	<link rel="stylesheet" href="./public/css/all.min.css">
	<!-- font - stroyka -->
	<link rel="stylesheet" href="./public/css/stroyka.css">
	<link rel="stylesheet" href="./public/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="./public/css/sweetalert.css">
	<link rel="stylesheet" href="./public/css/toastr.min.css">
	<link rel="stylesheet" href="./public/css/default.min.css">
	<script src="./public/js/sceditor.min.js"></script>

	<link href="./public/css/datepicker.css" rel="stylesheet" type="text/css">
	<script src="./public/js/jquery-3.5.1.js"></script>
	<script src="./public/js/moment.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


	<!--	<script th:src='|https://www.google.com/recaptcha/api.js?render=${@captchaService.getReCaptchaSite()}'></script>-->

	<style>
		.container_fix {
			width: 100%;
			padding-right: 15px;
			padding-left: 20px;
			margin-right: auto;
			margin-left: auto;
		}

		@media (max-width: 768px) {
			.container_fix {
				padding-right: 0px;
				padding-left: 15px;
			}
		}

		.holder {
			z-index: 1000;
			position: absolute;
			left: 0px;
			top: 0px;
			bottom: 0px;
			right: 0px;
			width: 100%;
			height: 100%;
			background-color: transparent;
		}

		.preloader {
			/* size */
			width: 100px;
			height: 100px;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translateX(-50%) translateY(-50%);
			animation: rotatePreloader 2s infinite ease-in;
		}

		@keyframes rotatePreloader {
			0% {
				transform: translateX(-50%) translateY(-50%) rotateZ(0deg);
			}

			100% {
				transform: translateX(-50%) translateY(-50%) rotateZ(-360deg);
			}
		}

		.preloader div {
			position: absolute;
			width: 100%;
			height: 100%;
			opacity: 0;
		}

		.preloader div:before {
			content: "";
			position: absolute;
			left: 50%;
			top: 0%;
			width: 10%;
			height: 10%;
			background-color: #21be73;
			transform: translateX(-50%);
			border-radius: 50%;
		}

		.preloader div:nth-child(1) {
			transform: rotateZ(0deg);
			animation: rotateCircle1 2s infinite linear;
			z-index: 9;
		}

		@keyframes rotateCircle1 {
			0% {
				opacity: 0;
			}

			0% {
				opacity: 1;
				transform: rotateZ(36deg);
			}

			7% {
				transform: rotateZ(0deg);
			}

			57% {
				transform: rotateZ(0deg);
			}

			100% {
				transform: rotateZ(-324deg);
				opacity: 1;
			}
		}

		.preloader div:nth-child(2) {
			transform: rotateZ(36deg);
			animation: rotateCircle2 2s infinite linear;
			z-index: 8;
		}

		@keyframes rotateCircle2 {
			5% {
				opacity: 0;
			}

			5.0001% {
				opacity: 1;
				transform: rotateZ(0deg);
			}

			12% {
				transform: rotateZ(-36deg);
			}

			62% {
				transform: rotateZ(-36deg);
			}

			100% {
				transform: rotateZ(-324deg);
				opacity: 1;
			}
		}

		.preloader div:nth-child(3) {
			transform: rotateZ(72deg);
			animation: rotateCircle3 2s infinite linear;
			z-index: 7;
		}

		@keyframes rotateCircle3 {
			10% {
				opacity: 0;
			}

			10.0002% {
				opacity: 1;
				transform: rotateZ(-36deg);
			}

			17% {
				transform: rotateZ(-72deg);
			}

			67% {
				transform: rotateZ(-72deg);
			}

			100% {
				transform: rotateZ(-324deg);
				opacity: 1;
			}
		}

		.preloader div:nth-child(4) {
			transform: rotateZ(108deg);
			animation: rotateCircle4 2s infinite linear;
			z-index: 6;
		}

		@keyframes rotateCircle4 {
			15% {
				opacity: 0;
			}

			15.0003% {
				opacity: 1;
				transform: rotateZ(-72deg);
			}

			22% {
				transform: rotateZ(-108deg);
			}

			72% {
				transform: rotateZ(-108deg);
			}

			100% {
				transform: rotateZ(-324deg);
				opacity: 1;
			}
		}

		.preloader div:nth-child(5) {
			transform: rotateZ(144deg);
			animation: rotateCircle5 2s infinite linear;
			z-index: 5;
		}

		@keyframes rotateCircle5 {
			20% {
				opacity: 0;
			}

			20.0004% {
				opacity: 1;
				transform: rotateZ(-108deg);
			}

			27% {
				transform: rotateZ(-144deg);
			}

			77% {
				transform: rotateZ(-144deg);
			}

			100% {
				transform: rotateZ(-324deg);
				opacity: 1;
			}
		}

		.preloader div:nth-child(6) {
			transform: rotateZ(180deg);
			animation: rotateCircle6 2s infinite linear;
			z-index: 4;
		}

		@keyframes rotateCircle6 {
			25% {
				opacity: 0;
			}

			25.0005% {
				opacity: 1;
				transform: rotateZ(-144deg);
			}

			32% {
				transform: rotateZ(-180deg);
			}

			82% {
				transform: rotateZ(-180deg);
			}

			100% {
				transform: rotateZ(-324deg);
				opacity: 1;
			}
		}

		.preloader div:nth-child(7) {
			transform: rotateZ(216deg);
			animation: rotateCircle7 2s infinite linear;
			z-index: 3;
		}

		@keyframes rotateCircle7 {
			30% {
				opacity: 0;
			}

			30.0006% {
				opacity: 1;
				transform: rotateZ(-180deg);
			}

			37% {
				transform: rotateZ(-216deg);
			}

			87% {
				transform: rotateZ(-216deg);
			}

			100% {
				transform: rotateZ(-324deg);
				opacity: 1;
			}
		}

		.preloader div:nth-child(8) {
			transform: rotateZ(252deg);
			animation: rotateCircle8 2s infinite linear;
			z-index: 2;
		}

		@keyframes rotateCircle8 {
			35% {
				opacity: 0;
			}

			35.0007% {
				opacity: 1;
				transform: rotateZ(-216deg);
			}

			42% {
				transform: rotateZ(-252deg);
			}

			92% {
				transform: rotateZ(-252deg);
			}

			100% {
				transform: rotateZ(-324deg);
				opacity: 1;
			}
		}

		.preloader div:nth-child(9) {
			transform: rotateZ(288deg);
			animation: rotateCircle9 2s infinite linear;
			z-index: 1;
		}

		@keyframes rotateCircle9 {
			40% {
				opacity: 0;
			}

			40.0008% {
				opacity: 1;
				transform: rotateZ(-252deg);
			}

			47% {
				transform: rotateZ(-288deg);
			}

			97% {
				transform: rotateZ(-288deg);
			}

			100% {
				transform: rotateZ(-324deg);
				opacity: 1;
			}
		}

		.preloader div:nth-child(10) {
			transform: rotateZ(324deg);
			animation: rotateCircle10 2s infinite linear;
			z-index: 0;
		}

		@keyframes rotateCircle10 {
			45% {
				opacity: 0;
			}

			45.0009% {
				opacity: 1;
				transform: rotateZ(-288deg);
			}

			52% {
				transform: rotateZ(-324deg);
			}

			102% {
				transform: rotateZ(-324deg);
			}

			100% {
				transform: rotateZ(-324deg);
				opacity: 1;
			}
		}
	</style>
</head>

<body>
	<div class="site">
		<!-- mobile site__header -->
		<header class="site__header d-lg-none">
			<!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
			<div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
				<div class="mobile-header__panel" style="background:#21bf73">
					<div class="container_fix">
						<div class="mobile-header__body">
							<button class="mobile-header__menu-button">
								<svg width="18px" height="14px">
									<use xlink:href="/images/svg/sprite.svg#menu-18x14"></use>
								</svg><span id="noffall_2" class="indicator__value">0</span>

							</button>
							<a class="mobile-header__logo" href="?act=home">
								<img src="./assets/images/logo1.png" alt="Logo" height="45">
							</a>

							<div class="mobile-header__indicators">

								<div class="indicator indicator--mobile-search indicator--mobile d-md">
									<a class="indicator__button" href="?act=login">
										<span class="indicator__area">
											<i class="fa-regular fa-user fa-xl"></i>
										</span>
									</a>
								</div>


							</div>
						</div>
					</div>

					<div class="site-header__topbar" style="background-color:white;border: none;">
						<div class="topbar__container container_fix">
							<div class="topbar__row">
								<marquee style="color: #ff2626;">Tạp Hóa MMO - Sàn thương mại điện tử sản phẩm số phục vụ Kiếm tiền online. Mọi giao dịch trên trang đều hoàn toàn tự động và được giữ tiền 3 ngày, thay thế cho hình thức trung gian, các bạn yên tâm giao dịch nhé. (2) Cảnh báo gian hàng không uy tín: Nếu chủ shop bán cho bạn sản phẩm không đúng định dạng: tài-khoản|mật-khẩu..., mà là 1 chuỗi không liên quan ở đầu, có nghĩa là hàng đó đang cố pass hệ thống check trùng của sàn, hãy nhanh chóng khiếu nại đơn hàng và báo cho bên mình nhé, vì sản phẩm bạn mua có thể đã từng bán cho người khác trên sàn.</marquee>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- mobile site__header / end -->

		<!-- desktop site__header -->
		<header class="site__header d-lg-block d-none">
			<div class="site-header">
				<!-- .topbar -->
				<div class="site-header__topbar topbar" style="background-color:white;">
					<div class="topbar__container container_fix">
						<div class="topbar__row">
							<div class="topbar__item topbar__item--link">
								<div class="topbar__item topbar__item--link">
									<a class="topbar-link">Hỗ trợ trực tuyến:</a>
								</div>
								<div class="topbar__item topbar__item--link">
									<a target="_blank" href="https://fb.com/taphoammo" class="topbar-link" style="color: #0866ff;">
										<i class="footer-contacts__icon fab fa-facebook"></i>Tạp hóa MMO
									</a>
								</div>
								<div class="topbar__item topbar__item--link">
									<a class="topbar-link">
										<i class="footer-contacts__icon far fa-envelope"></i>support@taphoammo.net
									</a>
								</div>
								<div class="topbar__item topbar__item--link">
									<a class="topbar-link"> <i class="footer-contacts__icon far fa-clock"></i>08:00am - 10:00pm</a>
								</div>
							</div>

							<div class="topbar__spring"></div>
							<div class="topbar__item">
								<div class="topbar-dropdown">
									<button class="topbar-dropdown__btn" type="button" fdprocessedid="6gtdf">
										<a style="color: #ff2626;" href="?act=register">Đăng ký bán hàng</a>
									</button>
								</div>
							</div>

							<div class="topbar__item">
								<div class="topbar-dropdown">
									<button class="topbar-dropdown__btn" type="button" fdprocessedid="o33y3">
										<span>Ngôn ngữ:</span>
										<span class="topbar__item-value text-uppercase">vi</span>
										<svg width="7px" height="5px">
											<use xlink:href="/images/svg/sprite.svg#arrow-rounded-down-7x5"></use>
										</svg>
									</button>
									<div class="topbar-dropdown__body">
										<div class="menu menu--layout--topbar  menu--with-icons ">
											<div class="menu__submenus-container"></div>
											<ul class="menu__list">
												<li class="menu__item">
													<div class="menu__item-submenu-offset"></div>
													<a class="menu__item-link" href="https://taphoammo.net/login.html?lang=en">
														<div class="menu__item-icon"><img src="./public/images/en.png" alt=""></div>
														English
													</a>
												</li>
												<li class="menu__item">
													<div class="menu__item-submenu-offset"></div>
													<a class="menu__item-link" href="https://taphoammo.net/login.html?lang=vi">
														<div class="menu__item-icon"><img src="./public/images/vn.png" alt=""></div>
														Tiếng Việt
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .topbar / end -->

				<div class="site-header__nav-panel">
					<div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow" style="background: #0866ff">
						<div class="nav-panel__container container_fix">
							<div class="nav-panel__row">
								<div class="nav-panel__logo">
									<a href="?act=home">
										<img src="./public/images/logo1-removebg-preview.png" alt="Logo" height="45">
									</a>
								</div>
								<!-- .nav-links -->
								<div class="nav-panel__nav-links nav-links">
									<ul class="nav-links__list">

										<li class="nav-links__item nav-links__item--has-submenu">
											<a class="nav-links__item-link">
												<div style="cursor: pointer;" class="nav-links__item-body">
													<div>Sản phẩm</div>
													<svg class="nav-links__item-arrow" width="9px" height="6px">
														<use xlink:href="/images/svg/sprite.svg#arrow-rounded-down-9x6"></use>
													</svg>
												</div>
											</a>
											<div class="nav-links__submenu nav-links__submenu--type--megamenu nav-links__submenu--size--x1" style="left: 262px;">
												<!-- .megamenu -->
												<div class="megamenu ">
													<div class="megamenu__body">
														<div class="row">

															<div class="col-6">
																<ul class="megamenu__links megamenu__links--level--0">
																	<li class="megamenu__item  megamenu__item--with-submenu">
																		<a href="?act=email">Email</a>
																	</li>
																</ul>
															</div>

															<div class="col-6">
																<ul class="megamenu__links megamenu__links--level--0">
																	<li class="megamenu__item  megamenu__item--with-submenu">
																		<a href="?act=phan-mem">Phần mềm</a>
																	</li>
																</ul>
															</div>

															<div class="col-6">
																<ul class="megamenu__links megamenu__links--level--0">
																	<li class="megamenu__item  megamenu__item--with-submenu">
																		<a href="?act=tai-khoan">Tài khoản</a>
																	</li>
																</ul>
															</div>

															<div class="col-6">
																<ul class="megamenu__links megamenu__links--level--0">
																	<li class="megamenu__item  megamenu__item--with-submenu">
																		<a href="?act=danh-muc-khac">Khác</a>
																	</li>
																</ul>
															</div>

														</div>
													</div>
												</div>
												<!-- .megamenu / end -->
											</div>
										</li>
										<li class="nav-links__item nav-links__item--has-submenu">
											<a class="nav-links__item-link">
												<div style="cursor: pointer;" class="nav-links__item-body">
													<div>Dịch vụ</div>
													<svg class="nav-links__item-arrow" width="9px" height="6px">
														<use xlink:href="/images/svg/sprite.svg#arrow-rounded-down-9x6"></use>
													</svg>
												</div>
											</a>
											<div class="nav-links__submenu nav-links__submenu--type--megamenu nav-links__submenu--size--x1" style="left: 372px;">
												<!-- .megamenu -->
												<div class="megamenu ">
													<div class="megamenu__body">
														<div class="row">

															<div class="col-6">
																<ul class="megamenu__links megamenu__links--level--0">
																	<li class="megamenu__item  megamenu__item--with-submenu">
																		<a href="?act=dich-vu-tuong-tac">Tăng tương tác</a>
																	</li>
																</ul>
															</div>

															<div class="col-6">
																<ul class="megamenu__links megamenu__links--level--0">
																	<li class="megamenu__item  megamenu__item--with-submenu">
																		<a href="?act=dich-vu-phan-mem">Dịch vụ phần mềm</a>
																	</li>
																</ul>
															</div>

															<div class="col-6">
																<ul class="megamenu__links megamenu__links--level--0">
																	<li class="megamenu__item  megamenu__item--with-submenu">
																		<a href="?act=dich-vu-blockchain">Blockchain</a>
																	</li>
																</ul>
															</div>

															<div class="col-6">
																<ul class="megamenu__links megamenu__links--level--0">
																	<li class="megamenu__item  megamenu__item--with-submenu">
																		<a href="?act=dich-vu-khac">Dịch vụ khác</a>
																	</li>
																</ul>
															</div>

														</div>
													</div>
												</div>
												<!-- .megamenu / end -->
											</div>
										</li>
										<li class="nav-links__item">
											<a class="nav-links__item-link" href="?act=support">
												<div class="nav-links__item-body">Hỗ trợ</div>
											</a>
										</li>
										<li class="nav-links__item">
											<a style="position: relative;" class="nav-links__item-link" href="?act=list">
												<div class="nav-links__item-body">Chia sẻ</div>
												<span id="post_new" style="top:5px; right: 3px; padding-top: 3px; position: absolute;"></span>
											</a>
										</li>

										<!--                                <li class="nav-links__item nav-links__item&#45;&#45;has-submenu">-->
										<!--                                    -->
										<!--                                    <div class="nav-links__submenu nav-links__submenu&#45;&#45;type&#45;&#45;menu">-->
										<!--                                        &lt;!&ndash; .menu &ndash;&gt;-->
										<!--                                        <div class="menu menu&#45;&#45;layout&#45;&#45;classic">-->
										<!--                                            <div class="menu__submenus-container"></div>-->
										<!--                                            <ul class="menu__list">-->
										<!--                                                <li class="menu__item">-->
										<!--                                                    &lt;!&ndash; This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. &ndash;&gt;-->
										<!--                                                    <div class="menu__item-submenu-offset"></div>-->
										<!--                                                    <a class="menu__item-link" th:href="@{/post/list.html}"-->
										<!--                                                       th:text="#{menu.post.list}"></a>-->
										<!--                                                </li>-->
										<!--                                                <li class="menu__item">-->
										<!--                                                    &lt;!&ndash; This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. &ndash;&gt;-->
										<!--                                                    <div class="menu__item-submenu-offset"></div>-->
										<!--                                                    <a class="menu__item-link" th:href="@{/post/post-add.html}"-->
										<!--                                                       th:text="#{menu.post.create}"></a>-->
										<!--                                                </li>-->
										<!--                                            </ul>-->
										<!--                                        </div>-->
										<!--                                        &lt;!&ndash; .menu / end &ndash;&gt;-->
										<!--                                    </div>-->
										<!--                                </li>-->
										<li class="nav-links__item  nav-links__item--has-submenu ">
											<a class="nav-links__item-link">
												<div style="cursor: pointer;" class="nav-links__item-body">
													<div>Công cụ</div>
													<svg class="nav-links__item-arrow" width="9px" height="6px">
														<use xlink:href="/images/svg/sprite.svg#arrow-rounded-down-9x6"></use>
													</svg>
												</div>
											</a>
											<div class="nav-links__submenu nav-links__submenu--type--megamenu nav-links__submenu--size--x1">
												<!-- .megamenu -->
												<div class="megamenu ">
													<div class="megamenu__body">
														<div class="row">
															<ul class="megamenu__links megamenu__links--level--0">
																<li class="megamenu__item  megamenu__item--with-submenu">
																	<a class="nav-links__item-link" href="?act=2FA">
																		<div class="nav-links__item-body">2FA</div>
																	</a>
																</li>
															</ul>
															<ul class="megamenu__links megamenu__links--level--0">
																<li class="megamenu__item  megamenu__item--with-submenu">
																	<a class="nav-links__item-link" href="?act=check-live-facebook">
																		<div class="nav-links__item-body">Check Live FB</div>
																	</a>
																</li>
															</ul>

														</div>
													</div>
												</div>
												<!-- .megamenu / end -->
											</div>
										</li>
										<li class="nav-links__item">
											<a class="nav-links__item-link" href="index.php?act=faq">
												<div class="nav-links__item-body">FAQs</div>
											</a>
										</li>

									</ul>
								</div>
								<!-- .nav-links / end -->
								<div class="nav-panel__indicators">




									<div class="indicator indicator--trigger--click">
										<a class="indicator__button">
											<span class="indicator__area">

												<i class="fa-regular fa-user fa-xl"></i><span id="noffall_1" class="indicator__value">0</span>

											</span>
										</a>
										<div class="indicator__dropdown">
											<div class="account-menu">

												<form class="account-menu__form" id="formSignin" action="https://taphoammo.net/login-validator" method="post"><input type="hidden" name="_csrf" value="a9e690c8-55d6-4b77-8903-132bab5f304d">
													<div class="account-menu__form-title">Đăng nhập</div>
													<div class="form-group">
														<input id="username" name="email" type="text" class="form-control form-control-sm text-lowercase" placeholder="Email">
													</div>
													<div class="form-group">
														<div class="account-menu__form-forgot">
															<input id="password" name="password" type="password" class="form-control form-control-sm" placeholder="Mật khẩu">
															<a href="https://taphoammo.net/forgetPassword.html" class="account-menu__form-forgot-link">Quên mật khẩu</a>
														</div>
													</div>
													<div class="form-group">
														<input id="rem_header" type="checkbox" checked="" name="remember-me">
														<label for="rem_header">Ghi nhớ đăng nhập</label>
													</div>
													<input type="hidden" id="response3" name="response2" value="">
													<div style="margin-top: 0px;" class="form-group account-menu__form-button">
														<button onclick="beforeLogin2();" type="button" class="btn btn-primary btn-sm">Đăng nhập</button>
													</div>
													<div style="margin-top: 0px;" class="form-group account-menu__form-button">
														<div style="width: 100%; padding-left: 40px;" class="row">
															<div style="padding: 1px; border: 1px solid #4285f4; text-align: center;" class="col-2">
																<img width="15px" style="margin-top:5px; margin-right:8px" alt="Google sign-in" src="./public/images/gg.png" >
															</div>
															<div style="padding: 0px; text-align: left;" class="col-10">
																<a class="btn btn-sm darken-4 white" href="https://taphoammo.net/login-with-google" style="font-size: 13px;text-transform:none;background-color: #4285f4; color: white;">
																	Google Login
																</a>
															</div>

														</div>
													</div>

													<div class="account-menu__form-link"><a href="?act=login">Đăng ký</a>
													</div>

												</form>




											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="site-header__topbar" style="background-color:white;border: none;">
						<div class="topbar__container container_fix">
							<div class="topbar__row">
								<marquee style="color: #ff2626;">Tạp Hóa MMO - Sàn thương mại điện tử sản phẩm số phục vụ Kiếm tiền online. Mọi giao dịch trên trang đều hoàn toàn tự động và được giữ tiền 3 ngày, thay thế cho hình thức trung gian, các bạn yên tâm giao dịch nhé. (2) Cảnh báo gian hàng không uy tín: Nếu chủ shop bán cho bạn sản phẩm không đúng định dạng: tài-khoản|mật-khẩu..., mà là 1 chuỗi không liên quan ở đầu, có nghĩa là hàng đó đang cố pass hệ thống check trùng của sàn, hãy nhanh chóng khiếu nại đơn hàng và báo cho bên mình nhé, vì sản phẩm bạn mua có thể đã từng bán cho người khác trên sàn.</marquee>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
				function beforeLogin2() {
					$('#formSignin').submit();

					// if (typeof grecaptcha !== 'undefined') {
					//     var siteKey = "6LdlMFIcAAAAALDBHMRWYQXmpfU34Kgz11OmxTku";
					//     grecaptcha.execute(siteKey, {action: "register"}).then(function (response) {
					//         $('#response3').val(response);
					//         $('#formSignin').submit();
					//     });
					// }
				}
			</script>

			<script>
				var time = new Date().getTime();
				$(document.body).bind("mousemove keypress", function(e) {
					time = new Date().getTime();
				});

				function refresh() {
					if (new Date().getTime() - time >= 300000) {
						time = new Date().getTime();
						window.location.reload(true);
					}

				}

				setInterval(function() {
					refresh();
				}, 60000);
			</script>
		</header>
		<!-- desktop site__header / end -->

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

			<title>Đăng nhập - Tạp hóa MMO</title>

			<script type="text/javascript">
				function doValidator() {
					$("#msgSignup").html("");

					$('#err_username').html('');
					$('#err_password').html('');
					$('#err_confirmPassword').html('');
					$('#err_email').html('');
					$('#err_rule').html('');
					$.ajax({
						url: "/public/singup/error.json",
						type: "POST",
						data: $("#formSignup").serialize(),
						async: false,
						success: function(response) {
							if (response.hasError) {
								var len = $.map(response.lstErr, function(n, i) {
									return i;
								}).length;
								for (var i = 0; i < len; i++) {
									$('#err_' + response.lstErr[i].propertyName).html(
										response.lstErr[i].message);
								}
							} else {
								signupUser();
							}
						}
					})
				}

				function signupUser() {
					$("#msgSignup").html("");

					const formData = $('#formSignup').serialize();
					$.post("/singup.html", formData, function(data) {
							if (data.message == "success") {
								$("#msgSignup").html("\u0110\u0103ng k\u00FD th\u00E0nh c\u00F4ng");
								swal("Đăng ký thành công!", "Vui lòng đăng nhập.", "success");
								$("#login_email").val($("#signup_email").val());
							}
						})
						.fail(function(data) {
							$("#msgSignup").html("\u0110\u0103ng k\u00FD th\u1EA5t b\u1EA1i. Vui l\u00F2ng t\u1EA3i l\u1EA1i trang v\u00E0 th\u1EED l\u1EA1i");
						});


					// if (typeof grecaptcha !== 'undefined') {
					// 	var siteKey = "6LdlMFIcAAAAALDBHMRWYQXmpfU34Kgz11OmxTku";
					// 	grecaptcha.execute(siteKey, {action: "register"}).then(function(response) {
					// 		$('#response').val(response);
					// 		var formData= $('#formSignup').serialize();
					//
					//         $.post("/singup.html", formData,function(data){
					//             if(data.message == "success"){
					//                 $("#msgSignup").html("\u0110\u0103ng k\u00FD th\u00E0nh c\u00F4ng");
					//                 swal("Đăng ký thành công!", "Vui lòng đăng nhập.", "success");
					//                 $("#login_email").val( $("#signup_email").val());
					//             }
					//         })
					//         .fail(function(data) {
					//         	$("#msgSignup").html("\u0110\u0103ng k\u00FD th\u1EA5t b\u1EA1i. Vui l\u00F2ng t\u1EA3i l\u1EA1i trang v\u00E0 th\u1EED l\u1EA1i");
					//         });
					//     });
					// }
				}

				function beforeLogin() {
					$('#formLogin').submit();

					// if (typeof grecaptcha !== 'undefined') {
					// 	var siteKey = "6LdlMFIcAAAAALDBHMRWYQXmpfU34Kgz11OmxTku";
					// 	grecaptcha.execute(siteKey, {action: "register"}).then(function(response) {
					// 		$('#response2').val(response);
					// 		$('#formLogin').submit();
					// 	});
					// }
				}
			</script>