<html lang="en">
<?php require __DIR__ . '/__connect_db.php';   ?>
<head>
    <meta charset="UTF-8">
    <title>修改密碼</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<!--    <link rel="stylesheet" href="css/colorbox.css" />-->
    <link rel="stylesheet" href="changepassword.css">
</head>

<?php

if (isset($_SESSION['user'])) {
    echo '<!-- <pre>';
    print_r($_POST);
    echo '</pre> -->';

    $stmt = $mysqli->prepare("UPDATE `member` SET
        `password`=?
        WHERE `id` = ?
        ");
    $stmt->bind_param('ss',
        sha1($_POST['new1'],
    $_SESSION['user']['id']
    ),
    $success = $stmt->execute());
    $affected = $stmt->affected_rows;
//    $pwd = $_POST['new1'];
//    if ($affected == 1) {
//        $_SESSION['user']['name'] = $_POST['name'];
//    }
    }
    //echo "\$affected: $affected";
?>
<body>
<?php include __DIR__. '/_navbar.php' ?>
<header class="container-fluid banner area01">
    <div class="bannerimg row"><img class="col-lg-12 col-sm-12"  src=""  alt=""></div>
</header>

<div class="container">
    <div class="row">
        <?php if(isset($success)): ?>
            <?php if($stmt->affected_rows): ?>
                <div class="alert alert-success" role="alert" style="text-align: center">
                    修改成功
                </div>
                <script>
                    setTimeout(function(){
                        window.location.href = "http://localhost/tastea/memberlist.php";
                    }, 1500)
                </script>
            <?php endif; ?>
        <?php endif; ?>
        <div class="area02 col-lg-8 col-lg-offset-2" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="box">
                <div class="login-logo"><img src="images/logo_b.png" alt=""></div>
                <form action="" method="post" name="editpwd" onsubmit="return checkForm()">
                <div class="form-group group01">
                    <span class="title">請輸入舊密碼</span>
                    <span><input type="password" class="form-control" id="old-password" name="old"></span>
                </div>
                <div class="form-group group02">
                    <span class="title">請輸入新密碼</span>
                    <span><input type="password" class="form-control" id="new-password"  name="new1"></span>
                </div>
                <div class="form-group group03">
                    <span class="title">再輸入新密碼</span>
                    <span><input type="password" class="form-control" id="new-password" name="new2"></span>
                </div>
                <div class="confirm">
                    <button href="" type="submit" class="btn btn-warning">確認</button>
                </div>
                </form>
            </div> <!--box-->
        </div> <!--area02-->

    </div> <!--row-->
</div> <!--container-->


<script src="lib/jquery-3.1.1.js"></script>
<!--<script src="http://zeptojs.com/zepto.min.js"></script>-->
<script src="bootstrap/js/bootstrap.js"></script>
<!--<script src="lib/jquery.colorbox.js"></script>-->
<script>
    $(window).scroll(function(event){
        var st = $(this).scrollTop();

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


    $("#forgot-password").colorbox({inline:true, width:"450px", });

    function checkForm() {
        var isPass = true;
        if (!editpwd.old.value) {
            alert("請填寫舊密碼");
            isPass = false;
        }
        if (!editpwd.new1.value) {
            alert("請填寫新密碼");
            isPass = false;
        }
        if (!editpwd.new2.value) {
            alert("請輸入新密碼兩次");
            isPass = false;
        }
        if ( editpwd.new1.value != editpwd.new2.value) {
            alert("新密碼不一樣");
            isPass = false;
        }
        if ((editpwd.new1.value && editpwd.new2.value) == editpwd.old.value) {
            alert("新舊密碼不能一樣拉!");
            isPass = false;
        }
        else {
            document.editpwd.submit();
            window.location.reload()
        }
        return isPass;
    }



</script>

</body>
</html>