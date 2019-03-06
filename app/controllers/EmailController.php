<?php

include 'Mailin.php';

class EmailController extends \BaseController {


	//test
	public function test(){

		$mailin = new Mailin('support@csecarnival.com', '');

		$mailin->
		addTo('rafikfarhad@gmail.com', 'CSE Carnival')->
		
		setFrom('support@csecarnival.com', 'CSE Carnival')->

		setReplyTo('support@csecarnival.com','CSE Carnival')->

		setSubject('CSE Carnival 2017')->

		setText('Hello World!')->

		setHtml('<strong>Hello Farhad!</strong>');

		$res = $mailin->send();
		return $res;


	}
	public function test2(){

		$res = Registration::where('contest','=', 'pc')->orderBy('status', 'ASC')->orderBy('university', 'ASC')->get();
		$picks = Registration::distinct()->select('coach_email')->where('contest', '=', 'pc')->get();
		foreach ($picks as $r){
			echo $r->coach_email.", ";
		}
		die();
		return $res;


	}

}
