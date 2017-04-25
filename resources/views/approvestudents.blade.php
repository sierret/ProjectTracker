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

 <center> <h1> Change approval Status of Students </h1>  </center>
     <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>                              
                <th>First Name </th>
                <th>UWI ID</th>
                <th>Email</th>
                <th>Status</th>
                <th>Change Status</th>
            </tr>
        </thead>
        <tbody>   
    @foreach ($students as $student)
      <tr>
             <td>{{$student->id}}</td>
                <td>{{$student->firstname}}</td>
                <td>{{$student->UWI_id}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->status}}</td>               
                <td><form class="form-horizontal" method="POST" action="{{route('admin.view.approve.status')}} ">
                <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">
                <fieldset>
                <!-- Form Name -->                
<!-- Multiple Checkboxes (inline) -->
            <div class="form-group">
                <div class="col-md-4">
                    <label class="checkbox-inline" for="status">
                    <input type="checkbox" name="status" id="status" value="APPROVED">
                    Click to approve
                    </label>
                </div>
            </div>
            <div class="form-group">                  
                <div class="col-md-4">
                    <input id="id" name="id" value="{{$student->id}}" type="hidden">                    
                </div>
            </div>
             <div class="form-group">                  
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">approve Student</button>
                    </div>
            </div>
                </fieldset>
                </form></td>                
                </tr>      
        </tbody>
             
    @endforeach
    </table>
</div>


@endsection

               
            