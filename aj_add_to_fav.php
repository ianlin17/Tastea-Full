<?php
require __DIR__ . '/__connect_db.php';

//if (!isset($_SESSION['fav'])) {
//    $_SESSION['fav'] = array();
//}



$pid = intval($_GET['pid']);
$change = isset($_GET['c']);

$result = array(
    'pid'=> $pid,
    'c'=> $change,
    'ori'=> '',
    'after'=> ''
);

$sql = sprintf("SELECT * FROM `fav` WHERE `product_id`='%s' AND `member_sid`='%s'",
    $pid,
    $_SESSION['user']['id']
);

$rs = $mysqli->query($sql);

if($row = $rs->fetch_assoc()){
    $result['ori'] = true;
    if($change) {
        $sql = sprintf("DELETE FROM `fav` WHERE `product_id`='%s' AND `member_sid`='%s'",
            $pid,
            $_SESSION['user']['id']
        );
        $mysqli->query($sql);
        $result['after'] = false;
    } else {
        $result['after'] = true;
    }

} else {
    $result['ori'] = false;

    if($change) {
        $sql = sprintf("INSERT INTO `fav`(`sid`, `product_id`, `member_sid`) VALUES (NULL, '%s', '%s')",
            $pid,
            $_SESSION['user']['id']
        );
        $result['check'] = $sql;
        $mysqli->query($sql);
        $result['after'] = true;
	print_r($result);

    } else {
        $result['after'] = false;
    }
}
echo json_encode($result);


/*

if (isset($_GET['sid'])) {

    $sid = intval($_GET['sid']);
    $sql = sprintf("DELETE FROM `fav` WHERE `product_id`=$sid");
    $rs = $mysqli->query($sql);
    unset($_SESSION['fav'][$sid]);
};
*/


// echo $mysqli->insert_id;
//$fav_sid = $mysqli->insert_id;


//echo json_encode($_SESSION['fav']); // 查詢