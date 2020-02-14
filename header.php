<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ElectoralMusic</title>
</head>
<body>
	<div id ="header"class="header">
		<div id="parent" class="header">
			<div class="header" id="logo">
				<h1 id="logotxt">LOGO</h1>
			</div>
			<div class="header" id="headerInfo">	
				<div class="header" id="loginForm">
					<form action="login.php" class="header" id="login">
						<input type="text" name="username" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
						<button type="submit">Login</button>
					</form>
				</div>
			</div>
		</div>
			<?php
			/* 
				if (isset($_SESSION['userId']))
				{
					echo '
					<div class="header" id="profileInfo">
						<div id="info" class="header">
							<img id="pfp" src="">
							<p id="name" class="header">
								<h4 id="name" class="header"></h4>
								<h4 id="studentId" class="header"></h4>
							</p>
						</div>
						<div id="menubtn" class="header">
							<span></span>
						</div>
					</div>';			
				}else
				{
					echo '
					<div id="parent" class="header">
						<div class="header" id="logo">
							<h1 id="logotxt">LOGO</h1>
						</div>
						<div class="header" id="headerInfo">	
							<div class="header" id="loginForm">
								<form action="login.php" class="header" id="login">
									<input type="text" name="username" placeholder="Username">
									<input type="password" name="password" placeholder="Password">
									<button type="submit">Login</button>
								</form>
							</div>
						</div>
					</div>';
				} 
			*/ 
			?>
		</div>
	</div>
