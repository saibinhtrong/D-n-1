<main class="app-content">
        <div class="row">
                <div class="col-md-12">
                        <div class="tile">
                                <h3 class="tile-title">Danh sách sản phẩm</h3>
                                <form action="index.php?act=listbill" method="post" class="bottons">
                                        <input type="text" name="kyw" id="" class="form-control_1" placeholder="nhập mã đơn hàng">
                                        <input type="submit" name="listok" id="search" value="Tìm Kiếm" class="form-control_1">
                                </form>
                                <div class="tile-body">
                                        <table class="table table-hover table-bordered" id="sampleTable">
                                                <thead>
                                                        <tr>
                                                                <th width="10"><input type="checkbox" id="all"></th>
                                                                <th>Mã đơn hàng</th>
                                                                <th>Tên khách hàng</th>
                                                                <th>Số lượng</th>
                                                                <th>Giá trị đơn hàng</th>
                                                                <th>Ngày đặt hàng</th>
                                                                <th>tình trạng đơn hàng</th>
                                                                <th>Chức Năng</th>
                                                               
                                                        </tr>
                                                </thead>
                                                <?php
                                                foreach ($listbill as $bill) {
                                                        extract($bill);
                                                        $kh=$bill["bill_name"].'
                                                        <br> '.$bill["bill_email"].'
                                                        <br> '.$bill["bill_address"].'
                                                        <br> '.$bill["bill_tel"];
                                                        $count = loadall_cart_count($bill["id"]);
                                                        $ttdh = get_ttdh($bill['bill_status']);
                                                        $xoa_bill = "index.php?act=xoa_bill&id=" . $id;
                                                        $sua_bill = "index.php?act=sua_bill&id=" . $id;
                                 echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $bill['id'] . '</td>
                                    <td>'.$kh.'</td>
                                    <td>' . $count . '</td>
                                    <td>$' . $bill['tongdonhang']  . '</td>
                                    <td>' . $bill['ngaydathang']  . '</td>
                                    <td>' . $ttdh . '</td>
                                    <td>
                                    <a href="'.$sua_bill.'"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="'.$xoa_bill.'"><input class="btn btn-primary btn-sm edit" type="button" value="Xóa"></a>
                                    </td>
                                    </tr>';
                                                }
                                                ?>
                                        </table>
                                </div>
                                <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                                <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                                <input class="btn btn-save" type="button" value="Xóa Các Mục Đã Chọn">
                                
                        </div>
                </div>
        </div>
</main>