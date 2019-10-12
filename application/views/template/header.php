<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Organisation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico')?>">

    <!-- Plugins css -->
    <link href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/select2/select2.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/timepicker/bootstrap-material-datetimepicker.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')?>" rel="stylesheet" />

    <!-- App css -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/metisMenu.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css" />

    <!-- start code vaib  -->    
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!-- jQuery  -->
	<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/metisMenu.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/waves.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
	<!-- Plugins js -->
	<script src="<?php echo base_url('assets/plugins/moment/moment.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/select2/select2.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/timepicker/bootstrap-material-datetimepicker.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')?>"></script>
	<script src="<?php echo base_url('assets/pages/jquery.forms-advanced.js')?>"></script>
	<script src="<?php echo base_url('assets/js/app.js')?>"></script>
	<!-- <script src="<?php echo base_url('assets/js/intlTelInput.js')?>"></script> -->
    <style>
        /* Mark input boxes that gets an error on validation: */

        input.invalid, .select2-selection.invalid {
          border-color: red;
		  }
		input.validable,.select2-selection.validable{
			border-color:green;
		}
		input::placeholder{
			color: #C2C2C2 !important;
		}
      	/* Hide all steps by default: */
      	.tab {
          display: none;
      	}
      	/* Make circles that indicate the steps of the form: */
      	.step {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbbbbb;
          border: none;  
          border-radius: 50%;
          display: inline-block;
          opacity: 0.5;
      	}

      	.step.active {
		  opacity: 1;
		  background-color:#4d79f6;
      	}

      	/* Make the steps that are finished and valid: */
      	.step.finish {
          background-color: #4d79f6;
          /*background-color: #4CAF50;*/
     	}

      	.text-muted {
        	margin-bottom: 5px !important;
     	}

		.btn-block {
			border-radius: 25px;
		}
		.tabimp,.successtext{
			font-weight: bold;
			font-size: 16px;
		}
		.successtext{
			margin-top: 10px;
		}
		.acc-cell{
			font-weight: bold;
			font-size: 13px;
		}
     	.stext{
         	margin-top: 10px;
         	margin-bottom: 50px;
     	}
     	.div-txt{
            margin-left: 20px; 
        }
        #prevBtn{
            float: left;
        }
        .btn-block+.btn-block {
            margin-top: 0px;
        }
		.timertext{
			text-align: center;
		}
		.select2-selection{
			border-radius: 50px !important;
			padding-left: 9px !important;
		}
		.btn-outline-light{ opacity: .5 }
		.btn-outline-light:hover {
			/* color: #212529;
			background-color: #f8f9fa;
			border-color: #f8f9fa;
			color: #7081b9;
			background-image: none;
			background-color: transparent !important;
			border-color: #dbe0ec; */
		}
		.resend-active{
			color:white;
			background-color:#4d79f6;
			opacity:1 !important;
		}
		.resend-active:hover{
			color:white;
			background-color:#4d79f6;
			opacity:0.65 !important;
		}
		.goodJob{
			width: 60%;
			margin: auto;
			margin-bottom: 10% !important;
		}
		#nextBtn{ opacity: 0.65 }
        </style>

        <!-- end code vaib -->
</head>