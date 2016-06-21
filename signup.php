<?php
$email = $_POST['email'];
$password = $_POST['password'];
if($email==null||$password==null){
	?>
	<html>
	<script type = text/javascript> alert("Username or Password cannot be blank")</script>
	</html>
	<?php
	header("Location:signUp.html");
	}
else{
	mysql_connect("localhost","root","");
	mysql_select_db("custoview");
	$query = mysql_query("INSERT INTO user_details(email, password) VALUES ('$email', '$password')");
	if($query)
		header("Location:signIn.html");
	else{
		echo "Error";
	}
}
?>