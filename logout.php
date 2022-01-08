<!DOCTYPE html>
<html>
<?php 
session_start();
if(isset($_SESSION['tenDangnhap']))
{
	unset($_SESSION['tenDangnhap']);
	
}

header('location:doitien.php');	
?>
<body>

</body>
</html>