@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Project Upload</title>

    <!-- Bootstrap -->
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
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
    background-color: #ccccff;
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


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
        <div class="container">
    <form class="form-horizontal" action="/addProject" method="POST" enctype="multipart/form-data">
    
<fieldset>

<!-- Form Name -->
<legend>Project Data</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pname">Project Name</label>  
  <div class="col-md-4">
  <input id="pname" name="pname" placeholder="Name" class="form-control input-md" type="text" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="coursename">Course Name</label>  
  <div class="col-md-4">
  <input id="coursename" name="coursename" placeholder="INFO 2500" class="form-control input-md" type="text" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="coursecode">Course Code</label>  
  <div class="col-md-4">
  <input id="coursecode" name="coursecode" placeholder="XXXX 1234" class="form-control input-md" type="text" required>
  <span class="help-block">Format: 4 letters followed by 4 digits</span>  
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="degree">Degree</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="degree-0">
      <input name="degree" id="degree-0" value="Information Technology" checked="checked" type="radio" required>
      Information Technology
    </label>
	</div>
  <div class="radio">
    <label for="degree-1">
      <input name="degree" id="degree-1" value="Computer Science" type="radio">
      Computer Science
    </label>
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="year">Year</label>  
  <div class="col-md-4">
  <input id="year" name="year" placeholder="YYYY" class="form-control input-md" type="text" required>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="pic">Project Image (Link On External Website)</label>  
  <div class="col-md-4">
  <input id="pic" name="pic" type="text">
    
  </div>
</div>

<div disabled="disabled" class="form-group">
<label class="col-md-4 control-label" >Upload Project At This Link(Compress files to zip before upload. Only ZIP files accepted). Please Upload Here Before Submitting Form</label>
    <hr><a target="_blank" href="https://www.cloudwok.com/u/GyOx" onclick="upload()">Click Here for Upload</a><hr>

<div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Project Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description"></textarea required>
  </div>
</div>
<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}" />

<!-- File Button --> 
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="projectfiles">Project Upload</label>
  <div class="col-md-4">
    <input type="file" name="project[]" multiple>
  </div>
</div>
-->

<!-- Appended Input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emails">Group Members Emails</label>  
  <div class="col-md-4">
  <input id="emails" name="emails" placeholder="bob@bobmail.com kid@miniman.com buffguy@gymrat.com" class="form-control input-md" type="text" >
  <span class="help-block">Enter member email and click add button. Repeat for each member.</span>  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="github">GitHub</label>  
  <div class="col-md-4">
  <input id="github" name="github" placeholder="https://github.com/myusername/myproject" class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group" style="display:none" id="btn">
  <label class="col-md-4 control-label" for="submit">Upload</label>
  <div class="col-md-4">
    <input type="submit" value="Save">
  </div>
</div>



</fieldset>
</form>
</header>
</div>
   <footer class="footer-section" style="background-color:#ccccff">
        <div class="container" >
            <div class="row">
               
      
               
            <div class="col-md-4 text-center">
               <p>Please enter information as accurately as possible<br>UWI Student Project Tracker©<br> Copyright 2017 .</p>
               </div>
              
             
                
             </div>
        </div>
    </footer>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>

      <!-- All Javascript Plugins  -->
   
    <script type="text/javascript" src="js/plugin.js"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script>
    function upload(){
    var btn= document.getElementById("btn");
        btn.style.display = "block";
    }
    </script>

    
@endsection