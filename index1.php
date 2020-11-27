<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"">
	<style type="text/css">
		.card {
			border-top: solid 5px #37cf23;
		}
	</style>
</head>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-6"><h1 class="text-monospace">Data</h1></div>
							<div class="col-6 text-right"><a href="insert1.php" class="btn btn-success btn-sm font-weight-bold">ADD</a></div>
						</div>
						<div class="table-success">
							<?php
								$conn = mysqli_init();
								mysqli_real_connect($conn, 'ramita63070147.mysql.database.azure.com', 'ramita63070147@ramita63070147', 'Rt0877003141', 'labitff', 3306);
								if (mysqli_connect_errno($conn))
								{
								    die('Failed to connect to MySQL: '.mysqli_connect_error());
								}
								$res = mysqli_query($conn, 'SELECT * FROM labitff');
							?>
							<table class="table thead-inverse">
								<thead>
									<tr>
										<th width="150px">Name</th>
										<th>Weight</th>
										<th>Height</th>
										<th>BMI</th>
									</tr>
								</thead>
								<tbody>
									<?php
										while($Result = mysqli_fetch_array($res)) {
									?>
									<tr>
										<td><?php echo $Result['Name'];?></td>
										<td><?php echo $Result['weight'];?></td>
										<td><?php echo $Result['Height'];?></td>
                                        <td><?php echo $Result['BMI'];?></td>
                                        <td><a href="delete1.php?Id=<?php echo $Result['Id'];?>" class="btn btn-warning mb-2 mb-md-0">DEL</a>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
							<?php
								mysqli_close($conn);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
