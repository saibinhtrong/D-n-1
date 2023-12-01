<?php
session_start();
include_once "model/pdo.php";
include_once "model/sanpham.php";
include_once "model/danhmuc.php";
include_once "model/Account.php";
include_once "model/cart.php";
include_once "model/comments.php";
include "View/header.php";
include "global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$list_sp_home = loadAll_sanpham_home();
$list_dm_home = loadAll_danhmuc();
$list_sp_top = loadAll_sanpham_top();
if ((isset($_GET['act'])) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'product':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $id = $_GET['id_sp'];
                $list_sp_one = loadOne_sanpham($id);
                extract($list_sp_one);
                $list_sp_kind = load_sanpham_kind($ID, $ID_dm);
                include "View/chitiet_sanpham.php";
            } else {
                include "View/home.php";
            }
            break;

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

            // đăng ký đăng nhập
        case 'register':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $Email = $_POST['email'];
                $User = $_POST['username'];
                $Password = $_POST['password'];
                inser_Account($User, $Password, $Email);
                $Thongbao = "Đăng kí thành công";
            }
            include "View/Account/signup.php";
            break;

        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $User = $_POST['username'];
                $Password = $_POST['password'];
                $check_user = check_user($User, $Password);
                if (is_array($check_user)) {
                    $_SESSION['username'] = $check_user;
                    header('location: index.php?act=home ');
                    //   $Thongbao = "Đăng nhập thành công";
                } else {
                    $Thongbao = "Tài khoản không tồn tại";
                }
            }
            include "View/Account/login.php";
            break;

        case 'User':
            include "View/Account/User.php";
            break;

        case 'logout':
            session_unset();
            header('location: index.php?act=home');
            break;

        case 'your':
            include "View/Account/your.php";
            break;

        case 'update_user':
            if (isset($_POST['update_user']) && ($_POST['update_user'])) {
                $User = $_POST['user'];
                $Tel = $_POST['tel'];
                $Email = $_POST['email'];
                $Address = $_POST['address'];
                $Password = $_POST['pass'];
                $id = $_POST['id'];
                update_user($id, $User, $Email, $Password, $Tel, $Address);
                $_SESSION['username'] = check_user($User, $Password);
                $Thongbao = "Cập nhật thành công";
                // header('location: index.php?act=update_user');
            }
            include "View/Account/update_user.php";
            break;
        case 'forgot':
            if (isset($_POST['forgot']) && ($_POST['forgot'])) {
                $Email = $_POST['email'];
                $check_pass = check_Pass($Email);
                if (is_array($check_pass)) {
                    $Thongbao = "Mật khẩu của bạn là: " . $check_pass['Password'];
                } else {
                    $Thongbao = "Email không tồn tại";
                }
            }
            include "View/Account/Forgot.php";
            break;

        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $image, $price, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "View/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                $idcart = $_GET['idcart'];
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location: index.php?act=viewcart');
            break;
        case 'billcomfirm':
            if (isset($_POST['dongy']) && ($_POST['dongy'])) {
                if (isset($_SESSION['username'])) $iduser = $_SESSION['username']['ID'];
                else $iduser = 0;
                $name = $_POST['User'];
                $email = $_POST['Email'];
                $address = $_POST['Address'];
                $tel = $_POST['Tel'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();

                $idbill = insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);
                
                foreach ($session['mycart'] as $cart) {
                    insert_cart($_SESSION['username']['ID'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                
                }
                $_SESSION['cart'] = [];
            }
            $bill = loadone_bill($idbill);
            
            include "View/cart/billcomfirm.php";
            break;
        case 'mybill':
            $listbill=loadall_bill($_SESSION['username']['ID']);
            include "View/cart/mybill.php";
            break;
        case 'bill':
            include "View/cart/bill.php";
            break;
        case 'viewcart':
            include "View/cart/viewcart.php";
            break;
        case 'about':
            include "View/about.php";
            break;
        case 'contact':
            include "View/contact.php";
            break;
        case 'feedback':
            include "View/feedback.php";
            break;
        case 'ask':
            include "View/ask.php";
            break;
        default:
            include "View/home.php";
            break;
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
