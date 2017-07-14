<?php
session_start();


if(! isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}



if(isset($_GET['sid'])){
    $sid = intval($_GET['sid']);
    $qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0;

    if($qty==0){
        unset($_SESSION['cart'][$sid]); // 刪除項目




    } else {
        $_SESSION['cart'][$sid] = $qty; // 設定
    }

}

echo json_encode($_SESSION['cart']); // 查詢



// 三個功能: 查詢, 設定, 刪除項目


