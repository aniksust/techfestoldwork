    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        2017 &copy; SUST CSE 13
        <a href="#" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
    <!--footer end-->

  </section>

  {{ HTML::script('js/jquery.js') }}
  {{ HTML::script('js/bootstrap.min.js') }}
  {{ HTML::script('js/jquery.dcjqaccordion.2.7.js', array('class' => 'include')) }}
  {{ HTML::script('js/jquery.scrollTo.min.js') }}
  {{ HTML::script('js/jquery.nicescroll.js') }}
  {{ HTML::script('js/respond.min.js') }}
  {{ HTML::script('js/slidebars.min.js') }}
  {{ HTML::script('js/common-scripts.js') }}
  @yield('script')
  {{ HTML::script('js/custom.js') }}
  <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
              </script>
              <script>(function(e,t,n)
        {
            var r=e.querySelectorAll("html")[0];
            r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")
        })(document,window,0);</script>

              

