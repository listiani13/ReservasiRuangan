<html>
	<head>
		<title>Print Reservation</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/listi.png">
		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css'>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/bootstrap/css/bootstrap.css'>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/bootstrap/css/bootstrap-theme.min.css'>

		<style>
		.strokeme
		{
			color: white;
			text-shadow:
				-1px -1px 0 #000,
			    1px -1px 0 #000,
			    -1px 1px 0 #000,
			    1px 1px 0 #000;  
		}

		</style>
	</head>

	<body>
		<div class="navbar navbar-default">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Reservasi Ruangan - Print Reservation</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<button style="margin-top:8px;font-weight:bold" class="btn btn-warning"><a style="color:white" href="<?php echo base_url();?>index.php/Login/logout">Logout</a></button>
					</ul>
				</div>
                </div>
            </div>

		<div class="container">

			<div>
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihRuanganBack/<?php echo "$tgl";?>">
			    <button class="btn btn-success " name="back">Back to map</button>
			    </a>
			</div>
			
		  	<div class="row">
          	<div class="col-sm-4"></div>
          	<div class="col-sm-4">
			<div class="panel panel-default">			
	  			<div class="panel-heading" align="center">Print Reservation</div>
			 	<div class="panel-body">
					<form>
						<div class="form-group">						
					      <label for="name">Name:</label><br>
					      <p><?php echo $name;?></p><br>

					      <label for="date">Date of reservation:</label><br>
					      <p><?php echo $tgl;?></p><br>
					    

					    
					      <label for="subject">Subject/Utility:</label><br>
					      <p><?php echo $ket;?></p><br>

					      <label for="subject">Room:</label><br>
					      <p><?php echo $room;?></p><br>
					     
					      <label for="subject">Session Reserved:</label>
					      <table class="table table-bordered">
						    <thead>
						      <tr>
						        <th style="font-size:90%; text-align: center;">Session</th>
						        <th style="font-size:90%; text-align: center;">Time</th>
						      </tr>
						    </thead>						    
						    <tbody style="font-size:90%;">
						    	<?php
						    		for ($i=0; $i < count($nama_sesi); $i++) { 
						    		echo "<tr>";
								    echo "<td>".$nama_sesi[$i]."</td>";
								    echo "<td>".$jam_sesi[$i]."</td>";
								    echo "</tr>";						    		
						    	}
						    	?>
						    </tbody>
						  </table>
						</div>
						</div>
						</div>
						</div>

						<div class="col-sm-4">
					    <button type="button" class="btn btn-default" href="javascript:window.print()"><a style="color:black;text-decoration:none;" href="javascript:window.print()"><span style="color:black;text-decoration:none;">Cetak <img src="https://ecs7.tokopedia.net/img/print.png" alt="Print" /></span></a></button>
					</form>
					</div>					
					</div>
	<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/jquery-1.11.3.min.js"></script>
	</body>
</html>