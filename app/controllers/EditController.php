<?php

class EditController extends \BaseController {

	
	
	public function pc(){
		return View::make('site.edit')
		->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. SUST Inter University Programming Contest');
	}
	public function save(){


		$rules =[
		'former_team_name'		=> 'required',

		'member3_photo'	=>	'mimes:jpg,png,jpeg',
		'member3_id_photo'	=>	'mimes:jpg,png,jpeg',

		];
		$data = Input::all();
		$data['team_name'] = $data['former_team_name'];

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			
        	  //path
			$destinationPath = __DIR__.'/../../uploads/edit/';

///								MEMBER1
			if ($data['former_member_name']!=NULL )
			{
				$rules =[
				'former_team_name'		=> 'required',

				'new_member_photo'	=>	'required|mimes:jpg,png,jpeg',
				'new_member_photo_id'	=>	'required|mimes:jpg,png,jpeg',

				];
				$data = Input::all();
				$data['team_name'] = $data['former_team_name'];

				$validation = Validator::make($data,$rules);

				if($validation->fails()){
					return Redirect::back()->withErrors($validation)->withInput();
				}
				if(Input::hasFile('new_member_photo') && Input::hasFile('new_member_photo_id'))
				{
					$member_photo = Input::file('new_member_photo');
					$member_photo_fileName = $data['team_name'].'_edit_pc_member_'.md5($member_photo->getClientOriginalName()).".".$member_photo->getClientOriginalExtension();
					$location = $destinationPath.'/' . $member_photo_fileName;
					Image::make($member_photo)->save($location);

					$member_photo_id = Input::file('new_member_photo_id');
					$member_photo_fileName_id = $data['team_name'].'_edit_id_pc_member_'.md5($member_photo_id->getClientOriginalName()).".".$member_photo->getClientOriginalExtension();
					$location = $destinationPath.'/' . $member_photo_fileName_id;
					Image::make($member_photo_id)->save($location);
					$reg = new Edit();
					$reg->former_team_name= $data['former_team_name'];
					$reg->new_team_name= $data['new_team_name'];

					$reg->former_member= $data['former_member_name'];
					$reg->new_member= $data['new_member_name'];
					$reg->new_member_photo= $member_photo_fileName;
					$reg->new_member_id_photo= $member_photo_fileName_id;

					if($reg->save())
						return Redirect::route('registration/edit')
					->with('success', "Please wait for update. It'll take less than 24 hours");
					else
						return Redirect::route('registration/edit')->with('error',"Photos error, Please Try Again");
				}
				else
					return Redirect::route('registration/edit')->with('error',"Photos error, Please Try Again");
			}
			else 
			{
				$member_photo_fileName = "";
				$member_photo_fileName_id = "";
			}

			// if($data['former_member_name']==NULL)
			// 	$data['former_member_name']=="";

			$reg = new Edit();
			$reg->former_team_name= $data['former_team_name'];
			$reg->new_team_name= $data['new_team_name'];

			$reg->former_member= $data['former_member_name'];
			$reg->new_member= $data['new_member_name'];
			$reg->new_member_photo= $member_photo_fileName;
			$reg->new_member_id_photo= $member_photo_fileName_id;

			if($reg->save())
				return Redirect::route('registration/edit')
			->with('success', "Please wait for update. It'll take less than 24 hours");
			else
				return Redirect::route('registration/edit')->with('error',"Photos error, Please Try Again");


		}
		return View::make('site.edit')
		->with('title','IPvision SUST CSE Carnival 2017 ::. Registration ::. SUST Inter University Programming Contest');
	}

}
