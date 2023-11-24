<main class="app-content">
        <div class="row">
                <div class="col-md-12">
                        <div class="tile">
                                <h3 class="tile-title">Biểu đồ</h3>
                                <div class="tile-body">
                                        <div class="chart">
                                                <script src="https://www.gstatic.com/charts/loader.js"></script>
                                                <div id="myChart" style="width:100%; max-width:600px; height:470px;">
                                                </div>
                                                <script>
                                                        google.charts.load('current', {
                                                                'packages': ['corechart']
                                                        });
                                                        google.charts.setOnLoadCallback(drawChart);

                                                        function drawChart() {
                                                                // Set Data
                                                                const data = google.visualization.arrayToDataTable([
                                                                        ['Contry', 'Mhl'],
                                                                        <?php
                                                                        $tongdm = count($list_statistical);
                                                                        $i = 1;
                                                                        foreach ($list_statistical as $thongke) {
                                                                                extract($thongke);
                                                                                if ($i == $tongdm) $dauphay = "";
                                                                                else $dauphay = ",";
                                                                                echo "['" . $thongke['Tendm'] . "'," . $thongke['CountSP'] . "]" . $dauphay;
                                                                                $i += 1;
                                                                        }
                                                                        ?>
                                                                ]);
                                                                // Set Options
                                                                const options = {
                                                                        title: 'Thống kê sản phẩm theo danh mục'
                                                                };
                                                                // Draw
                                                                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                                                                chart.draw(data, options);
                                                        }
                                                </script>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</main>
<main class="app-content">
        <div class="row">
                <div class="col-md-12">
                        <div class="tile">
                                <h3 class="tile-title">Thống kê sản phẩm</h3>
                                <div class="tile-body">
                                        <table class="table table-hover table-bordered" id="sampleTable">
                                                <thead>
                                                        <tr>
                                                                <th>Mã danh mục</th>
                                                                <th>Tên danh mục</th>
                                                                <th>Số lượng</th>
                                                                <th>Giá cao nhất</th>
                                                                <th>Giá thấp nhất</th>
                                                                <th>Giá Trung bình</th>
                                                        </tr>
                                                </thead>
                                                <?php
                                                foreach ($list_statistical as $thongke) {
                                                        extract($thongke);
                                                        echo '<tr>
                                    <td>' . $madm . '</td>
                                    <td> ' . $Tendm . ' </td>
                                    <td> ' . $CountSP . ' </td>
                                    <td> ' . $minPrice . ' </td>
                                    <td> ' . $maxPrice . ' </td>
                                    <td> ' . $avgPrice . ' </td>
                                    </tr>';
                                                }
                                                ?>
                                        </table>
                                </div>
                        </div>
                </div>
        </div>
</main>