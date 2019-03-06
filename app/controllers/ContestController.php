<?php

class ContestController extends \BaseController {

	
	//programming contest
	public function shesh(){
		return View::make('site.reg_end')
		->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. SUST Inter University Programming Contest');
	}
	
	public function pc(){
		return View::make('site.programming_registration')
		->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. SUST Inter University Programming Contest');
	}

	public function pc_store(){
		$rules =[
		'team_name'		=> 'required|unique:registration',
		'university'	=>	'required',

		'coach_name'	=>	'required',
		'coach_email'	=>	'required',
		'coach_mobile'	=>	'required',	
		'coach_photo'	=>	'required|mimes:jpg,png,jpeg',	

		'member1_name'	=>	'required',
		'member1_email'	=>	'required',
		'member1_mobile'	=>	'required',	
		'member1_photo'	=>	'required|mimes:jpg,png,jpeg',
		'member1_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		'member2_name'	=>	'required',
		'member2_email'	=>	'required',
		'member2_mobile'	=>	'required',	
		'member2_photo'	=>	'required|mimes:jpg,png,jpeg',
		'member2_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		'member3_name'	=>	'required',
		'member3_email'	=>	'required',
		'member3_mobile'	=>	'required',	
		'member3_photo'	=>	'required|mimes:jpg,png,jpeg',
		'member3_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			if (Input::hasFile('coach_photo') && Input::hasFile('member1_photo') 
				&& Input::hasFile('member1_id_photo') && Input::hasFile('member2_photo')
				&& Input::hasFile('member2_id_photo') && Input::hasFile('member3_photo')
				&& Input::hasFile('member3_id_photo'))
			{
        	  //path
				$destinationPath = __DIR__.'/../../uploads/registration/';

//			               		COACH

				$coach_photo = Input::file('coach_photo');
				$coach_photo_fileName = $data['team_name'].'_coach_'.md5($coach_photo->getClientOriginalName()).".".$coach_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $coach_photo_fileName;
				 Image::make($coach_photo)->save($location);

//								MEMBER1
				$member1_photo = Input::file('member1_photo');
				$member1_photo_fileName = $data['team_name'].'_pc_member1_'.md5($member1_photo->getClientOriginalName()).".".$member1_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $member1_photo_fileName;
				Image::make($member1_photo)->save($location);

				$member1_id_photo = Input::file('member1_id_photo');
				$member1_id_photo_fileName = $data['team_name'].'_pc_member1_id_'.md5($member1_id_photo->getClientOriginalName()).".".$member1_id_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $member1_id_photo_fileName;
				Image::make($member1_id_photo)->save($location);

//		 						MEMBER2
				$member2_photo = Input::file('member2_photo');
				$member2_photo_fileName = $data['team_name'].'_pc_member2_'.md5($member2_photo->getClientOriginalName()).".".$member2_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $member2_photo_fileName;
				Image::make($member2_photo)->save($location);

				$member2_id_photo = Input::file('member2_id_photo');
				$member2_id_photo_fileName = $data['team_name'].'_pc_member2_id_'.md5($member2_id_photo->getClientOriginalName()).".".$member2_id_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $member2_id_photo_fileName;
				Image::make($member2_id_photo)->save($location);

//								MEMBER3
				$member3_photo = Input::file('member3_photo');
				$member3_photo_fileName = $data['team_name'].'_pc_member3_'.md5($member3_photo->getClientOriginalName()).".".$member3_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $member3_photo_fileName;
				Image::make($member3_photo)->save($location);

				$member3_id_photo = Input::file('member3_id_photo');
				$member3_id_photo_fileName = $data['team_name'].'_pc_member3_id_'.md5($member3_id_photo->getClientOriginalName()).".".$member3_id_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $member3_id_photo_fileName;
				Image::make($member3_id_photo)->save($location);

				$reg = new Registration();
				$reg->team_name= $data['team_name'];
				$reg->university= $data['university'];

				$reg->coach_name= $data['coach_name'];
				$reg->coach_email= $data['coach_email'];
				$reg->coach_mobile= $data['coach_mobile'];
				$reg->coach_photo= $coach_photo_fileName;

				$reg->member1_name= $data['member1_name'];
				$reg->member1_email= $data['member1_email'];
				$reg->member1_mobile= $data['member1_mobile'];
				$reg->member1_photo= $member1_photo_fileName;
				$reg->member1_id_photo= $member1_id_photo_fileName;

				$reg->member2_name= $data['member2_name'];
				$reg->member2_email= $data['member2_email'];
				$reg->member2_mobile= $data['member2_mobile'];
				$reg->member2_photo= $member2_photo_fileName;
				$reg->member2_id_photo= $member2_id_photo_fileName;

				$reg->member3_name= $data['member3_name'];
				$reg->member3_email= $data['member3_email'];
				$reg->member3_mobile= $data['member3_mobile'];
				$reg->member3_photo= $member3_photo_fileName;
				$reg->member3_id_photo= $member3_id_photo_fileName;

				$reg->contest = 'pc';
				$reg->status=0;

				if($reg->save())
					return Redirect::route('team.pc')
				->with('success', "Registration Successful");
				else
					return Redirect::route('reg.pc')->with('error',"Photos error, Please Try Again");


			}
			else{
				return Redirect::route('reg.pc')->with('error',"Photos error, Please Try Again");
			}

		}

	}

	//software contest
	public function sc(){
		// return View::make('site.reg_end')
		return View::make('site.software_registration')
		->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. Hackathon');
	}

	public function sc_store(){
		$rules =[
		'team_name'		=> 'required|unique:registration_gc_cs',
		'university'		=> 'required',

		'member1_name'	=>	'required',
		'member1_email'	=>	'required',
		'member1_mobile'	=>	'required',

		

		'propose' => 'required|max:1500',
		'last' => 'required',

		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

				$reg = new RegistrationGamesCS();
				$reg->team_name= $data['team_name'];
				$reg->university= $data['university'];

				$reg->member1_name= $data['member1_name'];
				$reg->member1_email= $data['member1_email'];
				$reg->member1_mobile= $data['member1_mobile'];

				$reg->member2_name= $data['member2_name'];
				$reg->member2_email= $data['member2_email'];
				$reg->member2_mobile= $data['member2_mobile'];

				$reg->member3_name= $data['member3_name'];
				$reg->member3_email= $data['member3_email'];
				$reg->member3_mobile= $data['member3_mobile'];

				$reg->member4_name= $data['member4_name'];
				$reg->member4_email= $data['member4_email'];
				$reg->member4_mobile= $data['member4_mobile'];

				$reg->proposal = $data['propose'];
				$reg->last = $data['last'];
				$reg->type = 1;

				$reg->status=0;

				if($reg->save())
					return Redirect::route('team.sc')
				->with('success', "Registration Successful");
				else
					return Redirect::route('reg.sc')->with('error',"Photos error, Please Try Again");



		}

	}


	//Project Showcasing
	public function ps(){
		return View::make('site.project_show_registration')
		->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. Project Showcasing');
	}

	public function ps_store(){

		$rules =[
		'team_name'		=> 'required|unique:registration',
		'university'	=>	'required',

		// 'coach_name'	=>	'required',
		// 'coach_email'	=>	'required',
		// 'coach_mobile'	=>	'required',	
		// 'coach_photo'	=>	'required|mimes:jpg,png,jpeg',	

		'project_name'  =>   'required',
		'short'         =>   'required',

		'member1_name'	=>	'required',
		'member1_email'	=>	'required',
		'member1_mobile'	=>	'required',	
		'member1_photo'	=>	'required|mimes:jpg,png,jpeg',
		'member1_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		'logo'	        =>	'required|mimes:jpg,png,jpeg',
		'payment'	    =>	'required|mimes:jpg,png,jpeg',

		'member2_name'	=>	'required',
		'member2_email'	=>	'required',
		'member2_mobile'	=>	'required',	
		'member2_photo'	=>	'required|mimes:jpg,png,jpeg',
		'member2_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		'member3_name'	=>	'required',
		'member3_email'	=>	'required',
		'member3_mobile'	=>	'required',	
		'member3_photo'	=>	'required|mimes:jpg,png,jpeg',
		'member3_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		];
		// return Input::all();
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			if (Input::hasFile('member1_photo') 
				&& Input::hasFile('member1_id_photo') && Input::hasFile('member2_photo')
				&& Input::hasFile('member2_id_photo') && Input::hasFile('member3_photo')
				&& Input::hasFile('member3_id_photo') && Input::hasFile('logo')
				&& Input::hasFile('payment'))
			{
        	  //path
				$destinationPath = __DIR__.'/../../uploads/registration/ps/';

///			               		COACH

				// $coach_photo = Input::file('coach_photo');
				// $coach_photo_fileName = $data['team_name'].'_coach_'.md5($coach_photo->getClientOriginalName()).".".$coach_photo->getClientOriginalExtension();
				// $location = $destinationPath.'/' . $coach_photo_fileName;
				// Image::make($coach_photo)->save($location);

///								MEMBER1
				$member1_photo = Input::file('member1_photo');
				$member1_photo_fileName = $data['team_name'].'_ps_member1_'.md5($member1_photo->getClientOriginalName()).".".$member1_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $member1_photo_fileName;
				Image::make($member1_photo)->save($location);

				$member1_id_photo = Input::file('member1_id_photo');
				$member1_id_photo_fileName = $data['team_name'].'_ps_member1_id_'.md5($member1_id_photo->getClientOriginalName()).".".$member1_id_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $member1_id_photo_fileName;
				Image::make($member1_id_photo)->save($location);

///								MEMBER2
				$member2_photo = Input::file('member2_photo');
				$member2_photo_fileName = $data['team_name'].'_ps_member2_'.md5($member2_photo->getClientOriginalName()).".".$member2_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $member2_photo_fileName;
				Image::make($member2_photo)->save($location);

				$member2_id_photo = Input::file('member2_id_photo');
				$member2_id_photo_fileName = $data['team_name'].'_ps_member2_id_'.md5($member2_id_photo->getClientOriginalName()).".".$member2_id_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $member2_id_photo_fileName;
				Image::make($member2_id_photo)->save($location);

///								MEMBER3
				$member3_photo = Input::file('member3_photo');
				$member3_photo_fileName = $data['team_name'].'_ps_member3_'.md5($member3_photo->getClientOriginalName()).".".$member3_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $member3_photo_fileName;
				Image::make($member3_photo)->save($location);

				$member3_id_photo = Input::file('member3_id_photo');
				$member3_id_photo_fileName = $data['team_name'].'_ps_member3_id_'.md5($member3_id_photo->getClientOriginalName()).".".$member3_id_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $member3_id_photo_fileName;
				Image::make($member3_id_photo)->save($location);

				
///								LOGO
				$logo = Input::file('logo');
				$logo_fileName = $data['team_name'].'_ps_logo_'.md5($logo->getClientOriginalName()).".".$logo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $logo_fileName;
				Image::make($logo)->save($location);

				$payment_photo = Input::file('payment');
				$payment_photo_fileName = $data['team_name'].'_ps_payment_'.md5($payment_photo->getClientOriginalName()).".".$payment_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $payment_photo_fileName;
				Image::make($payment_photo)->save($location);



				$reg = new Registration();
				$reg->team_name= $data['team_name'];
				$reg->university= $data['university'];

				// $reg->coach_name= $data['coach_name'];
				// $reg->coach_email= $data['coach_email'];
				// $reg->coach_mobile= $data['coach_mobile'];
				// $reg->coach_photo= $coach_photo_fileName;

				$reg->member1_name= $data['member1_name'];
				$reg->member1_email= $data['member1_email'];
				$reg->member1_mobile= $data['member1_mobile'];
				$reg->member1_photo= $member1_photo_fileName;
				$reg->member1_id_photo= $member1_id_photo_fileName;

				$reg->member2_name= $data['member2_name'];
				$reg->member2_email= $data['member2_email'];
				$reg->member2_mobile= $data['member2_mobile'];
				$reg->member2_photo= $member2_photo_fileName;
				$reg->member2_id_photo= $member2_id_photo_fileName;

				$reg->member3_name= $data['member3_name'];
				$reg->member3_email= $data['member3_email'];
				$reg->member3_mobile= $data['member3_mobile'];
				$reg->member3_photo= $member3_photo_fileName;
				$reg->member3_id_photo= $member3_id_photo_fileName;

				$reg->project_name = $data['project_name'];
				$reg->project_short_details = $data['short'];

				$reg->team_logo = $logo_fileName;
				$reg->payment = $payment_photo_fileName;


				$reg->contest = 'ps';
				$reg->status=0;

				if($reg->save())
					return Redirect::route('team.ps')
				->with('success', "Registration Successful");
				else
					return Redirect::route('reg.ps')->with('error',"Photos error, Please Try Again");


			}
			else{
				return Redirect::route('reg.ps')->with('error',"Photos error, Please Try Again");
			}

		}

	}

	
	//Robotics Competition
	public function rc(){
		return View::make('site.rc_registration')
		->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. Robotics Competition');
	}

	public function rc_store(){

		$rules =[
		'team_name'		=> 'required|unique:registration_rc',	

		'number'  =>   'required',
		'payment'	    =>	'required|mimes:jpg,png,jpeg',


		'team_leader'	=>	'required',
		'team_leader_mail'	=>	'required',
		'team_leader_phone'	=>	'required',	


		];
		// return Input::all();
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			if (Input::hasFile('payment'))
			{
        	  //path
				$destinationPath = __DIR__.'/../../uploads/registration/rc/';


				$payment_photo = Input::file('payment');
				$payment_photo_fileName = $data['team_name'].'_ps_payment_'.md5($payment_photo->getClientOriginalName()).".".$payment_photo->getClientOriginalExtension();
				$location = $destinationPath.'/' . $payment_photo_fileName;
				Image::make($payment_photo)->save($location);



				$reg = new RegistrationRC();
				$reg->team_name = $data['team_name'];
				$reg->number = $data['number'];

				$reg->team_leader = $data['team_leader'];
				$reg->team_leader_mail = $data['team_leader_mail'];
				$reg->team_leader_phone = $data['team_leader_phone'];


				$reg->member1_name= $data['member1_name'];
				$reg->member1_email= $data['member1_email'];
				$reg->member1_phone= $data['member1_phone'];


				$reg->member2_name= $data['member2_name'];
				$reg->member2_email= $data['member2_email'];
				$reg->member2_phone= $data['member2_phone'];


				$reg->member3_name= $data['member3_name'];
				$reg->member3_email= $data['member3_email'];
				$reg->member3_phone= $data['member3_phone'];

				$reg->member4_name= $data['member4_name'];
				$reg->member4_email= $data['member4_email'];
				$reg->member4_phone= $data['member4_phone'];

				$reg->payment = $payment_photo_fileName;

				$reg->status=0;

				if($reg->save())
					return Redirect::route('team.rc')
				->with('success', "Registration Successful");
				else
					return Redirect::route('reg.rc')->with('error',"Photos error, Please Try Again");


			}
			else{
				return Redirect::route('reg.rc')->with('error',"Photos error, Please Try Again");
			}

		}

	}




	//gaming 
	public function gc(){
		return View::make('site.game_registration')
		->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. SUST Inter University Gaming Contest');
		return View::make('site.game_registration')
		->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. Gaming Contest');
	}

	public function gc_store(){

		$rules =[

		'member_name'	=>	'required',
		'member_email'	=>	'required',
		'member_mobile'	=>	'required',	
		'university'    => 'required',
		// 'member_photo'	=>	'required|mimes:jpg,png,jpeg',
		// 'member_id_photo'	=>	'required|mimes:jpg,png,jpeg',	
		'contest'	=>	'required',	


		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			//if (Input::hasFile('member_photo') && Input::hasFile('member_id_photo'))
			{
        	  //path
			// 	$destinationPath = __DIR__.'/../../uploads/registration/gc';
			// ///								MEMBER1
			// 	$member_photo = Input::file('member_photo');
			// 	$member_photo_fileName = '_game_member_'.md5($member_photo->getClientOriginalName()).".".$member_photo->getClientOriginalExtension();
			// 	$location = $destinationPath.'/' . $member_photo_fileName;
			// 	Image::make($member_photo)->save($location);

			// 	$member_id_photo = Input::file('member_id_photo');
			// 	$member_id_photo_fileName = '_game_member_id_'.md5($member_id_photo->getClientOriginalName()).".".$member_id_photo->getClientOriginalExtension();
			// 	$location = $destinationPath.'/' . $member_id_photo_fileName;
			// 	Image::make($member_id_photo)->save($location);


				foreach ($data['contest'] as $contest) {
					$flag_done=false;
					$reg = new RegistrationGames();
					$reg->member_name= $data['member_name'];
					$reg->university= $data['university'];
					$reg->member_email= $data['member_email'];
					$reg->member_mobile= $data['member_mobile'];
					// $reg->member_photo= $member_photo_fileName;
					// $reg->member_id_photo= $member_id_photo_fileName;
					$reg->contest=$contest;
					$reg->status=0;
					if($reg->save()){
						$flag_done=true;
					}
				}


				if($flag_done)
					return Redirect::route('team.gc')
				->with('success', "Registration Successful");
				else
					return Redirect::route('reg.gc')->with('error',"Error, Please Try Again");


			}
			// else{
			// 	return Redirect::route('reg.gc')->with('error',"Photos error, Please Try Again");
			// }

		}

	}

	//gaming counter strike
	public function gc_cs(){

		return View::make('site.game_cs_registration')
		->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. Gaming Contest');
	}

	public function gc_cs_store(){
		$rules =[
		'team_name'		=> 'required|unique:registration_gc_cs',
		'university'		=> 'required',

		'member1_name'	=>	'required',
		'member1_email'	=>	'required',
		'member1_mobile'	=>	'required',
		// 'member1_photo'	=>	'required|mimes:jpg,png,jpeg',
		// 'member1_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		'member2_name'	=>	'required',
		'member2_email'	=>	'required',
		'member2_mobile'	=>	'required',
		// 'member2_photo'	=>	'required|mimes:jpg,png,jpeg',
		// 'member2_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		'member3_name'	=>	'required',
		'member3_email'	=>	'required',
		'member3_mobile'	=>	'required',
		// 'member3_photo'	=>	'required|mimes:jpg,png,jpeg',
		// 'member3_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		'member4_name'	=>	'required',
		'member4_email'	=>	'required',
		'member4_mobile'	=>	'required',
		// 'member4_photo'	=>	'required|mimes:jpg,png,jpeg',
		// 'member4_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			// if (Input::hasFile('member1_photo') && Input::hasFile('member1_id_photo')
			// 	&& Input::hasFile('member2_photo') && Input::hasFile('member2_id_photo')
			// 	&& Input::hasFile('member3_photo') && Input::hasFile('member3_id_photo')
			// 	&& Input::hasFile('member4_photo') && Input::hasFile('member4_id_photo'))
			{
// 				$destinationPath = __DIR__.'/../../uploads/registration/gc_cod';


// 				///								MEMBER1
// 				$member1_photo = Input::file('member1_photo');
// 				$member1_photo_fileName = $data['team_name'].'_gc_cod_member1_'.md5($member1_photo->getClientOriginalName()).".".$member1_photo->getClientOriginalExtension();
// 				$location = $destinationPath.'/' . $member1_photo_fileName;
// 				Image::make($member1_photo)->save($location);

// 				$member1_id_photo = Input::file('member1_id_photo');
// 				$member1_id_photo_fileName = $data['team_name'].'_gc_cod_member1_id_'.md5($member1_id_photo->getClientOriginalName()).".".$member1_id_photo->getClientOriginalExtension();
// 				$location = $destinationPath.'/' . $member1_id_photo_fileName;
// 				Image::make($member1_id_photo)->save($location);

// ///								MEMBER2
// 				$member2_photo = Input::file('member2_photo');
// 				$member2_photo_fileName = $data['team_name'].'_gc_cod_member2_'.md5($member2_photo->getClientOriginalName()).".".$member2_photo->getClientOriginalExtension();
// 				$location = $destinationPath.'/' . $member2_photo_fileName;
// 				Image::make($member2_photo)->save($location);

// 				$member2_id_photo = Input::file('member2_id_photo');
// 				$member2_id_photo_fileName = $data['team_name'].'_gc_cod_member2_id_'.md5($member2_id_photo->getClientOriginalName()).".".$member2_id_photo->getClientOriginalExtension();
// 				$location = $destinationPath.'/' . $member2_id_photo_fileName;
// 				Image::make($member2_id_photo)->save($location);

// ///								MEMBER3
// 				$member3_photo = Input::file('member3_photo');
// 				$member3_photo_fileName = $data['team_name'].'_gc_cod_member3_'.md5($member3_photo->getClientOriginalName()).".".$member3_photo->getClientOriginalExtension();
// 				$location = $destinationPath.'/' . $member3_photo_fileName;
// 				Image::make($member3_photo)->save($location);

// 				$member3_id_photo = Input::file('member3_id_photo');
// 				$member3_id_photo_fileName = $data['team_name'].'_gc_cod_member3_id_'.md5($member3_id_photo->getClientOriginalName()).".".$member3_id_photo->getClientOriginalExtension();
// 				$location = $destinationPath.'/' . $member3_id_photo_fileName;
// 				Image::make($member3_id_photo)->save($location);
				
// ///								MEMBER4
// 				$member4_photo = Input::file('member4_photo');
// 				$member4_photo_fileName = $data['team_name'].'_gc_cod_member4_'.md5($member4_photo->getClientOriginalName()).".".$member4_photo->getClientOriginalExtension();
// 				$location = $destinationPath.'/' . $member4_photo_fileName;
// 				Image::make($member4_photo)->save($location);

// 				$member4_id_photo = Input::file('member4_id_photo');
// 				$member4_id_photo_fileName = $data['team_name'].'_gc_cod_member4_id_'.md5($member4_id_photo->getClientOriginalName()).".".$member4_id_photo->getClientOriginalExtension();
// 				$location = $destinationPath.'/' . $member4_id_photo_fileName;
// 				Image::make($member4_id_photo)->save($location);



				$reg = new RegistrationGamesCS();
				$reg->team_name= $data['team_name'];
				$reg->university= $data['university'];

				$reg->member1_name= $data['member1_name'];
				$reg->member1_email= $data['member1_email'];
				$reg->member1_mobile= $data['member1_mobile'];
				// $reg->member1_photo= $member1_photo_fileName;
				// $reg->member1_id_photo= $member1_id_photo_fileName;

				$reg->member2_name= $data['member2_name'];
				$reg->member2_email= $data['member2_email'];
				$reg->member2_mobile= $data['member2_mobile'];
				// $reg->member2_photo= $member2_photo_fileName;
				// $reg->member2_id_photo= $member2_id_photo_fileName;

				$reg->member3_name= $data['member3_name'];
				$reg->member3_email= $data['member3_email'];
				$reg->member3_mobile= $data['member3_mobile'];
				// $reg->member3_photo= $member3_photo_fileName;
				// $reg->member3_id_photo= $member3_id_photo_fileName;

				$reg->member4_name= $data['member4_name'];
				$reg->member4_email= $data['member4_email'];
				$reg->member4_mobile= $data['member4_mobile'];
				// $reg->member4_photo= $member4_photo_fileName;
				// $reg->member4_id_photo= $member4_id_photo_fileName;

				$reg->status=0;

				if($reg->save())
					return Redirect::route('team.gc.cs')
				->with('success', "Registration Successful");
				else
					return Redirect::route('reg.gc.cs')->with('error',"Error, Please Try Again");


			}
			

		}

	}

}
