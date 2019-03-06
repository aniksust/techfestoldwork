<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {box-sizing:border-box}
    body {font-family: Verdana,sans-serif;}
    .mySlides {
      display:none;
    }
    .im {
      display:block;
      margin:auto;
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 45px;
      padding: 0px 0px;
      /*position: absolute;*/
      bottom: 0px;
      height: : 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 13px;
      width: 13px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 2.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
  </style>
</head>
<body bgcolor="#1C1C1C">
<!-- 
<h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p> -->
<div class="slideshow-container">
  @foreach($myslides as $filename)
  <div class="mySlides fade">

    <!-- <div class="numbertext">1 / 3</div> -->
    <img class="im" src="/carnival_assets/gallery/flash/{{$filename['filename']}}.jpg">
    {{-- <div class="text">IPVision SUST 5<sup>th</sup> CSE CARNIVAL 2015</div> --}}
  </div>
<marquee class="text" style="position: fixed; top: 10; left: 0; background:rgba(240,240,240,.5); color: #000000; ">The Department of Computer Science & Engineering (CSE) of Shahjalal University of Science & Technology (SUST) is going to organize one of the biggest national event of Bangladesh, CSE Carnival 2017 on August 04-05, 2017 at SUST campus in association with CSE Society, SUST
The main events of this program are: 
# SUST Inter University Programming Contest (SIUPC)
# Hackathon
# Project Showcasing
# Robotics Competition
# Gaming Contest
For details please visit: csecarnival.com</marquee>

</div>
<!-- <br> -->

<!-- <div style="text-align:center">
  <span class="dot"></span> 
</div> -->
@endforeach
<script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
   // var dots = document.getElementsByClassName("dot");
   for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";  
   }
   slideIndex++;
   if (slideIndex> slides.length) {slideIndex = 1}    
    // for (i = 0; i < dots.length; i++) {
    //   dots[i].className = dots[i].className.replace(" active", "");
    // }
    slides[slideIndex-1].style.display = "block";  
    //dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
  }
</script>

</body>
</html> 
