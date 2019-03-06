@extends('layouts.default')
@section('content')
@include('includes.alert')
<h1>CSE CARNIVAL 2017</h1>

<h3>Team List Programming Contest</h3>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="text-center table table-bordered">
				<tr>
					<th>Team Number</th>
					<th>Team Name</th>
					<th>University Name</th>
					<th>Track</th>
					<th>Status</th>
					<th>Change Status</th>
				</tr>
				<?php $count=1; ?>
				@foreach($teams as $team)
				<tr>
					<td>{{$count}}</td>
					<td>{{$team->team_name}}</td>
					<td>{{$team->university}}</td>
					<td>{{strtoupper($team->sc_track)}}</td>
					@if($team->status == 0)
					<td style="color:red">Pending</td>
					@elseif($team->status == 1)
					<td style="color:red">Waiting for Payment</td>
					@elseif($team->status == 2)
					<td style="color:green">Accepted</td>
					@elseif($team->status == 3)
					<td style="color:blue">Under Review</td>
					@elseif($team->status == 4)
					<td style="color:red">Cancel</td>
					@endif
					<td>
						<div>

							{{ Form::open() }}
							<input type="hidden" name="id" value={{$team->id}}>


							<select class="btn btn-default dropdown-toggle" aria-expanded="false"  id="option1" name="status" onchange="this.form.submit()"  >
								<option value="5">  Change Status  </option>
								<option value="0">Pending</option>
								<option value="1">Waiting for Payment</option>
								<option value="3">Under Review</option>
								<option value="4">Cancel</option>
								<option value="2">Accepted</option>
							</select>
						</form>

					</div>
				</td>
			</tr>
			<?php $count++; ?>
			@endforeach
		</table>
	</div>
</div>
</div>



@stop