<?php

class EventController extends \BaseController {


	//programming contest
	public function pc(){
		return View::make('site.programming_contest')
				->with('title','IPvision SUST 6th CSE Carnival 2017 ::. SUST Inter University Programming Contest');
	}


	//software contest
	public function sc(){
		return View::make('site.software_contest')
				->with('title','IPvision SUST 6th CSE Carnival 2017 ::. SUST Inter University Programming Contest');
	}


	//project showcase 
	public function ps(){
		return View::make('site.project_showcasing')
				->with('title','IPvision SUST 6th CSE Carnival 2017 ::. Project Showcasing');
	}

	public function rc(){
		return View::make('site.rc')
				->with('title','IPvision SUST 6th CSE Carnival 2017 ::. Robotics Competition');
	}




	//gaming 
	public function gc(){
		return View::make('site.gaming_contest')
				->with('title','IPvision SUST 6th CSE Carnival 2017 ::. Gaming Contest');
	}

	

}