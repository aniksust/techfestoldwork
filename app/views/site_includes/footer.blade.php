
<footer class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>&copy; IPvision SUST 6<sup>th</sup> CSE Carnival 2017</p>
            </div>
            <div class="col-md-4">
                <p>
                    Developed by <a href="http://scdnlab.com/" target="_blank">SUST CSE Developer Network</a>
                </p>
            </div>
            <div class="col-md-4">
                <p>
                    Theme by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                </p>
            </div>
        </div>
    </div>
</footer>

{{ HTML::script('carnival_assets/js/jquery-2.1.3.min.js') }}
{{ HTML::script('carnival_assets/js/bootstrap.min.js') }}
{{ HTML::script('carnival_assets/js/jquery.fancybox.min.js') }}
{{ HTML::script('carnival_assets/js/owl.carousel.js') }}
{{ HTML::script('carnival_assets/js/timer.js') }}
{{ HTML::script('carnival_assets/js/wow.min.js') }}
{{ HTML::script('carnival_assets/js/script.js') }}
{{ HTML::script('carnival_assets/js/custom-file-input.js') }}
{{-- <script src="js/custom-file-input.js"></script> --}}

@yield('script')
