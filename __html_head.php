<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <script src="lib/jquery-3.1.1.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <title><?= isset($title) ? $title : 'Tastea鐵茶' ?></title>


<!--var isLogin = --><?//= isset($_SESSION['user']) == 1 ?><!--;   /////偵測如果要購買前是否已登入-->


<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<script src="lib/jquery-3.1.1.js"></script>

<link rel="stylesheet" type="text/css" href="slider_js/amazingslider-1.css">
<link rel="stylesheet" href="css/colorbox.css" />
<link rel="stylesheet" href="css/vegas/vegas.min.css">
<link rel="stylesheet" href="index.css">



</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="images/logo_w.png">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-right">
        <li class="hover_line"><a href="#">關於我們</a></li>
        <li class="dropdown hover_line">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">商品列表 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">北</a></li>
            <li><a href="#">中</a></li>
            <li><a href="#">南</a></li>
            <li><a href="#">茶包</a></li>
            <li><a href="#">茶食</a></li>
          </ul>
        </li>
        <li class="hover_line"><a href="#">茶知識</a></li>
        <li class="hover_line"><a href="#">如何購買</a></li>
        <li class="hover_line"><a href="#">廠商列表</a></li>
        <li class="hover_line"><a id="login" href="#inline_content">登入</a></li>
        <li class="hover_line"><a id="register" href="#register_content">註冊</a></li>
        <li><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="vegas" id="area01">
  <a href="https://twitter.com/Dave_Conner" class="btn btn-5">Scroll</a>
</div>

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
          <a href="">
            <div class="no01img"></div>
          </a>
        </div>
        <h3>
          <a href="">鐵觀音</a> 
        </h3>
      </div> <!--no01-->
      <div class="no02 col-lg-4 col-sm-12">
        <div>
          <div class="icon">
            <img src="images/no2.jpg" alt="">
          </div>
          <a href="">
            <div class="no02img"></div>
          </a>
        </div>
        <h3>
          <a href="">金萱</a>
        </h3>
      </div> <!--no02-->
      <div class="no03 col-lg-4 col-sm-12">
        <div>
          <div class="icon">
            <img src="images/no3.png" alt="">
          </div>
          <a href="">
            <div class="no03img"></div>
          </a>
        </div>
        <h3>
          <a href="">東方美人茶</a>
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
        <a href="">
          <div class="no04img"></div>
        </a>
        <h3>
          <a href="">嚴選苗栗東方美人茶</a>
        </h3>
      </div> <!--no4-->
      <div class="no05 col-lg-6 col-sm-12">
        <a href="">
          <div class="no05img"></div>
        </a>
        <h3>
          <a href="">嚴選阿里山烏龍茶</a>
        </h3>
      </div> <!--no5-->
    </div> <!--area05-->
    
    <div class="area06">
      <div class="col-lg-2 col-sm-1"></div>
      <div class="title03 col-lg-3 col-sm-10"></div>
      <div class="col-lg-2 col-sm-1"></div>
      <div class="title04 col-lg-4 col-sm-10"></div>
      <div class="col-lg-1 col-sm-1"></div>
    </div> <!--area06-->

   

  </div> <!--row-->
</div> <!--container-->

<div class="container-fluid area08">
  <img id="teacolor" src="images/tea.png" style="width: 100%" align="center">
</div> <!--area08-->

 
 <div class="container-fluid area09">
  <div class="row area09row" >
   <div class="title05"></div>
   <div class="" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;margin:0px auto 62px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="slider_img/11.png" alt="11"  title="11" />
                </li>
                <li><img src="slider_img/10.jpg" alt="10"  title="10" />
                </li>
                <li><img src="slider_img/10a.jpg" alt="10a"  title="10a" />
                </li>
                <li><img src="slider_img/11.jpg" alt="11"  title="11" />
                </li>
                <li><img src="slider_img/%E9%98%BF%E9%87%8C%E5%B1%B1%E9%9B%B2%E8%88%9E%E7%83%8F%E9%BE%8D01.jpg" alt="阿里山雲舞烏龍01"  title="阿里山雲舞烏龍01" />
                </li>
                <li><img src="slider_img/%E9%98%BF%E9%87%8C%E5%B1%B1%E9%9B%AA%E6%98%A0%E7%B4%85%E8%8C%B601.jpg" alt="阿里山雪映紅茶01"  title="阿里山雪映紅茶01" />
                </li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="slider_img/11-tn.png" alt="11" title="11" /></li>
                <li><img src="slider_img/10-tn.jpg" alt="10" title="10" /></li>
                <li><img src="slider_img/10a-tn.jpg" alt="10a" title="10a" /></li>
                <li><img src="slider_img/11-tn.jpg" alt="11" title="11" /></li>
                <li><img src="slider_img/%E9%98%BF%E9%87%8C%E5%B1%B1%E9%9B%B2%E8%88%9E%E7%83%8F%E9%BE%8D01-tn.jpg" alt="阿里山雲舞烏龍01" title="阿里山雲舞烏龍01" /></li>
                <li><img src="slider_img/%E9%98%BF%E9%87%8C%E5%B1%B1%E9%9B%AA%E6%98%A0%E7%B4%85%E8%8C%B601-tn.jpg" alt="阿里山雪映紅茶01" title="阿里山雪映紅茶01" /></li>
            </ul>
        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="jQuery Slider">jQuery Slider</a></div>
        </div>
    </div>
  </div> <!--row-->
</div> <!--area09--> 

<footer class="container-fluid">
  <div class="row">
    <ul class="col-lg-3 col-sm-1"></ul>
    <ul class="col-lg-2 col-sm-1 foot-word">
      <li class="size1"><a href="">關於我們</a></li><br><br>
      <li class="size2"><a href="">創站理念</a></li><br>
      <li class="size2"><a href="">隱私權聲明</a></li><br>
      <li class="size2"><a href="">會員權益</a></li>
    </ul>
    <ul class="col-lg-2 col-sm-1">
      <li class="size1"><a href="">購物說明</a></li><br><br>
      <li class="size2"><a href="">運算計畫</a> &nbsp; <a href="">到貨時間</a></li><br>
      <li class="size2"><a href="">付款方式</a> &nbsp; <a href="">退貨須知</a></li><br>
      <li class="size2"><a href="">訂購流程</a> &nbsp; <a href="">茶葉檢測</a></li>
    </ul>
    <div class="col-lg-3 col-sm-1 iconconect">
      <div class="hidden-xs"><br><br><br><br></div>
      <div>
        <a href=""><img src="images/instagram.png"  alt=""></a>
        <a href=""><img src="images/twitter.png"  alt=""></a>
        <a href=""><img src="images/facebook.png"  alt=""></a>
        <a href=""><img src="images/pinterest.png"  alt=""></a>
      </div>  
    </div>
    <ul class="col-lg-2 col-sm-1 footban hidden-xs">
      <li><a href="#"><img src="images/logo_w.png"></a></li>
    </ul>
   
  </div> <!--row-->
</footer>



<!--登入視窗-->
<div style='display:none; border-radius: 10px '>
      <div id='inline_content' style='height:600px; padding:10px;border: 3px solid #C0A264; border-radius: 10px; overflow-x: hidden;'>
        <div class="login-logo"><img src="images/logo_b.png" alt=""></div>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-1">
              <input type="email" class="form-control" id="email" name="email" placeholder="&nbsp;&nbsp;帳號" style="border-style: 1px solid #C0A264;">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-1">
              <input  type="password" class="form-control" id="password" name="password" placeholder="&nbsp;&nbsp;密碼">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-1">
              <button type="submit" class="btn btn-warning">登入</button>
            </div>
          </div>
        </form>
        <div class="forget">
          <button type="button" class="btn btn-link">忘記密碼</button>
        </div>
        <div class="signin">
          <button type="submit" class="btn btn-info">立即註冊</button>
        </div>
      
    
      </div>
    </div>
<!--註冊畫面-->
<div style='display:none; border-radius: 10px '>
      <div id='register_content' style='height:600px; padding:10px;border: 3px solid #C0A264; border-radius: 10px; overflow-x: hidden;'>
        <div class="login-logo"><img src="images/logo_b.png" alt=""></div>

        <div class="letter-register"><p>會員註冊</p></div>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-1">
              <input type="email" class="form-control" id="email" name="email" placeholder="&nbsp;&nbsp;姓名" style="border-style: 1px solid #C0A264;">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-1">
              <input  type="password" class="form-control" id="password" name="password" placeholder="&nbsp;&nbsp;帳號/Email">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-1">
              <input  type="password" class="form-control" id="password" name="password" placeholder="&nbsp;&nbsp;密碼">
            </div>
          </div><div class="form-group">
            <div class="col-sm-10 col-sm-offset-1">
              <input  type="password" class="form-control" id="password" name="password" placeholder="&nbsp;&nbsp;確認密碼">
            </div>
          </div>
        </form>
        <div class="signin">
          <button type="submit" class="btn btn-info">送出</button>
        </div>
      
    
      </div>
    </div>






<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://zeptojs.com/zepto.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

<script src="lib/jquery.colorbox.js"></script>
<script src="slider_js/amazingslider.js"></script>
<script src="slider_js/initslider-1.js"></script>
<script src="lib/vegas/vegas.min.js"></script>


<script>

  $(window).scroll(function(event){
       var st = $(this).scrollTop();
       console.log(st);
       if(st>850){
        $(".navbar-default .navbar-nav > li > a").css("color","#1C1C1C"),
        $(".navbar-brand img").attr("src","images/logo_b.png"),
        $(".navbar").css("background:'' "),
        $(".navbar").input(".navbarInverse");
       }else{
        $(".navbar-default .navbar-nav > li > a").css("color","#FCFAF2"),
        $(".navbar-brand img").attr("src","images/logo_w.png");
       }
    });


  $("#area01").vegas({
    slides: [{ 
      src: 'images/M1.jpg' 
    }, { 
      src: 'images/M2.jpg' 
    },
        ],
        animation: 'random'
    });


  $("#login").colorbox({inline:true, width:"30%", });

  $("#register").colorbox({inline:true, width:"30%", });







</script>	
</body>
</html>