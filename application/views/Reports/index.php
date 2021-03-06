<div ng-app="myApp">
	<div class="panel panel-primary" ng-controller="reportCtrl">
		<!-- Default panel contents -->
		<div class="panel-heading">All Reports</div>
		<div class="panel-body">
		</div>
		<!-- Table -->
		<table class="table">
			<thead>
				<tr>
					<th>Date</th>
					<th>Author</th>
					<th>Report Title</th>
					<th>View</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="report in reports">
					<th>{{ report.date }}</th>
					<td>{{ report.author }}</td>
					<td>{{ report.title }}</td>
					<td><a href="/reports/{{ report.id }}" class="btn btn-success">View</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
