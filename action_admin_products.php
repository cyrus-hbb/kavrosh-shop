<?php 
	include ("includes/header.php"); 
	if(!($_SESSION["state_login"])&& $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin")
		{
?>
<script type="text/javascript">
	<!--
	location.replace("kavrosh.php");
	-->
	</script>
<?php
	}
if(isset($_POST['pro_code'])&&!empty($_POST['pro_code'])&&
		isset($_POST['pro_name'])&&!empty($_POST['pro_name'])&&
		isset($_POST['pro_qty'])&&!empty($_POST['pro_qty'])&&
		isset($_POST['pro_price'])&&!empty($_POST['pro_price'])&&
		isset($_POST['pro_detail'])&&!empty($_POST['pro_detail']))
		{
		$pro_code=$_POST['pro_code'];
		$pro_name=$_POST['pro_name'];
		$pro_qty=$_POST['pro_qty'];
		$pro_price=$_POST['pro_price'];
		$pro_image=$_FILES["pro_image"]["name"];
		$pro_detail=$_POST['pro_detail'];
		}else
			exit("برخی از فیلد ها مقدار دهی نشده اند!");
		$link=mysqli_connect("localhost","root","","kavrosh_db");
		$target_dir="images/products/";
		$target_file=$target_dir.$_FILES["pro_image"]["name"];
		$uploadOK=1;
		$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
		$check = getimagesize($_FILES["pro_image"]["tmp_name"]);
		if ($check !== false) {
		echo "پرونده انتخابی یک تصویر از نوع-". $check["mime"]."است <br />";
		$uploadOk = 1;
		} else {
		echo "پرونده انتخاب شده یک تصویر نیست <br />"; 
		$uploadok = 0;
		}
		if (file_exists($target_file)) {
		 echo" پرونده ای با همین نام در سرویس دهنده میزبان وجود دارد</ br>";
		$uploadOK = 0;
		}
		if($_FILES["pro_image"]["size"]> (500*1024)) {
		echo"</ br> اندازه پرونده انتخابی بیشتر از 500 کیلوبایت است" ;
		$upload0k = 0;
		}

		$imageFileType!= strtolower($imageFileType);
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType !="jpeg" && $imageFileType != "gif") {
		echo"فقط پسوندهای JPG, JPEG, PNG & GIF برای پرونده مجاز هستند</ br>";
		$upload0k = 0;
		}
		if ($uploadOk == 0) {
		echo" پرونده انتخاب شده به سرویس دهنده میزبان ارسال نشد</ br>" ;
		} else {
		if (move_uploaded_file($_FILES["pro_image"]["tmp_name"], $target_file)) {
		echo(" پرونده".$_FILES["pro_image"]["name"].
		"با موفقیت به سرویس دهنده میزبان انتقال یافت<br/>");
		} else {
		echo(" خطا در ارسال پرونده به سرویس دهنده میزبان رخ داده است</ br>") ;
		}
		}
		if ($uploadOk == 1){
		$query = "INSERT INTO products 
		(pro_code,
		pro_name,
		pro_qty,
		pro_price,
		pro_image,
		pro_detail)
		VALUES 
		('$pro_code',
		'$pro_name',
		'$pro_qty', 
		'$pro_price',
		'$pro_image', 
		'$pro_detail')";
		if (mysqli_query($link,$query)=== true)
		echo ("<p style='color:green;'><b>کالا با موفقیت ذخیره شد</b></p>");
	else
		echo ("<p style='color:red;'><b>خطا در ذخیره کالا</b></p>"); 
	} else
		echo ("<p style='color:red;'><b>خطا در ذخیره کالا</b></p>");
	mysqli_close($link);
	include ("includes/footer.php");
	?>