<?php
	session_start();
?>
	<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>کاورش</title>

<link href="CSS/styls-kavrosh.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">
	<!--
		.set-style-link {
			text-decoration: none;
			font-weight: bold;
		}
		-->
	</style>
</head>
<body>
	<div class="divtable">
		<div class="divtablerow">
			<div class="divtablecell">
				<header class="divtable">
					<div class="divtablerow">
						<div class="divtablecell">LOGO</div>
					</div>
				</header>
				<nav class="divtable">
					<ul class="divtablerow">
					<li class="divtablecell"><a class="set-style-link" href="kavrosh.php">خانه</a></li>
					<li class="divtablecell"><a class="set-style-link" href="register.php">عضویت</a></li>
					<?php
						if(isset($_SESSION["state_login"])&&$_SESSION["state_login"]===true)
						{
						?>
					<li class="divtablecell"><a class="set-style-link" href="logout.php">خروج از سایت
					<?php	echo("({$_SESSION["realname"]})")?></a></li>
						<?php
							}
							else
							{
						?>
					<li class="divtablecell"><a class="set-style-link" href="login.php">ورود </a></li>
					<?php
						}
					?>
					<li class="divtablecell"><a class="set-style-link" href="index.php">درباره ی ما</a></li>
					<li class="divtablecell"><a class="set-style-link" href="index.php">ارتباط با ما</a></li>
					<?php
					if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin")
					{
					?>
					<li class="divtablecell"><a class="set-style-link" href="admin_products.php">مدیریت محصول</a></li>
					<?php
					}
					?>
					</ul>
				</nav>
				<section class="divtable">
					<section class="divtablerow">
						<aside class="divtablecell" style="width: 25%;">بخش امکانات سایت</aside>
						<section class="divtablecell" style="width:75%;">