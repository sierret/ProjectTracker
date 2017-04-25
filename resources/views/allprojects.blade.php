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
        <li><a href="{{route('admin.view.approve')}}">Approve Students</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Options  <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('admin.dashboard')}}">Go to Home</a></li>
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

<br>
<br>
<div class="container">
    <center> <h1> All Projects </h1>  </center>
     <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>                              
                <th>Project Name </th>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Degree</th>
                <th>Year</th>
                <th>Github</th>
                <th>Description</th>
                <th>Group Members</th>
                <th>Created</th>
                
            </tr>
        </thead>
        <tbody>   
     @foreach ($projects as $project)
      <tr>
                <td>{{$project->projectId}}</td>
                <td>{{$project->projectName}}</td>
                <td>{{$project->coursename}}</td>
                <td>{{$project->courseCode}}</td>
                <td>{{$project->degree}}</td>
                <td>{{$project->year}}</td>
                <td>{{$project->github}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->groupMembers}}</td>
                <td>{{$project->created_at}}</td>
            </tr>    
    @endforeach
        </tbody>
    </table>
</div>

@endsection