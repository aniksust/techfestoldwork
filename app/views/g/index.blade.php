<!doctype html>
<html class="no-js">

<head>

    <title>{{$title}}</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="description" content="Organized By CSE Society, Department of CSE, SUST, Sylhet" />

    <meta property="og:title" content="{{$title}}" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="Organized By CSE Society, Department of CSE, SUST, Sylhet" />
    <meta property="article:author" content="CSE Society, SUST" />
    <meta property="article:publisher" content="Department of CSE, SUST" />

    <link rel="image_src" type="image/jpeg" href="http://scdnlab.com/fb_share.png" />
    <link rel="shortcut icon" href="favicon.ico" />
    <meta property="og:image" content="http://scdnlab.com/fb_share.png"/>
    <meta property="og:image:secure_url" content="http://scdnlab.com/fb_share.png" />

    <!-- stylesheets -->
    {{-- <link rel="stylesheet" href="/assets/css/base.css"> --}}
    {{ HTML::style('/assets/css/base.css') }}
    {{ HTML::style('carnival_assets/css/bootstrap.min.css') }}
    {{ HTML::style('carnival_assets/css/font-awesome.min.css') }}
    {{ HTML::style('carnival_assets/css/owl.carousel.css') }}
    {{ HTML::style('carnival_assets/css/owl.theme.css') }}
    {{ HTML::style('carnival_assets/css/jquery.fancybox.min.css') }}
    {{ HTML::style('carnival_assets/css/style.css') }}
    @yield('style')

    <!-- scripts -->
    {{ HTML::script('https://maps.googleapis.com/maps/api/js') }}

    @yield('script')
</head>


<body >

	<section class="topbar">
	@include('site_includes.topbar')
        <div id="navigation">
    <!-- main navigaion begin -->
    <nav class="yamm navbar navbar-default ">
        <div class="container">
            <!-- navbar header begin -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style="color:white;font-size:20px">
                <span><img style="height:45px" src="/carnival_assets/img/logo.png"></span> SUST 6th CSE Carnival 2017
                </a>
            </div>

            <!-- main navigation begin -->
            <div class="collapse navbar-collapse navHead pull-right" id="mainMenu">

                

            </div><!-- main navigation FINISH -->
        </div><!-- container FINISH -->
    </nav><!-- yamm navbar navbar-default FINISH -->
</div>
    </section> <!-- end of header section -->
	{{-- GALLERY CONTENT --}}
	<div>
		
		<div >
			<div class="page-main no-side">
				<!-- Gallery wrapper -->	
				<div class="grid-portfolio tj-lightbox-gallery no-padding same-ratio-items">

					@foreach($manuals1 as $filename)	
					<!-- Gallery Item -->	
					<div class="gp-item tj-hover-5 reverse">
						<a href="/carnival_assets/gallery/all/{{$filename['filename']}}.jpg"  class="lightbox-gallery-item">
							<img src="/carnival_assets/gallery/all/{{$filename['filename']}}.jpg" alt="alt" class="img-responsive">
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
						<a href="/carnival_assets/gallery/programming/{{$filename['filename']}}.jpg"  class="lightbox-gallery-item">
							<img src="/carnival_assets/gallery/programming/{{$filename['filename']}}.jpg" alt="alt" class="img-responsive">
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
						<a href="/carnival_assets/gallery/software/{{$filename['filename']}}.jpg"  class="lightbox-gallery-item">
							<img src="/carnival_assets/gallery/software/{{$filename['filename']}}.jpg" alt="alt" class="img-responsive">
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
						<a href="/carnival_assets/gallery/game/{{$filename['filename']}}.jpg"  class="lightbox-gallery-item">
							<img src="/carnival_assets/gallery/game/{{$filename['filename']}}.jpg" alt="alt" class="img-responsive">
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
						<li class="active"><a href="#" data-filter="*">all</a> 
							<a href="#" data-filter=".programming">Programming</a> 
							<a href="#" data-filter=".software">Software</a> 
							<a href="#" data-filter=".game">Game</a> 
							{{--  <a href="#" data-filter=".game">Print</a>  --}}
						</li>

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