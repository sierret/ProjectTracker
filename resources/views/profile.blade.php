<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
   
    
    
    <title>Student Project Tracker</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
     <style>
body{
    background-color: grey;
}
.about{
    font-family: "Times New Roman", Georgia, Serif;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}

header{
     overflow:auto;
}


     </style>

 </head>

  <body>

    
    
    <!-- Home & Menu Section Start -->
    <header id="home" class="home-section">
        
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                <div id="username">
                
                </div>
                    <div class="col-sm-3">
                        <div class="logo">
                           <!--put pick here-->
                        </div>
                    </div>
                    
                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="/">Home <div class="ripple-wrapper"></div></a>
                                        </li>
                                                                            
                                        
                                
                                             @if(Auth::check())
                                                <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                                </a>

                                                <ul class="dropdown-menu" role="menu">
                                                    <li style="color:black; background-color:#24b662">
                                                    <a href="/addProject">Add Project</a>
                                                        <a href="/profile">
                                                            Profile
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                    <li style="color:black; background-color:#24b662">
                                                        <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                            Logout
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            @else
                                                <li><a class="smoth-scroll" href="{{ route('login') }}">Login</a>
                                                </li>;
                                                <li><a class="smoth-scroll" href="{{ route('register') }}">Signup</a>
                                                </li>;
                                                
                                            
                                            @endif
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
              
         <div class="container">
       
<div class="row">
     <div class="col-sm-12">
                    <div class="section-title">
                        <h2>User Profile</h2>
                     
                    </div>
                </div>
  <div class="col-sm-4">
  <div class="panel widget light-widget panel-bd-top">
                  <div class="panel-heading no-title"> </div>
                  <div class="panel-body">

                    <div class="text-center vd_info-parent"> <img alt="example image" src="{{Auth::user()->pic}}"> </div>
                    <h2 class="font-semibold mgbt-xs-5">{{Auth::user()->firstname}}</h2><br/>
                       <h2 class="font-semibold mgbt-xs-5">{{Auth::user()->lastname}}</h2><br/>
                    <p>{{Auth::user()->degree}}</p>
                    <div class="mgtp-20">
                      <table class="table table-striped table-hover">
                        <tbody>
                          <tr>
                            <td style="width:60%;">Status</td>
                            <td><span class="label label-success">{{Auth::user()->status}}</span></td>
                          </tr>
                        
                          <tr>
                            <td>Date Joined</td>
                            <td> {{Auth::user()->created_at}} </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
</div>

  <div class="col-sm-8 about" >
      <div class="row">
           <div class="col-sm-6">
    <h2 class="section-heading"> <b style="color:#24b662" >ABOUT</b></h2>
           </div>

      <div class="col-sm-6">
 
  <!-- Trigger the modal with a button -->
  <button style="background-color: #F9F9F9; color:#24b662; border-style: none;"  type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit profile</button>
      </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="background-color: white">
    
      <!-- Modal content-->

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b><u>Edit About Information</u></b></h4>
        </div>

 <form method="POST" action="{{route('update.profile')}}" class="table table-hover">
<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">
<input type="hidden" name="id" id="id" value="{{Auth::user()->id}}">
<b><i> First Name:</i></b> <input type="text" name="firstname" value=""> <br/>
<b><i>Last Name:</i></b> <input type="text" name="lastname" value=""><br/>
<b><i>Email:</i></b> <input type="text" name="email" value=""></br>
<b><i>Contact:</i></b> <input type="text" name="contact" value=""><br/>
<b><i>Change Profile Picture(add link to online picture such as Facebook):</i></b> <input type="text" id="pic" value="images/profile_default.jpg" name="pic">
<p>Click the button to save edits</p>
<button type="submit" class="btn btn-primary">Make Changes</button>
</form>



        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>
     
  </div>
   <!--end model form-->

      <table class="table table-hover">
          <tr>
                <th>ID</th>                              
                <th>First Name </th>
                <th>Last Name</th>
                <th>UWI ID</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Status</th>
          </tr>         
       </thead>
        <tbody>
        <tr>
                <td>{{Auth::user()->id}}</td><td>{{Auth::user()->firstname}}</td><td>{{Auth::user()->lastname}}</td><td>{{Auth::user()->UWI_id}}</td><td>{{Auth::user()->email}}</td><td>{{Auth::user()->contact}}</td><td>{{Auth::user()->status}}</td>
            </tr>    
   
        </tbody>
      </table>
            
            </div><!--row-->
        
        </div><!--container-->
        
    </header>
    <!-- Home & Menu Section End-->
    
              
    
    
  

   <footer class="footer-section">
        <div class="container">
            <div class="row">
               
      
               
            <div class="col-md-4 text-center">
               <p>© Copyright 2017 .</p>
               </div>
              
             
                
             </div>
        </div>
    </footer>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>

      <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>

 
      </body>
 </html>