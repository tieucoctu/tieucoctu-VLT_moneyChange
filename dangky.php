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
    <nav id="nav" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#luachon">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> 
                  <span class="icon-bar"></span>                        
              </button>
                <img class="navbar-brand" href="doitien.html" src="img/logo.png" alt="logo">
            </div>
            <div>
                <div class="collapse navbar-collapse" id="luachon">
                    <ul class="nav navbar-nav">
                        <li><a href="doitien.html"> Công cụ  đổi </a></li>
                        <li><a href="bangtygia.html"> Tỷ Giá </a></li>
                        <li><a href="biểu đồ.html"> Biểu Đồ </a></li>
                    </ul>
                </div>
				
            </div>
        </div>
    </nav>
<div class="modal-content">
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
			<div class="form-group">
              <label for="psw">Ngày Sinh :</label>
              <input type="date" name="ngaysinh" class="form-control" id="psw" >
            </div>
			<div class="form-group">
              <label for="psw">Email :</label>
              <input type="text" name="email" class="form-control" id="psw" >
            </div>
			<div class="form-group">
              <label for="psw">Điện Thoại :</label>
              <input type="text" name="dienthoai" class="form-control" id="psw" >
            </div>
			<div class="form-group">
              <label for="psw">Địa Chỉ :</label>
              <input type="text" name="diachi" class="form-control" id="psw" >
            </div>
              <button type="submit" name="dangky" class="btn btn-block">Đăng Ký
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          


<?php
require 'local.php';
mysqli_set_charset($con, 'UTF8');
$db = mysqli_select_db($con, 'web');
if(isset($_POST["dangky"])){ 
	if($db == null)
		echo'<br>Khong chon duoc database';
		$tendangnhap= $_POST["tendangnhap"];
		$matkhau= $_POST["matkhau"];
		$hoten= $_POST["hovaten"];
		$email= $_POST["email"];
		$dienthoai= $_POST["dienthoai"];
		$diachi= $_POST["diachi"];
		$ngaysinh= $_POST["ngaysinh"];
		
	
		$sql = "INSERT INTO users (tenDangnhap, matKhau, hoTen, ngaySinh , email, dienThoai, diaChi)
		VALUES('$tendangnhap','$matkhau','$hoten','$ngaysinh','$email','$dienthoai','$diachi')";
		if($con->query($sql) ===TRUE){
			echo "chung mừng bạn đã đăng ký thanh công";
			echo"<a href='dangnhap.php'>đăng nhập ngay</a>";
		}else{
		echo "vui lòng nhập lại", $con->error;
				}	
	$con->close();
}
?>
</form>
        </div>
</body>
</html>