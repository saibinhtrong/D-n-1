<?php
if (is_array($update_clt)) {
    extract($update_clt);
}
?>


    <main class="app-content">
        <div class="row">
            <div class="col-md-12">
                <form action="index.php?act=update_client" method="post">
                    <div class="tile">
                        <h3 class="tile-title">Cập nhật khách hàng</h3>
                        <div class="tile-body row">
                            <div class="form-group col-md-3">
                                <label class="control-label">Tài khoản </label>
                                <input class="form-control" type="text" name="user" value="<?= $User ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Mật khẩu</label>
                                <input class="form-control" type="text" name="pass" value="<?= $Password ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Email</label>
                                <input class="form-control" type="text" name="email" value="<?= $Email ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Tel</label>
                                <input class="form-control" type="text" name="tel" value="<?= $Tel ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Address</label>
                                <input class="form-control" type="text" name="address" value="<?= $Address ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Role</label>
                                <input class="form-control" type="text" name="Role" value="<?= $Role ?>">
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo "$ID" ?>">
                        <input class="btn btn-save" type="submit" value="Cập Nhật" name="update_client"></input>
                        <input class="btn btn-cancel" type="reset" value="Nhập lại">
                        <a href="index.php?act=list_client"><input class="btn btn-save" type="button" value="Danh sách"></input></a>
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
