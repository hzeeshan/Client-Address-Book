@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    You are logged in! <h2>{{ Auth::user()->name }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h4>Click here for see Your clients.<h4/><a href="clients" class="btn btn-primary">Click Here</a>
        </div>
    </div>
</div>
@endsection
