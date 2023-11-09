<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";

if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
                case 'add_dm':
                        // kt xem người dùng có click vào nút add hay không
                        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                                $tenloai = $_POST['tenloai'];
                                inser_danhmuc($tenloai);
                                $Thongbao = "Thêm Thành Công";
                        }
                        include "Danh_Muc/add.php";
                        break;

                case 'list_dm':
                        $list_dm = loadAll_danhmuc();
                        include "Danh_Muc/list.php";
                        break;

                case 'xoa_dm':
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                                $ID = $_GET['id'];
                                deleta_danhmuc($ID);
                        }
                        $list_dm = loadAll_danhmuc();
                        include "Danh_Muc/list.php";
                        break;
                case 'sua_dm':

                        $update_dm = loadOne_danhmuc();
                        include "Danh_Muc/update.php";
                        break;

                case 'update_dm':
                        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                $tenloai = $_POST['tenloai'];
                                $ID = $_POST['id'];
                                Update_danhmuc($ID, $tenloai);
                                $Thongbao = "Cập Nhật Thành Công";
                        }
                        $list_dm = loadAll_danhmuc();
                        include "Danh_Muc/list.php";
                        break;



                        /* SẢN PHẨM */


                case 'add_sp':
                        // kt xem người dùng có click vào nút add hay không
                        if (isset($_POST['themmoi_sp']) && ($_POST['themmoi_sp'])) {
                                $id_dm = $_POST['ID_danhmuc'];
                                $name = $_POST['name_sp'];
                                $price = $_POST['price_sp'];
                                $hinh = $_FILES['image']['name'];
                                $mota = $_POST['mota_sp'];
                                $target_dir = "../upload/";
                                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                                        // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                                } else {
                                        // echo "Sorry, there was an error uploading your file.";
                                }
                                inser_sanpham($name, $price, $hinh, $mota, $id_dm);
                                $Thongbao = "Thêm Thành Công";
                        }
                        $list_dm = loadAll_danhmuc();
                        include "San_Pham/add.php";
                        break;


                case 'list_sp':
                        if (isset($_POST['listok']) && ($_POST['listok'])) {
                                $kyw = $_POST['kyw'];
                                $id_dm = $_POST['ID_danhmuc'];
                        } else {
                                $kyw = '';
                                $id_dm = 0;
                        }
                        $list_dm = loadAll_danhmuc();
                        $list_sp = loadAll_sanpham($kyw, $id_dm);
                        include "San_Pham/list.php";
                        break;
                case 'xoa_sp':
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                                $ID = $_GET['id'];
                                deleta_sanpham($ID);
                        }
                        $list_sp = loadAll_sanpham("", 0);
                        include "San_Pham/list.php";
                        break;
                case 'sua_sp':
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                                $ID = $_GET['id'];
                                $list_dm = loadAll_danhmuc();
                                $sanpham = loadOne_sanpham($ID);
                        }

                        include "San_Pham/update.php";
                        break;
                case 'update_sp':
                        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                $ID = $_POST['id'];
                                $ID_danhmucs = $_POST['ID_danhmuc'];
                                $name = $_POST['name_sp'];
                                $price = $_POST['price_sp'];
                                $hinh = $_FILES['image']['name'];
                                $mota = $_POST['mota'];
                                $target_dir = "../upload/";
                                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                                        // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                                } else {
                                        // echo "Sorry, there was an error uploading your file.";
                                }
                                update_sanpham($ID, $ID_danhmucs, $name, $price, $hinh, $mota);
                                $Thongbao = "Sửa Thành Công";
                        }
                        $list_dm = loadAll_danhmuc();
                        $list_sp = loadAll_sanpham("", 0);
                        include "San_Pham/list.php";
                        break;
        }
} else {
        include "home.php";
}
