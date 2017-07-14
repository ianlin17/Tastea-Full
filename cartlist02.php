<?php
require __DIR__ . '/__connect_db.php';
$pname = 'cart_list2';

if (isset($_POST['contact'])) {
    $_SESSION['orderinfo'] = $_POST;
    header('Location:cartlist03.php');
}

?><html>
<head>
    <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;">
    <meta charset="UTF-8">
    <title>付款方式</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/colorbox.css" />
    <link rel="stylesheet" href="cartlist02.css">
</head>




<body>

<header class=" banner area01 ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12  col-sm-12">
                <img src=""  alt="">
            </div>
        </div>
    </div>
</header>
<?php include __DIR__ . '/_navbar.php' ?>
<div class="container">
    <div class="row">

        <div class="area02 brand col-lg-8 col-lg-offset-2 hidden-xs">
            <ul>
                <li><img  src="images/carticon_14.png" alt=""></li>
                <li class="scrollicon"><img src="images/carticon_41.png" alt=""></li>
                <li><img  src="images/carticon_16.png" alt=""></li>
                <li class="scrollicon"><img  src="images/carticon_41.png" alt=""></li>
                <li><img  src="images/carticon_09.png" alt=""></li>
                <li class="scrollicon"><img  src="images/carticon_41.png" alt=""></li>
                <li class="endicon"><img  src="images/carticon_42.png" alt=""></li>
            </ul>
        </div> <!--area02-->

        <!--RWD brand-min-->
        <div class="area02-min brand col-xs-12 hidden-lg">
            <ul>
                <li><img  src="images/carticon_14.png" style="width: 100%;" alt=""></li>
                <li class="scrollicon"><img src="images/carticon_41.png" style="width: 80%; alt=""></li>
                <li><img  src="images/carticon_16.png" style="width: 100%;" alt=""></li>
                <li class="scrollicon"><img  src="images/carticon_41.png" style="width: 80%; alt=""></li>
                <li><img  src="images/carticon_09.png" style="width: 100%;" alt=""></li>
                <li class="scrollicon"><img  src="images/carticon_41.png" style="width: 80%; alt=""></li>
                <li class="endicon"><img  src="images/carticon_42.png" style="width: 80%; alt=""></li>
            </ul>
        </div> <!--area02-->
        <!--RWD brand-min-->
        <form action="cartlist02.php" method="post" name="contactinfo">
        <div class="area03 col-lg-10 col-lg-offset-1">
            <div class="title hidden-xs">
                <div><img src="images/carllist02_03.png" alt=""></div>
            </div> <!--title-->

            <!--RWD title-->
            <div class="title-min hidden-lg">
                <div><img src="images/carllist02_03.png" alt=""></div>
            </div> <!--title-->
            <!--RWD title-->

            <table class="table table-bordered  panel-title">
                <tbody>
                <tr>
                    <td data-th="勾選" class="the-point">
                        <input class="radio-btn" type="radio" name="delivery" value="超商取貨">
                    </td>
                    <td class="the-tittle">超商取貨</td>
                </tr>
                <tr>
                    <td data-th="勾選" class="the-point">
                        <input class="radio-btn" type="radio"  name="delivery" value="宅配到府">
                    </td>
                    <td class="the-tittle">宅配到府</td>
                </tr>
                </tbody>
            </table>
        </div> <!--area03-->

        <div class="area04 col-lg-10 col-lg-offset-1">

            <div class="title hidden-xs">
                <div><img src="images/carllist02_05.png" alt=""></div>
            </div> <!--title-->

            <!--RWD title-->
            <div class="title-min hidden-lg">
                <div><img src="images/carllist02_05.png" alt=""></div>
            </div> <!--title-->
            <!--RWD title-->

            <table class="table table-bordered">
                <tbody class="panel-title">
                <tr>
                    <td data-th="勾選" class="the-point">
                        <input class="radio-btn" type="radio"  name="payment" value="黑貓宅配">
                    </td>
                    <td class="the-tittle">貨到付款</td>
                </tr>
                <div>
                    <tr>
                        <td class="the-point">
                            <input class="radio-btn" type="radio" name="payment" data-toggle="collapse"
                                   data-parent="#accordion1,#accordion2,#accordion3"
                                   data-target="#collapseOne1" value="信用卡">
                        </td>
                        <td class="the-tittle panel-title panel-heading accordion-toggle collapsed">信用卡</td>
                    </tr>
                </div>

                <tr>
                    <td class="the-point">
                        <input class="radio-btn" type="radio" name="payment"
                               data-toggle="collapse"
                               data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseTwo1"　value="ATM轉帳"></td>
                    <td class="the-tittle panel-title panel-heading accordion-toggle collapsed">ATM轉帳</td>
                </tr>
                </tbody>
            </table>
        </div> <!--area04-->


        <!--信用卡和ATM-->
        <div class="panel-group" id="accordion1">
            <div class="panel panel-default col-lg-10 col-lg-offset-1">
                <div id="collapseOne1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <fieldset>

                            <div>
                                <label style="border-style: groove; width:100px;  text-align:center" class="input">信用卡卡別
                                </label>
                                <select name="cardtype" style="width:100px; height: 25px;">
                                    <option style="text-align:center;" value="0" selected disabled></option>
                                    <option value="VISA">VISA</option>
                                    <option value="MasterCard">MasterCard</option>
                                    <option value="JCB">JCB</option>
                                </select></div>
                            <br>
                            <div>
                                <section class="cardnumber">
                                    <label class="input"
                                           style="border-style: groove; width:100px; text-align:center">信用卡卡號</label>
                                    <input style="width:85px " type="text" name="cardnumber1" id="cardnumber1" maxlength="4" value="">
                                    <input style="width:85px " type="text" name="cardnumber2" id="cardnumber2" maxlength="4" value="">
                                    <input style="width:85px " type="text" name="cardnumber3" id="cardnumber3" maxlength="4" value="">
                                    <input style="width:85px " type="text" name="cardnumber4"  id="cardnumber4" maxlength="4" value="">
                                </section>
                                <br>
                                <section class="cvvnumber">
                                    <div>
                                        <label style="border-style: groove; width:100px; text-align:center" class="input">末三碼</label>
                                        <input style="width:60px" type="text" name="cvv" id="cvv" placeholder="ex.123"
                                               maxlength="3">
                                    </div>
                                </section>
                                <br>
                            </div>
                            <div class="row col-lg-10 col-lg-offset-1 exp">
                                <label style="border-style: groove; width:100px; text-align:center; color: black">有效期限</label>
                                <label class="select">
                                    <select name="month" style="width:80px; height:25px;">
                                        <option value="0" selected disabled>月份</option>
                                        <option value="1">1月</option>
                                        <option value="1">2月</option>
                                        <option value="3">3月</option>
                                        <option value="4">4月</option>
                                        <option value="5">5月</option>
                                        <option value="6">6月</option>
                                        <option value="7">7月</option>
                                        <option value="8">8月</option>
                                        <option value="9">9月</option>
                                        <option value="10">10月</option>
                                        <option value="11">11月</option>
                                        <option value="12">12月</option>
                                    </select>
                                </label> /
                                <label class="select">
                                    <select name="year" style="width:80px; height:25px;">
                                        <option style="text-align:center;" value="0" selected disabled>年</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2011</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </label>
                            </div>
                        </fieldset>

                        <h4>注意事項:</h4>

                        <table>
                            <tbody>
                            <tr>
                                <td><span class="glyphicon glyphicon-stop"></span> 信用卡背面後三碼</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-stop"></span> 可使用信用卡種類: VISA、MasterCard、JCB。</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-stop"></span> 請注意若途中關閉本頁面，或是轉換到其他頁面時，將無法完成訂購。</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-stop"></span> 僅限一次付清</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-stop"></span> 僅限會員本人之信用卡</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>



                    </div>
                </div>
            </div>


            <div class="panel panel-default col-lg-10 col-lg-offset-1">
                <div id="collapseTwo1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div>
                            <label style="border-style: groove; width:100px; text-align:center; color: black">匯款銀行</label>
                            <input type="text" disabled value="台灣銀行" >
                           </div>
                        <br>
                        <div>
                            <label style="border-style: groove; width:100px; text-align:center; color: black">匯款帳號</label>
                            <input type="text" disabled value="945394871314987" ></div>
                        <br>
                        <div>
                            <label style="border-style: groove; width:100px; text-align:center; color: black">帳戶名稱</label>
                            <input type="text" disabled value="鐵茶股份有限公司" ></div>
                        <br>
                        <br>
                        <h4>注意事項:</h4>
                        <table>
                            <tbody>
                            <tr>
                                <td><span class="glyphicon glyphicon-stop"></span> 請在下單後24小時內付款</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-stop"></span> 使用網路ATM應安裝防火牆以及防毒軟體</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-stop"></span> 進行網路ATM交易請確保周遭安全</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-stop"></span> 請盡量使用約定帳號轉帳</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>

                    </div>
                </div>
            </div>
        </div>


        <div class="area05 col-lg-10 col-lg-offset-1">

            <div class="title hidden-xs">
                <div><img src="images/carllist02_07.png" alt=""></div>
            </div> <!--title-->

            <!--RWD title-->
            <div class="title-min hidden-lg">
                <div><img src="images/carllist02_07.png" alt=""></div>
            </div> <!--title-->
            <!--RWD title-->
            <table  class="table table-bordered" style="margin-bottom: 10px;">
                <tbody>
                <tr>
                    <td class="">姓名</td>
                    <td><input type="text" name="contact"
                               style="width: 300px;"
                               value="<?= isset($_SESSION['orderinfo']['contact']) ? $_SESSION['orderinfo']['contact'] : '' ?>">
                    </td>
                </tr>
                <tr>
                    <td class="">手機</td>
                    <td><input type="text" name="mobile" style="width: 300px;" value="<?= isset($_SESSION['orderinfo']['mobile']) ? $_SESSION['orderinfo']['mobile'] : '' ?>"></td>
                </tr>
                <tr>
                    <td class="">Email</td>
                    <td><input type="text" name="email" style="width: 300px;" value="<?= isset($_SESSION['orderinfo']['email']) ? $_SESSION['orderinfo']['email'] : '' ?>"></td>
                </tr>
                <tr>
                    <td class="">地址</td>
                    <td><input type="text" name="address" style="width: 300px;" value="<?= isset($_SESSION['orderinfo']['address']) ? $_SESSION['orderinfo']['address'] : '' ?>"></td>
                </tr>
                </tbody>
            </table>

        </div> <!--area05-->
        <div class="area06 text-right col-lg-10 col-lg-offset-1 hidden-xs">
            <div class="next">
                <a class="up" href="cartlist01.php"><img src="images/carticon_30.png" alt=""></a>
<!--                <a id="nono_content finalbtn" href="cartlist03.php" type="submit" name="send"><img src="images/carticon_38.png"><input type="hidden"></a>-->
                <!-- <input type="submit" class="nextpage" value="下一頁"> -->
                <button class="next-page" href="cartlist03.php">確認</button>
            </div>
        </div> <!--area06-->

        <!--area06-min-->
        <div class="area06-min col-xs-12 hidden-lg">
            <button class="go-check nextpage" href="cartlist03.php">確認</button>
            <div class="next"><button class="go-check nextpage" href="cartlist03.php">確認</button></div>
            <div class="next"><a class="go-shop" href="cartlist01.php">上一步</a></div>
        </div> <!--area06-->
        </form>
    </div> <!--row-->
</div> <!--container-->
<br><br>
<?php include __DIR__ . '/footer.html'; ?>
<script src="lib/jquery-3.1.1.js"></script>
<!--<script src="bootstrap/js/bootstrap.js"></script>-->

<script>
    (window).scroll(function(event){
        var st = $(this).scrollTop();
        console.log(st);
        if(st>200){
            $(".navbar-default .navbar-nav > li > a").css("color","#1C1C1C"),
                $(".navbar-brand img").attr("src","images/logo_b.png"),
                $(".carticon img").attr("src","images/cart-b.png"),
                $(".navbar").input(".navbarInverse");

        }else{
            $(".navbar-default .navbar-nav > li > a").css("color","#FCFAF2"),
                $(".carticon img").attr("src","images/cart-w.png"),
                $(".navbar-brand img").attr("src","images/logo_w.png");
        }
    });

 $('.nextpage').click(function (){

        if (!$('input[name="delivery"]').is(':checked')) {
            alert("請選擇運送方式");
            return false;
        }
        if (!$('input[name="payment"]').is(':checked')) {
            alert("請選擇付款方式");
            return false;  }

        if (! contactinfo.contact.value) {
         alert("訂購人大名?");
            contactinfo.contact.focus();
         return false;       }

        if (! contactinfo.mobile.value) {
         alert("訂購人連絡電話?");
            contactinfo.mobile.focus();
         return false;     }

        if (! contactinfo.email.value) {
        alert("訂購人email?");
            contactinfo.email.focus();
        return false;   }

    if (! contactinfo.address.value) {
        alert("訂購人地址?");
        contactinfo.address.focus();
        return false;
    }

        else {
            return true;
        }

    } )



</script>
</body>
</html>