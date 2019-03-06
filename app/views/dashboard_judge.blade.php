@extends('layouts.default')
@section('content')
@include('includes.alert')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3>
						<strong>
							Judge List
						</strong>
					</h3>
					<div>
						<button type="submit"  
						data-toggle="modal" data-target="#deleteAllModal" data-whatever="@mdo" class="btn btn-danger btn-xs btn-edit" style="height:20%;">
						Delete All
					</button>

					<div class="modal fade" id="deleteAllModal" tabindex="-1" role="dialog" aria-labelledby="editleModalLabel" aria-hidden="true">

						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<strong class="modal-title">
										<h2> Are you sure delete all the entries?????</h2>
										<br>
									</strong>
								</div>
								<div class="modal-body">
									{{ Form::open(array('url' => 'admin/dashboard/judge')) }}

									<input type="hidden" name="func" value="deleteall">
									<button type="submit" class="btn btn-primary">
										DELETE ALL
									</button>
									<button type="submit" data-dismiss="modal" class="btn btn-primary">
										CANCEL
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="panel-body">
			<table class="display table table-bordered table-stripe">
				<thead>
					<tr class="panel-default">
						<th class="text-center" >RANK</th>
						<th class="text-center" >Name</th>
						<th class="text-center" >Designation</th>
						<th class="text-center" >Company</th>
						<th class="text-center" >Role</th>
						<th class="text-center" >Update</th>
					</tr>
				</thead>
				<?php $inc=0;  ?>
				<tbody>
					@foreach($datas as $dat)
					<tr class="default">
						<td>
							<div class="text-center" style="height:100%;width:100%;font-size: 17px;">
								{{$dat->rank}}
							</div>
						</td>
						<td>
							<div class="text-center" style="height:100%;width:100%;font-size: 17px;">
								{{$dat->name}}
							</div>
						</td>
						<td>
							<div class="text-center" style="height:100%;width:100%;font-size: 17px;">
								{{$dat->designation}}
							</div>
						</td>
						<td>
							<div class="text-center" style="height:100%;width:100%;font-size: 17px;">
								{{$dat->company}}
							</div>
						</td>
						<td>
							<div class="text-center" style="height:100%;width:100%;font-size: 17px;">
								{{$dat->role}}
							</div>
						</td>
						<td>
							<div class="text-center">
								<button type="submit" class="btn btn-warning btn-xs btn-edit" 
								data-toggle="modal" data-target="#editleModal{{$dat->id}}" data-whatever="@mdo" style="height:20%;width:20%">
								Edit
							</button>
							<button type="submit"  
							data-toggle="modal" data-target="#deleteModal{{$dat->id}}" data-whatever="@mdo" class="btn btn-danger btn-xs btn-edit" style="height:20%;">
							Delete
						</button>
					</div>
					<div class="modal fade" id="deleteModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="editleModalLabel" aria-hidden="true">

						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<strong class="modal-title">
										Are you sure?????
									</strong>
								</div>
								<div class="modal-body">
									{{ Form::open(array('url' => 'admin/dashboard/judge')) }}

									<input type="hidden" name="rid" value="{{$dat->id}}">
									<input type="hidden" name="func" value="delete">
									<button type="submit" class="btn btn-primary">
										DELETE
									</button>
									<button type="submit" data-dismiss="modal" class="btn btn-primary">
										CANCEL
									</button>

								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="editleModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="editleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<strong class="modal-title" id="editleModalLabel">
									Edit Entry
								</strong>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								{{ Form::open(array('url' => 'admin/dashboard/judge')) }}
								<input type="hidden" name="func" value="edit">
								<input type="hidden" name="rid" value="{{$dat->id}}">
								<div class="form-group">
									<label   class="form-control-label"> 
										Rank:
									</label>
									<input autofocus required="" type="text" name="rank" value="{{$dat->rank}}"
									class="form-control"  >
								</div>
								<div class="form-group">
									<label   class="form-control-label"> 
										Name:
									</label>
									<input required="" type="text" name="name" class="form-control" value="{{$dat->name}}" 
									>
								</div>
								<div class="form-group">
									<label   class="form-control-label"> 
										Designation:
									</label>
									<input required="" type="text" name="designation" class="form-control"
									value="{{$dat->designation}}">
								</div>
								<div class="form-group">
									<label   class="form-control-label"> 
										Company:
									</label>
									<input required="" type="text" name="company" class="form-control"
									value="{{$dat->company}}">
								</div>
								<div class="form-group">
									<label   class="form-control-label"> 
										Role:
									</label>
									<input required="" type="text" name="role" class="form-control"
									value="{{$dat->role}}">
								</div>

								<button type="submit" class="btn btn-primary">
									Update Entry
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>                               
		</td>
	</tr>
	@endforeach
</tbody>
</table>
</div>
</div>
<div>
	<button type="submit" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
		Add Entry
	</button>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLavel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<strong class="modal-title" id="myModalLabel">
						Add New Entry
					</strong>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					{{ Form::open(array('url' => 'admin/dashboard/judge')) }}
					<input type="hidden" name="func" value="add">
					<div class="form-group">
						<label   class="form-control-label"> 
							Rank:
						</label>
						<input autofocus required="" type="text" name="rank" value=""
						class="form-control"  >
					</div>
					<div class="form-group">
						<label   class="form-control-label"> 
							Name:
						</label>
						<input required="" type="text" name="name" class="form-control" value="" 
						>
					</div>
					<div class="form-group">
						<label   class="form-control-label"> 
							Designation:
						</label>
						<input required="" type="text" name="designation" class="form-control"
						value="">
					</div>
					<div class="form-group">
						<label   class="form-control-label"> 
							Company:
						</label>
						<input required="" type="text" name="company" class="form-control"
						value="">
					</div>
					<div class="form-group">
						<label   class="form-control-label"> 
							Role:
						</label>
						<input required="" type="text" name="role" class="form-control"
						value="">
					</div>

					<button type="submit" class="btn btn-primary">
						Add Entry
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>


@stop