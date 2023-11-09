<main class="app-content">
        <div class="row">
                <div class="col-md-12">
                        <div class="tile">
                                <h3 class="tile-title">Danh sách danh mục</h3>
                                <div class="tile-body">
                                        <table class="table table-hover table-bordered" id="sampleTable">
                                                <thead>
                                                        <tr>
                                                                <th width="10"><input type="checkbox" id="all"></th>
                                                                <th>ID</th>
                                                                <th>Tên danh mục</th>
                                                                <th>Tính năng</th>
                                                        </tr>
                                                </thead>
                                                <?php
                                                foreach ($list_dm as $danhmuc) {
                                                        extract($danhmuc);
                                                        $sua_dm = "index.php?act=sua_dm&id=" . $ID_danhmuc;
                                                        $xoa_dm = "index.php?act=xoa_dm&id=" . $ID_danhmuc;
                                                        echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $ID_danhmuc . '</td>
                                    <td>' . $Ten_danhmuc . '</td>
                                    <td>
                                    <a href="' . $sua_dm . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="' . $xoa_dm . '"><input class="btn btn-primary btn-sm edit" type="button" value="Xóa"></a>
                                    </td>
                                    </tr>';
                                                }
                                                ?>
                                        </table>
                                </div>
                                <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                                <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                                <input class="btn btn-save" type="button" value="Xóa Các Mục Đã Chọn">
                                <a href="index.php?act=add_dm"><input class="btn btn-cancel" type="button" value="Nhập Thêm"></input></a>
                        </div>
                </div>
        </div>
</main>