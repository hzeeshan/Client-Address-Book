@extends('layouts.master')
@section('title')
Clients Address Book
@endsection

@section('content')
<h1>Edit Your Clients</h1><br>
<form class="form-horizontal" action="/public/clients/{{$client->id}}" method="POST">
  {{ method_field('PUT') }}
  {{ csrf_field() }}
  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" placeholder="Name" name="name" required autofocus value="{{$client->name}}">
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" placeholder="Email" name="email" required autofocus value="{{$client->email}}">
    </div>
  </div>

  <div class="form-group">
    <label for="phone_number" class="col-sm-2 control-label">Phone Number:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" placeholder="PhoneNumber" name="phone_num" required autofocus value="{{$client->phone_num}}">
    </div>
  </div>

  <div class="form-group">
    <label for="company_name" class="col-sm-2 control-label">Company Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" placeholder="Company Name" name="company_name" required autofocus value="{{$client->company_name}}">
    </div>
  </div>

  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">Content:</label>
    <div class="col-sm-8">
      <textarea name="content" rows="6" class="form-control" placeholder="Content">{{ $client->content }}</textarea required autofocus>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-primary">Update Data</button>
      <a href="/public/clients" class="btn btn-primary">Cancel</a>
    </div>
  </div>
</form>

@endsection