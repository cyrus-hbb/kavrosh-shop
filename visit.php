<?php
	session_start();
	if(isset($_SESSION['counter'])){
	$_SESSION['counter']+=1;
	}else{
		$_SESSION['counter']=1;
	}
	
	$msg=$_SESSION['counter']." بازدید از صفحه ";
	$msg.="در این جلسه ";
	?>
	<title>Setting up a php sesstion</title>
<?php
	echo($msg);
?>