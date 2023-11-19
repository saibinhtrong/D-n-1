
<style>
    .wrapper {
        height: 50px;
        width: 215px;
        position: relative;
        /* background: linear-gradient(135deg, #14ffe9, #ffeb3b, #ff00e0); */
        border-radius: 10px;
        cursor: default;
        animation: animate 3.5s linear infinite;
    }

    .wrapper .display,
    .wrapper span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .wrapper .display {
        z-index: 999;
        height: 40px;
        width: 200px;
        /* background: #1b1b1b; */
        border-radius: 6px;
        text-align: center;
    }

    .display #time {
        line-height: 40px;
        color: #fff;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 1px;
        color: black;
        text-shadow: 0 0 10px pink;
        /* background: linear-gradient(135deg, #14ffe9, #ffeb3b, #ff00e0);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; */
        animation: animate 3.5s linear infinite;
    }

    /* @keyframes animate {
        100% {
            filter: hue-rotate(360deg);
        }
    } */

    .wrapper span {
        height: 100%;
        width: 100%;
        border-radius: 10px;
        background: inherit;
    }

    .wrapper span:first-child {
        filter: blur(7px);
    }

    .wrapper span:last-child {
        filter: blur(20px);
    }

    .date_hientai p {
        display: block;
        font-size: 18px;
        text-align: center;
        font-weight: bold;
        padding: 8px;
    }
</style>
<div class="row magin ">
    <div class="title">
        Danh Mục
    </div>
    <div class="contents chill">
        <ul>
            <?php
            foreach ($list_dm_home as $list_home) {
                extract($list_home);
                $link_dm = "index.php?act=product_list&ID_danhmuc=" . $ID_danhmuc;
                echo '<li>
                        <a href="' . $link_dm . '">' . $Ten_danhmuc . '</a>
                             </li>';
            }
            ?>
        </ul>
        <div class="footers searh">
            <form action="index.php?act=product_list" method="post">
                <input name="kyw" type="text" placeholder="Từ khóa tìm kiếm">
                <input name="timkiem" type="submit" value="Tìm Kiếm">
            </form>
        </div>

    </div>

</div>
<div class="row magin">
    <div class="title">
        Top 10
    </div>
    <div class=" row content">
        <?php
        foreach ($list_sp_top as $top) {
            extract($top);
            $images =  $image_path . $Image;
            $link_sp = "index.php?act=product&id_sp=" . $ID;

            echo '<div class="row magin10 top">
                         <img src="' . $images . '" alt="">
                         <a href="' . $link_sp . '">' . $Name . '</a>
                          </div>';
        }

        ?>
    </div>
</div>
<div class="row magin ">
    <div class="title">
        Phụ Kiện
    </div>
    <div class="contents chill">
        <ul>
            <li>
                <a href="#">Phụ kiện Apple</a>
            </li>
            <li>
                <a href="#">Tai nghe</a>
            </li>
            <li>
                <a href="#">Dán màn hình</a>
            </li>
            <li>
                <a href="#">Pin dự phòng</a>
            </li>
            <li>
                <a href="#">Chuôt, bàn phím</a>
            </li>
            <li>
                <a href="#">Ổ cứng di động</a>
            </li>
            <li>
                <a href="#">Camera hành trình</a>
            </li>
            <li>
                <a href="#">Sim số đẹp</a>
            </li>
          
            <li>
                <a href="#">Gaming Gear</a>
            </li>
            <li>
                <a href="#">Thẻ nhớ, USB</a>
            </li>
            <li>
                <a href="#">Cáp sạc</a>
            </li>
        </ul>
        <div class="footers searh">
            <form action="index.php?act=product_list" method="post">
                <input name="kyw" type="text" placeholder="Từ khóa tìm kiếm">
                <input name="timkiem" type="submit" value="Tìm Kiếm">
            </form>
        </div>
    </div>
</div>
