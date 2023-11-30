<main class="app-content">
        <div class="row">
                <div class="col-md-12">
                        <div class="tile">
                                <h3 class="tile-title">Danh sách sản phẩm</h3>
                                <form action="index.php?act=list_sp" method="post" class="bottons">
                                        <input type="text" name="kyw" id="" class="form-control_1">
                                        <select name="ID_danhmuc" id="" class="form-control_1">
                                                <option value="0" selected> Tất Cả</option>
                                                <?php
                                                foreach ($list_dm as $danhmuc) {
                                                        extract($danhmuc);
                                                        echo  '<option value="' . $ID_danhmuc . '">' . $Ten_danhmuc . '</option>';
                                                }
                                                ?>
                                        </select>
                                        <input type="submit" name="listok" id="search" value="Tìm Kiếm" class="form-control_1">
                                </form>
                                <div class="tile-body">
                                        <table class="table table-hover table-bordered" id="sampleTable">
                                                <thead>
                                                        <tr>
                                                                <th width="10"><input type="checkbox" id="all"></th>
                                                                <th>Mã SP</th>
                                                                <th>Tên sản phẩm</th>
                                                                <th>Giá</th>
                                                                <th>Image</th>
                                                                <th>Mô Tả</th>
                                                                <th>Chức Năng</th>
                                                        </tr>
                                                </thead>
                                                <?php
                                                foreach ($list_sp as $sanpham) {
                                                        extract($sanpham);
                                                        $sua_sp = "index.php?act=sua_sp&id=" . $ID;
                                                        $xoa_sp = "index.php?act=xoa_sp&id=" . $ID;
                                                        $hinhpath = "../upload/" . $Image;
                                                        if (is_file($hinhpath)) {
                                                                $hinh = "<img src='" .  $hinhpath . "' height='50px'>";
                                                        } else {
                                                                $hinh = "No image found";
                                                        }

                                                        echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $ID . '</td>
                                    <td>' . $Name . '</td>
                                    <td>' . $Price . '</td>
                                    <td>' . $hinh . '</td>
                                    <td>' . $Mota . '</td>
                                    <td>
                                    <a href="' . $sua_sp . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="' . $xoa_sp . '"><input class="btn btn-primary btn-sm edit" type="button" value="Xóa"></a>
                                    </td>
                                    </tr>';
                                                }
                                                ?>
                                        </table>
                                </div>
                                <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                                <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                                <input class="btn btn-save" type="button" value="Xóa Các Mục Đã Chọn">
                                <a href="index.php?act=add_sp"><input class="btn btn-cancel" type="button" value="Nhập Thêm"></input></a>
                        </div>
                </div>
        </div>
</main>