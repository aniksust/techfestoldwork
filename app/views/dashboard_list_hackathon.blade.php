<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>IPvision SUST 6th CSE Carnival 2017 :: <?php
if($gg['type']=='pc') echo "Programming Contest";
if($gg['type']=='sc') echo "Hackathon";
if($gg['type']=='ps') echo "Project Showcasing";
?></title>
	<style>
	table,td,th{
		border:1px solid #000000;
		border-collapse:collapse;
	}
	td,th{
		padding:5px;
	}
	</style>
	
</head>
<body>
<?php
	$count = 1;
?>


<h2 style="text-align: center;">
SUST CSE Carnival 2017 <br> <hr>
<?php
if($gg['type']=='pc') echo "Programming Contest";
if($gg['type']=='sc') echo "Hackathon";
if($gg['type']=='ps') echo "Project Showcasing";
?>
</h2>

	<table style="margin:0px auto"> 
		<tr> 
			<th>SN</th>
			<th>Team Name</th>
			
			@if(array_key_exists('university', $gg))
			<th>University</th>
			@endif
			
			@if($gg['type']!='pc' && array_key_exists('c_type', $gg))
			<th>Type</th>
			@endif

			@if($gg['type']=='pc' && array_key_exists('coach_name', $gg))
			<th>Coach Name</th>
			<th>Coach Email</th>
			<th>Coach Mobile</th>
			@endif

			@if(array_key_exists('member', $gg))
			<th>Member</th>
			@endif
			@if(array_key_exists('member', $gg))
			<th>Member Email</th>
			@endif
			@if(array_key_exists('member', $gg))
			<th>Member Mobile</th>
			@endif



			@if(array_key_exists('status', $gg))
			<th>Status</th>
			@endif

			@if(array_key_exists('remarks', $gg))
				<th>Proposal</th>
				<th>Achievement</th>
			@endif
		</tr>
		@foreach($teams as $team)
		<tr> 
			<td  >{{$count++}}</td>
			<td  >{{$team['team_name']}}</td>
			
			@if(array_key_exists('university', $gg))
			<td  >{{$team['university']}}</td>
			@endif
			
			@if($gg['type']!='pc' && array_key_exists('c_type', $gg))
			<td  >{{strtoupper($team->sc_track)}}</td>
			@endif

			@if($gg['type']=='pc' && array_key_exists('coach_name', $gg))
			<td  >{{$team['coach_name']}}</td>
			<td  >{{$team['coach_email']}}</td>
			<td  >{{$team['coach_mobile']}}</td>
			@endif

			@if(array_key_exists('member', $gg))
			<td><div>{{$team['member1_name']}},</div><div>{{$team['member2_name']}},</div><div>{{$team['member3_name']}},</div><div>{{$team['member4_name']}}</div>
			</td>
			<td><div>{{$team['member1_email']}},</div><div>{{$team['member2_email']}},</div><div>{{$team['member3_email']}},</div><div>{{$team['member4_email']}},</div>
			</td>
			<td><div>{{$team['member1_mobile']}},</div><div>{{$team['member2_mobile']}},</div><div>{{$team['member3_mobile']}},</div><div>{{$team['member4_mobile']}},</div>
			</td>

			@endif

			@if(array_key_exists('status', $gg))
			<td>@if($team['status'] == 0)
			                <div style="color:red">Pending</div>
                            @elseif($team['status'] == 1)
                            <div style="color:red">Waiting for Payment</div>
                            @elseif($team['status'] == 2)
                            <div style="color:green">Accepted</div>
                            @elseif($team['status'] == 3)
                            <div style="color:blue">Under Review</div>
                            @elseif($team['status'] == 4)
                            <div style="color:red">Cancel</div>
                            @endif
            </td>
			@endif
			@if(array_key_exists('remarks', $gg))
				<td> {{$team['proposal']}} </td>
				<td> {{$team['last']}} </td>
			@endif
		</tr>
		@endforeach
	</table>
</body>
</html>