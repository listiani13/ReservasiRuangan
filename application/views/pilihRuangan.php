<html>
	<head>
		<title>Choose Room</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/listi.png">
		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css'>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/bootstrap/css/bootstrap.css'>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/bootstrap/css/bootstrap-theme.min.css'>
		

		<style>
			.bootstrap-iso .formden_header h2, 
			.bootstrap-iso .formden_header p, 
			.bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, 
			.bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}

			table
			{
				margin: auto;
			}

			.normalTable
			{
				font-weight: bold;	
				padding: 5px;
				width: 40px;
				height: 40px;
				color: white;
			    text-shadow:
				    -1px -1px 0 #000,
				    1px -1px 0 #000,
				    -1px 1px 0 #000,
				    1px 1px 0 #000;
			}
			.backgroundTable:hover
			{
				background: blue;
			}

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
                    <a class="navbar-brand" href="#">Reservasi Ruangan - Choose Room</a>
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
			<a href="<?php echo base_url();?>index.php/Denah/index">
				<button class="btn btn-success " name="back">Back</button>
			</a>
			</div>
			
			<br/	>
		  	<div class="row">
          	<div class="col-md-4">
			<div class="panel panel-default">			
	  			<div class="panel-heading">Choose Date</div>
			 	<div class="panel-body">
			    
			    <form method="post">
			     <div class="form-group ">
			      <input class="form-control" id="date" name="date" type="text" value="<?php echo $tgl ?>" placeholder="DD-MM-YYYY" readonly/>
			     </div>
			    </form>

			   </div>
			</div>
			</div>
			

			<div class="col-md-8 ">
                        <legend>Map</legend>

			<table>
			  <tr>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td class="normalTable backgroundTable">
			    	<a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/201">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b201.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    	<a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/202">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b202.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/203">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b203.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    	<a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/204">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b204.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			  </tr>
			  <tr>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			  </tr>
			  <tr>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/207">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b207.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/208">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b208.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/205">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b205.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/206">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b206.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			  </tr>
			  <tr>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			  </tr>
			  <tr>
			  	<td>&nbsp</td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/209">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b209.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/210">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b210.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/211">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b211.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/212">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b212.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/213">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b213.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/214">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b214.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td>&nbsp</td>
			  </tr>
			  <tr>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			  </tr>
			  <tr>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/215">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b215.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/216">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b216.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/217">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b217.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    <a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/218">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b218.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			  </tr>
			  <tr>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			  </tr>
			  <tr>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td class="normalTable backgroundTable">
			    	<a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/219">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b219.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td class="normalTable backgroundTable">
			    	<a href="<?php echo base_url();?>index.php/Denah/displayPilihJam/220">
					    <div style="height:100%;width:100%"><img src="<?php echo base_url();?>assets/img/b220.png" width="50px" height="50px">
					    </div>
	    			</a>
			    </td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			    <td>&nbsp</td>
			  </tr>
			</table>
			</div>

		</div>

		<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/jquery-1.11.3.min.js"></script>
		
	</body>
</html>