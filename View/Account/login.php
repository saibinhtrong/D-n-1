<div class="product_right fixed">
    <div class="title"> <a href="index.php?act=home"> Trang Chủ </a>
        <i class="fa-solid fa-angles-right"></i> Đăng Nhập
    </div>
    <form action="index.php?act=login" method="post">

        <div class="register">
            <div class="login-page">
                <div class="form-login">
                    <form class="login-form">
                        <input type="text" name="username" placeholder="username" />
                        <input type="password" name="password" placeholder="password" />
                        <input type="submit" class="btn_login" name="login" value=" Đăng Nhập">
                        <p class="message">Not registered? <a href="index.php?act=register">Create an account</a></p>
                        <p class="message"><a href="#">Quên mật khẩu?</a></p>
                    </form>
                </div>
            </div>
            <div class="thongbao">
                <h2>
                    <?php
                    if (isset($Thongbao) && ($Thongbao != " "))
                        echo $Thongbao;
                    ?>
                </h2>
            </div>
        </div>
    </form>
</div>