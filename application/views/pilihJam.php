<html>
	<head>
		<title>Choose Session</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/listi.png">	
		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css'>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/bootstrap/css/bootstrap.css'>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/bootstrap/css/bootstrap-theme.min.css'>
		<!-- <style>
			.bootstrap-iso .formden_header h2, 
			.bootstrap-iso .formden_header p, 
			.bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, 
			.bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}

			.tabelJam
			{
				margin: auto;
				text-align: center;
			}

			.headerTabelJam
			{
				text-align: center;
				border-style: solid;
				border-color: black;
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

			.table th
			{
			    border: black solid 1px !important;
			    background-color:white;
			}

			.table td
			{
			    border: black solid 1px !important;
			    background-color:white;
			}

		</style>-->
		<style>
			.table th
			{
			    margin: auto;
				text-align: center;
			}
			.table
			{
				margin: auto;
				text-align: center;
			}
		</style>
	</head>

	<body  >
		<div class="navbar navbar-default">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Reservasi Ruangan - Choose Session</a>
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
				<button class="btn btn-success " name="back">Back to Map</button>
				</a>
			</div>
		
			
			<br/>
		  	<div class="row">
          	<div class="col-md-4">
			<div class="panel panel-default">			
	  			<div class="panel-heading">Selected Date & Room</div>
			 	<div class="panel-body">		  	
		  	 	 <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Denah/displayReservasi">

				    <div class="form-group">
				      <label class="control-label col-sm-2" for="room">Date</label>
				      <div class="col-sm-10">          
				        <input class="form-control" id="date" name="date" value="<?php echo "$tgl";?>" readonly>
				      </div>
				    </div>

				    <div class="form-group">
				      <label class="control-label col-sm-2" for="room">Room</label>
				      <div class="col-sm-10">          
				        <input class="form-control" id="room" name="room" value="<?php echo "$noruang";?>" readonly>
				      </div>
				    </div>

				</div>
				</div>
				</div>

				<div class="col-md-8 ">
				<legend>Choose Session</legend>
		    	<table class="table table-hover">
			    <thead>
			      <tr>
			        <th class="headerTabelJam">Session</th>
			        <th class="headerTabelJam">Status</th>
			        <th class="headerTabelJam"></th>
			      </tr>
			    </thead>
			    <tbody>
			    <!-- Ini seharusnya pake foreach -->
			    <?php
			    	foreach ($sesi_tersedia->result() as $line) {
			    		echo "<tr>";
						echo "<td>$line->jam_sesi</td>";
						echo "<td>$line->Status</td>";
						if ($line->Status == 'AVAILABLE') {
							# code...
							echo "<td><input type='checkbox' name='sesi[]' id='pilih' value='".$line->id_sesi."'></td>";
						}
						else
						{
							echo "<td><input type='checkbox' name='sesi[]' id='pilih' value='".$line->id_sesi."' checked disabled></td>";
						}
						
						echo "</tr>";
			    	}
			    ?>
			      <!-- <tr>
			        <td>08.00-10.00</td>
			        <td>Available</td>
			        <td><input type="checkbox" name="sesi[]" id="pilih" value="sesi1"/></td>
			      </tr>
			      <tr>
			        <td>10.00-12.00</td>
			        <td>Available</td>
			        <td><input type="checkbox" name="sesi[]" id="pilih" value="sesi2"/></td>
			      </tr>
			      <tr>
			        <td>13.00-15.00</td>
			        <td>Available</td>
			        <td><input type="checkbox" name="sesi[]" id="pilih" value="sesi3" checked disabled /></td>
			      </tr>
			      <tr>
			        <td>15.00-17.00</td>
			        <td>Available</td>
			        <td><input type="checkbox" name="sesi[]" id="pilih" value="sesi4"/></td>
			      </tr> -->
			    </tbody>
			  </table>

			  </br>
			  <div>
			    <button type="Submit" class="btn btn-primary right" name="Submit">Submit</button>
			</div>
		    </form>
		    </div>
		    </div>

		  	

		</div>

		<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/jquery-1.11.3.min.js"></script>
	</body>
</html>