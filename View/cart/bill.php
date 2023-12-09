<div class="row magin fixed">
        <div class="left magin_right">

                <form action="index.php?act=billcomfirm" method="post" class="row">

                        <div class="row">
                                <h1 class="cart-title">THÔNG TIN NHẬN HÀNG</h1>
                                <table class="thongtinnhanhang">

                                        <?php
                                        if (isset($_SESSION['username'])) {
                                                $User = $_SESSION['username']['User'];
                                                $Address = $_SESSION['username']['Address'];
                                                $Tel = $_SESSION['username']['Tel'];
                                                $Email = $_SESSION['username']['Email'];
                                        } else {
                                                $User = "";
                                                $Address = "";
                                                $Tel = "";
                                                $Email = "";
                                        }
                                        ?>
                                        <tr>
                                                <td width="10%">Họ tên</td>
                                                <td><input type="text" name="User" value="<?= $User ?>"></td>
                                        </tr>
                                        <tr>
                                                <td>Địa chỉ</td>
                                                <td><input type="text" name="Address" value="<?= $Address ?>"></td>
                                        </tr>
                                        <tr>
                                                <td>Điện thoại</td>
                                                <td><input type="text" name="Tel" value="<?= $Tel ?>"></td>
                                        </tr>
                                        <tr>
                                                <td>Email</td>
                                                <td><input type="text" name="Email" value="<?= $Email ?>"></td>
                                        </tr>
                                </table>
                        </div>
                        <div class="row mb">
                                <h1 class="cart-title">PHƯƠNG THỨC THANH TOÁN</h1>
                                <div class="row boxcontent">
                                        <table>
                                                <tr class="pttt">
                                                        <td class="pttt1"><input type="radio" value="1" name="pttt" checked>Trả tiền sau khi nhận hàng</td>
                                                        <td class="pttt2"><input type="radio" value="2" name="pttt">chuyển khoản ngân hàng</td>
                                                        <td class="pttt3"><input type="radio" value="3" name="pttt">thanh toán online</td>
                                                </tr>
                                        </table>
                                </div>
                        </div>
                        <div class="row mb">
                                <h1 class="cart-title">Sản Phẩm</h1>
                                <table class="cart-table">
                                        <tr>

                                                <th>Hình</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Đơn giá</th>
                                                <th>Số lượng</th>
                                                <th>Thành tiền ($)</th>


                                        </tr>
                                        <?php
                                        $tong = 0;
                                        foreach ($_SESSION['mycart'] as $cart) {
                                                $hinh = $image_path . $cart[2];
                                                $ttien = $cart[3] * $cart[4];
                                                $tong += $ttien;
                                                echo '
                                        <tr>    
                                                                  
                                        <td class="image-cart"><img src="' . $cart[2] . '" alt=""></td>
                                        <td>' . $cart[1] . '</td>
                                        <td>' . $cart[3] . '</td>
                                        <td>' . $cart[4] . '</td>
                                        <td>
                                                <div class="total">' . $ttien . '</div>
                                        </td>
                                </tr>';
                                        }
                                        echo '<tr>
                                <th colspan="4">Tổng đơn hàng</th>
                                <th>
                                        <div class="th-total">' . $tong . '</div>
                                </th>

                        </tr> ';
                                        ?>
                                        <!-- <tr>
                                        <td>1</td>
                                        <td class="image-cart"><img src="images/1.jpg" alt=""></td>
                                        <td>Đồng hồ</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>
                                                <div class="total">10</div>
                                        </td>
                                </tr> -->

                                        <!-- <tr>
                                        <th colspan="5">Tổng đơn hàng</th>
                                        <th>
                                                <div class="th-total">10</div>
                                        </th>

                                </tr> -->
                                </table>
                        </div>
                        <div class="button-cart">
                         <input class="dongy" type="submit" name="dongy" value="ĐỒNG Ý ĐẶT HÀNG"></a>
                        </div>

                </form>
        </div>
        <div class="right">
                <?php
                include "./View/content_right.php";
                ?>
        </div>
</div>