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

 <div class="modal-header">
          <h4><span class=""></span>Đăng Ký</h4>
        </div>
        <div class="modal-body">
          <form method ="POST" action="" enctype="multipart/form-data">
      
			<div class="form-group">
              <label for="psw">Tên đăng nhập :</label>
              <input type="text" name="tendangnhap" class="form-control" id="psw" >
            </div>
			<div class="form-group">
              <label for="psw">nhập mật khẩu :</label>
              <input type="password" name="matkhau" class="form-control" id="psw" >
            </div>
			<div class="form-group">
              <label for="psw">Nhập lại mật khẩu :</label>
              <input  type="password" name="" class="form-control" id="psw" >
            </div>
			<div class="form-group">
              <label for="psw">Họ và Tên :</label>
              <input type="text" name="hovaten" class="form-control" id="psw" >
            </div>
              <button type="submit" name="dangky" class="btn btn-block">Đăng Ký
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          


<?php
require 'local.php';
mysqli_set_charset($con, 'UTF8');
$db = mysqli_select_db($con, 'bieudodoitien');
if(isset($_POST["dangky"])){ 
	if($db == null)
		echo'<br>Khong chon duoc database';
		$tendangnhap= $_POST["tendangnhap"];
		$matkhau= $_POST["matkhau"];
		$hoten= $_POST["hovaten"];
		
		$sql = "INSERT INTO users (tenDangnhap, matKhau, hoTen)
		VALUES('$tendangnhap','$matkhau','$hoten')";
		if($con->query($sql) ===TRUE){
			echo "chung mừng bạn đã đăng ký thanh công";
			//echo"<a href='dangnhap.php'>đăng nhập ngay</a>";
		}else{
		echo "vui lòng nhập lại", $con->error;
				}	
	$con->close();
}
?>
</form>
<form method ="POST" action="">

<?php
SESSION_START();
if(isset($_SESSION['tenDangnhap'])){
	if($_SESSION['tenDangnhap']=='admin'){
		echo "hi".$_SESSION['tenDangnhap'];
	}else{
		//header('location:doitien.php');
	}
	die();
}
?>
<?php
if(isset($_POST["login"])){
	require 'local.php';
	mysqli_set_charset($con, 'UTF8');
	$db = mysqli_select_db($con, 'bieudodoitien');

	if($db == null){
		echo'<br>Khong chon duoc database';
	}
	$tendangnhap = $_POST["tenDangnhap"];
	$matkhau= $_POST["matKhau"];
	
	$sql = "SELECT tenDangnhap, matKhau FROM users WHERE tenDangnhap ='$tendangnhap' AND matKhau='$matkhau'";
	$result = $con -> query($sql);
	if($result -> num_rows ==0){
		echo "Khong ton tai ten dang nhap hoac sai mat khau, viu long nhap lai.
		<a href ='javascript: history.go(-1)'> tro lai</a>";
		exit;
		}
	$row = $result -> fetch_assoc();
	if($matkhau!= $row['matKhau']){
		echo "mat khau khong dung, vui long nhap lai.";
		exit;
	}	
	$_SESSION['tenDangnhap'] = $tendangnhap;
	if($tendangnhap=='admin'){
		echo "hi".$_SESSION['tenDangnhap'];
		echo "<a href='logout.php'>dangxuat<a>";	
		
	}else{
		header('location:doitien.php');
	}
	die();
	die();
}		
?>

    
<div class="modal-content">
    <div class="modal-header">
       <h4><span class=""></span>Đăng nhập</h4>
     </div>
     <div class="modal-body">
			<div class="form-group">
              <label for="psw">Tên đăng nhập :</label>
              <input type="text" name="tenDangnhap" class="form-control"  >
            </div>
			<div class="form-group">
              <label for="psw">nhập mật khẩu :</label>
              <input type="password" name="matKhau" class="form-control"  >
            </div>
			<button type="submit" name="login" class="btn btn-block">Đăng nhập
                <span class="glyphicon glyphicon-ok"></span>
              </button>
     
				<a href ="logout.php">logout</a><br/>
			</form>
			</div>
		</div>
	

</form>
</body>
</html>

