<?php require __DIR__. '/__connect_db.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;">
    <title>如何泡好茶</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/colorbox.css" />
    <link rel="stylesheet" href="knowledge02.css">


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

        <div class="area03 col-lg-6 col-lg-offset-3 col-sm-10">
            <img src="images/know-img02.jpg" alt="">
        </div> <!--area03-->

        <div class="area04 col-lg-12">

            <div class="col-lg-8 col-lg-offset-2  col-sm-10">
                <div class="title02"><p>如何泡好茶</p></div>
            </div>

            <div class="info col-lg-6">
                <p class="detil">一、泡一壺好茶</p><br>
                <p class="detil line">必須掌握【水質】、【水溫】、【茶葉量】和【沖泡的時間】等四大要訣。茶葉用量及沖泡的時間則視茶葉種類而定。
                    一般人泡茶以方便、休閒為主，只要掌握三要素：水溫、時間、茶葉量，消費者也能在家輕鬆泡好茶。
                </p>
            </div>
            <div class="info col-lg-6">
                <p class="detil">二、用什麼溫度的水泡茶</p><br>
                <p class="detil line">1、70-75℃低溫沖泡：以綠茶類為主，尤以剛做完的新茶因茶鹼與咖啡因還很多，低溫沖泡可使其較不苦澀。</p>
                <p class="detil">2、80-85℃中溫沖泡：以芽茶類為主，如文山包種、白毫烏龍、清香高山茶等，蜜香茶類因強調甘甜味也以中溫為佳。</p>
                <p class="detil">3、90℃以上高溫沖泡：以熟香茶為主，如鐵觀音、熟烏龍等，高溫可釋出其火香味。此外，陳放較久的普洱茶與老茶建議也以高溫沖泡，以免生菌殘留。
                </p>
            </div>
            <div class="info col-lg-6">
                <p class="detil">三、茶葉的量</p><br>
                <p class="detil line">一般比例：3公克茶葉加上150 C.C的水。
                    ＊浸泡時間（可依個人的喜好濃度而加以增減時間）。
                </p>
            </div>

            <div class="info col-lg-6">
                <p class="detil">四、沖泡的時間</p><br>
                <p class="detil">第一泡：40秒到60秒之間。</p>　
                <p class="detil">第二泡：30秒到50秒之間。</p>　
                <p class="detil">第三泡：每次可增加10秒到20秒不等時間，可以沖泡六道水。</p>
                <p class="detil">剛泡好的茶不要馬上入口，等茶湯降溫到40、50℃，接近體溫再喝，不僅對人體較好，也不會燙壞味覺。
                </p>
            </div>
            <div class="info col-lg-6">
                <p class="detil special">五、冷泡茶</p><br>
                <p class="detil">冷泡茶，顧名思義就是冷水泡的茶，而不是將熱泡茶放冷或置入冰箱。炎炎夏日，若希望藉由喝茶達到清涼消暑感，建議大家，將茶葉與水抓1：50的比例，3公克的茶對150㏄的冷水，放置5-6小時，讓茶葉徹底舒展。尤其又以綠茶最為合適，不僅喝起來鮮活帶勁，冷水沖泡也較不苦澀，建議泡好後將茶葉與茶湯分離，盡量在24小時內飲用完畢。</p>
            </div>
        </div> <!--area04-->

    </div> <!--row-->
</div> <!--container-->


<?php include __DIR__ . '/footer.html'; ?>

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