<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

header("location: http://localhost/codeigniter/User/userinfo");
}
?>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
.thumbnail
{
margin-top: 200px;
height:230px;

}
body
{

	background: url("http://webneel.com/wallpaper/sites/default/files/images/04-2013/awesome-rain-wallpaper_0.jpg");
   background-repeat: no-repeat;
   -webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
.btn-default{
	width:100px;
	margin: 10px;
}
.thumbnail
{
width:300;
height:200;
}
.panel-primary
{
  margin-top: 200px;
}
.panel-heading
{
  text-align: center;
  font-size: 20px;
  font-family: inherit;
  font-style: italic;
}
</style>
</head>
<body>
	

  <div class="row">
    <div class="col-xs-4"></div>
    <div class="col-xs-4">
     <!-- <div class="thumbnail"> -->
      <div class="panel panel-primary">
   <div class="panel-heading">Login</div>
   <div class="panel-body">
    <?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>
  <?php echo form_open('User/login'); ?> 
<input type="text" class="form-control" name="username" placeholder="username" > <br>
<input type="password" class="form-control" name="password" placeholder="password" ><br>
<input type="submit" class="btn btn-default" name="loginbtn" value="Login">
<input type="reset" class="btn btn-default" value="Cancel">
<?php echo form_close(); ?>
</div>
</div>
<!-- </div> -->
     </div>
    </div>
  </div>
</body>
</html>