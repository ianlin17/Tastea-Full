<?php
require __DIR__ . '/__connect_db.php';



//if (!isset($_SESSION['fav'])) {
//    $_SESSION['fav'] = array();
//}

if (isset($_GET['sid'])) {
    $sid = intval($_GET['sid']);
    $_SESSION['fav'][$sid] = $sid;

    $success = false;


    $sql = sprintf("INSERT INTO `fav`(`sid`,
    `product_id`, `member_sid`
    ) VALUES (NULL, %s, %s
    )",
        $sid,
        intval($_SESSION['user']['id'])
    );

    $success = $mysqli->query($sql);
    header("Refresh:0");

}

echo json_encode($_SESSION['fav']); // 查詢