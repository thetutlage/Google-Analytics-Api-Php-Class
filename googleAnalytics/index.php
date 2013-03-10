<?php

/* 
 *************** Google Analytics Php Class ***********************
 *************** @author :- Aman Virk ***************************
 **************  @uri :- www.thetutlage.com ********************
 ************** @browse all api and php class :- 
 http://www.thetutlage.com/index.html?parent=Tutorials&&child=Api&Classes
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

	$trafficCount = $init->trafficCount();
	$referralTraffic = $init->referralCount();
	$trafficCountNum = $init->sourceCountNum();
	$trafficCountPer = $init->sourceCountPer();
	$perDayCount = $init->perDayCount();

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
	<div id="header">
		
	</div>
	<div class="container">
		<div class="blocks">
			<h1> Traffic Count </h1>
			<table>
				<tr>
					<th> Type </th>
					<th> Values </th>
				</tr>
				<?php foreach($trafficCount[0] as $key => $value) {
				echo '<tr>
					<td>'.$key.'</td>
					<td>'.$value.'</td>
				</tr>';
				}
				?>
			</table>
		</div><!-- end blocks -->
		
		<div class="blocks">
			<h1> Traffic Referrals </h1>
			<table>
				<tr>
					<th> Type </th>
					<th> Values </th>
				</tr>
				<?php foreach($referralTraffic as $key => $value) {
				echo '<tr>
					<td>'.$key.'</td>
					<td>'.$value.'</td>
				</tr>';
				}
				?>
			</table>
		</div><!-- end blocks -->
	
		<div class="blocks">
			<h1> Traffic Source In Numbers </h1>
			<table>
				<tr>
					<th> Type </th>
					<th> Values </th>
				</tr>
				<?php foreach($trafficCountNum as $key => $value) {
				echo '<tr>
					<td>'.$key.'</td>
					<td>'.$value.'</td>
				</tr>';
				}
				?>
			</table>
		</div><!-- end blocks -->

		<div class="blocks">
			<h1> Traffic Source In Percentage </h1>
			<table>
				<tr>
					<th> Type </th>
					<th> Values </th>
				</tr>
				<?php foreach($trafficCountPer as $key => $value) {
				echo '<tr>
					<td>'.$key.'</td>
					<td>'.$value.'%</td>
				</tr>';
				}
				?>
			</table>
		</div><!-- end blocks -->
		
		<div class="blocks">
			<h1> Daily Traffic Page Views </h1>
			<table>
				<tr>
					<th> Day </th>
					<th> Page Views </th>
				</tr>
				
				<?php foreach($perDayCount as $key => $value){
					echo '<tr>
						<td>'.$key.'</td>
						<td>'.$value.'</td>
					</tr>';
				} ?>
			</table>
		</div><!-- end blocks -->
	</div>
	
	
</body>
</html>
