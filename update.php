<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
<body>
<form id ="timkiem" action="update.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="id" placeholder="Search" value="">
			<button type="submit" name="submit" class="btn btn-info"><span class="glyphicon glyphicon-search">
			</button>	
		</form>



<?php
require 'local.php';
mysqli_set_charset($con, 'UTF8');
$db = mysqli_select_db($con, 'doi tien');

if($db == null)
	echo'<br>Khong chon duco database';
if(isset($_POST["submit"])){	
	$id = $_POST["id"];


	$sql = "SELECT * FROM bieudo WHERE id ='$id'";
	$result = $con -> query($sql);
if($result -> num_rows>0){		
	$row = $result->fetch_assoc();
		echo "<input type='text' value ='".
		$row["id"]."' name ='id'><br>".
			 "<input type= '"."text' value ='". $row["N2000"]."' name ='N2000'><br>".
			  "<input type= '"."text' value ='". $row["N2002"]."' name ='N2002'><br>".
			   "<input type= '"."text' value ='". $row["N2004"]."' name ='N2004'><br>".
			    "<input type= '"."text' value ='". $row["N2006"]."' name ='N2006'><br>".
				 "<input type= '"."text' value ='". $row["N2008"]."' name ='N2008'><br>".
				  "<input type= '"."text' value ='". $row["N2010"]."' name ='N2010'><br>".
				   "<input type= '"."text' value ='". $row["N2012"]."' name ='N2012'><br>".
				    "<input type= '"."text' value ='". $row["N2014"]."' name ='N2014'><br>".
					 "<input type= '"."text' value ='". $row["N2016"]."' name ='N2016'><br>".
					  "<input type= '"."text' value ='". $row["N2018"]."' name ='N2018'><br>".
					   "<input type= '"."text' value ='". $row["N2020"]."' name ='N2020'><br>";
	
}

$con->close();
}
?>
	<input type="submit" name = "capnhat" value = "cap nhat">

<?php
if(isset($_POST['N2000'])){
		require 'local.php';
		mysqli_set_charset($con, 'UTF8');
		$db = mysqli_select_db($con, 'doi tien');

		if($db == null)
			echo'<br>Khong chon duoc database';
		$id = $_POST["id"];
		$N2000 = $_POST["N2000"];
		$N2002 = $_POST["N2002"];
		$N2004 = $_POST["N2004"];
		$N2006 = $_POST["N2006"];
		$N2008 = $_POST["N2008"];
		$N2010 = $_POST["N2010"];
		$N2012 = $_POST["N2012"];
		$N2014 = $_POST["N2014"];
		$N2016 = $_POST["N2016"];
		$N2018 = $_POST["N2018"];
		$N2020 = $_POST["N2020"];
		
		$sql = "UPDATE bieudo SET N2000='$N2000',N2002='$N2002',N2004='$N2004',N2006='$N2006',N2008='$N2008',
N2010='$N2010',N2012='$N2012',N2014='$N2014',N2016='$N2016',N2018='$N2018',N2020='$N2020'		WHERE id ='$id'";

		if($con->query($sql) ===TRUE)
		{
			echo "update successfuly";
		}
		else
		{
			echo "error update record". $con->error;
		}
	$con->close();		

}
?>
</body>
</html>