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
$data = DB::table('pages')->where('slug', 'rc')->first();

?>

<header>

    <div class="header-wrapper">
        <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
    </div> <!-- /.header-wrapper -->


    <section class="main-content">
        <div class="container">
            <div class="contact-form">
                @include('site_includes.alert')



                {{ Form::open(array('route' => 'reg.rc.store', 'files' => true)) }}

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="team-info">

                            <div class="row">

                                <h3 class="text-center">Team Info</h3>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::text('team_name', null, array('class' => 'form-control empty iconified', 'id'  => 'team_name', 'required'  =>  'required', 'placeholder'   =>  '&#xf0c0;   Team Name')) }}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <select class="form-control empty iconified" name="number" id="number" required="required">
                                            <option value="" selected disabled>Number of Team Members</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of /.team-info -->


                <div class="row">
                <div class="team-member-info" style="margin: 0 auto; width: 400px">

                        <div >
                            <h3 class="text-center">Team Leader</h3>
                            <div class="form-group">
                                {{ Form::text('team_leader', null, array('class' => 'form-control empty iconified', 'id'  => 'team_leader', 'required'  =>  'required', 'placeholder'   =>  '&#xf183;   Name')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::email('team_leader_mail', null, array('class' => 'form-control empty iconified', 'id'  => 'team_leader_mail', 'required'  =>  'required', 'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('team_leader_phone', null, array('class' => 'form-control empty iconified', 'id'  => 'team_leader_phone', 'required'  =>  'required', 'placeholder'   =>  '&#xf10b; Mobile No.')) }}                             
                            </div>

                     </div>
                 </div>
             </div>



             <div class="row">
                <div class="team-member-info">

                    <div class="col-md-3">
                        <h3 class="text-center">Member1</h3>
                        <div class="form-group">
                            {{ Form::text('member1_name', null, array('class' => 'form-control empty iconified', 'id'  => 'member1_name',  'placeholder'   =>  '&#xf183;   Name')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::email('member1_email', null, array('class' => 'form-control empty iconified', 'id'  => 'member1_email',  'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::text('member1_phone', null, array('class' => 'form-control empty iconified', 'id'  => 'member1_phone',  'placeholder'   =>  '&#xf10b;   Mobile No.')) }}                             
                        </div>

                 </div>

                 <div class="col-md-3">
                    <h3 class="text-center">Member2</h3>
                    <div class="form-group">
                        {{ Form::text('member2_name', null, array('class' => 'form-control empty iconified', 'id'  => 'member2_name',  'placeholder'   =>  '&#xf183;   Name')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::email('member2_email', null, array('class' => 'form-control empty iconified', 'id'  => 'member2_email',  'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::text('member2_phone', null, array('class' => 'form-control empty iconified', 'id'  => 'member2_phone',  'placeholder'   =>  '&#xf10b;   Mobile No.')) }}                                </div>
                 </div>


                 <div class="col-md-3">
                    <h3 class="text-center">Member3</h3>
                    <div class="form-group">
                        {{ Form::text('member3_name', null, array('class' => 'form-control empty iconified', 'id'  => 'member3_name',  'placeholder'   =>  '&#xf183;   Name')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::email('member3_email', null, array('class' => 'form-control empty iconified', 'id'  => 'member3_email',  'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::text('member3_phone', null, array('class' => 'form-control empty iconified', 'id'  => 'member3_phone',  'placeholder'   =>  '&#xf10b;   Mobile No.')) }}                                </div>
                 </div>

                 <div class="col-md-3">
                    <h3 class="text-center">Member4</h3>
                    <div class="form-group">
                        {{ Form::text('member4_name', null, array('class' => 'form-control empty iconified', 'id'  => 'member4_name',  'placeholder'   =>  '&#xf183;   Name')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::email('member4_email', null, array('class' => 'form-control empty iconified', 'id'  => 'member4_email',  'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::text('member4_phone', null, array('class' => 'form-control empty iconified', 'id'  => 'member4_phone',  'placeholder'   =>  '&#xf10b;   Mobile No.')) }}                                </div>

                       
                 </div>


             </div>
         </div> <!-- end of /.team-memmber-info -->
         <div class="row" style="margin: 0 auto; width: 500px">

            <div class="coach-info">

                <h3 class="text-center">Payment Details</h3>

                <div class="text-center">
                    <div class="form-group">
                     <input type="file" name="payment" id="payment" class="inputfile inputfile-1"/>
                     <label for="payment"> <span>A photo of payment slip</span></label>
                 </div>
             </div>
         </div>

     </div> <!-- end of /.project-info -->


     <button type="submit" id="submit" name="submit" class="btn btn-black center-block" style="margin-bottom: 70px;">Submit <i class="fa fa-paper-plane"></i></button>
 </form> <!-- form end -->





</div> <!-- end of /.contact-form -->
</div>
</section>


<!--  Necessary scripts  -->

@include('site_includes.footer')
@stop
