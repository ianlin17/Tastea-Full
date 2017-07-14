<?php require __DIR__. '/__connect_db.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/colorbox.css" />
    <link rel="stylesheet" href="login.css">
</head>
<?php

$pname = 'login';
if(isset($_SESSION['user'])){
    header('Location: ./');
    exit;
}
if (isset($_POST['email'])) {
    echo '<!-- <pre>';
    print_r($_POST);
    echo '</pre> -->';

    $login_sql = sprintf("SELECT * FROM `member` WHERE `email`='%s' AND `password`='%s'",
        $mysqli->escape_string($_POST['email']),
        sha1($_POST['password'])
    );
//    echo $login_sql;
//    exit;

    $login_rs = $mysqli->query($login_sql);
    if ($login_rs->num_rows) {
        $login_row = $login_rs->fetch_assoc();
        $_SESSION['user'] = $login_row;
    }
}
?>
<body>
<?php if(isset($login_rs)): ?>
    <?php if($login_rs->num_rows): ?>
        <div style='border-radius:10px;'>
            <div id='success_content' style='border-radius: 10px '>
                <div  style='width: 450px; height:600px; padding:10px;border: 3px solid #C0A264; border-radius: 10px; overflow-x: hidden; margin: 0 auto;'>
                    <div class="login-logo"><img src="images/logo_b.png" alt=""></div>
                    <div class="letter-register"><p>登入成功</p></div>
                </div>
            </div>
        </div>

        <script>
            setTimeout(function(){
                window.parent.location.href = 'index.php';
            }, 1500);
        </script>
    <?php endif; ?>
<?php else: ?>
<?php endif; ?>


<div style='border-radius: 10px '>
<?php if(empty($_SESSION['user'])):  ?>
    <div id='inline_content' style='width: 450px; height:600px; padding:10px;border: 3px solid #C0A264; border-radius: 10px; overflow-x: hidden; margin: 0 auto;'>



        <div class="login-logo"><img src="images/logo_b.png" alt=""></div>
        <form class="" role="form" method="post" name="loginform"
              onsubmit="return checkForm()">
        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="&nbsp;&nbsp;帳號">
        </div>
        <div class="form-group">
            <input  type="password" class="form-control" id="password" name="password" placeholder="&nbsp;&nbsp;密碼">
        </div>
        <div class="login">
            <button type="submit" id="login" class="btn btn-warning login1" href="#success_content">登入</button>
        </div>
        </form>
        <div class="forget">
            <a type="button" class="btn btn-link" id="forgot-password" href="#forgot_content">忘記密碼</a>
        </div>
        <div class="signin">
            <button type="submit" id="regiss" class="btn btn-info" >立即註冊</button>
        </div>
    </div>
    <?php endif ?>
</div>

<script src="lib/jquery-3.1.1.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="lib/jquery.colorbox.js"></script>
<script>

    $("#regiss").click(function () {
        var current = window.parent.$('iframe');
        $(current[0]).css({
            width: 450,
            height: 600
        }).attr('src', 'register.php');
    });

    function checkForm() {
        var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

        if (!pattern.test(loginform.email.value)) {
            alert("email格式錯誤");
            return false;
        }
        if (!loginform.email.value) {
            alert("請填寫Email");
            return false;
        }
        if (!loginform.password.value) {
            alert("密碼錯誤");
            return false;
        } else {
            document.loginform.submit();
        }
    }

</script>
</body>
</html>
