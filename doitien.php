<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Công Cụ Đổi Tiền Tệ </title>
    <script>
        var tien = {
            'VND': {
                'USD': <?php
                                require 'local.php';
                                    mysqli_set_charset($con, 'UTF8');
                                    $db = mysqli_select_db($con, 'doi tien');
                                    if($db == null)
                                        echo'<br>Không chọn được database';
                                        $sql = "SELECT * FROM tygia WHERE id='VND'";
                                        $result = $con -> query($sql);
                                        if($result -> num_rows>0)
                                        {
                                            $row = $result->fetch_assoc();
                                            echo $row["USD"];
                                        }
                                    
                        ?>,
                'EUR':<?php
                              echo $row["EUR"];
       					?>,
                'AUD': <?php
                              echo $row["AUD"];
                        ?>,
                'GBP': <?php
                              echo $row["GBP"];
						$con->close();
                      	?>
            },
            'USD': {
                'VND': <?php
                                require 'local.php';
                                    mysqli_set_charset($con, 'UTF8');
                                    $db = mysqli_select_db($con, 'doi tien');
                                    if($db == null)
                                        echo'<br>Không chọn được database';
                                        $sql = "SELECT * FROM tygia WHERE id='USD'";
                                        $result = $con -> query($sql);
                                        if($result -> num_rows>0)
                                        {
                                            $row = $result->fetch_assoc();
                                            echo $row["VND"];
                                        }
                                    
                        ?>,
                'EUR': <?php
                             echo $row["EUR"];
                        ?>,
                'AUD': <?php
                             echo $row["AUD"];
                        ?>,
                'GBP': <?php
                             echo $row["GBP"];
						$con->close();
                        ?>	
            },
            'EUR': {
                'VND': <?php
                                require 'local.php';
                                    mysqli_set_charset($con, 'UTF8');
                                    $db = mysqli_select_db($con, 'doi tien');
                                    if($db == null)
                                        echo'<br>Không chọn được database';
                                        $sql = "SELECT * FROM tygia WHERE id='EUR'";
                                        $result = $con -> query($sql);
                                        if($result -> num_rows>0)
                                        {
                                            $row = $result->fetch_assoc();
                                            echo $row["VND"];
                                        }
                        ?>,
                'USD': <?php
                             echo $row["USD"];
                        ?>,
                'AUD': <?php
                             echo $row["AUD"];
                        ?>,
                'GBP': <?php
                             echo $row["GBP"];
						$con->close();
                        ?>
            },
            'AUD': {
                'VND': <?php
                                require 'local.php';
                                    mysqli_set_charset($con, 'UTF8');
                                    $db = mysqli_select_db($con, 'doi tien');
                                    if($db == null)
                                        echo'<br>Không chọn được database';
                                        $sql = "SELECT * FROM tygia WHERE id='AUD'";
                                        $result = $con -> query($sql);
                                        if($result -> num_rows>0)
                                        {
                                            $row = $result->fetch_assoc();
                                            echo $row["VND"];
                                        }
                        ?>,
                'USD': <?php
                            echo $row["USD"];
                        ?>,
                'EUR': <?php
                            echo $row["EUR"];
                        ?>,
                'GBP': <?php
                            echo $row["GBP"];
						$con->close();
                        ?>
            },
            'GBP': {
                'VND': <?php
                                require 'local.php';
                                    mysqli_set_charset($con, 'UTF8');
                                    $db = mysqli_select_db($con, 'doi tien');
                                    if($db == null)
                                        echo'<br>Không chọn được database';
                                        $sql = "SELECT * FROM tygia WHERE id='GBP'";
                                        $result = $con -> query($sql);
                                        if($result -> num_rows>0)
                                        {
                                            $row = $result->fetch_assoc();
                                            echo $row["VND"];
                                        }
                        ?>,
                'USD': <?php
                            echo $row["USD"];
                        ?>,
                'EUR': <?php
                            echo $row["EUR"];
                        ?>,
                'AUD': <?php
                            echo $row["AUD"];
						$con->close();
                        ?>
            }

        }

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('#calculate').onclick = tinh;
            document.querySelector('#calculate').disabled = true;
            document.querySelector('#nhaptien').onkeyup = hien;

            function hien() {
                if (document.querySelector('#nhaptien').value.length > 0)
                    document.querySelector('#calculate').disabled = false;
                else
                    document.querySelector('#calculate').disabled = true;
            };
        });

        function tinh() {

            var nhap_tien = parseFloat(document.querySelector('#nhaptien').value);
            var tien_1 = document.querySelector('#t1').value;
            var tien_2 = document.querySelector('#t2').value;
            var ketqua = 0;

            try {
                if (tien_1 == tien_2) {
                    ketqua = nhap_tien;
                } else {
                    ketqua = nhap_tien * tien[tien_1][tien_2];
                }
            } catch (err) {
                ketqua = nhap_tien * (1 / tien[tien_2][tien_1]);
            }
            document.querySelector('#luong_tien').innerHTML = nhap_tien;
            document.querySelector('#ty_gia1').innerHTML = tien_1 + ' = ';
            document.querySelector('#ty_gia2').innerHTML = tien_2;
            document.querySelector('#ketqua').innerHTML = ketqua;
        }
    </script>
    <style>
        body {
            background-color:#CCC;
        }
        .row:after {
		content: "";
		display: table;
		clear: both;
		}
		.colum{
			float: left;
		}
        .colum.middle {
            position: relative;
            padding-top: 90px;
            padding-left: 250px;

			width: 74%;
        }
        
        #form {
            position: relative;
            background-color: rgb(177, 247, 218);
            width: 70%;
            margin-top: 10px;
            padding-top: 25px;
			padding-left:60px;
			padding-bottom: 15px;
            display: block;
            border: 0.75px solid rgb(226, 245, 163);
			;
  
		}
		.colum.side{
			position: relative;
			width: 25%;
			float: right;
			padding-top: 110px;
		}
        .collapse {
            color: white;
            font-size: 16px;
        }
		@media screen and (max-width: 600px) {
		   .column.middle,.column.side {
			width: 100%;
		  }
		}
        .login{
			float: right;
		}
        .title {
            position: relative;
            color: black;
            width: 70%;
            font-size: 20px;
			padding-top: 5px;
            background-color: rgb(118, 250, 129);
            border: 0.75px solid rgb(224, 240, 169);
            padding-left: 15px;
        }
        
        footer {
            position: absolute;
            top: 630px;
            width: 100%;
            color: black;
        }
        
        .navbar-brand {
            height: 70px;
            padding: 5px;
        }
        
        .navbar-nav>li>a {
            margin-top: 10px;
        }
		.form-control{width: 70%;}
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav id="nav" class="navbar navbar-inverse  navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#luachon">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>                     
            </button></div>
            <img class="navbar-brand" href="doitien.php" src="img/logo.png" alt="logo">
            <div class="collapse navbar-collapse" id="luachon">
                <ul class="nav navbar-nav">
                    <li><a href="doitien.php" style='color: white;'> Công cụ chuyển đổi </a></li>
                    <li><a href="bangtygia.php" style='color: white;'> Tỷ Giá </a></li>
                    <li><a href="BTL-BieuDo.php" style='color: white;'> Biểu Đồ </a></li>
                </ul>
            
			<ul class="nav navbar-nav navbar-right">
				<li><a href="dangnhap.php" style='color: white;'> Đăng nhập </a></li>
				<li><a href="dangky.php" style='color: white;'> Dăng Ký </a></li>
			</ul>
			</div></div>
    </nav>


<section class="row">
	<div class="colum middle">
		<div class="modal-body">
         <div class="title">
			<span class="glyphicon glyphicon-bitcoin"> </span> 
			Công cụ chuyển đổi tiền tệ 
            </div>
			
            <form id="form" method="POST">
                Lượng tiền:<br>
                <input type="text" id="nhaptien" name ="nhap_tien" class="form-control" autofocus placeholder="Nhập số tiền">
                <br>Từ:<br>
				<?php
				require 'local.php';
				mysqli_set_charset($con, 'UTF8');
				$db = mysqli_select_db($con, 'doi tien');
				
				if($db == null)
					echo'<br>Khong chon duoc database';
				
					$sql = "SELECT * FROM tien ";
					$result = $con -> query($sql);
					
					if($result -> num_rows>0){
						echo "<select id='t1' name ='form_id' class='form-control' required>";
					while($row = $result->fetch_assoc()){
						$money_id = $row["money_id"];
						$money_name = $row["money_name"];
						echo "<option>" .$money_id."</option>";	
					}echo "</select><br> sang:<br>	";
				}
				else{
					echo "0 results";
				}
				$con->close();
				
				?>
				<?php
				require 'local.php';
				mysqli_set_charset($con, 'UTF8');
				$db = mysqli_select_db($con, 'doi tien');
				
				if($db == null)
					echo'<br>Khong chon duoc database';
				
					$sql = "SELECT * FROM tien ";
					$result = $con -> query($sql);
					
					if($result -> num_rows>0){
						echo "<select id='t2' name='to_id' class='form-control' required>";
					while($row = $result->fetch_assoc()){
						$money_id = $row["money_id"];
						$money_name = $row["money_name"];
						echo "<option>".$money_id."</option>";	
					}echo "</select> ";
				}
				else{
					echo "0 results";
				}
				$con->close();
				
				?>
                 <br> <br>
               
                <input type="button" id="calculate" value="Chuyển Đổi" class="btn btn-danger"><br><br>
                <label id="luong_tien" ></label>
                <label id="ty_gia1"></label>
                <label id="ketqua"></label>
                <label id="ty_gia2"></label>
            </form>
		</div>
	</div>

	
</div>
</section>
    <footer>

        <marquee direction="right" style="background:mediumslateblue">Xin cảm ơn quý mọi người đã sử dụng dịch vụ
        </marquee>
    </footer>
</body>


</html>