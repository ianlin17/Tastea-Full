<?php require __DIR__. '/__connect_db.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;">
    <title>如何選茶</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/colorbox.css" />
    <link rel="stylesheet" href="knowledge05.css">


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
            <img src="images/know-img05.jpg" alt="">
        </div> <!--area03-->

        <div class="area04 col-lg-12">

            <div class="col-lg-8 col-lg-offset-2  col-sm-10">
                <div class="title02"><p>如何選茶</p></div>
            </div>

            <div class="info col-lg-6">
                <p class="detil">一、外形:</p><br>
                <p class="detil line">還沒沖泡之前，先觀察茶葉是否乾燥，葉形完整，沒有太多茶梗、黃葉、雜物，半球型的（烏龍）茶葉應該緊結圓實等。
                </p>
            </div>
            <div class="info col-lg-6">
                <p class="detil">二、香氣:</p><br>
                <p class="detil line">茶泡開之後，依不同種類的茶而有清香、花香，或焙火香等，但總體而言味道應該清新淡雅，沒有菁臭味、焦味或其他異味。香氣太濃太重的也不好，要合理懷疑裡面添加了香料。
                </p>
            </div>
            <div class="info col-lg-6">
                <p class="detil">三、茶湯色澤 :</p><br>
                <p class="detil line">每種茶的茶湯顏色深淺不一，但基本上都要是清澈明亮，而不能混濁不清，或是杯底出現細屑雜質。
                </p>
            </div>

            <div class="info col-lg-6">
                <p class="detil">四、滋味 :</p><br>
                喝起來甘甜滑順，沒有苦澀味，並且喝完之後，喉部甘潤，回甘能持續愈久愈好。
                </p>
            </div>
            <div class="info col-lg-6">
                <p class="detil special">五、耐泡程度：</p><br>
                <p class="detil">品質好的茶比較耐泡，但如果是加了香料、人工甘味的劣質茶，想混充茶香，一般不耐久泡，剛開始一兩泡香氣很濃，但泡三次之後，香氣會突然消失，現出原形。
                    傳授小撇步教你辨別：試茶時，要求老闆將同一壺茶沖三泡以上，再換試別的茶，如果四、五泡之後，還有茶香及甘甜的滋味，就是好茶。而如果前一兩泡和之後的香氣滋味落差很大的，可能就加了香料。
                </p>
            </div>

            <div class="info col-lg-6">
                <p class="detil special">六、選擇有品牌、信譽良好的茶廠（商）、茶莊、販售地點</p><br>
                <p class="detil">1.有國際ISO品質管理系統認證、HACCP認證等的製茶廠。</p>
                <p class="detil">2.政府輔導合格的茶葉產銷班、農會等，發給CAS（吉園圃生鮮蔬果）認證。</p>
                <p class="detil">3.實行「生產履歷」的茶農，如有問題可以追溯來源。</p>
                <p class="detil">4.主動檢附農藥殘留檢驗合格報告。目前台灣茶葉常送檢的單位包括：茶業改良場、農委會農業藥物毒物試驗所、財團法人台北市嵧公農業產銷基金會、台灣檢驗科技股份有限公司（SGS）等。

                </p>
            </div>

            <div class="info col-lg-6">
                <p class="detil">七、認識你的茶農、找熟悉的茶莊、茶行:</p><br>
                <p class="detil">常買茶葉的人，不妨找機會實地了解茶農的栽種情況，或和可信賴的茶行建立固定的消費關係，比較能避免買到品質不良的混充茶。
                    檢查包裝、細讀標示茶葉以不透光、真空包裝為佳，可避免變質，及香氣散失。
                    另外，包裝上詳細標明內容物、生產地、重量、製造商或進口商資訊（如廠商名字、地址、電話）、保存方法、沖泡方法等。而標示不清、來路不明的茶不建議買。

                </p>
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