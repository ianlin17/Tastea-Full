<?php
require __DIR__ . '/__connect_db.php';

//if (!isset($_SESSION['fav'])) {
//    $_SESSION['fav'] = array();
//}

if (isset($_GET['sid'])) {

    $sid = intval($_GET['sid']);
    $sql = sprintf("DELETE FROM `fav` WHERE `product_id`=$sid");
    $rs = $mysqli->query($sql);
    unset($_SESSION['fav'][$sid]);
};



// echo $mysqli->insert_id;
//$fav_sid = $mysqli->insert_id;


//echo json_encode($_SESSION['fav']); // 查詢