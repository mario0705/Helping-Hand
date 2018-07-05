<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}
$stmt = $mysqli->prepare("SELECT round FROM round WHERE id ='0'");
$stmt->execute();
$stmt->bind_result($round);
$stmt->fetch();
?>
<?php
include("head.php")
?>
<!--Main layout-->
<main>
    
    <div class="container-fluid text-center">
        <!--Card-->
        <div class="card card-cascade wider reverse my-4 pb-5">
            <!--Card image-->
            <div class="view overlay rgba-white-slight wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                
<link rel="stylesheet" href="http://idangero.us/swiper/dist/css/swiper.min.css">

<style>
    
    .swiper-container {
      width: 100%;
      height: 100%;

    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
</head>
<body>

<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide"><img src="./assets/image/1.jpg"></div>
<div class="swiper-slide"><img src="./assets/image/1.jpg"></div>
<div class="swiper-slide"><img src="./assets/image/1.jpg"></div>
<div class="swiper-slide"><img src="./assets/image/1.jpg"></div>
<div class="swiper-slide"><img src="./assets/image/1.jpg"></div>
<div class="swiper-slide"><img src="./assets/image/1.jpg"></div>
<div class="swiper-slide"><img src="./assets/image/1.jpg"></div>
<div class="swiper-slide"><img src="./assets/image/1.jpg"></div>
<div class="swiper-slide"><img src="./assets/image/1.jpg"></div>
<div class="swiper-slide"><img src="./assets/image/1.jpg"></div>
</div>

<div class="swiper-pagination"></div>

<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>

<script src="http://idangero.us/swiper/dist/js/swiper.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
                <a href="#!">
                    <div class="mask waves-effect waves-light"></div>
                </a>
            </div>
            
            <!--/Card image-->
            <!--Card content-->
            <div class="card-body text-center wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                <!--Title-->
                <h4 class="card-title"><strong>WELCOME TO MINDSPARK</strong></h4>
                <h5 class="blue-text"><strong>Buck up and brush up your logic! 
Because here comes the most twisted treasure hunt with questions comprehensive of spontaneity, logic and common sense. One just has to just efficiently use their cognitive ability in  order to solve the riddles no programming experience required.</strong></h5>
                <p class="card-text">

Round 2- Answers to the riddles shall be in the form of QR Code. Participants will be required to ascertain these answers from different places of the college.

Round 3- The third and final round is also about QR Code, but this shall be spread over to the campus area and not just college. 

Round 2 & 3 basically have both types of riddles. Simple one, regarding Googling skills and the one based on QR Code.
              <a href="finalist.php" class="btn btn-primary btn-lg waves-effect waves-light">Round 2 Winners</a>
                </br>
                <a href="instruction.php" class="btn btn-primary btn-lg waves-effect waves-light">instructions round 2</a>
                </br>
                <p class="card-text">Already Registered?</p>
                <a href="login.php" class="btn btn-primary btn-lg waves-effect waves-light">Login</a>
                
            </div>
            <!--/.Card content-->
        </div>
        <!--/.Card-->
        
    </div>
    
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->