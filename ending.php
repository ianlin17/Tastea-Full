<?php
require __DIR__ . '/__connect_db.php';

if(! isset($_SESSION['user'])){
header('Location: cart_list.php');
exit;
}

if(empty($_SESSION['cart'])){
header('Location: product_list.php');
exit;
}

$sids = array_keys($_SESSION['cart']);
$sql = sprintf("SELECT * FROM `product` WHERE `sid` IN (%s) ", implode(',', $sids));
$result = $mysqli->query($sql);
$p_data = array();

$totalPrice = 0;
$totalqty = 0;
while($row=$result->fetch_assoc()){
$row['qty'] = $_SESSION['cart'][$row['sid']];
$p_data[$row['sid']] = $row;
$totalPrice += $row['qty']*$row['price'];
$totalqty +=  $row['qty'];
}


$osql = sprintf("INSERT INTO `orders`(`sid`,
`member_sid`, `amount`, `order_date`
) VALUES (
NULL, %s, %s, NOW())",
intval($_SESSION['user']['id']),
    $totalPrice
);
$mysqli->query($osql);
$order_sid = $mysqli->insert_id; //取得訂單編號


foreach($_SESSION['cart'] as $sid=>$qty){


    $dsql = sprintf("INSERT INTO `order_details`(`sid`,
    `order_sid`, `product_sid`,`product_name`, `price`, `qty`, `od_member_sid`
    ) VALUES (NULL, %s, %s, '%s', %s, %s, %s
    )",
    $order_sid,
    $sid,
    $p_data[$sid]['product_name'],
    $p_data[$sid]['price'],
    $p_data[$sid]['qty'],
        intval($_SESSION['user']['id'])
    );

    $mysqli->query($dsql);

}
$success = false;
$address = $_SESSION['orderinfo']['address'] ;
$payment = $_SESSION['orderinfo']['payment'] ;
$delivery = $_SESSION['orderinfo']['delivery'] ;


$isql = sprintf("INSERT INTO `orderingo`(`sid`,
    `info_member_sid`, `totalqty`,`total`, `delivery`, `payment`, `address`,`info_order_sid`
    ) VALUES (NULL, %s, %s, %s, '%s', '%s','%s', %s
    )",
    intval($_SESSION['user']['id']),
    $totalqty,
    $totalPrice,
    $delivery,
    $payment,
    $address,
    $order_sid

);
$order_sid = $mysqli->insert_id;
$success = $mysqli->query($isql);


unset($_SESSION['cart']); //清空購物車

?>
<head>
<!--    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">-->
    <link rel="stylesheet" href="css/colorbox.css" />
    <link rel="stylesheet" href="ending.css" />
</head>
<body>
<div id='finish_content' style='height:300px; padding:10px;border: 3px solid #C0A264; border-radius: 10px; box-shadow: 10px 5px 5px #1C1C1C blur ;overflow-x: hidden; '>

    <div class="check-img" style="margin-top: 50px"><img src="images/finish02.png" alt=""></div>

    <div class="check-word" style="margin-top: 50px"><p>完成訂購</p></div>
</div>

<script>
//    setTimeout(function(){
//        window.parent.parent.location.reload("./");
//    }, 2000)
</script>

</body>