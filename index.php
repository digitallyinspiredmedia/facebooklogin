<?php
session_unset();
session_start();
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>green trends</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta property="og:url" content="" />
<meta property="og:type" content="website" />
<meta property="og:title" content=" " />
<meta property="og:description" content=" " />
<meta property="og:image" content=" ">
<meta property="og:image:secure_url" content=" ">
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77716916-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<?php if ($_SESSION['FBID']): ?>
 <body class="textarea">

  <!--  After user login  -->
  <div class="couponcode">
   <div class="downloadProject"></div>
   <script type="text/javascript">
       window.onload = function(){
        window.open('Green-Trends-25-Off-Coupon.pdf','_blank');;
       }
       </script>
   <div class="voterid">
    <img src="img/voterid.png" />
   </div>
  <!-- voterid end -->

   <div class="couponcode-content">
    <div class="logo-campain-hastag">
     <img src="img/logo-campain-hastag.png" class="img-responsive" />
    </div> <!-- logo-campain-hastag -->

    <div class="congratulate">
     <p><span>Congratulations!</span> <br>  Walk into any of our salons and show<br>us the election ink to avail<br>flat <span class="offer">25%</span> off on all services.<sup>*</sup></p>
    </div> <!-- congratulate -->
   </div>
   <!-- couponcode-content end -->

   <div class="inner footer">
    <div class="maptext">
     <p><i class="fa fa-map-marker" aria-hidden="true"></i> To find your nearest salon <a href="http://mygreentrends.in/salon_locator" target="_blank"> click here </a> </p>
    </div> <!-- map text -->
    <ul class="socialicon">
     <li> <a href="https://www.facebook.com/mygreentrends" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
     <li> <a href="https://twitter.com/mygreentrends" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i>  </a> </li>
     <li> <a href="https://www.youtube.com/user/MyGreentrends" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i>  </a> </li>
    </ul> <!-- socialicon -->
   </div>
  <!-- inner footer end -->

 </div> <!-- couponcode end -->
<!-- After user login end -->

<?php else: ?>
 <body class="no-couponcode ">
<!-- Before login -->
<div class="btnarea">

<div class="verticalcontent">
 <div class="logo-campain-hastag">
  <img src="img/logo-campain-hastag.png" class="img-responsive" />
 </div>
  <!-- logo-campain-hastag -->
  <div class="centerpage">
   <a class="btn" href="fbconfig.php"> Login </a>
  </div>
</div>

  </div>

  <div class="voterid">
   <img src="img/voterid.png" />
  </div>

<div class="footer">
 <ul class="socialicon">
  <li> <a href="https://www.facebook.com/mygreentrends" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
  <li> <a href="https://twitter.com/mygreentrends" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i>  </a> </li>
  <li> <a href="https://www.youtube.com/user/MyGreentrends" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i>  </a> </li>
</ul>

</div>
<div class="tnc">
 <a href="http://mygreentrends.in/terms_and_condition" target="_blank"> *T&amp;C Apply</a>
</div>
<!-- Before login end -->

<?php endif ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.js"> </script>
<script>
$(function() {
   window.onload = function(){
      $(".downloadProject").append('<iframe width="0" height="0" frameborder="0" src="Green-Trends-25-Off-Coupon.pdf"></iframe>');
   });
});
</script>

</body>
</html>
