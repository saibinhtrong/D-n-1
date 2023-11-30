<?php
if (is_array($bill)) {
        extract($bill);
}else{
        $bill =[];
}
?>

<main class="app-content">
        <div class="row">
                <div class="col-md-12">
                        <form action="index.php?act=update_bill" method="post" enctype="multipart/form-data">
                                <div class="tile">
                                        <h3 class="tile-title">Cập nhật đơn hàng</h3>
                                        <div class="tile-body row">
                                               
                                                <div class="form-group col-md-3">
                                                        <label class="control-label">Mã đơn hàng</label>
                                                        <input class="form-control" type="text" name="id" value="<?= isset($bill['id']) ? $bill['id'] : '' ?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                        <label class="control-label">Tình trạng đơn hàng </label>
                                                        <input class="form-control" type="text" name="bill_status" value="<?= isset($bill['bill_status']) ? $bill['bill_status'] : '' ?>">
                                                </div>
                                               
                                               
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo "$id" ?>">
                                        <input class="btn btn-save" type="submit" value="Cập Nhật" name="capnhat"></input>
                                        <input class="btn btn-cancel" type="reset" value="Nhập lại">
                                        <a href="index.php?act=listbill"><input class="btn btn-save" type="button" value="Danh sách"></input></a>

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