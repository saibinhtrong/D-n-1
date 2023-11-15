<?php
session_start();
include_once "model/pdo.php";
include_once "model/sanpham.php";
include_once "model/danhmuc.php";
include "View/header.php";
include "global.php";


$list_sp_home = loadAll_sanpham_home();
$list_dm_home = loadAll_danhmuc();
$list_sp_top = loadAll_sanpham_top();
if ((isset($_GET['act'])) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {


        case 'product_list':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['ID_danhmuc']) && ($_GET['ID_danhmuc'] > 0)) {
                $id_dm = $_GET['ID_danhmuc'];
            } else {
                $id_dm = 0;
            }
            $product_list = loadAll_sanpham($kyw, $id_dm);
            $Ten_dm = load_Name($id_dm);
            include "View/product.php";

            break;
         
        default:
            include "View/home.php";
            break;
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
