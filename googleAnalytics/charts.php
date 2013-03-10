<?php
/* 
 *************** Google Analytics Php Class ***********************
 *************** @author :- Aman Virk ***************************
 **************  @uri :- www.thetutlage.com ********************
 ************** @browse all api and php class :- 
*/
	error_reporting(0);
	include_once( 'class.analytics.php' );
	define('ga_email','your_analytics_email');
	define('ga_password','your_analytics_password');
	define('ga_profile_id','your_analytics_profile_id');

	// Start date and end date is optional
	// if not given it will get data for the current month
	$start_date = '2012-06-17';
	$end_date = '2012-07-17';
	$init = new fetchAnalytics(ga_email,ga_password,ga_profile_id,$start_date,$end_date);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			background: #f7f7f7;
			font-family: Arial, "MS Trebuchet", sans-serif;
			font-size: 12px;
		}
		*{
			margin: 0;
			padding: 0;
		}
		.container{
			width: 1000px;
			margin: auto;
			padding: 10px;
			background: #fff;
		}
		.blocks{
			background: #fff;
			padding-bottom: 30px;
		}
		.blocks h1{
			padding: 10px;
			background: #f7f7f7;
		}
		.blocks table{
			border-collapse: collapse;
			width: 100%;
			border: 1px solid #ccc;
		}
		.blocks table th,.blocks table td{
			padding: 10px;
			text-align: left;
			border-top: 1px solid #ccc;
			border-right: 1px solid #ccc;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="blocks">
			<h1> Graphical Daily Page Views </h1>
			<br />
			<div id="chart">
				<h2></h2>
				<?php echo $init->graphPerDayCount('chart','505050','058dc7','e6f4fa',600,200); ?>
			</div>
		</div>
	
		<div class="blocks">
			<h1> Graphical Traffic Source </h1>
			<br />
			<?php  echo $init->graphSourceCount() ; ?>
		</div>
		<div class="blocks">
			<h1> Graphical Traffic Type </h1>
			<br />
			<?php  echo $init->graphVisitorType(); ?>
		</div>
	</div>
</body>
</html>

