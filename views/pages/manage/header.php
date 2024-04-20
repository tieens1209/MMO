<!DOCTYPE html>
<!-- saved from url=(0031)https://taphoammo.net/shop.html -->
<html lang="en" dir="ltr" xmlns:with="http://www.thymeleaf.org/extras/with">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->

    <meta name="_csrf" content="09e81db3-51f8-465d-be17-e9bd042f3b2b">
    <!-- default header name is X-CSRF-TOKEN -->
    <meta name="_csrf_header" content="X-CSRF-TOKEN">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font & Icon -->
    <link rel="stylesheet" href="assets/css/inter.min.css" id="font-css">
    <link rel="stylesheet" href="assets/css/material-design-icons.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="assets/css/jqvmap.min.css">
    <link rel="stylesheet" href="assets/css/flatpickr.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/responsive.bootstrap4.min.css">

    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/simplebar.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css" id="main-css">
    <link rel="stylesheet" href="assets/css/sidebar-royal.min.css" id="theme-css">
    <link rel="stylesheet" href="assets/css/default.min.css">
    <link rel="stylesheet" href="assets/css/sweetalert.css">

    <script type="text/javascript" async="" src="assets/js/analytics.js"></script>
    <script type="text/javascript" async="" src="assets/js/js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/sceditor.min.js"></script>

    <link rel="icon" type="image/png" href="https://taphoammo.net/images/logo/logo.jpg">
    <link rel="icon" href="https://taphoammo.net/images/icon/favicon.ico" type="image/ico">
    <script src="assets/js/moment.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>


<body>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar header -->
        <div class="sidebar-header">
            <a href="../../index.php" target="_blank" class="logo">
                <img src="assets/images/logo.svg" alt="Logo" id="main-logo">
                taphoammo.net
            </a>
            <a href="https://taphoammo.net/shop.html#" class="nav-link nav-icon rounded-circle ml-auto" data-toggle="sidebar">
                <i class="material-icons">close</i>
            </a>
        </div>
        <!-- /Sidebar header -->

        <!-- Sidebar body -->
        <div class="sidebar-body" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <ul class="nav treeview mb-4" data-accordion="">
                                    <li class="nav-label">SALE</li>
                                    <li class="nav-item">
                                        <a id="dashboard" class="nav-link has-icon" href="index.php?act=shop-sale"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                                            </svg>Sales</a>
                                    </li>
                                    <li class="nav-label">SHOP</li>
                                    <li class="nav-item">
                                        <a id="kiosk" class="nav-link has-icon active" href="index.php?act=shop"><i class="fas fas fa-clipboard-list"></i>Quản lý gian hàng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="orders" class="nav-link has-icon" href="?act=PRODUCT"><i class="fa fa-file-invoice-dollar"></i>Đơn hàng sản phẩm&nbsp; <span style="display:none;" id="product_sell_new" class="badge badge-light">0</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="orderService" class="nav-link has-icon" href="?act=SERVICE"><i class="fas fa-list-ol"></i>Đơn hàng dịch vụ&nbsp; <span style="display:none;" id="service_sell_new" class="badge badge-light">0</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="preorders" class="nav-link has-icon" href="?act=preorders"><i class="fa fa-clock"></i>Đặt
                                            trước&nbsp; <span style="display:none;" id="product_presell_new" class="badge badge-light">0</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a id="dispute" class="nav-link has-icon" href="?act=dispute"><i class="fa fa-bug"></i>Khiếu
                                            nại&nbsp; <span style="display:none;" id="dispute_new" class="badge badge-light">0</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="reseller" class="nav-link has-icon" href="?act=reseller-for-shop"><i class="fa fa-users"></i>Quản lý Reseller&nbsp;<span style="display:none;" id="reseller_new" class="badge badge-light">0</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="reply" class="nav-link has-icon" href="?act=reply-comment"><i class="far fa-comments"></i>Đánh giá&nbsp;<span style="display:none;" id="rating_new" class="badge badge-light">0</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="promotion" class="nav-link has-icon" href="?act=promotion"><i class="fas fa-dollar-sign"></i>Mã giảm giá</a>
                                    </li>

                                    <li class="nav-item">
                                        <a id="topKiosk" class="nav-link has-icon" href="?act=top-kiosk"><i class="fas fa-arrow-up"></i>Gian hàng Top 1</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 522px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="height: 469px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </div>
    </div>




    <div class="main">
        <!-- Main header -->

        <div class="main-header">
            <a class="nav-link nav-link-faded rounded-circle nav-icon" href="https://taphoammo.net/shop.html#" data-toggle="sidebar"><i class="material-icons">menu</i></a>

            <ul class="nav nav-circle ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-faded nav-icon has-badge " href="https://taphoammo.net/chat-box.html" target="_blank" data-display="static">
                        <i class="far fa-comment-dots"></i>
                        <span id="chatNotify" class="badge-secondary badge badge-pill"></span>
                    </a>

                </li>
                <li class="nav-item dropdown ml-2">
                    <a class="nav-link nav-link-faded rounded nav-link-img dropdown-toggle px-2" href="https://taphoammo.net/shop.html#" data-toggle="dropdown" data-display="static">
                        <img src="assets/images/user.svg" alt="Admin" class="rounded-circle mr-2">
                        <span class="d-none d-sm-block">arturo_59g7tb</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0 overflow-hidden">
                        <div class="media align-items-center bg-primary text-white px-4 py-3 mb-2">
                            <img src="assets/images/user.svg" alt="Admin" class="rounded-circle" width="50" height="50">
                            <div class="media-body ml-2 text-nowrap">
                                <h6 class="mb-0">arturo_59g7tb</h6>
                                <!--<span class="text-gray-400 font-size-sm">Administrator</span>-->
                            </div>
                        </div>
                        <a class="dropdown-item has-icon text-danger" href="https://taphoammo.net/logout.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out mr-2">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>