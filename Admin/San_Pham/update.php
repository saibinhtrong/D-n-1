<?php
if (is_array($sanpham)) {
        extract($sanpham);
}
$hinhpath = "../upload/" . $Image;
if (is_file($hinhpath)) {
        $hinh = "<img src='" .  $hinhpath . "' height='50px'>";
} else {
        $hinh = "No image found";
}
?>

<main class="app-content">
        <div class="row">
                <div class="col-md-12">
                        <form action="index.php?act=update_sp" method="post" enctype="multipart/form-data">
                                <div class="tile">
                                        <h3 class="tile-title">Cập nhật sản phẩm</h3>
                                        <div class="tile-body row">
                                                <div class="form-group col-md-3">
                                                        <label class="control-label">Danh Mục </label>
                                                        <select name="ID_danhmuc" class="form-control_1">
                                                                <?php
                                                                foreach ($list_dm as $danhmuc) {
                                                                        extract($danhmuc);
                                                                        if ($ID_dm == $ID_danhmuc) {
                                                                                echo  '<option value="' . $ID_danhmuc . '"selected>' . $Ten_danhmuc . '</option>';
                                                                        } else {
                                                                                echo  '<option value="' . $ID_danhmuc . '">' . $Ten_danhmuc . '</option>';
                                                                        }
                                                                }
                                                                ?>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                        <label class="control-label">Tên sản phẩm </label>
                                                        <input class="form-control" type="text" name="name_sp" value="<?= $Name ?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                        <label class="control-label">Giá </label>
                                                        <input class="form-control" type="text" name="price_sp" value="<?= $Price ?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                        <label class="control-label">Image </label>
                                                        <input class="" type="file" name="image">
                                                        <div class="images">
                                                                <?= $hinh ?>
                                                        </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                        <label class="control-label">Mô tả</label>
                                                        <textarea class="form-control" name="mota" cols="30" rows="10"><?= $Mota ?></textarea>
                                                </div>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo "$ID" ?>">
                                        <input class="btn btn-save" type="submit" value="Cập Nhật" name="capnhat"></input>
                                        <input class="btn btn-cancel" type="reset" value="Nhập lại">
                                        <a href="index.php?act=list_sp"><input class="btn btn-save" type="button" value="Danh sách"></input></a>

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