@extends('layouts.app')

@section('content')
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin DashBoard</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('admin.dashboard')}}">View Students <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Approve Students</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Options  <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="\index">Go to Home</a></li>
            <li><a href="#">View All Projects</a></li>
            <li><a href="{{route('admin.register')}}">Add a Administrator</a></li>
            <li class="divider"></li>
            <li><a href="{{route('admin.view')}}">View All Administrator </a></li>
            <li class="divider"></li>           
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        
      </ul>
    </div>
  </div>
</nav>

<div class="container">

<form class="form-horizontal" action="{{route('admin.register.submit')}}" method="POST" >
<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">
  <div class="form-group">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
      <input type="texr" class="form-control" name="name" id="focusedInput" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
      <input type="email" class="form-control" name="email" id="focusedInput" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-md-2 control-label">Password</label>
    <div class="col-md-10">
      <input type="password" class="form-control" name="password" id="focusedInput" placeholder="Password">
    </div>
    
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Rigister</button>
    </div>
  </div>
  
</form>


</div>




@endsection