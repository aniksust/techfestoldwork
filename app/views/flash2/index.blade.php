<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
  --><title>IPvision SUST 6th CSE Carnival 2017 .::::.</title>

  <link rel="icon" href="favico.ico">
  
  <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
  -->
  <!-- Default stylesheets-->
  <link href="flashassets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Template specific stylesheets-->
  <link href="flashassets/lib/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet">
  <!-- Main stylesheet and color file-->
  <link href="flashassets/css/style.css" rel="stylesheet">
  <link id="color-scheme" href="flasassets/css/colors/default.css" rel="stylesheet">
  <!-- <script>
<!--
window.open("/flash2","fs","fullscreen=yes")

</script> -->
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="content-wrapper">
      <div id="slideshow">
        @foreach($myslides as $filename)
        <img src="/carnival_assets/gallery/flash/{{$filename['filename']}}.jpg">
        @endforeach

      </div>

    </div>

    <!-- <section > <font color="#111111">
IPVision SUST 5<sup>th</sup> CSE Carnival 2015</font>
</section> -->
</main>
<marquee class="text" style="font-size: 45px; position: fixed;  left: 0; background:rgba(240,240,240,.5); color: #000000; ">The Department of Computer Science & Engineering (CSE) of Shahjalal University of Science & Technology (SUST) is going to organize one of the biggest national event of Bangladesh, CSE Carnival 2017 on August 04-05, 2017 at SUST campus in association with CSE Society, SUST
  The main events of this program are: 
  # SUST Inter University Programming Contest (SIUPC)
  # SUST Inter University Software Contest (SIUSC)
  # Project Showcasing
  # Robotics Competition
  # Gaming Contest
  For details please visit: csecarnival.com</marquee>
    <!--  
    JavaScripts
    =============================================
  -->
  <script src="flashassets/lib/jquery/dist/jquery.js"></script>
  <script src="flashassets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="flashassets/lib/owl.carousel/dist/owl.carousel.js"></script>
  <script src="flashassets/lib/ajaxchimp/jquery.ajaxchimp.js"></script>
  <script src="flashassets/js/main.js"></script>
</body>
</html>