<div class="row magin fixed">
        <div class="left magin_right">
                <div class="row">
                        <div class="row mb">
                                <h1 class="cart-title">Đơn hàng của tôi</h1>
                                <table class="cart-table">
                                        <tr>


                                                <th>Mã đơn hàng</th>
                                                <th>Ngày đặt</th>
                                                <th>Số lượng mặt hàng</th>
                                                <th>Tổng giá trị đơn hàng</th>
                                                <th>Tình trạng đơn hàng</th>

                                        </tr>
                                        <?php
                                        if (is_array($listbill)) {
                                                foreach ($listbill as $bill) {
                                                        extract($bill);
                                                        $ttdh = get_ttdh($bill['bill_status']);
                                                        $count = loadall_cart_count($bill['id']);
                                                        echo ' <tr>
                                                        <td>' . $bill['id'] . '</td>
                                                        <td>' . $bill['ngaydathang'] . '</td>
                                                        <td>' . $count . '</td>
                                                        <td>' . $bill['tongdonhang'] . '</td>
                                                        <td>' . $ttdh . '</td>
                                                  </tr>';
                                                }
                                        }
                                        ?>



                                </table>
                        </div>
                </div>
        </div>
        <div class="right">
                <?php
                include "./View/content_right.php";
                ?>
        </div>
</div>