@extends('adminlte::page')

@section('title', 'AdminLTE')

<style>
	.form-group{
		margin: 0 auto;
		width: 60% !important;
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
    <h1 class="flex-box">Add new record</h1>
@stop

@section('content')
<div class="form-group">
	<form  method="post" action="/admin/registrations/store" class="form form-group box-body">
		{{csrf_field()}}
		{{method_field('PUT')}}
		<table class="table">
			<tr>
				<td>
					<span class="">Name</span>
				</td>
				<td>
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
					<input class="form-control" type="text" name="check_in" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Check-Out</span>
				</td>
				<td>
					<input class="form-control" type="text" name="check_out" class="" required>
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
@if (count($errors) > 0)
        <div class="alert alert-danger rtl">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <ul class="list">
                @foreach($errors -> all() as $err)
                    <li class="liste-item">{{ $err }}</li>
                @endforeach
            </ul>
        </div>
@endif
@stop