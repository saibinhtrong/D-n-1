<div class="product_rightst">
    <div class="product_left">
        <div class="child">
            <i class="fa-solid fa-house-chimney"></i>
            <li><a href="index.php?act=User">Trang Chủ</a></li>
        </div>
        <?php
        if ($Role == 1) {
        ?>
            <div class="child">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <li><a href="Admin/index.php">Vào Trang Quản Trị</a></li>
            </div>
        <?php } else ?>
        <div class="child">
            <i class="fa-solid fa-cart-arrow-down"></i>
            <li><a href="index.php?act=ls_mua">Lịch sử mua hàng</a></li>
        </div>
        <div class="child">
            <i class="fa-solid fa-user-shield"></i>
            <li> <a href="index.php?act=your">Tài khoản của bạn</a></li>
        </div>
        <div class="child">
            <i class="fa-solid fa-recycle"></i>
            <li> <a href="index.php?act=update_user">Cập Nhật Thông Tin</a></li>
        </div>
       
        <div class="child">
            <i class="fa-solid fa-right-from-bracket"></i>
            <li><a href="index.php?act=logout">Thoát tài khoản</a></li>
        </div>
    </div>
    <div class="product_rights">
        <div class="conts">
            <?php
            if (isset($_SESSION['username'])) {
                extract($_SESSION['username']);
            ?>
                <h3> <?= $User ?></h3>
            <?php
            } else {
            ?>
                <h4>Xin Chào</h4>
            <?php }
            ?>
        </div>
        <form action="index.php?act=update_user" method="post">
            <div class="smember_info">
                <div class="form-group">
                    <div class="group">
                        <label>Email</label>
                    </div>
                    <input class="form-control" type="text" value="<?= $Email ?> " name="email">
                </div>
                <div class="form-group">
                    <div class="group">
                        <label>Tel</label>
                    </div>
                    <input class="form-control" type="text" value="<?= $Tel ?>" name="tel">
                </div>
                <div class="form-group">
                    <div class="group">
                        <label>Address</label>
                    </div>
                    <input class="form-control" type="text" value="<?= $Address ?>" name="address">
                </div>
                <div class="form-group">
                    <div class="group">
                        <label>Tài khoản</label>
                    </div>
                    <input class="form-control" type="text" value="<?= $User ?>" name="user">
                </div>
                <div class="form-group">
                    <div class="group">
                        <label>Mật khẩu</label>
                    </div>
                    <input class="form-control" type="password" value="<?= $Password ?>" name="pass">
                </div>
                <div class="kt">
                    <input type="hidden" name="id" value="<?= $ID ?>">
                    <input type="submit" name="update_user" value=" Cập Nhật">
                </div>
                <div class="thongbao">
                    <h2>
                        <?php
                        if (isset($Thongbao) && ($Thongbao != ""))
                            echo $Thongbao;
                        ?>
                    </h2>
                </div>
            </div>
        </form>
    </div>
</div>