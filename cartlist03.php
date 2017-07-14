<html lang="en">
<?php
require __DIR__ . '/__connect_db.php';
$pname = 'cart_list2';
if (!empty($_SESSION['cart'])) {
    $sids = array_keys($_SESSION['cart']);
    $sql = sprintf("SELECT * FROM `product` WHERE `sid` IN (%s)", implode(',', $sids));
    $rs = $mysqli->query($sql);
    $cart_data = array();
    while ($row = $rs->fetch_assoc()) {
        $row['qty'] = $_SESSION['cart'][$row['sid']];
        $cart_data[$row['sid']] = $row;}}
$total = 0;
$qtytotal = 0;
////上面是物品

$contact = $_SESSION['orderinfo']['contact'];
$email = $_SESSION['orderinfo']['email'] ;
$mobile = $_SESSION['orderinfo']['mobile'] ;
$address = $_SESSION['orderinfo']['address'] ;
$payment = $_SESSION['orderinfo']['payment'] ;
$delivery = $_SESSION['orderinfo']['delivery'] ;

?>
<head>
    <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;">
    <meta charset="UTF-8">
    <title>最後確認</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/colorbox.css" />
    <link rel="stylesheet" href="cartlist03.css">
</head>


<body>
<header class=" banner area01 ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12  col-sm-12">
                <img src=""  alt="">
            </div>
        </div>
    </div>
</header>
<?php include __DIR__ . '/_navbar.php' ?>

<div class="container">
    <div class="row">

        <div class="area02 brand col-lg-8 col-lg-offset-2 hidden-xs">
            <ul>
                <li><img  src="images/carticon_14.png" alt=""></li>
                <li class="scrollicon"><img src="images/carticon_41.png" alt=""></li>
                <li><img  src="images/carticon_07.png" alt=""></li>
                <li class="scrollicon"><img  src="images/carticon_41.png" alt=""></li>
                <li><img  src="images/carticon_18.png" alt=""></li>
                <li class="scrollicon"><img  src="images/carticon_41.png" alt=""></li>
                <li class="endicon"><img  src="images/carticon_42.png" alt=""></li>
            </ul>
        </div> <!--area02-->

        <!--RWD brand-min-->
        <div class="area02-min brand col-xs-12 hidden-lg">
            <ul>
                <li><img  src="images/carticon_14.png" style="width: 100%;" alt=""></li>
                <li class="scrollicon"><img src="images/carticon_41.png" style="width: 80%; alt=""></li>
                <li><img  src="images/carticon_07.png" style="width: 100%;" alt=""></li>
                <li class="scrollicon"><img  src="images/carticon_41.png" style="width: 80%; alt=""></li>
                <li><img  src="images/carticon_18.png" style="width: 100%;" alt=""></li>
                <li class="scrollicon"><img  src="images/carticon_41.png" style="width: 80%; alt=""></li>
                <li class="endicon"><img  src="images/carticon_42.png" style="width: 80%; alt=""></li>
            </ul>
        </div> <!--area02-->
        <!--RWD brand-min-->

        <div class="area03 col-lg-10 col-lg-offset-1">

            <div class="title hidden-xs">
                <div><img src="images/cartlist03icon_03.png" alt=""></div>
            </div> <!--title-->

            <!--RWD title-->
            <div class="title-min hidden-lg">
                <div><img src="images/cartlist03icon_03.png" alt=""></div>
            </div> <!--title-->
            <!--RWD title-->

            <table class=" table-bordered">
                <tbody>
                <tr>
                    <th>商品明細</th>
                    <th>價格</th>
                    <th>數量</th>
                    <th>小計</th>
                </tr>
                <?php foreach ($sids as $sid):
                $row = $cart_data[$sid];
                $total += $row['qty'] * $row['price'];
                $qtytotal += $row['qty'];
                ?>
                <tr data-sid="<?= $row['sid'] ?>">
                    <td data-th="商品明細" class="product">
                        <div>
                            <p>品名:&nbsp;</p>
                            <p><?= $row['product_name'] ?></p>
                        </div>
                    </td>
                    <td data-th="價格" class="product-price"><p><?= $row['price'] ?></p></td>
                    <td data-th="數量" class="product-num">
                        <input disabled="" name="buy_num" id="buy_num" type="text" class="form-control text-center" value="<?= $row['qty'] ?>">
                    </td>
                    <td data-th="小計" class="product-total"><?= $row['qty'] * $row['price'] ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div> <!--area03-->

        <div class="area04 total col-lg-10 col-lg-offset-1">
            <div class="total-div">
                <p>共 &nbsp;<?= $qtytotal ?>&nbsp;項商品</p>
                <p>總金額 &nbsp;<?= $total ?>&nbsp;元</p>
            </div>
        </div> <!--area04-->

        <div class="area05 col-lg-10 col-lg-offset-1">

            <div class="title hidden-xs">
                <div><img src="images/cartlist03icon_05.png" alt=""></div>
            </div> <!--title-->

            <!--RWD title-->
            <div class="title-min hidden-lg">
                <div><img src="images/cartlist03icon_05.png" alt=""></div>
            </div> <!--title-->
            <!--RWD title-->

            <table class=" table-bordered">
                <tbody>
                <tr>
                    <td class="infro-title">配送方式</td>
                    <td class="infro-content"><?= $delivery ?></td>
                </tr>
                <tr>
                    <td class="infro-title">付款方式</td>
                    <td class="infro-content"><?= $payment ?></td>
                </tr>
                <tr>
                    <td class="infro-title">姓名</td>
                    <td class="infro-content"><?= $contact ?></td>
                </tr>
                <tr>
                    <td class="infro-title">手機</td>
                    <td class="infro-content"><?= $mobile ?></td>
                </tr>
                <tr>
                    <td class="infro-title">Email</td>
                    <td class="infro-content"><?= $email ?></td>
                </tr>
                <tr>
                    <td class="infro-title">寄送地址</td>
                    <td class="infro-content"><?= $address ?></td>
                </tr>

                </tbody>
            </table>
        </div> <!--area05-->

        <div class="area06 text-right col-lg-10 col-lg-offset-1 hidden-xs">
            <div class="next">
                <a class="up" href="cartlist02.php"><img  src="images/carticon_30.png" alt=""></a>
                <a id="finish" href="ending.php"><img src="images/carticon_33.png" alt=""></a>
            </div>
        </div> <!--area06-->

        <!--area06-min-->
        <div class="area06-min col-xs-12 hidden-lg">
            <div class="next"><a class="go-check" href="ending.php">確認訂單</a></div>
            <div class="next"><a class="go-shop" href="cartlist02.php">上一步</a></div>
        </div> <!--area06-->
        <!--area06-min-->

    </div> <!--row-->
</div> <!--container-->

<!--<div style='display:none; border-radius: 10px '>-->
<!--    <div id='finish_content' style=' padding:10px;border: 3px solid #C0A264; border-radius: 10px; box-shadow: 10px 5px 5px #1C1C1C;overflow-x: hidden; '>-->
<!---->
<!--        <div class="check-img"><img src="images/finish02.png" alt=""></div>-->
<!---->
<!--        <div class="check-word"><p>完成訂購</p></div>-->
<!--    </div>-->
<!--        <div class="click-div">-->
<!--            <ul class="click-ul">-->
<!--                <li><a class="click-a " href="./"><img src="images/finish_03.png" alt=""></a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <script>-->
<!--            setTimeout(function(){-->
<!--                window.parent.location.reload("./");-->
<!--            }, 5000)-->
<!--        </script>-->
<!--</div>-->
<br><br>
<?php include __DIR__ . '/footer.html'; ?>
<script src="lib/jquery-3.1.1.js"></script>
<script src="lib/jquery.colorbox.js"></script>
<script>

    $(window).scroll(function(event){
        var st = $(this).scrollTop();
        console.log(st);
        if(st>200){
            $(".navbar-default .navbar-nav > li > a").css("color","#1C1C1C");
                $(".navbar-brand img").attr("src","images/logo_b.png");
                $(".carticon img").attr("src","images/cart-b.png");
                $(".navbar").input(".navbarInverse");

        }else{
            $(".navbar-default .navbar-nav > li > a").css("color","#FCFAF2");
                $(".carticon img").attr("src","images/cart-w.png");
                $(".navbar-brand img").attr("src","images/logo_w.png");
        }
    });
//    $("#finish").colorbox({iframe:true, innerWidth:450, innerHeight:600});


    $("#finish").click(function (){
        $(this).colorbox({iframe:true, innerWidth:450, innerHeight:450});
        setTimeout(function(){
            window.parent.location.href = 'index.php';
        }, 2000);
    });

//    jQuery('#finish').click(function(){
//        jQuery.colorbox.close();
//        setTimeout(function(){
//        }, 3000);
//        window.parent.location.href = 'index.php';
//    })

</script>
</body>
</html>