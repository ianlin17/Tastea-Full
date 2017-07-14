<?php require __DIR__ . '/__connect_db.php'; ?>
<html lang="en">
<?php
require __DIR__ . '/__connect_db.php';
$pname = 'cart_list';
if (!empty($_SESSION['cart'])) {
    $sids = array_keys($_SESSION['cart']);
    $sql = sprintf("SELECT * FROM `product` WHERE `sid` IN (%s)", implode(',', $sids));
    $rs = $mysqli->query($sql);
    $cart_data = array();
    while ($row = $rs->fetch_assoc()) {
        $row['qty'] = $_SESSION['cart'][$row['sid']];
        $cart_data[$row['sid']] = $row;
    }
}
$total = 0;
$qtytotal = 0;
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;">
    <title>購物明細</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/colorbox.css" />
    <link rel="stylesheet" href="cartlist01.css">

</head>
<body>


<header class=" banner area01 ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12  col-sm-12">
                <img   src=""  alt="">
            </div>
        </div>
    </div>
</header>
<?php include __DIR__ . '/_navbar.php' ?>
<div class="container">
    <div class="row">
        <?php if (!empty($_SESSION['cart'])): ?>
        <div class="area02 brand col-lg-8 col-lg-offset-2 hidden-sm hidden-xs">
            <ul>
                <li><img  src="images/carticon_05.png" alt=""></li>
                <li class="scrollicon"><img src="images/carticon_41.png" alt=""></li>
                <li><img  src="images/carticon_07.png" alt=""></li>
                <li class="scrollicon"><img  src="images/carticon_41.png" alt=""></li>
                <li><img  src="images/carticon_09.png" alt=""></li>
                <li class="scrollicon"><img  src="images/carticon_41.png" alt=""></li>
                <li class="endicon"><img  src="images/carticon_42.png" alt=""></li>
            </ul>
        </div> <!--area02-->

        <!--RWD brand-min-->
        <div class="area02-min brand col-sm-12 hidden-lg">
            <ul>
                <li><img  src="images/carticon_05.png" style="width: 100%;" alt=""></li>
                <li class="scrollicon"><img src="images/carticon_41.png" style="width: 100%; alt=""></li>
                <li><img  src="images/carticon_07.png" style="width: 100%;" alt=""></li>
                <li class="scrollicon"><img  src="images/carticon_41.png" style="width: 100%; alt=""></li>
                <li><img  src="images/carticon_09.png" style="width: 100%;" alt=""></li>
                <li class="scrollicon"><img  src="images/carticon_41.png" style="width: 100%; alt=""></li>
                <li class="endicon"><img  src="images/carticon_42.png" style="width: 100%; alt=""></li>
            </ul>
        </div> <!--area02-->
        <!--RWD brand-min-->


            <div class="area03 col-lg-10 col-lg-offset-1">
                <table class=" table">
                    <tbody>
                    <tr>
                        <th>勾選</th>
                        <th>商品明細</th>
                        <th class="spec">價格</th>
                        <th class="spec">數量</th>
                        <th class="spec">小計</th>
                    </tr>
                    <?php foreach ($sids as $sid):
                        $row = $cart_data[$sid];
                        $total += $row['qty'] * $row['price'];
                        $qtytotal += $row['qty'];
                        ?>
                        <tr data-sid="<?= $row['sid'] ?>">
                            <td data-th="勾選" class="radio-padd" style="padding-top: 90px;">
                                <div class="delete-icon remove_item hidden-sm hidden-xs" style="width: 50px;padding-left: 30px;"><a href=""></a></div>
                                <!--RWD 刪除-->
                                <div class="delete-icon remove_item hidden-lg" style="width: 50px;"><a href=""></a></div>
                                <!--RWD 刪除-->

                            </td>
                            <td data-th="商品明細" class="product">
                                <div><img class="img-rounded" src="imgs/small/<?= $row['product_id'] ?>.jpg" alt=""></div>
                                <div style="padding-top: 50px;padding-left: 40px">
                                    <p>品名:&nbsp;<?= $row['product_name'] ?></p>
                                    <p>重量:&nbsp;<?= $row['weight'] ?></p>
                                    <p>包裝方式:&nbsp;<?= $row['package'] ?></p>
                                </div>
                            </td>
                            <td data-th="價格" class="product-price price" style="padding-top: 90px;text-align: center;"><p><?= $row['price'] ?></p></td>
                            <td class="product-num" style="padding-top: 90px;text-align: center;">
                                <input name="buy_num"
                                       onkeyup="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}"
                                       onafterpaste="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}"
                                       id="buy_num" type="text" onblur="checknull(this)" data-qty="<?= $row['qty'] ?>"
                                       class="qty subqty text-center" value="">
                            </td>
                            <td data-th="小計" class="product-total subtotal" style="padding-top: 90px;text-align: center;"><?= $row['qty'] * $row['price'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div> <!--area03-->

            <div class="area04 total col-lg-10 col-lg-offset-1">
                <div class="total-div">
                    <span id="buy_info" style="color:red;display:none;">數量不得為空白!</span>
                    共<p class="total_qty cart_count"><?= $qtytotal ?></p>項商品
                    總金額<p class="total_price"><?= $total ?></p>元
                </div>
            </div> <!--area04-->

                   <!--RWD area04-min-->


        <div class="area05 text-right col-lg-10 col-lg-offset-1 col-sm-12 hidden-sm hidden-xs">
            <div class="next">
                <p class="area05-like">還有喜歡的商品?</p>
                <a href="productlist.php"><img src="images/carticon_40.png" alt=""></a>
                <?php if (isset($_SESSION['user'])): ?>
                <a href="cartlist02.php"><img src="images/carticon_38.png" alt=""></a>
                <?php else: ?>&nbsp;&nbsp;<p style="color: red; font-weight: bolder">登入後才能購買喔!</p>
                <?php endif ?>
            </div>
        </div> <!--area05-->
        <?php else: ?>
        <br><br>
        <div class="alert alert-danger" style="text-align: center" role="alert">購物車裡面是空的拉!</div>
        <br>
        <?php endif; ?>
        <!--RWD area05-min-->
        <div class="area05-min col-sm-12 hidden-lg">
            <div class="next" href="cartlist02.php"><a class="go-check" href="cartlist02.php">結帳</a></div>
            <div class="next" href=""><p class="area05-min-like">還有喜歡的商品?</p></div>
            <div class="next"><a class="go-shop" href="productlist.php">繼續選購</a></div>
        </div> <!--area05-->
        <!--RWD area05-min-->

        <div class="area06 col-lg-10 col-lg-offset-1 hidden-sm hidden-xs">
            <div>
                <p class="text-top"><img src="images/重要提醒.png" alt="">&nbsp;重要提醒</p>
                <p class="text-left"><img src="images/注意事項.png" alt="">&nbsp;商品體積較大或多於15項，可能不適用『7-11取貨』。</p>
                <p class="text-left"><img src="images/注意事項.png" alt="">&nbsp;購物車中的商品只能暫放90天，可暫存的商品品項至多為100項</p>
                <p class="text-left"><img src="images/注意事項.png" alt="">&nbsp;會員資料填寫完整享首次購物免運</p>
            </div>
        </div> <!--area06-->

        <!--RWD area06-min-->
        <div class="area06-min col-sm-12 hidden-lg">
            <div>
                <p class="text-top" style="padding-top: 20px;"><img src="images/重要提醒.png" alt="">&nbsp;重要提醒</p>
                <p class="text-left"><img src="images/注意事項.png" alt="">&nbsp;商品體積較大或多於15項，可能不適用『7-11取貨』。</p>
                <p class="text-left"><img src="images/注意事項.png" alt="">&nbsp;購物車中的商品只能暫放90天，可暫存的商品品項至多為100項</p>
                <p class="text-left"><img src="images/注意事項.png" alt="">&nbsp;會員資料填寫完整享首次購物免運</p>
            </div>
        </div> <!--area06-->
        <!--RWD area06-min-->
    </div> <!--row-->
</div> <!--container-->
<br><br>
<?php include __DIR__ . '/footer.html'; ?>




<script src="http://code.jquery.com/jquery.min.js"></script>
<!--<script src="http://zeptojs.com/zepto.min.js"></script>-->
<!--<script src="bootstrap/js/bootstrap.js"></script>-->

<script src="lib/jquery.colorbox.js"></script>
<script>

    $(window).scroll(function(event){
        var st = $(this).scrollTop();
        console.log(st);
        if(st>200){
            $(".navbar-default .navbar-nav > li > a").css("color","#1C1C1C"),
                $(".navbar-brand img").attr("src","images/logo_b.png"),
                $(".carticon img").attr("src","images/cart-b.png"),
                $(".navbar").input(".navbarInverse");

        }else{
            $(".navbar-default .navbar-nav > li > a").css("color","#FCFAF2"),
                $(".navbar-brand img").attr("src","images/logo_w.png");
        }
    });

    $('.remove_item').click(function(){
        var tr = $(this).closest('tr');
        var sid = tr.attr('data-sid');

        $.get('add_to_cart.php', {sid:sid}, function(data){
            // location.href = location.href;
            tr.remove();
            calc_items(data);
            calc_total_price();
        }, 'json');

    });



    var qty_sels = $('input.qty');
    qty_sels.each(function () {
        var qty = $(this).attr('data-qty');
        $(this).val(qty);
    });

    qty_sels.change(function () {
        var $tr = $(this).closest('tr');
        var sid = $tr.attr('data-sid');
        var qty = $(this).val();
        var price = $tr.find('.price').text();
        var $subqty = $tr.find('.qty');
        var $subtotal = $tr.find('.subtotal');
        var me = $(this);

        $.get('add_to_cart.php', {sid: sid, qty: qty}, function (data) {
            console.log(me);
            $subtotal.text(qty * price);
            $subqty.text();
            calc_items(data);
            calc_total_price();
        }, 'json');
    });
    function calc_total_price() {
        var t = 0;
        $('td.subtotal').each(function () {
            t += parseInt($(this).text());
        });
        $('.total_price').text(t);
    }

    var cart_count = $('.cart_count');
    function calc_items(obj) {
        var total = 0;
        for (var s in obj) {
            total += obj[s];
        }
        cart_count.text(total);
    }

    $(function () {
        $.get('add_to_cart1.php', function (data) {
            calc_items(data);
        }, 'json');
    });

    function checknull(id) {
        var info = $('#buy_info');
        if (! id.value || 0 ) {
            $('.buyit').hide();
            info.show();
            id.focus();
        }
        else {
            $('.buyit').show();

            info.hide();
        }
    }



</script>

</body>
</html>

