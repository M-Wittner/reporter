<!DOCTYPE html>
<?php header ('Content-type: text/html; charset=utf-8'); ?>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Example of Bootstrap 3 Horizontal Form Layout</title>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	
	<!-- Angular -->
	<script type="text/javascript" src="https://code.angularjs.org/1.6.4/angular.min.js"></script>
<!--	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.min.js"></script>-->
<!--	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.min.js"></script>-->

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/lib/bootstrap-css/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Costum -->
	<script type="text/javascript" src="<?php echo base_url();?>public/js/controllers/app.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>public/lib/css/main.css" type="text/css">
	<!--  Register	-->
<!--
	<script type="text/javascript" src="<?php echo base_url();?>public/js/controllers/register.controller.js"></script>
	  Reports	
	<script type="text/javascript" src="<?php echo base_url();?>public/js/controllers/reports.controller.js"></script>
-->

</head>

<body ng-app="welcome">
	<div class="bs-example" ng-controller="regController">
		<form class="form-horizontal" name="firstform">
			<div class="form-group">
				<label for="inputFirstname" class="control-label col-xs-2">First Name</label>
				<div class="col-xs-10">
					<input type="text" class="form-control" id="inputFirstname" placeholder="FirstName" ng-model="user.firstname">

				</div>
			</div>
			<div class="form-group">
				<label for="inputLastname" class="control-label col-xs-2">Last Name</label>
				<div class="col-xs-10">
					<input type="text" class="form-control" id="inputLastname" placeholder="LastName" ng-model="user.lastname">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="control-label col-xs-2">Email</label>
				<div class="col-xs-10">
					<input type="email" class="form-control" id="inputEmail" placeholder="Email" ng-model="user.email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="control-label col-xs-2">City</label>
				<div class="col-xs-10">
					<input type="text" class="form-control" id="inputcity" placeholder="city" ng-model="user.city">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="control-label col-xs-2">Phone</label>
				<div class="col-xs-10">
					<input type="number" class="form-control" id="inputphone" placeholder="Phone" ng-model="user.phone">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="control-label col-xs-2">Address</label>
				<div class="col-xs-10">
					<textarea ng-model="user.address" class="form-control" id="inputaddress"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="control-label col-xs-2">Password</label>
				<div class="col-xs-10">
					<input type="password" class="form-control" id="inputPassword" placeholder="Password" ng-model="user.password">
				</div>
			</div>

			<div class="form-group">
				<div class="col-xs-offset-2 col-xs-10">
					<button type="submit" class="btn btn-primary" ng-click="submitForm()">Sign Up</button>
				</div>
		</form>
		</div>
		<div>

			<table class="table table-hover">
				<thead>
					<tr>

						<th>First Name</th>
						<th>Last Name</th>
						<th>Email Id</th>
						<th>City</th>
						<th>Phone Number</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="item in registrations">
						<td>{{item.firstname}}</td>
						<td>{{item.lastname}}</td>
						<td>{{item.emailid}}</td>
						<td>{{item.city}}</td>
						<td>{{item.phone}}</td>
						<td>{{item.address}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>
