<!doctype html>
<?php
$str_path="phpHtmlElements/form.php";
include($str_path);
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<style type="text/css">
		body,html{
			margin:0px;
			height: 100%;
		}
		.container-fluid{
			border:thin;
			border-style:solid;
			
		}
	
		h2{
			margin:0px;
			color:white;
		}
		.menu1{
			margin-top:20px;
		}
		
		.menu1 a:hover{
			text-decoration: none;
			
			
		}
		.menu1 .btn-light{
			color:orange;
			background-color:transparent;
			border-color:transparent;
		}
		.menu1 .btn:hover{
			background-color:azure;
		
			
		}
		
		.bg1{
			background-color:black;
		}
		
		.regForm input,button{
			width:600px;
			margin-top:10px;
		}
		.regForm.cb{
			width:5px;
			
		}
		.regForm label{
			width:300px;
		}
		
	</style>
	<script type="text/javascript">
	function sLiDE(var eventid,var slideId,var slideSpeed){
		toString(eventid);
		toString(slideId);
		$(document).ready(function(){
			$(eventid).click(function(){
				$(slideId).slideToggle(slideSpeed);
			});
		});
	}
	</script>
</head>
<body>
	<div class="container-fluid bg1 ">
		<center>
		<h2 class="display-4 col-4">Advent Of Codes</h2>
		</center>
		<center>
	<div class="container">
		<div class="row menu1">
			<div class="btn btn-light col-4 text-center"><a id="logLink" href="">LOGIN</a></div>
			<div class="btn btn-light col-4 text-center"><a id="regLink" href="">REGISTRATION</a></div>
			<div class="btn btn-light col-4 text-center"><a id="aboutLink" href="">ABOUT</a></div>
			
		</div>
		<center>
			<?php
	         
			
			
			?>
		<!--<form id="regForm" class="regForm" action="">
			<input type="text" name="userName" placeholder="Username...."><br>
			<input type="password" id="pw1"name="pass1" placeholder="Password"><br>
			<input type="repassword" id="pw2"name="pass2" placeholder="Repassword"><br>
			<label><input type="checkbox" name="cb" id="cb" class="cb">Password Visibility on/off</label><br>
			<input type="text" name="firstName" placeholder="FirstName"><br>
			<input type="text" name="lastName" placeholder="LastName"><br>
			<input type="text" name="address" palceholder="Address"><br>
			<button type="submit" class="btn btn-primary" id="regBtn" name="regBtn">REGISTRATION</button>
		</form>-->
		</center>
		</div>
		</center>
		
	</div>
</body>
</html>