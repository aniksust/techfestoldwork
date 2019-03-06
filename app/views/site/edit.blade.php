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

<h3 class="text-center" style="margin-top: 50px; color: RED">For multiple member change, submit this form multiple times.</h3>
<section class="main-content">
    @include('site_includes.alert')
    {{ Form::open(array(url('/').'/registration/edit', 'files' => true)) }}

    <div class="row" style="margin: 0 auto; width: 500px">

        <h3 class="text-center">Current Team Name</h3>

        <div class="form-group">
            {{ Form::text('former_team_name', null, array('class' => 'form-control empty iconified', 'required'  =>  'required', 'id'  => 'former_team_name', 'placeholder'   =>  '&#xf0c0;  Former Team Name' )) }}

        </div>   
        <h4> <br> New Team Name <br> (If you don't want to change member, leave this field blank.)     </h4>
        <div class="form-group">
            {{ Form::text('new_team_name', null, array('class' => 'form-control empty iconified', 'id'  => 'new_team_name', 'placeholder'   =>  '&#xf0c0;  New Team Name')) }}

        </div>        

    </div>

<div class="row" style="margin: 0 auto; width: 500px">

    <div class="coach-info">


        <h4> <br> New Team Member <br> (If you don't want to change member, leave this field blank.)     </h4>

     
        <div class="form-group">
            {{ Form::text('former_member_name', null, array('class' => 'form-control empty iconified',  'id'  => 'former_member_name', 'placeholder'   =>  '&#xf183;  Former Member Name')) }}

        </div> 
        <div class="form-group">
            {{ Form::text('new_member_name', null, array('class' => 'form-control empty iconified', 'id'  => 'new_member_name', 'placeholder'   =>  '&#xf183;  New Member Name')) }}

        </div> 

        <div class="col-md-7" style="margin: 0 auto; width: 500px">
            <div class="form-group">
             <input type="file" name="new_member_photo" id="new_member_photo" class="inputfile inputfile-1"/>
             <label for="new_member_photo"> <span>Choose New Member Photo</span></label>

             <input type="file" name="new_member_photo_id" id="new_member_photo_id" class="inputfile inputfile-1"/>
             <label for="new_member_photo_id"> <span>Choose New Member Photo ID</span></label>
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
