<?php
require __DIR__ . '/__connect_db.php';

$pname = 'cart_list';

if(! empty($_SESSION['cart'])) {

$sids = array_keys($_SESSION['cart']);

$sql = sprintf("SELECT * FROM `product` WHERE `sid` IN (%s)", implode(',', $sids));

//echo $sql;

$rs = $mysqli->query($sql);

$cart_data = array();

while ($row = $rs->fetch_assoc()) {
$row['qty'] = $_SESSION['cart'][$row['sid']];


$cart_data[$row['sid']] = $row;
}

}

?>

<style>
    .remove_item {
        color: red;
        font-size: x-large;
        cursor: pointer;
    }
</style>
<div class="container">
    <?php include __DIR__ . '/_navbar.php'; ?>

    <div class="col-md-12">

        <?php if(! empty($_SESSION['cart'])): ?>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>移除</th>
                    <th>封面</th>
                    <th>書名</th>
                    <th>作者</th>
                    <th>價格</th>
                    <th>數量</th>
                    <th>小計</th>
                </tr>
                </thead>
                <tbody>
                <?php //foreach ($_SESSION['cart'] as $sid=>$qty):
                //$row = $cart_data[$sid];
                $total = 0;
                ?>
                <?php foreach ($sids as $sid):
                    $row = $cart_data[$sid];
                    $total += $row['qty']*$row['price'];
                    ?>
                    <tr data-sid="<?= $row['sid'] ?>">
                        <td><span class="glyphicon glyphicon-remove-sign remove_item" aria-hidden="true"></span></td>
                        <th><img src="imgs/small/<?= $row['book_id'] ?>.jpg" alt=""></th>
                        <td><?= $row['product_name'] ?></td>
                        <td><?= $row['brand_name'] ?></td>
                        <td class="price"><?= $row['price'] ?></td>
                        <td>
                            <select name="" class="qty" data-qty="<?= $row['qty'] ?>">
                                <?php for($i=1; $i<=20; $i++): ?>
                                    <option value="<?=$i?>"><?=$i?></option>
                                <?php endfor ?>
                            </select>

                        </td>
                        <td class="subtotal"><?= $row['qty']*$row['price'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <div class="col-md-12">
                <div class="alert alert-info" role="alert">總計:
                    <strong class="total_price "><?= $total ?></strong></div>
            </div>
            <div class="col-md-12">
                <?php if(isset($_SESSION['user'])): ?>
                    <a href="buy.php" class="btn btn-primary pull-right">結帳</a>
                    <a href="clear.php" class="btn btn-primary pull-right">不買了!</a>
                <?php else: ?>
                    <div class="alert alert-warning" role="alert">
                        請先登入再結帳
                    </div>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">購物車裡面沒有商品!</div>
        <?php endif; ?>


    </div>
</div>
<script>
    $('.remove').click(function(){
        var tr = $(this).closest('tr');
        var sid = tr.attr('data-sid');

        $.get('add_to_cart.php', {sid:sid}, function(data){
            // location.href = location.href;
            tr.remove();
            calc_items(data);
            calc_total_price();
        }, 'json');

    });
    var qty_sels = $('select.qty');

    qty_sels.each(function(){
        var qty = $(this).attr('data-qty');
        $(this).val(qty);
    });

    qty_sels.change(function(){
        var $tr = $(this).closest('tr');
        var sid = $tr.attr('data-sid');
        var qty = $(this).val();
        var price = $tr.find('.price').text();
        var $subtotal = $tr.find('.subtotal');
        var me = $(this);

        $.get('add_to_cart.php', {sid:sid, qty:qty}, function(data){
            console.log(me);
            $subtotal.text(qty*price);
            calc_items(data);
            calc_total_price();
        }, 'json');

    });

    function calc_total_price(){
        var t = 0;
        $('td.subtotal').each(function(){
            t += parseInt( $(this).text() );
        });
        $('.total_price').text( t );
    }

</script>
<?php include __DIR__ . '/footer.html'; ?>