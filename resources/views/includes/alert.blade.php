@section('content')

  @if(session()->has('message'))
  <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{ session()->get('message') }}</strong> 
  
  </div> 
  @endif