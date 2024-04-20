<?php
ob_start();
session_start();



include $_SERVER['DOCUMENT_ROOT'].'/'.$domain.'/views/layouts/view/header.php';

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case 'home':
            include "/views/pages/home.php";
            break;
        case 'login':
            include "/views/pages/login.php";
            break;
        case 'faq':
            include "/views/pages/faq.php";
            break;
        case 'addFunds':
            include "/views/pages/addFunds.php";
            break;
        case 'register':
            include "/views/pages/register.php";
            break;
        case 'thong-tin':
            include "/views/pages/thong-tin.php";
            break;
        case 'orders-buy':
            include "/views/pages/orders-buy.php";
            break;
        case 'payments':
            include "/views/pages/payments.php";
            break;
        case 'change-password':
            include "/views/pages/change-password.php";
            break;
        case 'chat-box':
            include "/views/pages/chat-box.php";
            break;
        case 'tai-khoan':
            include "/views/pages/tai-khoan.php";
            break;
        case 'support':
            include "/views/pages/support.php";
            break;
        case 'list':
            include "/views/pages/list.php";
            break;
        case 'email':
            include "/views/pages/email.php";
            break;
        case 'phan-mem':
            include "/views/pages/phan-mem.php";
            break;
        case 'danh-muc-khac':
            include "/views/pages/danh-muc-khac.php";
            break;
        case 'dich-vu-tuong-tac':
            include "/views/pages/dich-vu-tuong-tac.php";
            break;
        case 'dich-vu-phan-mem':
            include "/views/pages/dich-vu-phan-mem.php";
            break;
        case 'dich-vu-blockchain':
            include "/views/pages/dich-vu-blockchain.php";
            break;
        case 'dich-vu-khac':
            include "/views/pages/dich-vu-khac.php";
            break;
        case '2FA':
            include "/views/pages/2FA.php";
            break;
        case 'check-live-facebook':
            include "/views/pages/check-live-facebook.php";
            break;

        default:
            include "/views/pages/home.php";
            break;
    }
} else {
    include "/view/pages/home.php";
}

include $_SERVER['DOCUMENT_ROOT'].'/'.$domain.'/views/layouts/view/footer.php';
ob_end_flush();
