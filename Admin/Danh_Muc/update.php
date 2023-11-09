<?php
if (is_array($update_dm)) {
    extract($update_dm);
}
?>

    <main class="app-content">
        <div class="row">
            <div class="col-md-12">
                <form action="index.php?act=update_dm" method="post">
                    <div class="tile">
                        <h3 class="tile-title">Cập nhật danh mục</h3>
                        <div class="tile-body row">
                            <div class="form-group col-md-3">
                                <label class="control-label">Mã Loại </label>
                                <input class="form-control" type="number" placeholder="Tự tăng" name="maloai" value="<?= $ID_danhmuc ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Tên Loại</label>
                                <input class="form-control" type="text" name="tenloai" value="<?php echo "$Ten_danhmuc" ?>">
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo "$ID_danhmuc" ?>">
                        <input class="btn btn-save" type="submit" value="Cập Nhật" name="capnhat"></input>
                        <input class="btn btn-cancel" type="reset" value="Nhập lại">
                        <a href="index.php?act=list_dm"><input class="btn btn-save" type="button" value="Danh sách"></input></a>
                        <div class="thongbao btn">
                            <?php
                            if (isset($Thongbao) && ($Thongbao != ""))
                                echo $Thongbao;
                            ?>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </main>

