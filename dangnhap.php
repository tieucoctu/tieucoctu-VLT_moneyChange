<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- doi cac ngoai te ra USD -->
    
    


    <style>
        .contianer {
            padding-top: px;
            padding-left: 25px;
            padding-right: 25px;
            
        }
        

        
        .title {
            font-size: 25px;
            background-color: rgb(118, 250, 129);
            padding-left: 15px;
            padding-top: 7px;
            padding-bottom: 5px;
			
        }
        
        

        
        footer {
            position: fixed;
            color: black;
            top: 630px;
            width: 100%;
        }
        
        .navbar-nav>li>a {
            margin-top: 10px;
        }
        
        .navbar-brand {
            height: 70px;
            padding: 5px;
        }
		
		.modal-header, h4, .close {
		background-color: #333;
		color: #fff !important;
		text-align: center;
		font-size: 30px;
		}

		.modal-header, .modal-body {
		padding: 20px 20px;
		width: 50%;
		 margin-left: auto;
		margin-right: auto;
		
		}
		.modal-content{	padding-top: 100px;}
		
    </style>
</head>
<!-- thanh dieu huong collapse -->
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<form method ="POST" action="">
<div class="modal-content">
    <div class="modal-header">
<?php
SESSION_START();
if(isset($_SESSION['tenDangnhap'])){
	if($_SESSION['tenDangnhap']=='admin'){
		echo "hi ".$_SESSION['tenDangnhap']."<br>";
		echo "<a href ='hien_timkiem.php'> Chỉnh sửa dữ liệu </a><br>";
		echo "<a href ='doitien.php'> Quay trở lại trang chủ </a><br>";
		echo "<a href ='logout.php'> Thoát </a>";
	}else{
		echo "<a href ='doitien.php'> Quay trở lại trang chủ </a><br>";
		echo "<a href ='logout.php'> Thoát </a>";
	}
	die();
}
?>
<?php
if(isset($_POST["login"])){
	require 'local.php';
	mysqli_set_charset($con, 'UTF8');
	$db = mysqli_select_db($con, 'web');

	if($db == null){
		echo'<br>Khong chon duoc database';
	}
	$tendangnhap = $_POST["tenDangnhap"];
	$matkhau= $_POST["matKhau"];
	
	$sql = "SELECT tenDangnhap, matKhau FROM users WHERE tenDangnhap ='$tendangnhap' AND matKhau='$matkhau'";
	$result = $con -> query($sql);
	if($result -> num_rows ==0){
		echo "Không tồn tại tên đănh nhập hoặc sai mật khẩu, Vui lòng nhập lại.
		<a href ='http://localhost/PTUD_web/btl_a/btl%20A2_nhom%203/dangnhap.php'> Thử lại </a>";
		exit;
		}
	$row = $result -> fetch_assoc();
	if($matkhau!= $row['matKhau']){
		echo "Sai tài khoản hoặc mật khẩu. Vui lòng nhập lại <a href='http://localhost/PTUD_web/btl_a/btl%20A2_nhom%203/dangnhap.php'> Thử lại </a>";
		exit;
	}	
	$_SESSION['tenDangnhap'] = $tendangnhap;
	if($_SESSION['tenDangnhap']=='admin'){
		echo "Xin chào ".$_SESSION['tenDangnhap'];
		echo "<a href ='hien_timkiem.php'> Chỉnh sửa dữ liệu </a><br>";
		echo "<a href ='doitien.php'> Quay trở lại trang chủ </a><br>";
		echo "<a href ='logout.php'> Thoát </a>";
	}else{
		echo "<a href ='doitien.php'> Quay trở lại trang chủ </a><br>";
		echo "<a href ='logout.php'> Thoát </a>";
	}
	die();
}		
?>

    

       <h4><span class=""></span> Đăng nhập </h4>
     </div>
     <div class="modal-body">
			<div class="form-group">
              <label for="psw">Tên đăng nhập :</label>
              <input type="text" name="tenDangnhap" class="form-control"  >
            </div>
			<div class="form-group">
              <label for="psw"> Nhập mật khẩu :</label>
              <input type="password" name="matKhau" class="form-control"  >
            </div>
			<button type="submit" name="login" class="btn btn-block">Đăng nhập
                <span class="glyphicon glyphicon-ok"></span>
              </button>
     
				<a href ="logout.php">logout</a><br/>
			</form>
			</div>
		</div>
	


</body>
</html>