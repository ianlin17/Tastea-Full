<?php require __DIR__. '/__connect_db.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;">
    <title>喝茶好處</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/colorbox.css" />
    <link rel="stylesheet" href="knowledge01.css">


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
            <img src="images/know-img01.png" alt="" style="width: 100%;">
        </div> <!--area03-->

        <div class="area04 col-lg-12">

            <div class="col-lg-8 col-lg-offset-2  col-sm-10">
                <div class="title02"><p>關於茶的4大健康益處</p></div>
            </div>

            <div class="left-info col-lg-6">
                <p class="detil">一、預防癌症</p><br>
                <p class="detil line">包括乳癌、肺癌、口腔癌、膀胱癌與食道癌等多種癌症，患者的上皮細胞因子受體(EGF Receptor)都有過度表現的情形，研究發現茶多酚可抑制其結合，同時抑制癌細胞的生長。
                    茶多酚可降低細胞中NO(一氧化氮)的量。NO是細胞發炎的重要生物活性物，也是致癌作用的腫瘤促進劑，這也是一般認為喝茶可以消炎退火的機制，對於茶能幫助防癌提供另一條線索。</p><br><br>

                <p class="detil">二、消脂瘦身</p><br>
                <p class="detil line">茶與茶多酚可抑制脂肪酸合成?（fatty acid synthase，FAS)，FAS是身體能量代謝的重要酵素，動物實驗證明茶可降低三酸甘油酯、膽固醇與低密度脂蛋白，同時也降低體重。
                    要特別說明的是，有些茶飲廣告太誇大，指茶能分解體中的脂肪，這是不正確的。茶在瘦身的機轉上，重點在於能抑制體中脂肪的合成，因此廣告形容茶如一把刀，把脂肪除掉的「油切」說法，與科學證據不符。此外，不同的茶類，瘦身效果也不同。另一項研究發現，抑制體中脂肪合成效果最好的是普洱茶，烏龍茶次之、紅茶再次之，至於最常被拿來廣告的綠茶，抑制脂肪合成的效果反而最差。</p><br><br>
            </div><!---left-info-->
            <div class="right-info col-lg-6">
                <p class="detil">三、保護腦神經細胞</p><br>
                <p class="detil">隨著老化，大腦可能發生兩種病變：阿茲海默症以及巴金森氏症，都源自腦細胞老化後失去原來的功能。
                    以阿茲海  Aβ)的累積有關，Aβ所引起的神經毒性會受到茶以及茶多酚抑制，並且避免腦部產生過多破壞腦細胞的活性氧(re active oxygen spec-ies，ROS)，進而達到保護腦部的作用。</p><br><br>

                <p class="detil special">四、緩解糖尿病</p><br>
                <p class="detil">茶科學最新的一項研究，則是發現茶可緩解糖尿病，尤其是第二型糖尿病。
                    過去茶文化的記載中，沒有茶或茶多酚治療糖尿病的文獻，但因老農口耳相傳「茶能夠抑制糖尿病」的說法，於是展開細胞實驗研究，這項創新研究發現對於胰島素的訊息傳導缺陷，透過茶有抑制此病變的作用。
                    上述諸多基礎研究的發現，說明茶對於促進健康的確有許多潛力，不過茶的科學精深淵博，更多機制還有待進一步研究。而且茶是一種溫和的飲品，與藥物不同，不能靠喝茶治病。</p>
            </div> <!---right-info-->
        </div> <!--area04-->

        <div class="area05 hidden-sm hidden-xs hidden-md">
            <img src="images/zxc01.jpg" alt="" >
        </div>
        <!--RWD area05-min-->
        <div class="area05-min hidden-lg">
            <img src="images/zxc01.jpg" alt="" style="width: 100%;">
        </div>
        <!--RWD area05-min-->

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