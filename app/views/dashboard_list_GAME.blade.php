<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>IPvision SUST 6th CSE Carnival 2017 :: <?php
if($gg['type']=='pc') echo "Programming Contest";
if($gg['type']=='sc') echo "Hackathon";
if($gg['type']=='ps') echo "Project Showcasing";
if($gg['type']=='rc') echo "Robotics Competition";
if($gg['type']=='game') echo "Game";
if($gg['type']=='gamecs') echo "Game COD";
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
if($gg['type']=='rc') echo "Robotics Competition";
if($gg['type']=='game') echo "Game NFS / FIFA";
if($gg['type']=='gamecs') echo "Game COD";
?>
</h2>

	<table style="margin:0px auto"> 
		<tr> 
			<th>SN</th>
			<th>Game</th>
			

			@if(array_key_exists('member', $gg))
			<th>Member</th>
			@endif

			@if(array_key_exists('member', $gg))
			<th>Member Email</th>
			@endif
			@if(array_key_exists('member', $gg))
			<th>Member phone</th>
			@endif



			@if(array_key_exists('status', $gg))
			<th>Status</th>
			@endif

			@if(array_key_exists('remarks', $gg))
			<th>Ramarks</th>
			@endif
		</tr>
		@foreach($teams as $team)
		<tr> 
			<td  >{{$count++}}</td>
			<td  >{{$team['contest']==='fifa'?'Fifa':'NFS'}}</td>
			
			

			@if(array_key_exists('member', $gg))
			<td> <div>{{$team['member_name']}}</div>
			</td>
			<td><div>{{$team['member_email']}}
			</td>
			<td><div>{{$team['member_mobile']}}
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
			<td>  </td>
			@endif
		</tr>
		@endforeach
	</table>
</body>
</html>