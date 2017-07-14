<!DOCTYPE html>
<?php require __DIR__. '/__connect_db.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;">
    <title>生茶與熟茶</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/colorbox.css" />
    <link rel="stylesheet" href="knowledge03.css">


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

        <div class="area02 col-lg-12">
            <div class="title01 col-lg-8 col-lg-offset-2  col-sm-10"></div>
        </div> <!--area02-->

        <div class="area000 col-lg-12">

            <div class="info-spec col-lg-8 col-lg-offset-2">
                <p class="detil">生茶熟茶如何區分?</p>
                <p class="detil">其實就是指焙火的輕重，</p>
                <p class="detil">焙火輕的茶，未經焙火的茶在感覺上比較清涼，比較生，俗稱「生茶」；</p>
                <p class="detil detil-last">焙火較重的茶在感覺上比較溫暖，比較熟，俗稱「熟茶」。</p>

            </div>
        </div> <!--area000-->

        <div class="area00 col-lg-12 col-sm-12">
            <img src="images/刻度1.png" alt="" style="width: 100%;">
        </div> <!--area00-->

        <div class="area03 col-lg-12 col-sm-12">
            <section class="wrapper">
                <div class="progress_bar_wrap">
                    <div class="progress_bar"></div>
                </div>
            </section><!-- wrapper -->
        </div> <!--area03-->

        <div class="area04 col-lg-12 col-sm-12">
            <a class="link01" style="cursor: pointer;"><img src="images/綠茶_茶色.png" alt=""></a>
            <a class="link02" style="cursor: pointer;"><img src="images/文山包種茶-茶色.png" alt=""></a>
            <a class="link03" style="cursor: pointer;"><img src="images/高山烏龍茶_茶色.png" alt=""></a>
            <a class="link04" style="cursor: pointer;"><img src="images/東方美人_茶色.png" alt=""></a>
            <a class="link05" style="cursor: pointer;"><img src="images/鐵觀音_茶色.png" alt=""></a>
            <a class="link06" style="cursor: pointer;"><img src="images/紅茶_茶色.png" alt=""></a>
        </div> <!--area04-->

        <div class="area05 col-lg-12 col-sm-12 hidden-sm hidden-xs">
            <div class="wrapper">
                <div class="mask">
                    <div class="boxWrap">
                        <div class="box1"><img src="images/綠茶.jpg" ></div>
                        <div class="box2"><h1> 不發酵茶：</h1>
                            <p>如綠茶中之龍井、碧螺春等。</p></div>
                    </div>
                </div>

                <div class="mask">
                    <div class="boxWrap">
                        <div class="box1"><img src="images/包種茶.jpg" ></div>
                        <div class="box2"><h1> 半發酵茶：</h1>
                            <p> (1).輕發酵中 如包種茶、花茶等。</p>
                            <p>(2).中發酵中 如凍頂烏龍、鐵觀音、水仙等。</p>
                            <p>(3).重發酵中 如白毫烏龍（東方美人茶）。</p>
                        </div>
                    </div>
                </div>

                <div class="mask">
                    <div class="boxWrap">
                        <div class="box1"><img src="images/紅茶.jpg" ></div>
                        <div class="box2"><h1>全發酵茶：</h1>
                            <p>如紅茶。</p></div>
                    </div>
                </div>

                <div class="mask">
                    <div class="boxWrap">
                        <div class="box1"><img src="images/白毫烏龍.jpg" ></div>
                        <div class="box2"><h1>後發酵茶：</h1>
                            <p> 如普洱茶。</p>
                            <p>(1).自然良性後發酵（生茶品）。</p>
                            <p>(2).人為加工發酵（熟茶品）。</p></div>
                    </div>
                </div>
            </div>
        </div> <!--area05-->

        <!--RWD area05-->

        <div class="area05-min col-sm-12 hidden-lg">
            <div class="wrapper">
                <div class="mask">
                    <div class="boxWrap">
                        <div class="box1"><img src="images/綠茶.jpg" ></div>
                        <div class="box2"><h1> 不發酵茶：</h1>
                            <p>如綠茶中之龍井、碧螺春…等。</p></div>
                    </div>
                </div>

                <div class="mask">
                    <div class="boxWrap">
                        <div class="box1"><img src="images/包種茶.jpg" ></div>
                        <div class="box2"><h1> 2.半發酵茶：</h1>
                            <p> (1).輕發酵中 如包種茶、花茶…等。</p>
                            <p>(2).中發酵中 如凍頂烏龍、鐵觀音、水仙等。</p>
                            <p>(3).重發酵中 如白毫烏龍（東方美人茶）。</p>
                        </div>
                    </div>
                </div>

                <div class="mask">
                    <div class="boxWrap">
                        <div class="box1"><img src="images/紅茶.jpg" ></div>
                        <div class="box2"><h1>3.全發酵茶：</h1>
                            <p>如紅茶。</p></div>
                    </div>
                </div>

                <div class="mask">
                    <div class="boxWrap">
                        <div class="box1"><img src="images/白毫烏龍.jpg" ></div>
                        <div class="box2"><h1>4.後發酵茶：</h1>
                            <p> 如普洱茶。</p>
                            <p>(1).自然良性後發酵（生茶品）。</p>
                            <p>(2).人為加工發酵（熟茶品）。</p></div>
                    </div>
                </div>
            </div>
        </div> <!--area05-min-->
        <!--RWD area05-->


    </div> <!--row-->
</div> <!--container-->

<?php include __DIR__ . '/footer.html'; ?>


<script src="lib/jquery-3.1.1.js"></script>
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


</script>

</body>
</html>