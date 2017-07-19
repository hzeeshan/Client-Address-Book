@extends('layouts.master')
@section('title')
Clients Address Book
@endsection

@section('content')
@include('includes.errors')
<h1>Add Your Clients</h1><br>
<form class="form-horizontal" action="/public/clients" method="POST">
  {{ csrf_field() }}
  @if(Auth::check())
  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
  @endif
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" placeholder="Name" name="name" required autofocus>
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" placeholder="Email" name="email" required autofocus>
    </div>
  </div>

  <div class="form-group">
    <label for="phone_number" class="col-sm-2 control-label">Phone Number:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" placeholder="PhoneNumber" name="phone_num" required autofocus>
    </div>
  </div>

  <div class="form-group">
    <label for="company_name" class="col-sm-2 control-label">Company Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" placeholder="Company Name" name="company_name" required autofocus>
    </div>
  </div>

  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">Content:</label>
    <div class="col-sm-8">
      <textarea rows="6" name="content" class="form-control" placeholder="Content"></textarea required autofocus>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

@endsection