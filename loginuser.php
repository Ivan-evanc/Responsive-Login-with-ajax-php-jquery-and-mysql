<?php

function loginUser(){
	include_once('serverconnect.php');
    
    //to avoid the mysql injection
	$username=mysql_escape_string($_POST['username']);
	$password=mysql_escape_string($_POST['password']);

	$query="SELECT * from auth_tbl where username='$username' AND password='$password'";

	$executeQuery=mysql_query($query);
	$rows=@mysql_fetch_row($executeQuery);

	if($rows[0]>0){
		echo 'Login successfully';
	}else{
		echo 'Wrong username or password';
	}
}

loginUser();


?>
