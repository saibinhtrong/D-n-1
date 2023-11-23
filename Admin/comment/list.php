
    <main class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Thống kê bình luận</h3>
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Commner</th>
                                    <th>User</th>
                                    <th>ID_SP</th>
                                    <th>Date</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($list_comment as $commnet) {
                                extract($commnet);
                                $xoa_bl = "index.php?act=xoa_bl&id=" . $ID;

                                echo '<tr>
                                    <td>' . $ID . '</td>
                                    <td> ' . $content . ' </td>
                                    <td> ' . $ID_user . ' </td>
                                    <td> ' . $ID_pro . ' </td>
                                    <td> ' . $Date . ' </td>
                                    <td>
                                    <a href="' . $xoa_bl . '"><input class="btn btn-primary btn-sm edit" type="button" value="Xóa"></a>
                                    </td>
                                    </tr>';
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

