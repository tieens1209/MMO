<?php
ob_start();
session_start();


include "./view/header.php";

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case 'home':
            include "./view/home.php";
            break;
        case 'login':
            include "./view/login.php";
            break;
        case 'faq':
            include "./view/faq.php";
            break;
        case 'addFunds':
            include "./view/addFunds.php";
            break;
        case 'register':
            include "./view/register.php";
            break;
        case 'thong-tin':
            include "./view/thong-tin.php";
            break;
        case 'orders-buy':
            include "./view/orders-buy.php";
            break;
        case 'payments':
            include "./view/payments.php";
            break;
        case 'change-password':
            include "./view/change-password.php";
            break;
        case 'chat-box':
            include "./view/chat-box.php";
            break;
        case 'tai-khoan':
            include "./view/tai-khoan.php";
            break;
        case 'support':
            include "./view/support.php";
            break;
        case 'list':
            include "./view/list.php";
            break;
        case 'email':
            include "./view/email.php";
            break;
        case 'phan-mem':
            include "./view/phan-mem.php";
            break;
        case 'danh-muc-khac':
            include "./view/danh-muc-khac.php";
            break;
        case 'dich-vu-tuong-tac':
            include "./view/dich-vu-tuong-tac.php";
            break;
        case 'dich-vu-phan-mem':
            include "./view/dich-vu-phan-mem.php";
            break;
        case 'dich-vu-blockchain':
            include "./view/dich-vu-blockchain.php";
            break;
        case 'dich-vu-khac':
            include "./view/dich-vu-khac.php";
            break;
        case '2FA':
            include "./view/2FA.php";
            break;
        case 'check-live-facebook':
            include "./view/check-live-facebook.php";
            break;

        default:
            include "./view/home.php";
            break;
    }
} else {
    include "./view/home.php";
}
include "./view/footer.php";
ob_end_flush();
