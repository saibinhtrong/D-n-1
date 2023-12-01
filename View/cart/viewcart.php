<div class="row magin fixed">
        <div class="left magin_right">

                <div class="row">
                      
                        <div class="row mb">
                                <h1 class="cart-title">GIỎ HÀNG</h1>
                                <table class="cart-table">
                                        <tr>

                                                <th>Hình</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Đơn giá</th>
                                                <th>Số lượng</th>
                                                <th>Thành tiền ($)</th>
                                                <th>Thao tác</th>
                                        </tr>
                                        <?php
                                        $tong = 0;
                                        $i=0;
                                        foreach ($_SESSION['mycart'] as $cart) {
                                                $hinh = $image_path . $cart[2];
                                                $ttien = $cart[3] * $cart[4];
                                                $tong= $tong+ $ttien;
                                             
                                                $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="xóa"> </a>';
                                                echo '
                                        <tr>    
                                                                  
                                        <td class="image-cart"><img src="' . $cart[2] . '" alt=""></td>
                                        <td>' . $cart[1] . '</td>
                                        <td>' . $cart[3] . '</td>
                                        <td>' . $cart[4] . '</td>
                                        <td>
                                                <div class="total">' . $ttien . '</div>
                                        </td>
                                        <td>'.$xoasp.'</td>
                                </tr>';
                                   $i+=1;
                                        }
                                        echo '<tr>
                                <th colspan="5">Tổng đơn hàng</th>
                                <th>
                                        <div class="th-total">' . $tong . '</div>
                                </th>

                        </tr> ';
                                        ?>
                                        
                                </table>
                        </div>
                        <div class="button-cart">
                                
                        <a href="index.php?act=bill">  <input class="dongy" type="button" value="ĐỒNG Ý ĐẶT HÀNG"></a>


                                <a href="index.php?act=delcart"><input type="button" value="Xóa Tất Cả "> </a>
                        </div>

                </div>
        </div>
        <div class="right">
                <?php
                include "./View/content_right.php";
                ?>
        </div>
</div>