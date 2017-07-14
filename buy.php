<?php include __DIR__ . '/__connect_db.php';

if (!isset($_SESSION['user'])) {
    header('Location: cart_list.php');
    exit;
}
$pname = 'check_list';
if (empty($_SESSION['cart'])) {
    header('Location: product_list.php');
    exit;
}

$sids = array_keys($_SESSION['cart']);
$sql = sprintf("SELECT * FROM `product` WHERE `sid` IN (%s) ", implode(',', $sids));
$result = $mysqli->query($sql);

$totalPrice = 0;

$cart_data = array();

while ($row = $result->fetch_assoc()) {
    $row['qty'] = $_SESSION['cart'][$row['sid']];
    $p_data[$row['sid']] = $row;

}


//$sql = "INSERT INTO `orders`(
//          `member_sid`, `amount`, `order_date`
//        ) VALUES (
//            {$_SESSION['user']['sid']},
//            $totalPrice,
//            NOW()
//        )";
//$mysqli->query($sql);
//$order_sid = $mysqli->insert_id;
//取得訂單編號

//
////foreach($sids as $sid){
////    $sql = "INSERT INTO `order_details`(
////              `order_sid`, `product_id`,  `product_name`, `price`, `qty`
////            ) VALUES (
////                $order_sid,
////                $sid,
////                {$p_data[$sid]['product_name']},
////                {$p_data[$sid]['price']},
////                {$p_data[$sid]['qty']}
////            )";
////
////    $mysqli->query($sql);
//}
//
////unset($_SESSION['cart']); //清空購物車

?>


<?php
// 電子地圖
define('HOME_URL', 'http://211.23.76.73/logistics_dev');
require('AllPay.Logistics.Integration.php');
try {
    $AL = new AllpayLogistics();
    $AL->Send = array(
        'MerchantID' => '2000132',
        'MerchantTradeNo' => 'no'. date('YmdHis'),
        'LogisticsSubType' => LogisticsSubType::UNIMART,
        'IsCollection' => IsCollection::NO,
        'ServerReplyURL' => HOME_URL . 'http://www.sample.com.tw/ServerReplyURL.php',
        'ExtraData' => '歐付寶測試額外資訊',
        'Device' => Device::PC
    );
    // CvsMap(Button 名稱, Form target)
    $html = $AL->CvsMap('電子地圖(統一)');
    echo $html;
} catch(Exception $e) {
    echo $e->getMessage();
}
?>


<?php include __DIR__ . '/__html_head.php' ?>
<div class="container">
    <?php include __DIR__ . '/__navbar.php' ?>

    <div class="alert alert-danger" role="alert">謝謝購買</div>
    <div class="col-md-12">
        <table>
            <thead>
            <tr>
                <th>書名</th>
                <th>數量</th>
                <th>單價</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($sids as $sid):
                $row = $p_data[$sid];
                $totalPrice += $row['qty'] * $row['price'];
                ?>
                <tr data-sid="<?= $row['sid'] ?>">
                    <td><img src="imgs/small/<?= $row['product_id'] ?>.jpg"</td>
                    <td> <?= $row['product_name'] ?> </td>
                    <td>  <?= $row['qty'] ?> </td>
                    <td>  <?= $row['price'] ?> </td>
                </tr>
            <?php endforeach; ?>
            </tbody>


        </table>
        <div class="total col-md-offset-6 col-md-6">總價
            <tr> <?= $totalPrice ?> </tr>
        </div>
    </div>


    <table class="payment-form col-md-offset-4 col-md-4 col-md-offset-4">
        <thead>
        <tr>
            <th>請選擇購買方式</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td> 信用卡
                <input type="radio" name="payment" value="visa" id="visa">
            </td>
            <td> 超商到貨付款
                <input type="radio" name="payment" value="store" id="store">
            </td>
        </tr>
        </tbody>
    </table>
    <br><br>
    <div class="col-md-offset-3 col-md-6 visa-pay">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">寄送資料</h3></div>
                <div class="panel-body">

                    <form name="form1" method="post" onsubmit="return checkForm();">
                        <div class="sender">
                            <label for="s.person">寄件人</label>
                            <div><input type="text" name="sender" value=""></div>
                        </div>
                        <div class="s.phone">
                            <label for="s.phone">電話</label>
                            <div><input type="text" name="s.phone" value=""></div>
                        </div>
                        <div >
                            <label for="s.shipping.address" class="s.address">地址</label>
                            <div><input type="text" name="s.shipping.address" value=""></div>
                        </div>
                        <div >
                            <label for="s.shipping.number" class="s.number">信用卡號</label>
                            <div><input type="text" name="s.card.number" value=""></div>
                        </div>
                        <div >
                            <label for="s.shipping.expire.date" class="s.expire.date">到期日</label>
                            <div><input type="text" name="s.expire.date" value=""></div>
                        </div>
                        <div>
                            <label for="s.shipping.codes" class="s.codes">後三碼</label>
                            <div><input type="text" name="s.codes" value=""></div>
                        </div>

                        <input type="checkbox" onclick="same(this.form)" name="billingto">同上</input>

                        <div class="panel-heading"><h3 class="panel-title"></h3></div>
                        <div >
                            <label for="s.person" class="receiver">收件人</label>
                            <div><input type="text" name="receiver" value=""></div>
                        </div>
                        <div >
                            <label for="r.phone" class="r.phone">電話 </label>
                            <div><input type="text" name="r.phone" value=""></div>
                        </div>
                        <div >
                            <label for="r.address" class="r.address">地址 </label>
                            <div><input type="text" name="r.address" value=""></div>
                        </div>
                        <div>
                            <label for="r.card.number" class="r.card.number>"信用卡號</label>
                            <div><input type="text" name="r.card.number" value=""></div>
                        </div>
                        <div >
                            <label for="s.expire.date" class="r.expire.date">到期日</label>
                            <div><input type="text" name="r.expire.date" value=""></div>
                        </div>
                        <div>
                            <label for="s.codes"  class="r.codes">後三碼</label>
                            <div><input type="text" name="r.codes" value=""></div>
                        </div>

                    </form>


                </div>
            </div>

        </div>


    </div>

    </tbody>
    </table>


</div>
<script>


</script>
<?php include __DIR__ . '/__html_foot.php' ?>


