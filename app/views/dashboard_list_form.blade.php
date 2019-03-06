@extends('layouts.default')
@section('content')
@include('includes.alert')
<h1>CSE CARNIVAL 2017</h1>
{{-- <a href="http://www.example.com" onclick="window.open('http://www.nana.com')">Click</a> --}}

<h3>Team List Generator</h3>

{{ Form::open(array('url' => 'admin/dashboard/list')) }}

{{Form::select('type', array('pc' => 'Programming Contest', 
	'sc' => 'Hackathon',  
	'rc' => 'Robotics',  
	'game' => 'Game',
	'gamecs' => 'Game COD',  

	), 'pc');}}
	<br><br>
	{{-- <label>
		{{ Form::checkbox('team_name', '1') }}
		Team Name
	</label> <br><br> --}}
	<label>
		{{ Form::checkbox('university', '1') }}
		University
	</label> <br><br>
	<label>
		{{ Form::checkbox('c_type', '1') }}
		Sowtware Contest Type (ignore for Programming Contest)
	</label> <br><br>

	<label>
		{{ Form::checkbox('coach_name', '1') }}
		Coach Name
	</label> <br><br>
	<label>
		{{ Form::checkbox('member', '1') }}
		Member
	</label> <br><br>
	<label>
		{{ Form::checkbox('status', '1') }}
		Status
	</label> <br><br>
	<label>
		{{ Form::checkbox('remarks', '1') }}
		Remarks
	</label> <br><br>



	{{Form::submit('Generate');}}


	{{ Form::close() }}




	@stop