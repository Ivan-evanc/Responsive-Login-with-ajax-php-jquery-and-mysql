<!DOCTYPE html>
<html>
<head>
	<title>Login | ajax-jquery</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body style="background-color: lightgray;">
	<br><br>
	<div class="container">
		<div class="panel-heading" style="background-color: blue; color:white;">Simple ajax/PHP and mysql login</div>
		
	<div class="panel-body" style="background-color: white;">
	<form id="myform" method="POST" action="loginuser.php">
		<br>
		<input type="text" name="username" id="username" class="form-control" placeholder="Username"><br>
		<input type="password" name="password" id="password" class="form-control" placeholder="password"><br>
        <p id="ack" style="color: red;"></p>
		<button id="submit" class="btn btn-info">LoginUser</button>
		<!--display the info on the ack-->
		<br>
		
		
	</form>
</div>
</div>

<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="myscript.js"></script>

<blockquote class="text-center">
	<p>Copyright&copy <?php echo date('Y');?>.All Right reserved.</p>
	<p>Developed by evans kibet(System developer).</p>
</blockquote>


</body>
</html>