<?php

	$con = mysqli_connect('localhost', 'root', '', 'db');

	$query = "INSERT INTO posts (id, title, body) VALUES (NULL, '".$_POST['title']."', '".  $_POST['body'] . "');";
	
	$result = mysqli_query($con, $query);
	
	echo "Thank you!";
	
	header("location:posts.php");
	


?>