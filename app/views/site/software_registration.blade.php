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
    $data = DB::table('pages')->where('slug', 'sc')->first();
    
    ?>

    <header>

        <div class="header-wrapper">
            <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


        <div class="header-wrapper">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Registration</a></li>
                            <li class="active">Programming Contest Registration</li>
                        </ol>

                    </div>
                </div>
            </div> --> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">
            <div class="contact-form">
                @include('site_includes.alert')
                {{ Form::open(array('route' => 'reg.sc.store', 'files' => true)) }}
                <h2 class="text-center">Hackathon Registration</h2>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="team-info">

                            <div class="row">

                                <h3 class="text-center">Team Info</h3>

                                <div class="col-md-6 col-lg-offset-3">
                                    <div class="form-group">
                                        {{ Form::text('team_name', null, array('class' => 'form-control empty iconified', 'id'  => 'team_name', 'required'  =>  'required', 'placeholder'   =>  '&#xf0c0;   Team Name')) }}
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-offset-3">
                                    <div class="form-group">

                                        <select class="form-control empty iconified" name="university" id="university" required="required">
                                            <option value="" selected disabled>Please Select Your University</option>
                                            <option>Ahsanullah University of Science and Technology</option>
                                            <option>America Bangladesh University</option>
                                            <option>American International University-Bangladesh</option>
                                            <option>Asa University Bangladesh</option>
                                            <option>Asian University of Bangladesh</option>
                                            <option>Atish Dipankar University of Science and Technology</option>


                                            <option>Bangabandhu Sheikh Mujibur Rahman Science and Technology University</option>
                                            <option>Bangladesh University of Engineering and Technology</option>
                                            <option>Begum Rokeya University</option>
                                            <option>Bangladesh Islami University</option>
                                            <option>Bangladesh University of Business and Technology</option>
                                            <option>Bangladesh University of Professionals</option>
                                            <option>Bangladesh University</option>
                                            <option>Begum Gulchemonara Trust University Bangladesh</option>
                                            <option>BRAC University</option>


                                            <option>Chittagong University of Engineering & Technology</option>
                                            <option>Comilla University</option>
                                            <option>Central Women's University</option>
                                            <option>Chittagong Independent University (CIU)</option>
                                            <option>City University, Bangladesh</option>
                                            <option>Coxs Bazar International University</option>


                                            <option>Dhaka University of Engineering & Technology</option>
                                            <option>Daffodil International University</option>
                                            <option>Daffodil Institute of Information Technology</option>
                                            <option>Darul Ihsan University</option>
                                            <option>Dhaka International University</option>

                                            <option>East Delta University</option>
                                            <option>East West University</option>
                                            <option>Eastern University, Bangladesh</option>
                                            <option>European University of Bangladesh</option>

                                            <option>Gono Bishwabidyalay</option>
                                            <option>Green University of Bangladesh</option>


                                            <option>Hajee Mohammad Danesh Science & Technology University</option>
                                            <option>Hamdard University Bangladesh</option>


                                            <option>Islamic University,Kushtia</option>
                                            <option>Islamic University of Technology</option>
                                            <option>IBAIS University</option>
                                            <option>Independent University, Bangladesh</option>
                                            <option>International Islamic University, Chittagong</option>
                                            <option>International University of Business Agriculture and Technology</option>
                                            <option>Institute of Science and Technology, Dhanmondi, Dhaka</option>

                                            <option>Jagannath University</option>
                                            <option>Jahangirnagar University</option>
                                            <option>Jatiya Kabi Kazi Nazrul Islam University</option>
                                            <option>Jessore University of Science & Technology</option>


                                            <option>Khulna University of Engineering & Technology</option>
                                            <option>Khulna University</option>
                                            <option>Khwaja Yunus Ali University</option>

                                            <option>Leading University</option>


                                            <option>Mawlana Bhashani Science and Technology University</option>
                                            <option>Military Institute of Science & Technology</option>
                                            <option>Mymensingh Engineering College</option>
                                            <option>Manarat International University</option>
                                            <option>Metropolitan University, Sylhet</option>
                                            <option>Millennium University</option>
                                            <option>National University</option>


                                            <option>Noakhali Science and Technology University</option>
                                            <option>North South University</option>
                                            <option>North Western University, Bangladesh</option>
                                            <option>North East University Bangladesh</option>
                                            <option>Northern University, Bangladesh</option>
                                            <option>Notre Dame University Bangladesh</option>


                                            <option>Pabna University of Science and Technology</option>
                                            <option>Patuakhali Science and Technology University</option>
                                            <option>People's University of Bangladesh</option>
                                            <option>Port City International University</option>
                                            <option>Premier University, Chittagong</option>
                                            <option>Presidency University, Kolkata</option>
                                            <option>Prime University</option>
                                            <option>Primeasia University</option>

                                            <option>Queens University (Bangladesh)</option>


                                            <option>Rajshahi University of Engineering & Technology</option>
                                            <option>Royal University of Dhaka</option>


                                            <option>Shahjalal University of Science and Technology</option>
                                            <option>Sylhet Engineering College</option>
                                            <option>Shanto-Mariam University of Creative Technology</option>
                                            <option>Sonargaon University</option>
                                            <option>Southeast University (Bangladesh)</option>
                                            <option>Southern University, Bangladesh</option>
                                            <option>Stamford University Bangladesh</option>
                                            <option>State University of Bangladesh</option>
                                            <option>Sylhet International University</option>


                                            <option>University of Barisal</option>
                                            <option>University of Chittagong</option>
                                            <option>University of Dhaka</option>
                                            <option>University of Rajshahi</option>
                                            <option>United International University</option>
                                            <option>University of Asia Pacific (Bangladesh)</option>
                                            <option>University of Development Alternative</option>
                                            <option>University of Information Technology and Sciences</option>
                                            <option>University of Liberal Arts Bangladesh</option>
                                            <option>University of Science & Technology Chittagong</option>
                                            <option>University of South Asia, Bangladesh</option>
                                            <option>Uttara University</option>
                                            <option>Varendra University</option>
                                            <option>Victoria University of Bangladesh</option>
                                            <option>World University of Bangladesh</option>

                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> <!-- end of /.team-info -->


                <div class="row">
                    <div class="team-member-info">

                        <div class="col-md-4 col-lg-offset-2">
                            <h3 class="text-center">Member1</h3>
                            <div class="form-group">
                                {{ Form::text('member1_name', null, array('class' => 'form-control empty iconified', 'id'  => 'member1_name', 'required'  =>  'required', 'placeholder'   =>  '&#xf183;   Name')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::email('member1_email', null, array('class' => 'form-control empty iconified', 'id'  => 'member1_email', 'required'  =>  'required', 'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('member1_mobile', null, array('class' => 'form-control empty iconified', 'id'  => 'member1_mobile', 'required'  =>  'required', 'placeholder'   =>  '&#xf10b;   Mobile No.')) }}                                </div>

                            
                        </div>

                        <div class="col-md-4">
                            <h3 class="text-center">Member2</h3>
                            <div class="form-group">
                                {{ Form::text('member2_name', null, array('class' => 'form-control empty iconified', 'id'  => 'member2_name',  'placeholder'   =>  '&#xf183;   Name')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::email('member2_email', null, array('class' => 'form-control empty iconified', 'id'  => 'member2_email',  'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('member2_mobile', null, array('class' => 'form-control empty iconified', 'id'  => 'member2_mobile',  'placeholder'   =>  '&#xf10b;   Mobile No.')) }}                                </div>

                            
                        </div>


                        <div class="col-md-4 col-lg-offset-2">
                            <h3 class="text-center">Member3</h3>
                            <div class="form-group">
                                {{ Form::text('member3_name', null, array('class' => 'form-control empty iconified', 'id'  => 'member3_name',  'placeholder'   =>  '&#xf183;   Name')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::email('member3_email', null, array('class' => 'form-control empty iconified', 'id'  => 'member3_email',  'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('member3_mobile', null, array('class' => 'form-control empty iconified', 'id'  => 'member3_mobile',  'placeholder'   =>  '&#xf10b;   Mobile No.')) }}                                </div>

                            
                        </div>

                        <div class="col-md-4">
                            <h3 class="text-center">Member4</h3>
                            <div class="form-group">
                                {{ Form::text('member4_name', null, array('class' => 'form-control empty iconified', 'id'  => 'member4_name',  'placeholder'   =>  '&#xf183;   Name')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::email('member4_email', null, array('class' => 'form-control empty iconified', 'id'  => 'member4_email',  'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('member4_mobile', null, array('class' => 'form-control empty iconified', 'id'  => 'member4_mobile',  'placeholder'   =>  '&#xf10b;   Mobile No.')) }}                                </div>

                            
                        </div>

                    <div class="col-md-8 col-md-offset-2">
                           <h3 class="text-center">Your Proposal
                            <small>
                                <br> (Should be less than 300 words.)
                            </small>
                           </h3>
                            <div class="form-group">
                            <textarea class="col-md-4 text-center" style="width: 100%; margin: 0 auto" name="propose" placeholder="Your proposal to the problem" required></textarea>
                            </div>    
                    </div>

                    <div class="col-md-8 col-md-offset-2" style="margin-top: 50px">
                           <h3 class="text-center">Previous participation in hackathon
                            <small>
                                (if any position then mention)
                            </small>
                           </h3>
                            <div class="form-group">
                            <textarea class="col-md-4 text-center" style="width: 100%; margin: 0 auto" name="last" required></textarea>
                            </div>

                           


                    </div>

                </div> <!-- end of /.team-memmber-info -->
                <div class="row">
                    
                    
                </div>

                <button type="submit" id="submit" name="submit" class="btn btn-black center-block" style="margin-bottom: 70px;">Submit <i class="fa fa-paper-plane"></i></button>
                </form> <!-- form end -->
            </div> <!-- end of /.contact-form -->
        </div>
    </section>


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop
