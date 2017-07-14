<html>

<?php
require __DIR__. '/__connect_db.php';
//
$pname = 'register';
$success = false;

if(isset($_POST['email'])) {
    echo '<!-- <pre>';
    print_r($_POST);
    echo '</pre> -->';

    $sql = sprintf("INSERT INTO `member`(`id`, `email`, `name`,
 `password`) VALUES (
 NULL, '%s', '%s',
 '%s'
  )",
        $mysqli->escape_string($_POST['email']),
        $mysqli->escape_string($_POST['name']),
        sha1($_POST['pwd1'])
    );
    $success = $mysqli->query($sql);
}

?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=0.8, user-scalable=0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/colorbox.css" />
    <link rel="stylesheet" href="register.css">
</head>
<body>
<?php if(isset($_POST['email'])): ?>
<div style='border-radius:10px;'>
    <div id='success_content' style='border-radius: 10px '>
        <div  style='width: 450px; height:600px; padding:10px;border: 3px solid #C0A264; border-radius: 10px; overflow-x: hidden; margin: 0 auto;'>
            <div class="login-logo"><img src="images/logo_b.png" alt=""></div>
            <div class="letter-register"><p>註冊成功</p></div>
        </div>
    </div>
</div>

<script>
    setTimeout(function(){
        window.parent.location.href = 'index.php';
    }, 1500);
</script>
    </script>
<?php endif; ?>
<?php if(! isset($_POST['email'])): ?>
<div style='border-radius: 10px '>
    <div id='register_content' style='width: 450px; height:600px; padding:10px;border: 3px solid #C0A264; border-radius: 10px; overflow-x: hidden; margin: 0 auto;'>
        <div class="login-logo"><img src="images/logo_b.png" alt=""></div>
        <div class="letter-register"><p>會員註冊</p></div>
        <form  role="form" method="post" name="registerform" onsubmit="return checkForm()">
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="&nbsp;&nbsp;姓名">
        </div>
        <div class="form-group">
            <input  type="email" class="form-control" id="email" name="email" placeholder="&nbsp;&nbsp;帳號/Email">
        </div>
        <div class="form-group">
            <input  type="password" class="form-control" id="password" name="pwd1" placeholder="&nbsp;&nbsp;密碼">
        </div>
        <div class="form-group">
            <input  type="password" class="form-control" id="passwordcheck" name="pwd2" placeholder="&nbsp;&nbsp;確認密碼">
        </div>
        <div class="signin">
            <button type="submit" id="register" class="btn btn-info regis" href="#success_content">送出</button>
        </div>
        </form>
    </div>
</div>
<?php endif; ?>



<script src="lib/jquery-3.1.1.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="lib/jquery.colorbox.js"></script>
<script type="text/javascript">

//    $(".btn_register").click(function () {
//        var current = window.parent.$('iframe');
//        $(current[0]).css({
//            width: "400px",
//            height: "800px"
//        }).attr('src', 'register.php');
//        console.log(current);
//    });
//
//
//    $(".forget_password").click(function () {
//        var current = window.parent.$('iframe');
//        $(current[0]).css({
//            width: "400px",
//            height: "261.25px"
//        }).attr('src', 'Reset_enter_email.php');
//        console.log(current);
//    });





        function checkForm() {
        var pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

        if (! registerform.name.value) {
            alert("請填入姓名!");
            registerform.name.focus();
            return false;
        }
//        re = /^\w+$/;
//        if (! re.test(registerform.name.value)) {
//            alert("姓名只能中英文喔!");
//            registerform.name.focus();
//            return false;
//        }
        if (! registerform.email.value) {
            alert("請輸入email!");
            registerform.email.focus();
            return false;
        }
        if (! pattern.test(registerform.email.value)) {
            alert('email格式不對喔!');
            registerform.email.focus();
            return false;
        }
        if (! registerform.pwd1.value == registerform.pwd2.value) {
            if (registerform.pwd1.value.length && registerform.pwd2.value.length < 6) {
                alert("密碼需大於6個字");
                registerform.pwd1.focus();
                return false;
            }
            if (registerform.pwd1.value && registerform.pwd2.value == registerform.name.value) {
                alert("密碼不能和姓名一樣拉!");
                registerform.pwd1.focus();
                return false;
            }
            re = /[0-9]/;
            if (!re.test(registerform.pwd1.value)) {
                alert("密碼要包含數字!");
                registerform.pwd1.focus();
                return false;
            }
            re = /[a-z]/;
            if (!re.test(registerform.pwd1.value)) {
                alert("密碼至少要有一個小寫英文!");
                registerform.pwd1.focus();
                return false;
            }
        } else{
            $.get('aj_check_email.php'), {email:email}, function(data){
                if(data=='1'){
                    alert('此 email 已經使用過了!');
                }
                if(data == '0'){
                    registerform.submit();}
            }
        }}



</script>
</body>
</html>
