<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js"> <!--<![endif]-->
@include('site_includes.header')

<body onload="countdown(year,month,day,hour,minute)">

<section class="header">
    <div id="window-height">
        <div class="heading-wrapper">

            <!--
            =============================================
              top navigation bar
            =============================================
            -->

            @include('site_includes.topbar')
                    <!-- top navigation bar FINISH-->

            <!--
            =============================================
                main navigation bar
            =============================================
            -->
            @include('site_includes.navbar')

                    <!-- end of /#navigation -->

            @yield('home_page')
        </div> <!-- end of .heading-wrapper -->
    </div>
</section> <!-- end of header section -->


<!-- begin:about -->
@yield('service_page')
        <!-- end:about -->


<!-- begin: schedule -->
@yield('schedule_page')
        <!--  end of #schedule  -->


<!-- begin: Top Speakers -->
@yield('speaker_page')
        <!--  end of #speakers  -->



<!--  Necessary scripts  -->

@include('site_includes.footer')

</body>
</html>