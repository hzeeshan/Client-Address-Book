@extends('layouts.master')
@section('title')
Clients Address Book
@endsection

@include('includes.alert')

  	<h1>Clients</h1>
  <p>You can see all of Your Clients.</p> 
             
  <table class="table table-bordered table-hover table-striped table-responsive col-md-12">
    <thead>
      <tr>
        <th>Client ID</th>
        <th>Name</th>
        <th class="text-center">Email</th>
        <th>Phone Number</th>
        <th>Company Name</th>
        <th class="text-center">Content</th>
        <th>Edit</th>
        <th>Delete</th>
        
      </tr>
    </thead>
    <tbody>
    
    @foreach($clients as $client)
    @if($client->user_id == Auth::user()->id)

      <tr>
        <td>{{ $client->id }}</td>
        <td>{{ $client->name }}</td>
        <td>{{ $client->email }}</td>
        <td>{{ $client->phone_num }}</td>
        <td>{{ $client->company_name }}</td>
        <td>{{ $client->content }}</td>
        
        <td><a href="clients/{{$client->id}}/edit" class="btn btn-primary btn-small"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
        
        <form method="POST" action="/public/clients/{{$client->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <td><input type="submit" class="btn btn-danger del" value="Delete"></td>
        </form>
       
      </tr>

       @endif
      @endforeach
     
     
    </tbody>
  </table>
  
  <div class="row">
<div class="col-sm-6 col-sm-offset-3">
  <a href="clients/create" class="btn btn-success">Add Clients</a>
</div>
</div>
@endsection