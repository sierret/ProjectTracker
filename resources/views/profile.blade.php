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
                                        <li><a class="smoth-scroll" href="/addProject">Add Project</a>
                                        </li>                                     
                                        
                                
                                             @if(Auth::check())
                                                <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                                </a>

                                                <ul class="dropdown-menu" role="menu">
                                                    <li style="color:black; background-color:#24b662">
                                                        <a href="/home">
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
                    <div class="text-center vd_info-parent"> <img alt="example image" src="images/pic1.jpg"> </div>
                  
                    <h2 class="font-semibold mgbt-xs-5">Mark Johnson</h2><br/>
                    <h4>University of the West Indies.</h4><br/>
                    <p>Degree:Information Technology</p>
                    <div class="mgtp-20">
                      <table class="table table-striped table-hover">
                        <tbody>
                          <tr>
                            <td style="width:60%;">Status</td>
                            <td><span class="label label-success">Approved</span></td>
                          </tr>
                        
                          <tr>
                            <td>Date Joined</td>
                            <td> April 19, 2017 </td>
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

 <form method="post" class="modal-body">

<b><i> First Name:</i></b> <input type="text" id="first" value=""> <br/>
<b><i>Last Name:</i></b> <input type="text" id="last" value=""><br/>
<b><i>Email:</i></b> <input type="text" id="mail" value=""></br>
<b><i>City:</i></b> <input type="text" id="ucity" value=""><br/>
<b><i>Country:</i></b> <input type="text" id="ucountry" value="">
<b><i>Changed Profile Picture:</i></b> <input type="file" id="file">
<p>Click the button to save edits</p>
<button>Save</button>
</form>



        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>
     
  </div>
   <!--end model form-->

      <table>
          <tr>
              <td>First Name:<p id="fname"></p></td> <!--this is wat is didplayed on the screen-->
              <td>Last Name:<p id="lname"></p></td>
          </tr>
           <tr>
              <td>User Name:<p id="uname"></p></td>
              <td>Email:<p id="email"></p></td>
          </tr>
          <tr>
              <td>City:<p id="city"></p></td>
              <td>Country:<p id="country"></p></td>
          </tr>
          
           
          
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