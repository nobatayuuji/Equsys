@extends('admin.share.layout')

@section('title')
Member Management
@stop

@section('sidebar')
    @include('admin.member.sidebar')
@stop


@section('content')

<section class="content-header">
<h1>Member</h1>
<ol class="breadcrumb">
	<li><a href="">Home</a></li>
	<li>Memeber</li>
	<li>Index</li>
</ol>
</section>

<section class="content">
	<div class="box">
		<div class="box-body">
			content
		</div>
	</div>
</section>

@stop

@section('sctipt')
<script>
$(function(){
    $("#member").addClass("active");
    $("#index").addClass("active");
});
</script>
@stop
