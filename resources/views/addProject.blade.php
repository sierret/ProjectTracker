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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <form class="form-horizontal" id="pupload" action="/store" method="POST">
    
<fieldset>

<!-- Form Name -->
<legend>Project Data</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pname">Project Name</label>  
  <div class="col-md-4">
  <input id="pname" name="pname" placeholder="Name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="coursename">Course Name</label>  
  <div class="col-md-4">
  <input id="coursename" name="coursename" placeholder="INFO 2500" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="coursecode">Course Code</label>  
  <div class="col-md-4">
  <input id="coursecode" name="coursecode" placeholder="XXXX 1234" class="form-control input-md" type="text">
  <span class="help-block">Format: 4 letters followed by 4 digits</span>  
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="degree">Degree</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="degree-0">
      <input name="degree" id="degree-0" value="Information Technology" checked="checked" type="radio">
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
  <input id="year" name="year" placeholder="YYYY" class="form-control input-md" type="text">
    
  </div>
</div>
<div disabled="disabled">
<p><strong>Please compress project files to zip and name this file appropriately before upload</strong></p><br>
<p><strong>Failure to comply may result in your project being inaccessible</strong></p>
<label class="col-md-4 control-label" >Project Upload(only zip files)</label>
  <iframe src="https://app.box.com/embed/s/v87lgj24w43lkv5hgi477xbacp9jpr78?sortColumn=date&view=list&showItemFeedActions=false&showParentPath=false" width="500" height="400" frameborder="0" allowfullscreen webkitallowfullscreen msallowfullscreen></iframe> 
<div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Project Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description"></textarea>
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
  <label class="col-md-4 control-label" for="appendedtext">Group Members Emails</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="appendedtext" name="emails" class="form-control" placeholder="bob@gmail.com" type="text">
      <span class="input-group-addon">add</span>
    </div>
    <p class="help-block">Enter member email and click add button. Repeat for each member.</p>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="github">GitHub</label>  
  <div class="col-md-4">
  <input id="github" name="github" placeholder="https://github.com/myusername/myproject" class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Upload</label>
  <div class="col-md-4">
    <input type="submit" value="Save">
  </div>
</div>

</fieldset>
</form>

 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
  </body>
</html>