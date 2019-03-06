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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="image_src" type="image/jpeg" href="http://scdnlab.com/fb_share.png" />
    {{-- <link rel="shortcut icon" href="favicon.ico" /> --}}
    <link rel="icon" href="favicon.ico">
    <meta property="og:image" content="http://scdnlab.com/fb_share.png"/>
    <meta property="og:image:secure_url" content="http://scdnlab.com/fb_share.png" />

    <!-- stylesheets -->

    {{ HTML::style('carnival_assets/css/bootstrap.min.css') }}
    {{ HTML::style('carnival_assets/css/font-awesome.min.css') }}
    {{ HTML::style('carnival_assets/css/owl.carousel.css') }}
    {{ HTML::style('carnival_assets/css/owl.theme.css') }}
    {{ HTML::style('carnival_assets/css/jquery.fancybox.min.css') }}
    {{ HTML::style('carnival_assets/css/style2.css') }}
    @yield('style')

    <!-- scripts -->
    {{ HTML::script('https://maps.googleapis.com/maps/api/js') }}


    <link rel="shortcut icon" href="favicon.ico">
    {{ HTML::style('carnival_assets/in/css/normalize.css') }}
    {{ HTML::style('carnival_assets/in/css/demo.css') }}
    {{ HTML::style('carnival_assets/in/css/component.css') }}
    
    {{-- Top Bar Effect  --}}
    {{-- <script>
        $(document).ready(function(){
            $("#top-bar").hide();

            $("#navigation").mouseenter(function(){
                $("#top-bar").toggle(500);
            });
            

            $("#navigation").mouseleave(function(){
                
                $("#top-bar").mouseenter(function(){
                $("#top-bar").show();
            });//$("#top-bar").toggle(500);
            });
            
        });
    </script>
 --}}

    <!-- remove this if you use Modernizr -->
    <script>(function(e,t,n)
        {
            var r=e.querySelectorAll("html")[0];
            r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")
        })(document,window,0);
    </script>

        @yield('script')
    </head>