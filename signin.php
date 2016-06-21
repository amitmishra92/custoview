<?php
$email = $_POST['email'];
$password = $_POST['password'];
if($email==null||$password==null){
	?>
	<html>
	<script type = text/javascript> alert("Username or Password cannot be blank")</script>
	</html>
	<?php
	header("Location:signIn.html");
	}
	mysql_connect("localhost","root","");
	mysql_select_db("custoview");
	$query = mysql_query("SELECT * FROM user_details");
	$row = mysql_fetch_array($query);
	
	if($email==$row['email']&&$password==$row['password']){
		header("Location:home.php");
	}
	else{
		?>
	<html>
	<script type = text/javascript> alert("Username or Password is incorrect")</script>
	</html>
	<?php
	header("Location:signIn.html");
	}
	
?>