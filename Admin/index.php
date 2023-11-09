<?php
include "../model/pdo.php";
include "../model/danhmuc.php";

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
        }
} else {
        include "home.php";
}
