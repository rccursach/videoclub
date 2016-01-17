<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<meta charset="utf-8">
<title>Edit Movie</title>
</head>

<body>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>New Movie</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" class="form-control input-md" type="text">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Year</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Genre</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Sci-Fi Fantasy</option>
      <option value="2">Action</option>
      <option value="3">Horror</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Director</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" class="form-control input-md" type="text"> 
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Save</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
  </div>
</div>

</fieldset>
</form>


</body>
</html>