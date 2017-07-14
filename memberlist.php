<?php require __DIR__. '/__connect_db.php'; ?>
<html>

<?php

if (!isset($_SESSION['user']['id'])) {
    header('Location: ./');
    exit;}
$sql = "SELECT * FROM `member` WHERE `id`=" . intval($_SESSION['user']['id']);
$rs = $mysqli->query($sql);
$mrow = $rs->fetch_assoc();
$name = $mrow['name'];
$mobile = $mrow['mobile'];
$address = $mrow['address'];
$birthday = $mrow['birthday'];
$gender = $mrow['gender'];
// 上面是會員資料

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;">
    <title>會員中心</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrapDatepickr-1.0.0.css">
    <link rel="stylesheet" href="css/colorbox.css">
    <link rel="stylesheet" href="memberlist.css">
</head>

<body>

<header class="container-fluid banner area01">
    <div class="bannerimg row"><img class="col-lg-12 col-sm-12"  src=""  alt=""></div>
</header>
<?php include __DIR__. '/_navbar.php' ?>
<div class="container">
    <div class="row">
        <nav id="tabby-1" class="tabby-tabs area02 col-lg-8 col-lg-offset-2">
            <ul>
                <li><a class="active " href="#">個人資訊</a></li>
                <li><a href="favlist.php">我的最愛</a></li>
                <li><a href="odlist.php">訂單查詢</a></li>
            </ul>
        </nav>


        <div class="tabby-content col-lg-8 col-lg-offset-2" id="tab-content">

            <div data-tab="tab1" class="area03">
                <div class="box">

                    <div class="username">
                        <span><?= $_SESSION['user']['name'] ?></span>
                        <span>，您好</span>
                    </div>

                    <form class="form-horizontal area03-from" role="form">
                        <div class="form-group">
                            <span class="title">性別</span>
                            <span class="form-control-static"><?= $gender ?></span>
                        </div>
                        <div class="form-group">
                            <span class="title">生日</span>
                            <span class="form-control-static"><?= $birthday ?></span>
                        </div>
                        <div class="form-group">
                            <span class="title">電話</span>
                            <span class="form-control-static"><?= $mobile ?></span>
                        </div>
                        <div class="form-group">
                            <span class="title">地址</span>
                            <span class="form-control-static"><?= $address ?></span>
                        </div>
                    </form>
                    <div class="text-right area03-last" style="margin: 50px 50px 0 0;">
                        <button type="" class="btn btn-link"><a href="changepwd.php">修改密碼</a></button>
                        <button type="" class="btn btn-warning"><a href="data-change.php"">編輯個人資料</a></button>
                    </div>
                </div> <!--box-->
            </div> <!--area03-->


        </div> <!--tabby-content-->
    </div> <!--row-->

</div> <!--container-->
<br><br><br><br>

<?php include __DIR__ . '/footer.html'; ?>
<!--<script src="http://code.jquery.com/jquery.min.js"></script>-->
<script src="lib/bootstrapDatepickr-1.0.0.min.js"></script>


<script>

    $(window).scroll(function(event){
        var st = $(this).scrollTop();
        // console.log(st);
        if(st>200){
            $(".navbar .navbar-nav > li > a").css("color","#1C1C1C");
            $(".navbar-brand img").attr("src","images/logo_b.png");
            $(".carticon img").attr("src","images/cart-b.png");
            $(".navbar").addClass("navbar-default");
            $(".navbar .navbar-brand-min img").attr("src","images/logo-b-min.png");
        }else{
            $(".navbar .navbar-nav > li > a").css("color","#FCFAF2");
            $(".carticon img").attr("src","images/cart-w.png");
            $(".navbar-brand img").attr("src","images/logo_w.png");
            $(".navbar").removeClass("navbar-default");

            $(".navbar .navbar-brand-min img").attr("src","images/logo-w-min.png");

        }
    });

    $(document).ready(function(){
        $('#tabby-1').tabby();
    });
    $(document).ready(function(){
        $('#tabby-2').tabby();
    });
    $(document).ready(function() {
        $("#calendar1").bootstrapDatepickr({date_format: "Y-m-d"});
    });
    $(document).ready(function() {
        $("#calendar1-min").bootstrapDatepickr({date_format: "Y-m-d"});
    });


</script>
</body>
</html>

