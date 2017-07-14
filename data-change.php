<html>
<head>
    <meta charset="UTF-8">
    <title>會員資料修改</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrapDatepickr-1.0.0.css">
    <link rel="stylesheet" href="css/colorbox.css">
    <link rel="stylesheet" href="data-change.css">
</head>

<?php
require __DIR__ . '/__connect_db.php';

//$msql = "SELECT * FROM `member` WHERE `id`=" . intval($_SESSION['user']['id']);
//$mrs = $mysqli->query($msql);
//$mrow = $mrs->fetch_assoc();
//
//$showname = $mrow['name'];
//$showmobile = $mrow['mobile'];
//$showaddress = $mrow['address'];
//$showbirthday = $mrow['birthday'];
//$showgender = $mrow['gender'];




if (isset($_POST['name'])) {
    echo '<!-- <pre>';
    print_r($_POST);
    echo '</pre> -->';


    $stmt = $mysqli->prepare("UPDATE `member` SET
        `name`=?,
        `mobile`=?,
        `address`=?,
        `birthday`=?,
        `gender`=?
        WHERE `id`=?
        ");

    $stmt->bind_param('ssssss',
        $_POST['name'],
        $_POST['mobile'],
        $_POST['address'],
        $_POST['birthday'],
        $_POST['gender'],
        $_SESSION['user']['id']

    );

    $success = $stmt->execute();
    $affected = $stmt->affected_rows;
//
//    $name = $_POST['name'];
//    $mobile = $_POST['mobile'];
//    $address = $_POST['address'];
//    $birthday = $_POST['birthday'];
//    $gender = $_POST['gender'];

    if ($affected == true) {
        $_SESSION['user']['name'] = $_POST['name'];
    }

    //echo "\$affected: $affected";
}

?>
<body>
<header class="container-fluid banner area01">
    <div class="bannerimg row"><img class="col-lg-12 col-sm-12"  src=""  alt=""></div>
</header>
<?php include __DIR__. '/_navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="area02 col-lg-8 col-lg-offset-2" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="">
                <div class="login-logo"><img src="images/logo_b.png" alt=""></div>
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
                <form action="" method="post" name="infoedit" onsubmit="return checkForm()">
                <div class="form-group group01">
                    <span class="title">姓名</span>
                    <span><input type="text" class="form-control" id="old-password" name="name"></span>
                </div>
                <div class="form-group group02">
                    <span class="title">性別</span>
                    <span>
						<select class="form-control" name="gender" style="display: inline-block; width: 300px; padding-left: 140px;">
						    <option>男</option>
						    <option>女</option>
						</select>
					</span>
                </div>
                <div class="form-group group03">
                    <span class="title">生日</span>
                    <span>
					  <input type="text" id="calendar1" name="birthday"  class="form-control" </span>
                </div>
                <div class="form-group group04">
                    <span class="title">電話</span>
                    <span><input type="text" class="form-control" id="new-password"  name="mobile"></span>
                </div>
                <div class="form-group group05">
                    <span class="title">地址</span>
                    <span><input type="text" class="form-control" id="new-password"  name="address"  ></span>
                </div>

                <div class="confirm">
                    <button href="" type="submit" class="btn btn-warning">儲存</button>
                </div>
                </form>
            </div> <!--box-->
        </div> <!--area02-->

    </div> <!--row-->
</div> <!--container-->
<?php include __DIR__ . '/footer.html'; ?>
<script src="lib/jquery-3.1.1.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="lib/bootstrapDatepickr-1.0.0.min.js"></script>
<script src="lib/jquery.tabby.js"></script>
<script src="lib/jquery.colorbox.js"></script>
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


    $(document).ready(function() {
        $("#calendar1").bootstrapDatepickr({date_format: "Y-m-d"});
    });


    function checkForm() {
        var isPass = true;

        if (!infoedit.birthday.value) {
            alert("請填寫生日");
            isPass = false;

        }
        if (!infoedit.address.value) {
            alert("請填寫地址");
            isPass = false;
        }
        if (!infoedit.mobile.value) {
            alert("請填寫電話");
            isPass = false;
        }
        re = /^[09]{2}[0-9]{8}$/;
        if (!re.test(infoedit.mobile.value)){
            alert("你的手機格式不對");
        }
        else{
            document.infoedit.submit();

        }
        return isPass;
    }

</script>

</body>
</html>



        <div id="resumeProficienciesTop">User Interface (UI)</div><!--END resumeProficienciesTop-->
        <div id="resumeProficienciesBottom">

          <div class="progress">
            <div class="ui progress-bar progress-bar-info" role="progressbar" style="width: 0%">
            </div>
          </div>
        </div><!-- ENDresumeProficienciesBottom-->   
        <div id="resumeProficienciesTop">User Experience (UX)</div><!--END resumeProficienciesTop-->
        <div id="resumeProficienciesBottom">

          <div class="progress">
            <div class="ux progress-bar progress-bar-info" role="progressbar" style="width: 0%">
            </div>
          </div>
        </div><!--END resumeProficienciesBottom-->   





















