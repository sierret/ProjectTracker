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
        <li class="active"><a href="#">View Students <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Approve Students</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Options  <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Go to Home</a></li>
            <li><a href="#">View All Projects</a></li>
            <li><a href="#">Add a Administrator</a></li>
            <li class="divider"></li>
            <li><a href="#">View All Administrator </a></li>
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

<br>
<br>

<div class="col-lg-4 col-lg-offset-4">
    <center> <h1> All Students </h1>  </center>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>                              
                <th>First Name </th>
                <th>Last Name</th>
                <th>UWI ID</th>
                <th>Email</th>
                <th>Degree</th>
                <th>Contact</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
    <ul class="list-group">
     @foreach ($students as $student)
      <tr>
                <td>{{$student->id}}</td><td>{{$student->firstname}}</td><td>{{$student->lastname}}</td><td>{{$student->UWI_id}}</td><td>{{$student->email}}</td><td>{{$student->degree}}</td><td>{{$student->contact}}</td><td>{{$student->status}}</td>
            </tr>    
    @endforeach
        </tbody>
    </table>
</div>
@endsection