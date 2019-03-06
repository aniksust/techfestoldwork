<?php

class ResultController extends \BaseController {

	//programming contest
	public function pc(){
		return View::make('site.programming_result')
				->with('title','IPvision SUST 6th CSE Carnival 2017 ::. Result ::. SUST Inter University Programming Contest');
	}


	//software contest
	public function sc(){
		$web_1 = Registration::find(115);
		$web_2 = Registration::find(64);
		
		$mobile_1 = Registration::find(38);
		$mobile_2 = Registration::find(105);
		
		return View::make('site.software_result')
				->with('web_1',$web_1)
				->with('web_2',$web_2)
				->with('mobile_1',$mobile_1)
				->with('mobile_2',$mobile_2)
				->with('title','IPvision SUST 6th CSE Carnival 2017 ::. Result ::. Hackathon');
	}


	//project showcase 
	public function ps(){
		$team_1 = Registration::find(93);
		$team_2 = Registration::find(83);
		$team_3 = Registration::find(168);
		return View::make('site.project_show_result')
				->with('team_1',$team_1)
				->with('team_2',$team_2)
				->with('team_3',$team_3)
				->with('title','IPvision SUST 6th CSE Carnival 2017 ::. Result ::. Robotics Competition');
	}



	//gaming 
	public function gc(){
		return View::make('site.game_result')
				->with('title','IPvision SUST 6th CSE Carnival 2017 ::. Result ::. Gaming Contest');
	}


}