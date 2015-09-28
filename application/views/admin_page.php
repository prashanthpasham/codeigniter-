<html>
<head>
	<style type="text/css">
     #profile{
padding:50px;
border:1px dashed grey;
font-size:20px;
background-color:#DCE6F7;
}

#logout{
float:right;
padding:5px;
border:dashed 1px gray;
margin-top: -168px;
}

a{
text-decoration:none;
color: cornflowerblue;
}

i{
color: cornflowerblue;
}

.error_msg{
color:red;
font-size: 16px;
}

.message{
position: absolute;
font-weight: bold;
font-size: 28px;
color: #6495ED;
left: 262px;
width: 500px;
text-align: center;
}
	</style>
	<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$id = ($this->session->userdata['logged_in']['id']);
} else {
header("location: User");
}
?>
	</head>
<body>
	<div id="profile">
<?php
echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>";
echo "<br/>";
echo "<br/>";
echo "Welcome to Admin Page";
echo "<br/>";
echo "<br/>";
echo "Your Username is " . $username;
echo "<br/>";
echo "Your database id is " . $id;
echo "<br/>";
?>
<b id="logout"><a href="logout">Logout</a></b>
</div>
<br/>
</body>
</html>	

