<html>
	<head>
		<title>Login</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/listi.png">

		<link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
		<link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-theme.min.css">
		
		<script language='javascript' src="<?php echo base_url(); ?>assets/bootstrap/js/jquery-1.11.3.min.js"></script>
		<script language='javascript' src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

		<style>
			.center 
			{
			    padding: 70px 0;
			    text-align: center;
			}

			.strokeme
			{
			    color: white;
			    text-shadow:
			    -1px -1px 0 #000,
			    1px -1px 0 #000,
			    -1px 1px 0 #000,
			    1px 1px 0 #000;  
			}
			.tablekelompok
			{
				width: 500px;
				padding: 10px;		
			}
			th, td {
				    padding: 15px;
				    text-align: left;
				}
		</style>
	</head>

	<body >

			<div class="navbar navbar-default">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Reservasi Ruangan</a>
                </div>
                </div>
            </div>

		<div class="container">
		<div class="row">
          <div class="col-md-4">
			<div class="panel panel-default">			
	  			<div class="panel-heading">LOGIN</div>
			 	<div class="panel-body">
				  <form method="POST" action="<?php echo base_url();?>index.php/Login/aksilogin">
				    <div class="form-group">
				      <label for="nik">Username:</label>
				      <input type="nik" class="form-control" name="username" placeholder="Enter Username">
				    </div>

				    <div class="form-group">
				      <label for="pwd">Password:</label>
				      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
				    </div>

				    <div class="form-group">
				      <?php
					    echo "<div class='$kelas'> $error   </div>";
					    ?>
				    </div>

				    <button style="" type="submit" class="btn btn-primary" name="btnLogin">Login</button>
				  </form>
			  	</div>
			</div>
			</div>

				<div class="col-md-8 ">
                        <legend>Selamat Datang di Aplikasi Reservasi Ruangan</legend>
                         <label for="pwd">Created by:</label>
                        <table class="table table-bordered">
                        	<tr>
                        		<td colspan="2"><center><b>Kelompok 1</b></center></td>
                        		<td>14110310003</td>
                        		<td>Listiani</td>
                        	</tr>
                        	<tr>
                        		<td>14110310010</td>
                        		<td>Michael Van Wis Lee</td>
                        		<td>14110310024</td>
                        		<td>Reinaldo</td>
                        	</tr>
                        	<tr>
                        		<td>14110310031</td>
                        		<td>Stephanie Monica</td>
                        		<td>14110310033</td>
                        		<td>Dessy Aryanti</td>
                        	</tr>
                        	<tr>
                        		<td>14110310035</td>
                        		<td>Agil Wibisono</td>
                        		<td>14110310036</td>
                        		<td>Putri Hanna Belinda</td>
                        	</tr

                        </table>
                   </div>
			</div>
		</div>
	</body>
</html>