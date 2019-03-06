@extends('layouts.default')
@section('content')
@include('includes.alert')
<div class="container">


	{{ Form::open(array('url' => 'admin/dashboard/pages/')) }}


	<select class="btn btn-default dropdown-toggle" aria-expanded="false"  id="option1" name="do" onchange="this.form.submit()"  >
		<option value="0"> Choose a page </option>
		<option value="1"> Programming Contest </option>
		<option value="2"> Hackathon </option>
		<option value="3"> Project Showcasing </option>
		<option value="4"> Robotics Competition</option>
		<option value="5"> Game </option>
		<option value="6"> Contact </option>
		<option value="7"> Events Page </option>
		<option value="8"> Sponsor Page </option>
	</select>
</form>


<div class="row">


	@foreach($datas as $data)
	<h1>{{$data->title}}</h1>

	<div style="width: 100%; margin-bottom: 10px;margin-top: 10px">
		{{ Form::open(array('url' => 'admin/dashboard/pages/update', 'files' => true)) }}

		<img style="width: 100%; margin-bottom: 10px;" src="{{asset('carnival_assets/banners/'.$data->banner)}}">

		{{-- <div style="width: 160px;"> --}}
		<input type="file" name="banner" id="banner" style="margin: 20px;" />
		{{-- <label for="coach_photo"> <span>Change Banner</span></label> --}}
		{{-- </div> --}}

		<h5>Title</h5>
		<input size="82" type="text" name="title" value="{{$data->title}}"> <br>
		<input  type="hidden" name="rid" value="{{$data->id}}">

		@if($data->slug=='pc' || $data->slug=='sc' || $data->slug=='ps' || $data->slug=='game' || $data->slug=='rc' )

		<input type="hidden" name="date0" value="#">
		<input type="hidden" name="date1" value="#">
		<input type="hidden" name="date2" value="#">
		<input type="hidden" name="date3" value="#">
		<input type="hidden" name="date4" value="#">


		<hr>
		<label> <strong> Description </strong> </label>			
		<textarea name="description" id="editor1">
			{{$data->description}}"
		</textarea>
		@else
		<input type="hidden" name="date0" value="#"><br>
		<input type="hidden" name="date1" value="#"><br>
		<input type="hidden" name="date2" value="#"><br>
		<input type="hidden" name="date3" value="#"><br>
		<input type="hidden" name="date4" value="#"><br>
		<input type="hidden" name="description" value="NULL">
		@endif



		<br>
		<button type="submit" class="btn btn-primary">
			Update {{$data->title}}
		</button>
	</form>
</div>
@endforeach

</div>
</div>

@stop