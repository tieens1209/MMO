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
            // case 'preorders':
            //     include "preorders.php";
            //     break;
        case 'reply-comment':
            include "reply-comment.php";
            break;
        case 'dispute':
            include "dispute.php";
            break;
        case 'kiosk-add':
            include "kiosk-add.php";
            break;
        case 'shop-sale':
            include "shop-sale.php";
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
        case 'seller':
            include "seller.php";
            break;
        case 'user':
            include "user.php";
            break;

        default:
            include "shop-sale.php";
            break;
    }
} else {
    include "shop-sale.php";
}
include "footer.php";
ob_end_flush();
