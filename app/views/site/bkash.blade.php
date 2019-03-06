@extends('carnival')

@section('content')


<body>

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
<!-- header begin -->
<!-- header begin -->

<?php
$data = DB::table('pages')->where('slug', 'ep')->first();

?>

<header>

    <div class="header-wrapper">
        <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
    </div> <!-- /.header-wrapper -->
</header> <!-- /.page-head (header end) -->

<h3 class="text-center" style="margin-top: 50px;"> Verify your bKash Payment.</h3>
            <img style="width:300px; margin-top: 30px"  class="img-responsive center-block" src="{{asset('carnival_assets/').'/'}}bkash.png" alt="Sponsors">

<section class="main-content">
    @include('site_includes.alert')
    {{ Form::open(array(url('/').'/bkash', 'files' => true)) }}

    <div class="row" style="margin: 0 auto; width: 500px">

        <h3 class="text-center">Team Name/Player Name</h3>

        <div class="form-group">
            {{ Form::text('name', null, array('class' => 'form-control empty iconified', 'required'  =>  'required', 'id'  => 'name', 'placeholder'   =>  '&#xf0c0;  Team Name/Player Name' )) }}

        </div>   
        <h4 class="text-center"> <br> Transaction ID </h4>
        <div class="form-group">
            {{ Form::text('trx_id', null, array('class' => 'form-control empty iconified', 'id'  => 'new_team_name', 'placeholder'   =>  'TRX ID')) }}

        </div>     
        <h4 class="text-center"> <br> Competition Name </h4>
        <div class="form-group">
            {{ Form::text('contest_name', null, array('class' => 'form-control empty iconified', 'id'  => 'new_team_name', 'placeholder'   =>  'NFS / FIFA / COD')) }}

        </div>     

        <h4 class="text-center"> <br> Your Contact Number </h4>
        <div class="form-group">
            {{ Form::text('contact', null, array('class' => 'form-control empty iconified', 'id'  => 'new_team_name', 'placeholder'   =>  '01*********')) }}

        </div>     


    </div>

<div class="row" style="margin: 0 auto; width: 500px">

    <div class="coach-info">

       <div class="col-md-7" style="margin: 0 auto; width: 500px">
            <div class="form-group">
             
             <button type="submit" id="submit" name="submit" class="btn btn-black center-block" style="margin-bottom: 70px;">Submit <i class="fa fa-paper-plane"></i></button>
         </form> <!-- form end -->
     </div>
 </div>



</div> 

</div>

</section>

<!--  Necessary scripts  -->

@include('site_includes.footer')
@stop
