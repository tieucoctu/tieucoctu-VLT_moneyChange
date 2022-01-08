<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
<style>
	.colum.side{
		position: relative;
		float: left;
		padding-top: 90px;
		padding-left: 25px;
	}
	.navbar-nav>li>a {
         margin-top: 10px;
        }
        
     .navbar-brand {
         height: 70px;
         padding: 5px;
        }
		 
        td,
        th {
            text-align: center;
            padding: 20px;
        }
		.con{
			float: right;
			padding-top: 17px;
			padding-right: 55px;
			}
</style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<form method ="POST" action="">
    <nav id="nav" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <img class="navbar-brand" href="doitien.html" src="img/logo.png" alt="logo">
            </div>
			<div class ="con">
				<form id ="timkiem" action="" method="POST" enctype="multipart/form-data">
					<input type="text" name="search" placeholder="Search" style='color: red;' value="">
					<button type="submit" name="submit" class="btn btn-info"><span class="glyphicon glyphicon-search">
					</button>	
            </div>
        </div>
    </nav>
<div class="colum side">


<?php //tìm kiếm bảng dữ liệu   ?> 

<?php
	require 'local.php';
	mysqli_set_charset($con, 'UTF8');
	$db = mysqli_select_db($con, 'doi tien');
				
	if($db == null)
		echo'<br>Khong chon duoc database';
	if(isset($_POST["submit"])){
		$search = $_POST["search"];
		$sql = "SELECT * FROM tygia_ngoaite WHERE from_id ='$search' OR id ='$search'";
		$result = $con -> query($sql);
					
		if($result -> num_rows>0){
			echo "<table border='1'>";
			echo"<tr>
			<th>mã số</th>
			<th> đổi từ </th>
			<th> đổi sang </th>
			<th>Tỷ giá</th>
			<th>sửa chữa </th>
		</tr>";
			while($row = $result->fetch_assoc())
			echo "<tr><td><input type='text' name='id' value='" . $row["id"]."' style='width:15%;'></td>".
				"<td><img src= 'img/".$row["img_from"]."' style='max-width: 25px;'>". $row["from_id"]."</td>".
				"<td><img src= 'img/".$row["img_to"]."' style='max-width: 25px;'>" . $row["to_id"]."</td>".	
				"<td><input  type= 'text' name='cur' value='" . $row["cur_1"]."'></td>".
				"<td><button type='submit' name ='xoa' >xóa</button>
				<button type='submit' name ='sua'>sửa</button></td>";
	
			echo "</table>";
			}
			
		else{
		echo "không tìm thấy!<br><a href='hien_timkiem.php'>tải lại</a>";
	}
	
	}
	$con->close();
?>
<?php //chọn bảng cần sửa   ?> 
<?php
if(isset($_POST["sua"])){
	require 'local.php';
	mysqli_set_charset($con, 'UTF8');
	$db = mysqli_select_db($con, 'doi tien');

	if($db == null)
		echo'<br>Khong chon duco database';
	
		$id = $_POST["id"];
		
		$sql = "SELECT * FROM tygia_ngoaite WHERE id ='$id'";
	$result = $con -> query($sql);
	if($result -> num_rows > 0){				
		echo "<table border='1'>";
				echo"<tr>
				<th>mã số</th>
				<th> đổi từ </th>
				<th> đổi sang </th>
				<th>Tỷ giá</th>
				<th>sửa chữa </th>
			</tr>";
			while($row = $result->fetch_assoc()){
				echo "<tr><td><input  type= 'text' name='id' value='" . $row["id"]."' style='width:15%;'></td>".
					 "<td><img src= 'img/".$row["img_from"]."' style='max-width: 25px;'>". $row["from_id"]."</td>".
					"<td><img src= 'img/".$row["img_to"]."' style='max-width: 25px;'>" . $row["to_id"]."</td>".	
					"<td><input  type= 'text' name='cur' value='" . $row["cur_1"]."'></td>".
					 "<td><button type='submit' name ='capnhat'>cập nhật</button></td></tr>";
								
			}
		}
	$con->close();
}
?>	

<?php //cập nhật lai bảng    ?> 

<?php
require 'local.php';
mysqli_set_charset($con, 'UTF8');
$db = mysqli_select_db($con, 'doi tien');

if($db == null)
	echo'<br>Khong chon duoc database';
if(isset($_POST["capnhat"]))
{
	$id = $_POST["id"];
	$cur = $_POST["cur"];
	$sql ="UPDATE tygia_ngoaite SET cur_1 = '$cur' WHERE id='$id'" ;

	if($con->query($sql) === TRUE)
	{
		echo "update successfuly<br>";
		echo "<a href='hien_timkiem.php'>tải lại</a>";
	}
	else
	{
		echo "error update record<br>". $con->error;
		echo "<a href='hien_timkiem.php'>tải lại</a>";
	}
$con->close();		
}	

?>

<?php //chọn và xóa bảng   ?> 

<?php
require 'local.php';
mysqli_set_charset($con, 'UTF8');
$db = mysqli_select_db($con, 'doi tien');

if($db == null)
	echo'<br>Khong chon duoc database';
if(isset($_POST["xoa"]))
{
	$id = $_POST["id"];
	$sql = "DELETE FROM tygia_ngoaite WHERE id ='$id'";
	if($con->query($sql) ===TRUE){
		echo "delete successfuly<br>";
		echo "<a href='hien_timkiem.php'>tải lại</a>";
		exit;
	}else{
		echo "error".$sql ."<br>". $con->error;
		echo "<br><a href='hien_timkiem.php'>tải lại</a>";
	}

$con->close();
}
?>

</form>		


</form>	
</div>

</section>	
</body>
</html>