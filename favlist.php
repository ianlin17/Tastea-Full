<?php require __DIR__ . '/__connect_db.php'; ?>
<html>
<?php
$fsql = sprintf("SELECT * FROM `fav` AS f INNER JOIN `product` AS p ON f.product_id = p.sid");
$frs = $mysqli->query($fsql);
$fav_data = array($frs);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;">
    <title>追蹤清單</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/colorbox.css">
    <link rel="stylesheet" href="favlist.css">
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
                <li><a  class="active ">我的最愛</a></li>
                <li><a  href="odlist.php">訂單查詢</a></li>
            </ul>
        </nav>
        <?php if (!empty($fav_data)): ?>
        <div class="tabby-content col-lg-8 col-lg-offset-2" id="tab-content">
            <div data-tab="tab2" class="area04">

                    <?php while ($frow = $frs->fetch_assoc()): ?>
                        <table class="rwd-table table table-responsive">
                        <tr>
                            　<th style="padding: 20px auto;">商品明細</th>
                            　<th style="padding: 20px auto;">價格</th>
                            　<th style="padding: 20px auto;">變更明細</th>
                            　</tr>
                        　<tr data-sid="<?= $frow['sid'] ?>">
                            　<td data-th="商品明細" class="product">
                                <div>
                                    <img class="img-rounded" src="imgs/small/<?= $frow['product_id'] ?>.jpg" style="width: 60%;" alt="">
                                </div>
                                <div class="name" style="padding-top: 30px">
                                    <p>品名:&nbsp;</p>
                                    <p><?= $frow['product_name'] ?></p>
                                </div><br>
                                <div>
                                    <p>包裝方式:&nbsp;</p>
                                    <p><?= $frow['package'] ?></p>
                                </div>
                            </td>
                            　<td data-th="價格" class="product-price"><p><?= $frow['price'] ?></p>
                            </td>
                            　<td data-th="變更明細" class="product-change hidden-sm hidden-xs">
                                <button id="cart" class="btn btn-warning btn-md buy_btn" data-sid="<?= $frow['sid'] ?>">
                                    加入購物車
                                </button>
                                <div><a id="delete" class="remove_item" href="">刪除</a></div>
                            </td>

                            <!--RWD 變更明細-min-->
                            <td data-th="變更明細" class="product-change hidden-lg">
                                <div><a id="cart-min" class="buy_btn" data-sid="<?= $frow['sid'] ?>">加入</a></div>
                                <div><a id="delete-min" class="remove_item">刪除</a></div>
                            </td>
                            <!--RWD 變更明細-min-->
                            　</tr>
                    <?php endwhile; ?>
                    </table>
                <?php else: ?>
                    <div class="alert alert-danger" style="text-align: center" role="alert">我的最愛裡面沒有商品!</div>
                <?php endif; ?>
                <div class="maybe-tittle">
                    <div class="col-lg-1 col-sm-2"></div>
                    <div class="title01 col-lg-10  col-sm-8 "></div>
                    <div class="col-lg-1 col-sm-2"></div>
                </div> <!--maybe-title-->
                <div class="col-lg-4 col-xs-6 maybe">
                    <a href="http://localhost/tastea/single-product.php?sid=46"><img style="border:1px solid #C0A264;" src="imgs/small/CC-a1.jpg" alt=""></a>
                    <div class="size01"><a href="http://localhost/tastea/single-product.php?sid=46">炭培黑金茶</a></div>
                    <div class="size02"><a href="http://localhost/tastea/single-product.php?sid=46">NT$1380</a></div>
                </div>
                <div class="col-lg-4 col-xs-6 maybe">
                    <a href="http://localhost/tastea/single-product.php?sid=17"><img style="border:1px solid #C0A264;" src="imgs/small/NB-m1.jpg" alt=""></a>
                    <div class="size01"><a href="http://localhost/tastea/single-product.php?sid=17">有機東方美人茶</a></div>
                    <div class="sicze02"><a href="http://localhost/tastea/single-product.php?sid=17">NT$950</a></div>
                </div>
                <div class="col-lg-4 col-xs-6 maybe">
                    <a href="http://localhost/tastea/single-product.php?sid=24"><img style="border:1px solid #C0A264;" src="imgs/small/NB-t1.jpg" alt=""></a>
                    <div class="size01"><a href="http://localhost/tastea/single-product.php?sid=24">蜜香紅茶</a></div>
                    <div class="size02"><a href="http://localhost/tastea/single-product.php?sid=24">NT$460</a></div>
                </div>
                <div class="col-lg-4 col-xs-6 maybe">
                    <a href="http://localhost/tastea/single-product.php?sid=41"><img style="border:1px solid #C0A264;" src="imgs/small/CB-e1.jpg" alt=""></a>
                    <div class="size01"><a href="http://localhost/tastea/single-product.php?sid=41">極品金萱茶</a></div>
                    <div class="size02"><a href="http://localhost/tastea/single-product.php?sid=41">NT$1300</a></div>
                </div>
                <div class="col-lg-4 col-xs-6 maybe">
                    <a href="http://localhost/tastea/single-product.php?sid=62"><img style="border:1px solid #C0A264;" src="imgs/small/SD-b1.jpg" alt=""></a>
                    <div class="size01"><a href="http://localhost/tastea/single-product.php?sid=62">阿里山紅茶</a></div>
                    <div class="size02"><a href="http://localhost/tastea/single-product.php?sid=62">NT$400</a></div>
                </div>
                <div class="col-lg-4 col-xs-6 maybe">
                    <a href="http://localhost/tastea/single-product.php?sid=58"><img style="border:1px solid #C0A264;" src="imgs/small/SC-a1.jpg" alt=""></a>
                    <div class="size01"><a href="http://localhost/tastea/single-product.php?sid=58">雪映紅茶</a></div>
                    <div class="size02"><a href="http://localhost/tastea/single-product.php?sid=58">NT$750</a></div>
                </div>
            </div> <!--area04-->
        </div>
    </div> <!--row-->
</div> <!--container-->
<br><br>
<?php include __DIR__ . '/footer.html'; ?>

<script src="http://code.jquery.com/jquery.min.js"></script>
<!--<script src="http://zeptojs.com/zepto.min.js"></script>-->
<!--<script src="bootstrap/js/bootstrap.js"></script>-->
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

    $(function () {
        $('.buy_btn').click(function () {
            var sid = $(this).attr('data-sid');
            var qty = 1;
            $.get('add_to_cart.php', {sid: sid, qty: qty}, function (data) {
                alert('商品已加入購物車');
            }, 'json');
        });
    });


    $('.remove_item').click(function () {
        var tr = $(this).closest('tr');
        var sid = tr.attr('data-sid');
        $.get('add_to_fav.php', {sid: sid}, function () {
            tr.remove();
        }, 'json');
    });

</script>
</body>
</html>
