<?php
function bill_chi_tiet($listbill){
        global $image_path;
        $tong = 0;
        $i=0;
        echo'<tr>

        <th>Hình</th>
        <th>Tên sản phẩm</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th>Thành tiền ($)</th>


</tr>';
        foreach ($listbill as $cart) {
                $hinh = $image_path . $cart['image'];
                $tong+=$cart['thanhtien'];
                
                  echo '
                <tr>    
                                          
                <td class="image-cart"><img src="' . $hinh . '" alt=""></td>
                <td>' . $cart['name'] . '</td>
                <td>' . $cart['price'] . '</td>
                <td>' . $cart['soluong'] . '</td>
                <td>
                        <div class="total">' . $cart['thanhtien'] . '</div>
                </td>
        </tr>';
   $i+=1;
        }
        echo '<tr>
        <th colspan="4">Tổng đơn hàng</th>
        <th>
                <div class="th-total">' . $tong . '</div>
        </th>

</tr> ';

}
function tongdonhang()
{
        $tong = 0;

        foreach ($_SESSION['mycart'] as $cart) {
                $ttien = $cart[3] * $cart[4];
                $tong = $tong + $ttien;
        }
        return $tong;
}

function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
        $sql = "insert into bill (iduser,bill_name, bill_email, bill_address, bill_tel,bill_pttt, ngaydathang, tongdonhang ) values('$iduser','$name', '$email', '$address', '$tel','$pttt', '$ngaydathang', '$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro,$image, $name, $price, $soluong, $thanhtien, $idbill)
{
        $sql = "insert into cart (iduser, idpro,image, name, price,soluong, thanhtien, idbill ) values('$iduser', '$idpro','$image', '$name', '$price','$soluong', '$thanhtien', '$idbill')";
         pdo_execute($sql);
}
function loadone_bill($id)
{
        $sql = "SELECT * FROM bill WHERE id=" . $id;
        $bill = pdo_query_one($sql);
        return $bill;
}
function loadall_bill($iduser)
{
        $sql = "SELECT * FROM bill WHERE 1" ;
        if($iduser>0) $sql.=" AND iduser=" . $iduser;
        $sql.=" order by id desc";
        $listbill = pdo_query($sql);
        return $listbill;
}

function loadall_cart($idbill)
{
        $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
        $bill = pdo_query($sql);
        return $bill;
}
function loadall_cart_count($idbill)
{
        $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
        $bill = pdo_query($sql);
        return sizeof($bill);
}
function delete_bill($id)
{
        $sql = "DELETE FROM cart WHERE idbill =" . $id;
        pdo_execute($sql);

    $sql = "DELETE FROM bill WHERE id =" . $id;
    pdo_execute($sql);
}

function get_ttdh($n)
{
        switch ($n) {
                case '0':
                        $tt = "Chờ xác nhận";
                        break;
                case '1':
                        $tt = "sản phẩm đang được đóng gói";
                        break;
                case '2':
                        $tt = "sản phẩm đã được gửi đi";
                        break;
                case '4':
                        $tt = "đã giao hàng thành công";
                        break;

                default:
                $tt = "Chờ xác nhận";
                        break;
        }
        return $tt;
}

function get_pttt($t)
{
        switch ($t) {
                case '1':
                        $pt = "Trả tiền sau khi nhận hàng	";
                        break;
                case '2':
                        $pt = "chuyển khoản ngân hàng	";
                        break;
                case '3':
                        $pt = "thanh toán online";
                        break;

                default:
                        break;
        }
        return $pt;
}
