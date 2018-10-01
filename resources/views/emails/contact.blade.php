@extends('layouts.app')
@section('content')

<main class="container-fluid">
<div class="jumbotron">
<h1>Contact Page</h1>
</div>
  <div class="col-sm-8 offset-md-2">
	<form method="post" action="{{route('mail.send')}}">
	@include('partials.error-message')
		<div class="form-group">
		<label for="name">Title</label>
		<input type="text" name="name" class="form-control" value="{{old('name')}}">
		</div>
			<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" class="form-control" value="{{old('email')}}">
		</div>
			<div class="form-group">
		<label for="subject">subject</label>
		<input type="text" name="subject" class="form-control" value="{{old('subject')}}">
		</div>
			<div class="form-group">
		<label for="message">message</label>
		<textarea name="mail_message" class="form-control my-editor">{{old('mail_message')}}</textarea>
		</div>
		<div>
		<button class="btn btn-primary" type="submit">Say hi</button>
		</div>
		{{csrf_field()}}
	@endsection	