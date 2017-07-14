<!DOCTYPE html>
<?php require __DIR__. '/__connect_db.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;">
    <title>茶點搭配</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/colorbox.css" />
    <link rel="stylesheet" href="knowledge06.css">


</head>
<body>
<?php include __DIR__. '/_navbar.php' ?>

<header class=" banner area01 ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12  col-sm-12">
                <img src=""  alt="">
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">

        <div class="area02 col-lg-8 col-lg-offset-2  col-sm-10">
            <div class="title01"></div>
        </div> <!--area02-->

        <div class="area03 col-lg-12">

            <div class="info-spec col-lg-8 col-lg-offset-2">
                <p class="detil">「甜配綠、酸配紅、瓜子配烏龍」</p>
                <p class="detil">「甜配綠」即甜食如各式甜糕、鳳梨酥等搭配綠茶來喝；</p>
                <p class="detil">「酸配紅」即酸的食品如水果、蜜餞等搭配紅茶來喝；</p>
                <p class="detil detil-last">「瓜子配烏龍」即鹹的食物如瓜子、花生、鹹橄欖等搭配烏龍茶來喝茶。</p>

            </div>
        </div> <!--area03-->

        <div class="area04 col-lg-12">
            <div class="info col-lg-6">
                <div class="card2 change">
                    <img class="box" src="images/紅茶-茶葉.png" alt="" style="background-size: cover;">
                    <img class="box back" src="images/紅茶.png" alt="" style="background-size: cover;">

                </div>
            </div>
            <div class="info col-lg-6">
                <div class="card2 change">
                    <img class="box" src="images/綠茶-茶葉.png" alt="">
                    <img class="box back" src="images/綠茶.png" alt="">
                </div>
            </div>
            <div class="info col-lg-6">
                <div class="card2 change">
                    <img class="box" src="images/東方美人-茶葉.png" alt="">
                    <img class="box back" src="images/東方美人.png" alt="">
                </div>
            </div>


            <div class="info col-lg-6">
                <div class="card2 change">
                    <img class="box" src="images/文山包種-茶葉.png" alt="">
                    <img class="box back" src="images/文山包種.png" alt="">
                </div>
            </div>

            <div class="info col-lg-6">
                <div class="card2 change">
                    <img class="box" src="images/鐵觀音-茶葉.png" alt="">
                    <img class="box back" src="images/鐵觀音.png" alt="">
                </div>
            </div>

            <div class="info col-lg-6">
                <div class="card2 change">
                    <img class="box" src="images/高山烏龍-茶葉.png" alt="">
                    <img class="box back" src="images/高山烏龍.png" alt="">
                </div>
            </div>
        </div> <!--area04-->

    </div> <!--row-->
</div> <!--container-->

<?php include __DIR__ . '/footer.html'; ?>




<script>

    $(window).scroll(function(event){
        var st = $(this).scrollTop();
        console.log(st);
        if(st>200){
            $(".navbar-default .navbar-nav > li > a").css("color","#1C1C1C"),
                $(".navbar-brand img").attr("src","images/logo_b.png"),
                $(".carticon img").attr("src","images/cart-b.png"),
                $(".navbar").css("background:'' "),
                $(".navbar").input(".navbarInverse");
        }else{
            $(".navbar-default .navbar-nav > li > a").css("color","#FCFAF2"),
                $(".carticon img").attr("src","images/cart-w.png"),
                $(".navbar-brand img").attr("src","images/logo_w.png");
        }
    });


</script>

</body>
</html>