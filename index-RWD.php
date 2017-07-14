<!DOCTYPE html>
<html lang="en">
<?php
require __DIR__ . '/__connect_db.php';
$pname = 'index';


$file=fopen("p5.txt", "r");
$num = fgets($file);
fclose($file);
$num++ ;
$file=fopen("p5.txt", "w");
fwrite($file, $num);
fclose($file);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;">
    <title>Tastea鐵茶</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <script src="lib/jquery-3.1.1.js"></script>
    <link rel="stylesheet" href="css/colorbox.css" />
    <link rel="stylesheet" href="css/vegas/vegas.min.css">
    <link rel="stylesheet" href="RWDindex.css">



</head>
<body>

<?php include __DIR__ . '/_navbar.php' ?>

<div class="vegas " id="area01">
    <div class="poe01"><img class="poetry01" src="images/RWD-poe-A.png" alt=""></div>
    <div class="poe02"><img class="poetry02" src="images/RWD-poe-B.png" alt=""></div>
    <div class="poe03"><img class="poetry03" src="images/RWD-poe-C.png" alt=""></div>
    <div class="poe04"><img class="poetry04" src="images/RWD-poe-D.png" alt=""></div>
    <a href="#" class="btn btn-5 scroll-down hidden-sm hidden-xs"><img src="images/iconscroll.png" alt=""></a>
    <!--RWD scroll-->
    <a href="#" class="btn btn-5-min scroll-down hidden-lg"><img src="images/iconscroll.png" alt=""></a>
    <!--RWD scroll-->
</div> <!--vegas-->



<div class="container">
    <div class="row">

        <div class="area02">
            <div class="col-lg-3 col-sm-1"></div>
            <div class="title01 col-lg-6  col-sm-10 "></div>
            <div class="col-lg-3 col-sm-1"></div>
        </div> <!--area02-->

        <div class="area03">
            <div class="no01 col-lg-4 col-sm-12">
                <div>
                    <div class="icon">
                        <img class="iconnum" src="images/no1.jpg" alt="">
                    </div>
                    <a class="hoverpoint" href="http://localhost/tastea/single-product.php?sid=27">
                        <div class="no01img"></div>
                    </a>
                </div>
                <h3>
                    <a href="http://localhost/tastea/single-product.php?sid=27">嚴選紅玉紅茶</a>
                </h3>
            </div> <!--no01-->
            <div class="no02 col-lg-4 col-sm-12">
                <div>
                    <div class="icon">
                        <img src="images/no2.jpg" alt="">
                    </div>
                    <a class="hoverpoint" href="http://localhost/tastea/single-product.php?sid=60">
                        <div class="no02img"></div>
                    </a>
                </div>
                <h3>
                    <a href="http://localhost/tastea/single-product.php?sid=60">阿里山雲品金萱</a>
                </h3>
            </div> <!--no02-->
            <div class="no03 col-lg-4 col-sm-12">
                <div>
                    <div class="icon">
                        <img src="images/no2.jpg" alt="">
                    </div>
                    <a class="hoverpoint" href="http://localhost/tastea/single-product.php?sid=40">
                        <div class="no03img"></div>
                    </a>
                </div>
                <h3>
                    <a href="http://localhost/tastea/single-product.php?sid=40">東方美人茶</a>
                </h3>
            </div> <!--no03-->
        </div>  <!--area03-->

        <div class="area04">
            <div class="col-lg-3 col-sm-1"></div>
            <div class="title02 col-lg-6  col-sm-10 "></div>
            <div class="col-lg-3 col-sm-1"></div>
        </div> <!--area04-->

        <div class="area05">
            <div class="no04 col-lg-6 col-sm-12 area05">
                <a class="hoverpoint" href="http://localhost/tastea/single-product.php?sid=19">
                    <div class="no04img"></div>
                </a>
                <h3>
                    <a href="http://localhost/tastea/single-product.php?sid=19">嚴選苗栗東方美人茶</a>
                </h3>
            </div> <!--no4-->
            <div class="no05 col-lg-6 col-sm-12">
                <a class="hoverpoint" href="http://localhost/tastea/single-product.php?sid=14">
                    <div  class="no05img"></div>
                </a>
                <h3>
                    <a href="">嚴選阿里山烏龍茶</a>
                </h3>
            </div> <!--no5-->
        </div> <!--area05-->

        <div class="area06">
            <div><a class="title03 col-lg-3 col-lg-offset-2 col-xs-12" href="http://localhost/tastea/productlist.php?wow=2"></a></div>
            <div class="col-lg-2 hidden-sm hidden-xs"></div>
            <div><a class="title04 col-lg-3 col-lg-offset-1 col-xs-12" href="http://localhost/tastea/productlist.php?wow=3"></a></div>
        </div> <!--area06-->



    </div> <!--row-->
</div> <!--container-->

<div class="container-fluid area08">
    <img id="teacolor" src="images/tea.png" style="width: 100%" align="center">
</div> <!--area08-->


<div class="container-fluid area09">
    <div class="row area09row" >

        <div class="title05"></div>

        <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:500px;margin:0px auto 48px;">

            <div class="readmore"><a href=""><img src="images/readmore-icon.png" alt="" style="width: 100%;"></a></div>

            <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="images/min-banner_A.png" />
                    </li>
                    <li><img src="images/min-banner_B.png" />
                    </li>
                    <li><img src="images/min-banner_C.png" />
                    </li>
                    <li><img src="images/min-banner_D.png" />
                    </li>
                    <li><img src="images/min-banner_E.png" />
                    </li>
                    <li><img src="images/min-banner_F.png" />
                    </li>
                    <li><img src="images/min-banner_G.png" />
                    </li>
                    <li><img src="images/min-banner_H.png" />
                    </li>
                </ul>
                <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Slider jQuery">Slider jQuery</a></div>
            </div>
        </div>


    </div> <!--row-->
</div> <!--area09-->

<?php include __DIR__ . '/footer.html'; ?>


<script src="lib/jquery-3.1.1.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="RWDslideren/jquery.js"></script>
<script src="RWDslideren/amazingslider.js"></script>
<link rel="stylesheet" type="text/css" href="RWDslideren/amazingslider-1.css">
<script src="RWDslideren/initslider-1.js"></script>

<script src="lib/jquery.colorbox.js"></script>
<script src="lib/vegas/vegas.min.js"></script>

<script>

    $(window).scroll(function(event){
        var st = $(this).scrollTop();
        // console.log(st);
        if(st>850){
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




    $("#area01").vegas({
        slides: [{
            src: 'images/M1.jpg'
        }, {
            src: 'images/M4.jpg'
        }, {
            src: 'images/M3.jpg'
        }, {
            src: 'images/M2.jpg'
        }

        ],
        animation: 'random'
    });


    var scrolled=0;

    $(".scroll-down").on("click" ,function(){
        scrolled=scrolled+900;

        $("body").animate({
            scrollTop:  scrolled
        });

    });


</script>
</body>
</html>