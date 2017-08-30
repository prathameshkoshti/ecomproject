<style type="text/css">
	.table-borderless td{
		border : 0 !important;
	}
	.btn-primary{
		background-color: #212121 !important;
		border-color: #212121 !important;
	}
	.form-group{
		background-color: #eeeeee;
		border-radius: 3px;
	}
</style>
@extends('layouts.app')

@section('content')
<?php
    $times = ['9:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00'];
?>
<div class="row" style="padding: 5%">
<div class="form-group col-md-6 col-md-offset-3" style="margin-right: 20%">
	<h2 class="col-md-offset-4" style="padding-bottom: 10%;">Book the Hall</h2>
	<form  method="post" action="/admin/registrations/store" class="form form-group box-body">
		{{csrf_field()}}
		{{method_field('PUT')}}
		<table class="table table-borderless">
			<tr>
				<td class="col-md-3">
					<span class="">Name</span>
				</td>
				<td class="col-md-3">
					<input class="form-control" type="text" name="name" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Date</span>
				</td>
				<td>
					<input type="date" class="form-control" name="date" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Occassion</span>
				</td>
				<td>
					<input class="form-control" type="text" name="occassion" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Check-In</span>
				</td>
				<td>
					<select class="form-control" id="sel1" name="check_in" required>
					    @foreach( $times as $time)
					    <option>{{$time}}</option>
					    @endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Check-Out</span>
				</td>
				<td>
					<select class="form-control" id="sel1" name="check_out" required>
					    @foreach( $times as $time)
					    <option>{{$time}}</option>
					    @endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Phone No.</span>
				</td>
				<td>
					<input class="form-control" type="tel" name="phone" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Email Id</span>
				</td>
				<td>
					<input class="form-control" type="text" name="email" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Address</span>
				</td>
				<td>
					<textarea class="form-control" name="address" rows="5" cols="40" required></textarea>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td style="align-items: right">
					<input type="submit" class="btn-lg btn btn-primary" value="Create" name="submit">
					<a class="btn btn-default btn-lg" href="/admin/registrations/">Cancel</a>
				</td>
			</tr>
		</table>
	</form>
</div>
</div>
@endsection