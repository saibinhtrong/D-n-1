<div class="row-bill">
        <div class="col-75">
                <div class="container-bill">
                        <form action="/action_page.php">

                                <div class="row">
                                        <div class="col-50">
                                        <h3 class="title-bill">Cảm ơn quý khác đã đặt hàng</h3>
                                        <?php
                                        if(isset($bill)&&(is_array($bill))){
                                                extract($bill);
                                        }
                                        $ht_pttt = get_pttt($bill['bill_pttt']);
                                        ?>
                                            
                                                <label for="fname"><i class="fa fa-user"></i> Full
                                                        Name</label>
                                                <input type="text" id="fname" name="Name" value="<?=$bill['bill_name']?>">
                                                <label for="Email"><i class="fa fa-envelope"></i>
                                                        Email</label>
                                                <input type="text" id="Email" name="Email" value="<?=$bill['bill_email']?>">
                                                <label for="adr"><i class="fa fa-address-card-o"></i>
                                                        Address</label>
                                                <input type="text" id="adr" name="Address" value="<?=$bill['bill_address']?>">
                                                <label for="Tel">Tel</label>
                                                <input type="text" id="city" name="Tel" value="<?=$bill['bill_tel']?>">

                                        </div>

                                        <div class="col-50">
                                                <h3>Payment</h3>
                                                <label for="fname">Accepted Cards</label>
                                                <div class="icon-container">
                                                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                                                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                                                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                                                </div>
                                                <label for="cname">Phương Thức Thanh toán</label>
                                                <input type="text" id="cname" readonly value="<?= $ht_pttt ?>">
                                                <label for="cname">Mã đơn hàng</label>
                                                <input type="text" id="cname" readonly value="<?=$bill['id']?>">
                                                <label for="ccnum">Ngày đặt hàng</label>
                                                <input type="text" id="ccnum" readonly value="<?=$bill['ngaydathang']?>">
                                                <label for="ccnum">Tổng đơn hàng</label>
                                                <input type="text" id="ccnum" readonly value="$<?=$bill['tongdonhang']?>">
                                        </div>
                                        <div class="row mb">
                                                <h1 class="cart-title">Sản Phẩm Đã Chọn</h1>
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
                                                       
                                                        ?>
                                                       
                                                </table>
                                        </div>


                                </div>                           
                                        <input value="">
                        </form>
                </div>
        </div>

</div>