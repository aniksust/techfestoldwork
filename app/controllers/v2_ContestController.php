<?php
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ContestController extends \BaseController {

	
	//programming contest
	public function pc(){
		return View::make('site.reg_end')
				->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. SUST Inter University Programming Contest');
	}
	
	public function pc_b(){
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


		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			if (Input::hasFile('coach_photo') )
        	{
        	  //path
        	  $destinationPath = __DIR__.'/../../uploads/registration/';


        	  $coach_photo = Input::file('coach_photo');

   $filename = $data['team_name'].'_coach.'.$coach_photo->getClientOriginalExtension();
   $location = $destinationPath.'/' . $filename;
   //return $location;
   Image::make($coach_photo)->save($location);

	          //$coach_photo->copy($destinationPath, $coach_photo_fileName);

// return $data;	          

	          	$reg = new Registration();
				$reg->team_name= $data['team_name'];
				$reg->university= $data['university'];

				$reg->coach_name= $data['coach_name'];
				$reg->coach_email= $data['coach_email'];
				$reg->coach_mobile= $data['coach_mobile'];
				$reg->coach_photo= $data['team_name'].'_coach.'.$coach_photo->getClientOriginalExtension();;


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
		return View::make('site.reg_end')
				->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. SUST Inter University Software Contest');
	}

	public function sc_store(){
		$rules =[
			'team_name'		=> 'required|unique:registration',
			'university'	=>	'required',
			'sc_track'	=>	'required',


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

			if (Input::hasFile('member1_photo') 
				&& Input::hasFile('member1_id_photo') && Input::hasFile('member2_photo')
				&& Input::hasFile('member2_id_photo') && Input::hasFile('member3_photo')
				&& Input::hasFile('member3_id_photo'))
        	{
        	  //path
        	  $destinationPath = public_path('uploads/registration');


	          $member1_photo = Input::file('member1_photo');
	          $member1_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member1_photo->getClientOriginalName()).".".$member1_photo->getClientOriginalExtension();
	          $member1_photo->move($destinationPath, $member1_photo_fileName);

	          $member1_id_photo = Input::file('member1_id_photo');
	          $member1_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member1_id_photo->getClientOriginalName()).".".$member1_id_photo->getClientOriginalExtension();
	          $member1_id_photo->move($destinationPath, $member1_id_photo_fileName);


	          $member2_photo = Input::file('member2_photo');
	          $member2_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member2_photo->getClientOriginalName()).".".$member2_photo->getClientOriginalExtension();
	          $member2_photo->move($destinationPath, $member2_photo_fileName);

	          $member2_id_photo = Input::file('member2_id_photo');
	          $member2_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member2_id_photo->getClientOriginalName()).".".$member2_id_photo->getClientOriginalExtension();
	          $member2_id_photo->move($destinationPath, $member2_id_photo_fileName);


	          $member3_photo = Input::file('member3_photo');
	          $member3_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member3_photo->getClientOriginalName()).".".$member3_photo->getClientOriginalExtension();
	          $member3_photo->move($destinationPath, $member3_photo_fileName);

	          $member3_id_photo = Input::file('member3_id_photo');
	          $member3_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member3_id_photo->getClientOriginalName()).".".$member3_id_photo->getClientOriginalExtension();
	          $member3_id_photo->move($destinationPath, $member3_id_photo_fileName);



	          	$reg = new Registration();
				$reg->team_name= $data['team_name'];
				$reg->university= $data['university'];
				$reg->sc_track= $data['sc_track'];


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

				$reg->contest = 'sc';
				$reg->status=0;

				 if($reg->save())
		            return Redirect::route('team.sc')
		                    ->with('success', "Registration Successful");
		         else
		            return Redirect::route('reg.sc')->with('error',"Photos error, Please Try Again");


        	}
        	else{
        		return Redirect::route('reg.sc')->with('error',"Photos error, Please Try Again");
        	}

		}

	}


	//Robotics Competition
	public function ps(){
		return View::make('site.reg_end')
				->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. Robotics Competition');
	}

	public function ps_store(){
		$rules =[
			'team_name'		=> 'required|unique:registration',
			'university'	=>	'required',

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

			if (Input::hasFile('member1_photo') 
				&& Input::hasFile('member1_id_photo') && Input::hasFile('member2_photo')
				&& Input::hasFile('member2_id_photo') && Input::hasFile('member3_photo')
				&& Input::hasFile('member3_id_photo'))
        	{
        	  //path
        	  $destinationPath = public_path('uploads/registration');


	          $member1_photo = Input::file('member1_photo');
	          $member1_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member1_photo->getClientOriginalName()).".".$member1_photo->getClientOriginalExtension();
	          $member1_photo->move($destinationPath, $member1_photo_fileName);

	          $member1_id_photo = Input::file('member1_id_photo');
	          $member1_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member1_id_photo->getClientOriginalName()).".".$member1_id_photo->getClientOriginalExtension();
	          $member1_id_photo->move($destinationPath, $member1_id_photo_fileName);


	          $member2_photo = Input::file('member2_photo');
	          $member2_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member2_photo->getClientOriginalName()).".".$member2_photo->getClientOriginalExtension();
	          $member2_photo->move($destinationPath, $member2_photo_fileName);

	          $member2_id_photo = Input::file('member2_id_photo');
	          $member2_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member2_id_photo->getClientOriginalName()).".".$member2_id_photo->getClientOriginalExtension();
	          $member2_id_photo->move($destinationPath, $member2_id_photo_fileName);


	          $member3_photo = Input::file('member3_photo');
	          $member3_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member3_photo->getClientOriginalName()).".".$member3_photo->getClientOriginalExtension();
	          $member3_photo->move($destinationPath, $member3_photo_fileName);

	          $member3_id_photo = Input::file('member3_id_photo');
	          $member3_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member3_id_photo->getClientOriginalName()).".".$member3_id_photo->getClientOriginalExtension();
	          $member3_id_photo->move($destinationPath, $member3_id_photo_fileName);



	          	$reg = new Registration();
				$reg->team_name= $data['team_name'];
				$reg->university= $data['university'];

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


	//gaming 
	public function gc(){
		return View::make('site.reg_end')
				->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. SUST Inter University Gaming Contest');
		return View::make('site.game_registration')
				->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. Gaming Contest');
	}

	public function gc_store(){

		$rules =[

			'member_name'	=>	'required',
			'member_email'	=>	'required',
			'member_mobile'	=>	'required',	
			'member_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member_id_photo'	=>	'required|mimes:jpg,png,jpeg',	
			'contest'	=>	'required',	


		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			if (Input::hasFile('member_photo') && Input::hasFile('member_id_photo'))
        	{
        	  //path
        	  $destinationPath = public_path('uploads/registration');



        	  $member_photo = Input::file('member_photo');
	          $member_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member_photo->getClientOriginalName()).".".$member_photo->getClientOriginalExtension();
	          $member_photo->move($destinationPath, $member_photo_fileName);

	          $member_id_photo = Input::file('member_id_photo');
	          $member_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member_id_photo->getClientOriginalName()).".".$member_id_photo->getClientOriginalExtension();
	          $member_id_photo->move($destinationPath, $member_id_photo_fileName);

	         	
	          	foreach ($data['contest'] as $contest) {
	          		$flag_done=false;
	          		$reg = new RegistrationGames();
					$reg->member_name= $data['member_name'];
					$reg->member_email= $data['member_email'];
					$reg->member_mobile= $data['member_mobile'];
					$reg->member_photo= $member_photo_fileName;
					$reg->member_id_photo= $member_id_photo_fileName;
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
		            return Redirect::route('reg.gc')->with('error',"Photos error, Please Try Again");


        	}
        	else{
        		return Redirect::route('reg.gc')->with('error',"Photos error, Please Try Again");
        	}

		}

	}

	//gaming counter strike
	public function gc_cs(){
		return View::make('site.reg_end')
				->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. SUST Inter University Gaming Contest');
		return View::make('site.game_cs_registration')
			->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. Gaming Contest');
	}

	public function gc_cs_store(){
		$rules =[
			'team_name'		=> 'required|unique:registration_gc_cs',

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

			'member4_name'	=>	'required',
			'member4_email'	=>	'required',
			'member4_mobile'	=>	'required',
			'member4_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member4_id_photo'	=>	'required|mimes:jpg,png,jpeg',

			'member5_name'	=>	'required',
			'member5_email'	=>	'required',
			'member5_mobile'	=>	'required',
			'member5_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member5_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			if (Input::hasFile('member1_photo') && Input::hasFile('member1_id_photo')
				&& Input::hasFile('member2_photo') && Input::hasFile('member2_id_photo')
				&& Input::hasFile('member3_photo') && Input::hasFile('member3_id_photo')
				&& Input::hasFile('member4_photo') && Input::hasFile('member4_id_photo')
				&& Input::hasFile('member5_photo') && Input::hasFile('member5_id_photo'))
			{
				//path
				$destinationPath = public_path('uploads/registration');



				$member1_photo = Input::file('member1_photo');
				$member1_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member1_photo->getClientOriginalName()).".".$member1_photo->getClientOriginalExtension();
				$member1_photo->move($destinationPath, $member1_photo_fileName);

				$member1_id_photo = Input::file('member1_id_photo');
				$member1_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member1_id_photo->getClientOriginalName()).".".$member1_id_photo->getClientOriginalExtension();
				$member1_id_photo->move($destinationPath, $member1_id_photo_fileName);


				$member2_photo = Input::file('member2_photo');
				$member2_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member2_photo->getClientOriginalName()).".".$member2_photo->getClientOriginalExtension();
				$member2_photo->move($destinationPath, $member2_photo_fileName);

				$member2_id_photo = Input::file('member2_id_photo');
				$member2_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member2_id_photo->getClientOriginalName()).".".$member2_id_photo->getClientOriginalExtension();
				$member2_id_photo->move($destinationPath, $member2_id_photo_fileName);


				$member3_photo = Input::file('member3_photo');
				$member3_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member3_photo->getClientOriginalName()).".".$member3_photo->getClientOriginalExtension();
				$member3_photo->move($destinationPath, $member3_photo_fileName);

				$member3_id_photo = Input::file('member3_id_photo');
				$member3_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member3_id_photo->getClientOriginalName()).".".$member3_id_photo->getClientOriginalExtension();
				$member3_id_photo->move($destinationPath, $member3_id_photo_fileName);

				$member4_photo = Input::file('member4_photo');
				$member4_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member4_photo->getClientOriginalName()).".".$member4_photo->getClientOriginalExtension();
				$member4_photo->move($destinationPath, $member4_photo_fileName);

				$member4_id_photo = Input::file('member4_id_photo');
				$member4_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member4_id_photo->getClientOriginalName()).".".$member4_id_photo->getClientOriginalExtension();
				$member4_id_photo->move($destinationPath, $member4_id_photo_fileName);

				$member5_photo = Input::file('member5_photo');
				$member5_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member5_photo->getClientOriginalName()).".".$member5_photo->getClientOriginalExtension();
				$member5_photo->move($destinationPath, $member5_photo_fileName);

				$member5_id_photo = Input::file('member5_id_photo');
				$member5_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member5_id_photo->getClientOriginalName()).".".$member5_id_photo->getClientOriginalExtension();
				$member5_id_photo->move($destinationPath, $member5_id_photo_fileName);


				$reg = new RegistrationGamesCS();
				$reg->team_name= $data['team_name'];

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

				$reg->member4_name= $data['member4_name'];
				$reg->member4_email= $data['member4_email'];
				$reg->member4_mobile= $data['member4_mobile'];
				$reg->member4_photo= $member4_photo_fileName;
				$reg->member4_id_photo= $member4_id_photo_fileName;

				$reg->member5_name= $data['member5_name'];
				$reg->member5_email= $data['member5_email'];
				$reg->member5_mobile= $data['member5_mobile'];
				$reg->member5_photo= $member5_photo_fileName;
				$reg->member5_id_photo= $member5_id_photo_fileName;

				$reg->status=0;

				if($reg->save())
					return Redirect::route('team.gc.cs')
						->with('success', "Registration Successful");
				else
					return Redirect::route('reg.gc.cs')->with('error',"Photos error, Please Try Again");


			}
			else{
				return Redirect::route('reg.gc.cs')->with('error',"Photos error, Please Try Again");
			}

		}

	}

}
