<?php
ob_start();
session_start();


include "header.php";

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case 'shop':
            include "shop.php";
            break;
            case 'shop-sale':
                include "shop-sale.php";
                break;
        case 'preorders':
            include "preorders.php";
            break;
        case 'reply-comment':
            include "reply-comment.php";
            break;
        case 'dispute':
            include "dispute.php";
            break;
        case 'kiosk-add':
            include "kiosk-add.php";
            break;
        case 'PRODUCT':
            include "PRODUCT.php";
            break;
        case 'SERVICE':
            include "SERVICE.php";
            break;
        case 'reseller-for-shop':
            include "reseller-for-shop.php";
            break;
        case 'promotion':
            include "promotion.php";
            break;
        case 'add':
            include "add.php";
            break;
        case 'top-kiosk':
            include "top-kiosk.php";
            break;

        default:
            include "shop.php";
            break;
    }
} else {
    include "shop.php";
}
include "footer.php";
ob_end_flush();
