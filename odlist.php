<?php require __DIR__ . '/__connect_db.php'; ?>
<html>
<?php
$dsql = sprintf("SELECT * FROM `orderingo` AS g JOIN `order_details` AS d ON g.info_member_sid = d.od_member_sid JOIN `orders` AS o ON g.info_order_sid  = o.sid");
$osql = sprintf("SELECT * FROM `orders` o 
JOIN `orderingo` g ON o.sid=g.info_order_sid
WHERE o.`member_sid` = %s", $_SESSION['user']['id']);
$drs = $mysqli->query($dsql);
$ors = $mysqli->query($osql);

$order_data = array($drs);
$ars = $mysqli->query($dsql);
$arow = $ars->fetch_assoc();
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=0.8, user-scalable=0">
    <meta charset="UTF-8">
    <title>會員中心</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrapDatepickr-1.0.0.css">
    <link rel="stylesheet" href="css/colorbox.css">
    <link rel="stylesheet" href="odlist.css">
</head>
<body>
<header class="container-fluid banner area01">
    <div class="bannerimg row"><img class="col-lg-12 col-sm-12" src="" alt=""></div>
</header>
<?php include __DIR__ . '/_navbar.php' ?>
<div class="container">
    <div class="row">

            <nav id="tabby-1" class="tabby-tabs area02 col-lg-8 col-lg-offset-2">
                <ul>
                 <li><a  href="memberlist.php">個人資訊</a></li>
                    <li><a  href="favlist.php">我的最愛</a></li>
                    <li><a class="active ">訂單查詢</a></li>
                </ul>
            </nav>
        <div class="tabby-content col-lg-8 col-lg-offset-2" id="tab-content">

            <div data-tab="tab3" class="area05">

                <div class="cal">
                    <ul class="control-group hidden-sm hidden-xs">
                        <li><input type="text" id="calendar1" class="form-control"></li>
                    </ul>
                </div>

                <!--RWD calendar1-->
                <div class="cal-min">
                    <ul class="control-group rwdul hidden-lg">
                        <li><input type="text" id="calendar1-min" class="form-control"></li>
                    </ul>
                </div>
                <!--RWD calendar1-->

                <?php while ($o_r = $ors->fetch_assoc()):
                $d_sql = "SELECT * FROM  `order_details` WHERE order_sid={$o_r['sid']}";
                $drs = $mysqli->query($d_sql);
                ?>
                    <div class="the-time hidden-sm hidden-xs">
            <span>
              <div class="the-time-a"><img src="images/orderdate_03.png"  alt=""></div>
              <div class="the-time-b"><?= $o_r['order_date'] ?></div>
            </span>
                    </div>

                    <!--RWD the-time-->
                    <div class="the-time-min hidden-lg">
                        <div class="the-time-a-min">訂單日期</div>
                        <div class="the-time-b-min"><?= $arow['order_date'] ?></div>
                    </div>

                    <!--RWD the-time-->

                    <table class="rwd-table table table-responsive" style="border: 2px solid #C0A264;">
                        <tbody>
                        <tr class="project">
                            <th>商品明細</th>
                            <th>數量</th>
                            <th>價格</th>
                        </tr>
                        </tbody>
                    </table>

                    <table  class="rwd-table table table-responsive" style="border: 2px solid #C0A264;">

                        <tbody>
                        <?php while ($drow = $drs->fetch_assoc()): ?>
                        　<tr>
                            　<td data-th="商品明細" class="product"><p><?= $drow['product_name'] ?></p></td>
                            　<td data-th="數量" class="product-howmany"><p><?= $drow['qty'] ?></p></td>
                            <td data-th="價格" class="product-price"><p><?= $drow['price'] ?></p></td>
                        </tr>
                        <?php endwhile; ?>
                        </tbody>
                    </table>
                    <div class="total">
                        <p>共&nbsp;<?= $o_r['totalqty'] ?>&nbsp;項產品</p><br>
                        <p>總金額: <?= $o_r['total'] ?></p>
                        <p>配送方式:<?= $o_r['delivery'] ?></p>
                        <p>付款方式:<?= $o_r['payment'] ?></p>
                        <p>寄送地址:<?= $o_r['address'] ?></p>
                    </div>
                <?php endwhile ?>
            </div> <!--area05-->
        </div>
    </div> <!--row-->
</div> <!--container-->


<?php include __DIR__ . '/footer.html'; ?>

<script src="lib/bootstrapDatepickr-1.0.0.min.js"></script>
<!--<script src="lib/jquery.tabby.js"></script>-->

<script>

    $(window).scroll(function (event) {
        var st = $(this).scrollTop();
        if (st > 200) {
            $(".navbar .navbar-nav > li > a").css("color", "#1C1C1C");
            $(".navbar-brand img").attr("src", "images/logo_b.png");
            $(".carticon img").attr("src", "images/cart-b.png");
            $(".navbar").addClass("navbar-default");

            $(".navbar .navbar-brand-min img").attr("src", "images/logo-b-min.png");

        } else {
            $(".navbar .navbar-nav > li > a").css("color", "#FCFAF2");
            $(".carticon img").attr("src", "images/cart-w.png");
            $(".navbar-brand img").attr("src", "images/logo_w.png");
            $(".navbar").removeClass("navbar-default");

            $(".navbar .navbar-brand-min img").attr("src", "images/logo-w-min.png");

        }
    });
</script>
</body>
</html>