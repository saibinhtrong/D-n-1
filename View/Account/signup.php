<div class="product_right fixed">
    <div class="title"> <a href="index.php?act=home"> Trang Chủ </a>
        <i class="fa-solid fa-angles-right"></i> Đăng kí thành viên
    </div>
    <form action="index.php?act=register" method="post">
        <div class="register ">
            <div class="imagest">
                <a href="index.php?act=home">
                </a>
            </div>

            <div class="row">
                <div class="register">
                    <div class="login-page">
                        <div class="form-login">
                            <form class="login-form">
                                <input type="text" name="email" placeholder="Vui lòng nhập email" />
                                <input type="username" name="username" placeholder="Vui lòng nhập tên tài khoản" />
                                <input type="password" name="password" placeholder="Vui lòng nhập password" />
                                <input type="submit" class="btn_login" name="dangky" value=" Đăng Ký">
                                <p class="message">Already have an account? <a href="index.php?act=login">Account login</a></p>
                                <p class="message"><a href="index.php?act=forgot">Quên mật khẩu?</a></p>
                            </form>
                        </div>
                    </div>
                </div>
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