<!doctype html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<meta name="description" content="	">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IPVision SUST 6th CSE Carnival -2017</title>



	<!-- CSS styles -->
	<link rel="stylesheet" href="/assets/css/base.css">
	<!-- /CSS styles -->

</head>
<body>

	<div>
		<div class="page-wrapper">
			<div class="page-main no-side">
				<!-- Gallery wrapper -->	
				<div class="grid-portfolio tj-lightbox-gallery no-padding same-ratio-items">

					@foreach($manuals1 as $filename)	
					<!-- Gallery Item -->	
					<div class="gp-item tj-hover-5 reverse">
						<a href="/assets/all/{{$filename['filename']}}.jpg"  class="lightbox-gallery-item">
							<img src="/assets/all/{{$filename['filename']}}.jpg" alt="alt" class="img-responsive">
							<!-- Item Overlay -->	
							<div class="tj-overlay"></div>
							<!-- /Item Overlay -->	
						</a>
					</div>
					<!-- /Gallery Item -->
					@endforeach
					@foreach($manuals2 as $filename)	
					<!-- Gallery Item -->	
					<div class="gp-item tj-hover-5 reverse programming">
						<a href="/assets/programming/{{$filename['filename']}}.jpg"  class="lightbox-gallery-item">
							<img src="/assets/programming/{{$filename['filename']}}.jpg" alt="alt" class="img-responsive">
							<!-- Item Overlay -->	
							<div class="tj-overlay"></div>
							<!-- /Item Overlay -->	
						</a>
					</div>
					<!-- /Gallery Item -->
					@endforeach
					@foreach($manuals3 as $filename)	
					<!-- Gallery Item -->	
					<div class="gp-item tj-hover-5 reverse software">
						<a href="/assets/software/{{$filename['filename']}}.jpg"  class="lightbox-gallery-item">
							<img src="/assets/software/{{$filename['filename']}}.jpg" alt="alt" class="img-responsive">
							<!-- Item Overlay -->	
							<div class="tj-overlay"></div>
							<!-- /Item Overlay -->	
						</a>
					</div>
					<!-- /Gallery Item -->
					@endforeach
					@foreach($manuals4 as $filename)	
					<!-- Gallery Item -->	
					<div class="gp-item tj-hover-5 reverse game">
						<a href="/assets/software/{{$filename['filename']}}.jpg"  class="lightbox-gallery-item">
							<img src="/assets/software/{{$filename['filename']}}.jpg" alt="alt" class="img-responsive">
							<!-- Item Overlay -->	
							<div class="tj-overlay"></div>
							<!-- /Item Overlay -->	
						</a>
					</div>
					<!-- /Gallery Item -->
					@endforeach

				</div>
				<!-- /Gallery wrapper -->	

				<!-- Grid filter -->
				<div class="fixed-filter">
					<a href="#" class="select-filter"><i class="fa fa-filter"></i> Filter</a>
					<ul class="grid-filters">
						<li class="active"><a href="#" data-filter="*">all</a></li>
						<li><a href="#" data-filter=".programming">Programming</a></li>
						<li><a href="#" data-filter=".software">Software</a></li>
						<li><a href="#" data-filter=".game">Game</a></li>
						{{-- <li><a href="#" data-filter=".game">Print</a></li> --}}
					</ul>
				</div>
				<!-- /Grid filter -->
			</div>
		</div>
	</div>



	<!-- jquery core -->
	<script type="text/javascript" src="/assets/js/vendors/jquery-1.11.0.min.js"></script>

	<!-- imagesLoaded jquery plugin -->
	<script type="text/javascript" src="/assets/js/vendors/imagesloaded.pkgd.min.js"></script>

	<!-- jquery isotop plugin -->
	<script type="text/javascript" src="/assets/js/vendors/isotope.pkgd.min.js"></script>

	<!-- jquery history neede for ajax pages -->
	<script type="text/javascript" src="/assets/js/vendors/jquery.history.js"></script>

	<!-- owwwlab jquery kenburn slider plugin -->
	<script type="text/javascript" src="/assets/js/jquery.owwwlab-kenburns.js"></script>

	<!-- owwwlab jquery double carousel plugin -->
	<script type="text/javascript" src="/assets/js/jquery.owwwlab-DoubleCarousel.js"></script>

	<!-- owwwwlab jquery video background plugin -->
	<script type="text/javascript" src="/assets/js/jquery.owwwlab-video.js"></script>

	<!-- tweenmax animation framework -->
	<script type="text/javascript" src="/assets/js/vendors/TweenMax.min.js"></script>

	<!-- jquery nice scroll plugin needed for vertical portfolio page -->
	<script type="text/javascript" src="/assets/js/vendors/jquery.nicescroll.min.js"></script>

	<!-- jquery magnific popup needed for ligh-boxes -->
	<script type="text/javascript" src="/assets/js/vendors/jquery.magnific-popup.js"></script>

	<!-- html5 media player -->
	<script type="text/javascript" src="/assets/js/vendors/mediaelement-and-player.min.js"></script>

	<!-- jquery inview plugin -->
	<script type="text/javascript" src="/assets/js/vendors/jquery.inview.min.js"></script>

	<!-- smooth scroll -->
	<script type="text/javascript" src="/assets/js/vendors/smoothscroll.js"></script>



	<!-- Master Slider -->
	<script src="/assets/masterslider/jquery.easing.min.js"></script>
	<script src="/assets/masterslider/masterslider.min.js"></script>

	<!-- theme custom scripts -->
	<script type="text/javascript" src="/assets/js/custom.js"></script>



</body>

</html>