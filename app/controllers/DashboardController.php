<?php

use Illuminate\Http\RedirectResponse;

class DashboardController extends \BaseController {


	//test
	public function index(){
		return View::make('dashboard')
		->with('title','Dashboard');


	}
	public function make_pc(){

		$teams = Registration::where('contest','=', 'pc')->orderBy('university', 'ASC')->get();

		return View::make('dashboard_pc')
		->with('teams',$teams)
		->with('title','Dashboard');
	}

	public function listen_pc(){

		$data = Input::all();
		// return $data;
		DB::table('registration')
		->where('id', $data['id'])
		->update(array('status' => $data['status']));
		$teams = Registration::where('contest','=', 'pc')->orderBy('university', 'ASC')->get();
		return View::make('dashboard_pc')
		->with('teams',$teams)
		->with('title','Dashboard');

	}
	public function make_sc(){

		$teams = RegistrationGamesCS::where('type', 1)->orderBy('university', 'ASC')->get();

		return View::make('dashboard_sc')
		->with('teams',$teams)
		->with('title','Dashboard');
	}

	public function listen_sc(){

		$data = Input::all();
		// return $data;
		DB::table('registration_gc_cs')
		->where('id', $data['id'])
		->update(array('status' => $data['status']));
        $teams = RegistrationGamesCS::where('type', 1)->orderBy('university', 'ASC')->get();

        return View::make('dashboard_sc')
		->with('teams',$teams)
		->with('title','Dashboard');

	}
	public function make(){


		return View::make('dashboard_list_form')
		->with('title','Dashboard');

	}


	public function list_generate()
	{
		$gg = Input::all();
		if($gg['type']=='sc')
		{
			$teams = RegistrationGamesCS::where('type','=', 1)->orderBy('university', 'ASC')->get();
			return View::make('dashboard_list_hackathon')
			->with('teams',$teams)
			->with('gg', $gg)
			->with('title', 'Generate List');
		}
		if($gg['type']=='rc')
		{
			$teams = RegistrationRC::orderBy('status', 'DES')->orderBy('id', 'ASC')->get();
			return View::make('dashboard_list_RC')
			->with('teams',$teams)
			->with('gg', $gg)
			->with('title', 'Generate List');
		}
		if($gg['type']=='game')
		{
			$teams = RegistrationGames::orderBy('contest', 'ASC')->orderBy('status', 'DES')->orderBy('id', 'ASC')->get();
			return View::make('dashboard_list_GAME')
			->with('teams',$teams)
			->with('gg', $gg)
			->with('title', 'Generate List');
		}
		if($gg['type']=='gamecs')
		{
			$teams = RegistrationGamesCS::where('type', null)->orderBy('status', 'DES')->orderBy('id', 'ASC')->get();
			return View::make('dashboard_list_GAMECS')
			->with('teams',$teams)
			->with('gg', $gg)
			->with('title', 'Generate List');
		}




		
		// return $gg;
		$teams = Registration::where('contest','=', $gg['type'])->orderBy('university', 'ASC')->get();

		return View::make('dashboard_list')
		->with('teams',$teams)
		->with('gg', $gg)
		->with('title', 'Generate List');
	}
	public function time()
	{

		
		$teams = Time::orderBy('date', 'ASC')->orderBy('time')->get();

		return View::make('dashboard_time')
		->with('data1',$teams)
		->with('title', 'Time Table');
	}
	public function update_time()
	{

		$input = Input::all();
		if($input['func']=="add")
		{
			$time = new Time();
			$time->date = $input['date'];
			$time->time = $input['time'];
			$time->description = $input['description'];
			$time->save();
		}
		else if($input['func']=="delete")
		{
			DB::table('time')->where('id', '=', $input['rid'])->delete();
		}
		else if($input['func']=="edit")
		{
			DB::table('time')
			->where('id', $input['rid'])
			->update(['date' => $input['date'], 'time' => $input['time'], 'description' => $input['description']]);;
		}
		else if($input['func']=="deleteall")
		{
			DB::table('time')
			->delete();
		}
		$teams = Time::orderBy('date', 'ASC')->get();

		return View::make('dashboard_time')
		->with('data1',$teams)
		->with('title', 'Time Table');
	}
	public function judge()
	{

		$datas = Judge::orderBy('rank', 'ASC')->get();
		
		return View::make('dashboard_judge')
		->with('datas',$datas)
		->with('title','Judges');
	}
	public function update_judge()
	{

		$input = Input::all();
		if($input['func']=="add")
		{
			$time = new Judge();
			$time->name = $input['name'];
			$time->designation = $input['designation'];
			$time->role = $input['role'];
			$time->rank = $input['rank'];
			$time->company = $input['company'];
			$time->save();
		}
		else if($input['func']=="delete")
		{
			DB::table('judge')->where('id', '=', $input['rid'])->delete();
		}
		else if($input['func']=="edit")
		{
			DB::table('judge')
			->where('id', $input['rid'])
			->update(['rank' => $input['rank'], 
			         'name' => $input['name'],
			         'designation' => $input['designation'],
			         'company' => $input['company'],
			         'role' => $input['role'],
			         ]);;
		}
		else if($input['func']=="deleteall")
		{
			DB::table('judge')
			->delete();
		}
		$datas = Judge::orderBy('rank', 'ASC')->get();
		
		return View::make('dashboard_judge')
		->with('datas',$datas)
		->with('title','Judges');
	}

	public function pages()
	{

		
		$datas = [];
		return View::make('dashboard_pages')
		->with('datas',$datas)
		->with('title','Pages');
	}
	public function update_pages()
	{
		$input = Input::all();
		$datas = Page::where('id', $input['do'])->get();
		return View::make('dashboard_pages')
		->with('datas',$datas)
		->with('title','Pages');
	}

	public function update_pages_request()
	{

		$input =  Input::all();
		$data = Page::where('id', $input['rid'])->get();
		if (Input::hasFile('banner'))
		{
			$destinationPath = __DIR__.'/../../carnival_assets/banners/';

//			               		COACH

			$coach_photo = Input::file('banner');
			$coach_photo_fileName = 'banner_'.$data[0]['slug'].".".$coach_photo->getClientOriginalExtension();
			$location = $destinationPath.'/' . $coach_photo_fileName;
			Image::make($coach_photo)->save($location);


			DB::table('pages')
			->where('id', $input['rid'])
			->update(
			         [ 
			         'banner' => 'banner_'.$data[0]['slug'].".".$coach_photo->getClientOriginalExtension(),
			         ]);
			
		}
		DB::table('pages')
		->where('id', $input['rid'])
		->update(
		         ['title' => $input['title'], 
		         'description' => $input['description'],
		         'dates' => $input['date0'].'*'.$input['date1'].'*'.$input['date2'].'*'.$input['date3'].'*'.$input['date4'].'*',
		         ]);;

		$datas = Page::where('id', $input['rid'])->get();
		return View::make('dashboard_pages')
		->with('datas',$datas)
		->with('title','Pages');


	}




}