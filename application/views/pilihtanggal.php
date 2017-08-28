<html>
	<head>
		<title>Choose Date</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/listi.png">
		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css'>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/bootstrap/css/bootstrap.css'>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/bootstrap/css/bootstrap-theme.min.css'>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-datepicker3.css"/>
		<!-- testing -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
		

		<style>
			/*.bootstrap-iso .formden_header h2, 
			.bootstrap-iso .formden_header p, 
			.bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, 
			.bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}

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
			}*/
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
                    <a class="navbar-brand" href="#">Reservasi Ruangan - Choose Date</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<button style="margin-top:8px;font-weight:bold" class="btn btn-warning"><a style="color:white" href="<?php echo base_url();?>index.php/Login/logout">Logout</a></button>
					</ul>
				</div>
                </div>
            </div>

		<div class="container">
		  	<div class="row">
          	<div class="col-md-4">
			<div class="panel panel-default">			
	  			<div class="panel-heading">Choose Date</div>
			 	<div class="panel-body">

		  	    <form method="post" action="<?php echo base_url();?>index.php/Denah/displayPilihRuangan">
			     <div class="form-group ">
			      <input style="" class="form-control" id="datetimepicker1" name="date" type="text" placeholder="YYYY-MM-DD" required />
			     </div>
			     <div class="form-group">
			      <div>
			       <button type="submit" class="btn btn-primary " name="submit" type="submit">Show</button>
			      </div>
			     </div>
			    </form>
			  

			</div>
			</div>
			</div>
			</div>


			
		</div>


		<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/jquery-1.11.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>  
		<!-- Include Date Range Picker -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script> -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap-datetimepicker.min.js"></script>
		<script language='javascript' src='<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js'></script>
		<script>
		    $(document).ready(function(){
		    	var dateToday = new Date();
		        var date_input=$('input[name="date"]'); //our date input has the name "date"
		        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		        date_input.datetimepicker({
		            format: 'YYYY-MM-DD',
    				daysOfWeekDisabled: [0, 7],
    				minDate: dateToday
		        });
		        
		    });
		</script>
	</body>
</html>