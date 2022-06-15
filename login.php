<?php
	include("includes/header.php");
	if(isset($_SESSION["state_login"])&&$_SESSION["state_login"]===true){
	?>
	<script type="text/javascript">
	<!--
	location.replace("kavrosh.php");
	-->
	</script>
<?php
	}
?>
	<br/>
	<form name="login" action="action_login.php" method="POST">
	<table style="width:50%; margin-left:auto;margin-right:auto;" border="0" >
	
		<tr>
			<td>نام کاربری</td>
			<td><input type="text" style="text-align:left;" id="username" name="username" /></td>
		</tr>
		
		<tr>
			<td>کلمه ی عبور</td>
			<td><input type="password" style="text-align:left;" id="password" name="password" /></td>
		</tr>
		
		<tr>
			<td><br/><br/></td>
			<td><input type="submit" value="ورود"/>&nbsp;&nbsp;&nbsp;<input type="reset" value="جدید"/>
			</td>
		</tr>
		
	</table>
	</form>
	
<?php
	includ("includes/footer.php");
?>

	