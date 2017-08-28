@extends('adminlte::page')

@section('title', 'AdminLTE')

<style>
	.form-group{
		margin: 0 auto;
		width: 50% !important;
	}
	.table{
		width: 50% !important;
		margin: 0 auto;
	}
	.flex-box{
		align-items: center;
        display: flex;
        justify-content: center;
	}
	.form-control
	{
		width: 100% !important;
	}
</style>
@section('content_header')
    <h1 class="flex-box">Edit Record</h1>
@stop

@section('content')
	<form method="post" action="/admin/registrations/update/{{$data->id}}">
		<table class="table">
			<tr>
				<td>
					<span class="">Name</span>
				</td>
				<td>
					<input class="form-control" type="text" name="name" class="" value="{{$data->name}}">
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Date</span>
				</td>
				<td>
					<input class="form-control" type="date" name="date" class="" value="{{$data->date}}">
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Occassion</span>
				</td>
				<td>
					<input class="form-control" type="text" name="occassion" class="" value="{{$data->occassion}}">
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Check-In</span>
				</td>
				<td>
					<input class="form-control" type="text" name="check_in" class="" value="{{$data->check_in}}">
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Check-Out</span>
				</td>
				<td>
					<input class="form-control" type="text" name="check_out" class="" value="{{$data->check_out}}">
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Phone No.</span>
				</td>
				<td>
					<input class="form-control" type="text" name="phone" class="" value="{{$data->phone_no}}">
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Email Id</span>
				</td>
				<td>
					<input class="form-control" type="text" name="email" class="" value="{{$data->email}}">
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Address</span>
				</td>
				<td>
					<textarea class="form-control" name="address" rows="5" cols="40">{{$data->address}}</textarea>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td style="align-items: right">
					<input type="submit" name="submit" class="btn btn-primary" value="Update">
					<a class="btn btn-default" href="/admin/registrations/">Cancel</a>
				</td>
			</tr>
		</table>
		{{csrf_field()}}
		{{method_field('PUT')}}
	</form>
@stop