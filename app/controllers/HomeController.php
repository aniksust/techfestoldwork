<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	public function index()
	{
		$events = [];
		$dates = [];
		$events = Time::orderBy('date', 'ASC')->orderBy('time')->get();
		$dates = DB::table('time')
		->select('date')
		->groupBy('date')
		->get();
		// return $dates;
		return View::make('site.home')
					->with('events',$events)
					->with('dates',$dates)
					->with('scroll',true)
					->with('title','LICT SUST Tech Fest 2019');
	}

	public function schedule(){

		$events = Time::orderBy('date', 'ASC')->orderBy('time')->get();
		$dates = DB::table('time')
		            ->select('date')
		            ->groupBy('date')
		            ->get();
		//return $dates;
		return View::make('site.schedule')
					->with('events',$events)
					->with('dates',$dates)
					->with('title','LICT SUST Tech Fest 2019 ::. Schedule');
	}
	public function judge(){

		$datas = Judge::orderBy('rank', 'ASC')->get();
		
		return View::make('site.judges')
					->with('datas',$datas)
					->with('title','LICT SUST Tech Fest 2019 ::. Honorable Problem Setters and Judges');
	}


	public function bkash(){

		return View::make('site.bkash')
					->with('title','LICT SUST Tech Fest 2019 ::. Verify Bkash Payment');
	}
	public function bkash_post(){
		$rules =[

		'name'	=>	'required',
		'trx_id'	=>	'required',
		'contest_name'	=>	'required',	
		'contact'    => 'required',
		];

		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{


					$reg = new Bkash();
					$reg->name= $data['name'];
					$reg->trx_id= $data['trx_id'];
					$reg->contest_name= $data['contest_name'];
					$reg->contact= $data['contact'];
					if($reg->save()){
						$flag_done=true;
				if($flag_done)
					return Redirect::back()->with('success', 'Request reached. It\'ll take less than 24 hours to update. Thanks for being with us.');
				else
					return Redirect::back()->with('error', 'Error!!! Please try again.');


			}
		}

		return View::make('site.bkash')
					->with('title','LICT SUST Tech Fest 2019 ::. Verify Bkash Payment');
	}






}
