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
<script type="text/javascript">
<!--
	function check_empty()
	{
		var username='';
		username=document.getElementById("username").value;
		if(username=='')
			alert('وارد کردن نام کاربری الزامی است');
		else
		{
			var r = confirm("از صحت اطلاعات وارد شده اطمینان دارید؟");
			if(r==true){
				document.register.submit();
			}
		}
	}
	-->
</script>
	<br/>
	<form name="register" action="action-register.php" method="POST">
		<table style="width:50%; margin-left:auto; margin-right:atuo;" border="0">
			<tr>
				<td style="width:40%;">نام و نام خانوادگی</td>
				<td style="width:60%:"><input type="text" id="realname" name="realname"/></td>
			</tr>
			
			<tr>
				<td>نام کاربری </td>
				<td><input type="text" style="text-align:left;" id="username" name="username"/></td>
			</tr>
			
			<tr>
				<td>رمز عبور</td>
				<td><input type="password" style="text-align:left;" id="password" name="password"/></td>
			</tr>
			
			<tr>
				<td>تکرار رمز عبور</td>
				<td><input type="password" style="text-align:left;" id="repassword" name="repassword"/></td>
			</tr>
			
			<tr>
				<td>ایمیل</td>
				<td><input type="text" style="text-align:left;" id="email" name="email"/></td>
			</tr>
			
			<tr>
				<td><br/><br/></td>
				<td><input type="button" value="ثبت" onclick="check_empty();" />
				&nbsp;&nbsp;&nbsp;
				<input type="reset" value="چدید" /></td>
			</tr>
		</table>
	</form>

<?php
		include("includes/footer.php");
?>