<main class="app-content">
        <div class="row">
                <div class="col-md-12">
                        <div class="tile">
                                <h3 class="tile-title">Danh sách khách hàng</h3>
                                <div class="tile-body">
                                        <table class="table table-hover table-bordered" id="sampleTable">
                                                <thead>
                                                        <tr>
                                                                <th>ID</th>
                                                                <th>Tên khách hàng</th>
                                                                <th>Mật khẩu</th>
                                                                <th>Email</th>
                                                                <th>Tel</th>
                                                                <th>Address</th>
                                                                <th>Role</th>
                                                                <th>Tính năng</th>
                                                        </tr>
                                                </thead>
                                                <?php
                                                foreach ($list_client as $client) {
                                                        extract($client);
                                                        $sua_client = "index.php?act=sua_client&id=" . $ID;
                                                        $xoa_client = "index.php?act=xoa_client&id=" . $ID;
                                                        echo '<tr>
                                    <td>' . $ID . '</td>
                                    <td>' . $User . '</td>
                                    <td>' . $Password . '</td>
                                    <td>' . $Email . '</td>
                                    <td>' . $Tel . '</td>
                                    <td>' . $Address . '</td>
                                    <td>' . $Role . '</td>
                                    <td>
                                    <a href="' . $sua_client . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="' . $xoa_client . '"><input class="btn btn-primary btn-sm edit" type="button" value="Xóa"></a>
                                    </td>
                                    </tr>';
                                                }
                                                ?>
                                        </table>
                                </div>
                                <input type="hidden" name="id" value="<?php echo "$ID" ?>">
                        </div>
                </div>
        </div>
</main>