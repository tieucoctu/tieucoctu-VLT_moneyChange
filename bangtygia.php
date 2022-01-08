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
	body {
            background-color:#CCC;
        }
        .contianer {
            padding-top: px;
            padding-left: 25px;
            padding-right: 25px;
            
        }
        
        .table {
            background-color: rgb(27, 205, 236);
            border-collapse: collapse;
            max-width: 100%;
            margin-bottom: 2px;
			
        }
        
        .title {
            font-size: 25px;
            background-color: rgb(118, 250, 129);
            padding-left: 15px;
            padding-top: 7px;
            padding-bottom: 5px;
			
        }
        
        td,
        th {
            text-align: center;
            padding: 20px;
			border-bottom: 2px solid #ddd;
        }
        
        .even {
            background-color: rgb(250, 250, 250);
        }
        
        .hover {
            background-color: rgb(165, 162, 162);
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
		
		.colum{
			float: left;
		}
        .colum.middle {
            position: relative;
            padding-top: 108px;
			width: 65%;
        }
		.colum.side{
			position: relative;
			width: 33%;
			float: right;
			padding-top: 90px;
			padding-right:15px;

		}
		@media screen and (max-width: 600px) {
		   .column.middle,.column.side {
			width: 100%;
		  }
		}
		.tb{
			padding-top:15px;
			
			border-collapse: collapse;
		}
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
                        <li><a href="doitien.php"> Công cụ  đổi </a></li>
                        <li><a href="bangtygia.php"> Tỷ Giá </a></li>
                        <li><a href="BTL-BieuDo.php"> Biểu Đồ </a></li>
                    </ul>
                
				<ul class="nav navbar-nav navbar-right">
				<li><a href="dangnhap.php" style='color: white;'> Dăng nhập </a></li>
				<li><a href="dangky.php" style='color: white;'> Dăng Ký </a></li>
			</ul>
            </div></div>
        </div>
    </nav>

    <!-- bang ty gia -->
<section class="contianer">
	
		<div class="colum middle">
			<div class="modal-body">
				<h1 class="title">
				<span class="glyphicon glyphicon-usd"></span>
				<span><strong>Tỷ Giá</strong></span></h1>
				<table class="table">
				<tr>
					<td></td>
					<th><img src="img/VND.png" alt=" " width="25" height="20"> VND</th>
					<th><img src="img/USD.png" alt=" " width="25" height="20"> USD</th>
					<th><img src="img/ucs.png" alt=" " width="25" height="20"> AUD</th>
					<th><img src="img/anh.png" alt=" " width="25" height="20"> GBP</th>
					<th><img src="img/eur.png" alt=" " width="25" height="20"> EUR</th>
					<th><img src="img/JPY.png" alt=" " width="25" height="20"> JPY</th>
					<th><img src="img/THB.png" alt=" " width="25" height="20"> THB</th>
					<th><img src="img/HKD.png" alt=" " width="25" height="20"> HKD</th>
				</tr>
				<tr class="even">
					<td><img src="img/VND.png" alt=" " width="25" height="20 "> 1 VND</td>
					<td>1</td>
					<td>0.00004</td>
					<td>0.00006</td>
					<td>0.00003</td>
					<td>0.00004</td>
					<td>0,00447</td>
					<td>0.00130</td>
					 <td>0.00033</td>
				</tr>
				<tr class="hover">
					<td><img src="img/USD.png" alt=" " width="25" height="20"> 1 USD</td>
					<td>23255.83305</td>
					<td>1</td>
					<td>1.32706</td>
					<td>1.4</td>
					<td>0.82127</td>
					<td>103.61111</td>
					<td>30.20786</td>
					<td>7.75249</td>
				</tr>
				<tr class="even">
					<td><img src="img/ucs.png" alt=" " width="25" height="20"> 1 AUD</td>
					<td>17524.41424</td>
					<td>0.75355</td>
					<td>1</td>
					<td>0.61887</td>
					<td>0,62379</td>
					<td>78,63396</td>
					<td>22.76311</td>
					<td>5.84188</td>
				</tr>
				<tr class="hover">
					<td><img src="img/anh.png" alt=" " width="25" height="20"> 1 GBP</td>
					<td>31349.651</td>
					<td>1.33608</td>
					<td>1,75627</td>
					<td>1</td>
					<td>1.11210</td>
					<td>140.46931</td>
					<td>40.36566</td>
					<td>10.51524</td>
				</tr>
				<tr class="even">
					<td><img src="img/eur.png" alt=" " width="25" height="20"> 1 EUR</td>
					<td>28215.00000</td>
					<td>1.21975</td>
					<td>1.60313</td>
					<td>0.91316</td>
					<td>1</td>
					<td>126.11000</td>
					<td>36.55500</td>
					<td>9.45150</td>
				</tr>
				<tr class="hover">
					<td><img src="img/JPY.png" alt=" " width="25" height="20"> 1 JPY</td>
					<td>223.73334</td>
					<td>0.00967</td>
					<td>0.01272</td>
					<td>0.00724</td>
					<td>0.00793</td>
					<td>1</td>
					<td>0.28987</td>
					<td>0.07495</td>
				</tr>
				<tr class="even">
					<td><img src="img/THB.png" alt=" " width="25" height="20"> 1 THB</td>
					<td>771.85097</td>
					<td>0.03335</td>
					<td>0.04387</td>
					<td>0.02498</td>
					<td>0.02736</td>
					<td>3.44987</td>
					<td>1</td>
					<td>0.25856</td>
				</tr>
				<tr class="hover">
					<td><img src="img/HKD.png" alt=" " width="25" height="20"> 1 HKD</td>
					<td>2985.24171</td>
					<td>0.12898</td>
					<td>0.16968</td>
					<td>0.09662</td>
					<td>0.10580</td>
					<td>13.34286</td>
					<td>3.86764</td>
					<td>1</td>
				</tr>
				</table>
		</div>
	</div>
	<div class="colum side">
		<form id ="timkiem" action="" method="POST" enctype="multipart/form-data">
			<input type="text" name="search" placeholder="Search" style='color: red;' value="">
			<button type="submit" name="submit" class="btn btn-info"><span class="glyphicon glyphicon-search">
			</button>	
		</form>
	
		
		<?php
			require 'local.php';
			mysqli_set_charset($con, 'UTF8');
			$db = mysqli_select_db($con, 'doi tien');
						
			if($db == null)
				echo'<br>Khong chon duoc database';
			if(isset($_POST["submit"])){
				$search = $_POST["search"];
				$sql = "SELECT * FROM tygia_ngoaite WHERE from_id ='$search' ";
				$result = $con -> query($sql);
							
				if($result -> num_rows>0){
					echo "<table class='tb'>";
					echo"<tr>
					<th>mã số</th>
					<th> đổi từ </th>
					<th> đổi sang </th>
					<th>Tỷ giá</th>
				</tr>";
					while($row = $result->fetch_assoc())
					echo "<tr><td>". $row["id"]."</td>".
						 "<td><img src= 'img/".$row["img_from"]."' style='max-width: 25px;'> ". $row["from_id"]."</td>".
						 "<td><img src= 'img/".$row["img_to"]."' style='max-width: 25px;'> " . $row["to_id"]."</td>".	
						 "<td>" . $row["cur_1"]. "</td>";
			
					echo "</table>";
				}
			}
			$con->close();
			?>
	
	</div>

    <footer>

        <marquee direction="right" style="background:mediumslateblue">Xin cảm ơn quý mọi người đã sử dụng dịch vụ
        </marquee>
    </footer>
</body>

</html>