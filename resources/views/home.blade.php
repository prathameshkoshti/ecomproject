@extends('adminlte::page')

@section('title', 'AdminLTE')

<style>
	.flex-box{
		align-items: center;
        display: flex;
        justify-content: center;
	}
</style>
@section('content_header')
    <h1 class="flex-box">Welcome to Admin Panel</h1>
@stop

@section('content')
    <p class="message flex-box">You are logged in as a Admin</p>
@stop
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
	$(".message").delay(4000).hide();
</script>