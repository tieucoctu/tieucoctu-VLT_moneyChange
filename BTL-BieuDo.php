<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Biểu Đồ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script async src="file/analytics.js.tải xuống"></script>
    <script src="file/Chart.min.js.tải xuống"></script>
    <script src="file/JS.js"></script>
    <style>
        body {
            background-color:#CCC;
        }
        
        .chart-container {
            padding-top: 20px;
            padding-left: 50px;
            padding-right: 50px;
            line-break: 1px;
            position: inherit;
            width: 574px;
            height: 454px;
        }
        
        .fixed-top {
            position: inherit;
            padding: 0px;
            background-color: #222222;
        }
        
        .nav-link {
            position: relative;
            display: block;
        }
        
        footer {
            position: fixed;
            color: black;
            top: 629px;
            width: 100%;
        }
        
        .navbar-brand {
            height: 70px;
            padding: 5px;
            margin-right: 0px;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav id="nav" class="navbar navbar-expand-sm  navbar-dark fixed-top">
		<div>
        <a href="doitien.html"><img class="navbar-brand" href="doitien.html" src="img/logo.png" alt="logo"></a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="luachon">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="doitien.php"><h6> Công Cụ Chuyển Đổi </h6></a></li>
                    <li class="nav-item"><a class="nav-link" href="bangtygia.php"><h6> Tỷ Giá </h6></a></li>
                    <li class="nav-item"><a class="nav-link" href="BTL-BieuDo.php"><h6> Biểu Đồ </h6></a></li>
                </ul>
				
			</ul>
            </div>
        </div>
        </div>
        
    </nav>
	
    <div class="row" style="margin:0px 0px; ">
        <div class="col-12" style="border:1px solid #CCCCCC;background-color:#000;">
            <marquee>
                <a href="#"><img src="img/1.PNG" /></a>
                <a href="#"><img src="img/3.png" /></a>
                <a href="#"><img src="img/4.png" /></a>
                <a href="#"><img src="img/5.png" /></a>
                <a href="#"><img src="img/6.png" /></a>
            </marquee>
        </div>
    </div><pre></pre>
    <ul class="nav navbar-nav navbar-right">
				<li><a href="dangNhap_bieudo.php" style='color: black;'> Dăng nhập </a></li>
				<li><a href="dangNhap_bieudo.php" style='color: black;'> Dăng Ký </a></li>
			</ul>
    <div class="chart-container" id="duong" style="position: relative; height:68vh; width:68vw;">
    <canvas id="myChart"></canvas>
        <script>
            var ctx = document.querySelector('#myChart');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['N2000','N2002','N2004','N2006','N2008','N2010','N2012','N2014','N2016','N2018','N2020'],
                    datasets: [{
                        label: 'VND',
                        data: [
						<?php
								require 'local.php';
									mysqli_set_charset($con, 'UTF8');
									$db = mysqli_select_db($con, 'doi tien');
									if($db == null)
										echo'<br>Không chọn được database';
										$sql = "SELECT * FROM bieudo WHERE id='VND'";
										$result = $con -> query($sql);
										if($result -> num_rows>0)
										{
											$row = $result->fetch_assoc();
											echo $row["N2000"].",".$row["N2002"].",".$row["N2004"].",".$row["N2006"].",".$row["N2008"]
											.",".$row["N2010"].",".$row["N2012"].",".$row["N2014"].",".$row["N2016"].",".$row["N2018"]
											.",".$row["N2020"];
										}
									$con->close();
						?>
						],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 0, 0, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 2,
                        fill: false,
                    }, {
                        label: 'EUR',
                        data: [
						<?php
								require 'local.php';
									mysqli_set_charset($con, 'UTF8');
									$db = mysqli_select_db($con, 'doi tien');
									if($db == null)
										echo'<br>Không chọn được database';
										$sql = "SELECT * FROM bieudo WHERE id='EUR'";
										$result = $con -> query($sql);
										if($result -> num_rows>0)
										{
											$row = $result->fetch_assoc();
											echo $row["N2000"].",".$row["N2002"].",".$row["N2004"].",".$row["N2006"].",".$row["N2008"]
											.",".$row["N2010"].",".$row["N2012"].",".$row["N2014"].",".$row["N2016"].",".$row["N2018"]
											.",".$row["N2020"];
										}
									$con->close();
						?>
						],
                        borderColor: [
                            'rgba(0,0, 0, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 0, 0, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        fill: false,
                        borderWidth: 2
                    }, {
                        label: 'GBP',
                        data: [
						<?php
								require 'local.php';
									mysqli_set_charset($con, 'UTF8');
									$db = mysqli_select_db($con, 'doi tien');
									if($db == null)
										echo'<br>Không chọn được database';
										$sql = "SELECT * FROM bieudo WHERE id='GBP'";
										$result = $con -> query($sql);
										if($result -> num_rows>0)
										{
											$row = $result->fetch_assoc();
											echo $row["N2000"].",".$row["N2002"].",".$row["N2004"].",".$row["N2006"].",".$row["N2008"]
											.",".$row["N2010"].",".$row["N2012"].",".$row["N2014"].",".$row["N2016"].",".$row["N2018"]
											.",".$row["N2020"];
										}
									$con->close();
						?>
						],
                        borderColor: [
                            'rgba(0, 0, 138, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 0, 0, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        fill: false,
                        borderWidth: 2
                    }, {
                        label: 'AUD',
                        data: [
						<?php
								require 'local.php';
									mysqli_set_charset($con, 'UTF8');
									$db = mysqli_select_db($con, 'doi tien');
									if($db == null)
										echo'<br>Không chọn được database';
										$sql = "SELECT * FROM bieudo WHERE id='AUD'";
										$result = $con -> query($sql);
										if($result -> num_rows>0)
										{
											$row = $result->fetch_assoc();
											echo $row["N2000"].",".$row["N2002"].",".$row["N2004"].",".$row["N2006"].",".$row["N2008"]
											.",".$row["N2010"].",".$row["N2012"].",".$row["N2014"].",".$row["N2016"].",".$row["N2018"]
											.",".$row["N2020"];
										}
									$con->close();
						?>
						],
                        borderColor: [
                            'rgba(46, 138, 138, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 0, 0, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        fill: false,
                        borderWidth: 2
                    }, {
                        label: 'USD',
                        data: [
						<?php
								require 'local.php';
									mysqli_set_charset($con, 'UTF8');
									$db = mysqli_select_db($con, 'doi tien');
									if($db == null)
										echo'<br>Không chọn được database';
										$sql = "SELECT * FROM bieudo WHERE id='USD'";
										$result = $con -> query($sql);
										if($result -> num_rows>0)
										{
											$row = $result->fetch_assoc();
											echo $row["N2000"].",".$row["N2002"].",".$row["N2004"].",".$row["N2006"].",".$row["N2008"]
											.",".$row["N2010"].",".$row["N2012"].",".$row["N2014"].",".$row["N2016"].",".$row["N2018"]
											.",".$row["N2020"];
										}
									$con->close();
						?>
						],
                        borderColor: [
                            'rgba(0, 255, 138, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 0, 0, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        fill: false,
                        borderWidth: 2

                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    </div>

    
    <footer>
		<marquee direction="right" style="background:#FFF;">Xin cảm ơn quý mọi người đã sử dụng dịch vụ
        </marquee>
    </footer>
</body>

</html>