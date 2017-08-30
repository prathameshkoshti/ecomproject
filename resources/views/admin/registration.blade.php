@extends('adminlte::page')

@section('title', 'AdminLTE')

<style>
	.flex-box{
		align-items: center;
        display: flex;
        justify-content: center;
	}
	.box{
        margin: 50px auto !important;
    	border-radius: 5px;
    	width: 80% !important;
        display: flex;
	}
    .add-new{
        float: left;
        position: absolute;
        right: 10%;
        top: 12%;
    }
    .flash{
        float: left;
        position: absolute;
        right: 10%;
        bottom: 5%;
    }

</style>
@section('content_header')
    <h1 class="flex-box">Registration</h1>
@stop

@section('content')


<div class="fluid-container">
    <div style="display: flex">    
    <a style="margin: 10px" class="btn btn-success add-new" href ="/admin/registrations/create"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>
    </div> 
    <div class="box"> 
        <table class="table table-hover text-center">
        	<tr>
    	    	<th>Name</th>
    	    	<th>Date</th>
    	    	<th>Occassion</th>
    	    	<th>Check In</th>
    	    	<th>Check Out</th>
    	    	<th>Phone No.</th>
    	    	<th>Email</th>
    	    	<th>Address</th>
    	    	<th colspan="2">Actions</th>
        	</tr>
        	@foreach($data as $value)
            	<tr>
            		<td>{{ $value->name }}</td>
            		<td>{{ $value->date }}</td>
            		<td>{{ $value->occassion }}</td>
            		<td>{{ $value->check_in }}</td>
            		<td>{{ $value->check_out }}</td>
            		<td>{{ $value->phone_no }}</td>
            		<td>{{ $value->email }}</td>
            		<td>{{ $value->address }}</td>
            		<td><a class="btn btn-warning" href="/admin/registrations/edit/{{$value->id}}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></td><td><a class="btn btn-danger" href="/admin/registrations/delete/{{$value->id}}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
            	</tr>
        	@endforeach
            <tr>
                <td colspan="10">
                    <div class="pagination">
                        {{$data -> links()}}
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<div>
    @if(Session :: has('update'))
            <div class="flash label label-warning"><h5>{{Session :: get('update')}}</h5></div>
    @endif
    @if(Session :: has('create'))
            <div class="flash label label-success"><h5>{{Session :: get('create')}}</h5></div>
    @endif
    @if(Session :: has('delete'))
            <div class="flash label label-danger"><h5>{{Session :: get('delete')}}</h5></div>
    @endif
</div>
@stop