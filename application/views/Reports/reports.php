<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">All Reports</div>
  <div class="panel-body">
  </div>

  <!-- Table -->
  <table class="table">
    <thead>
        <tr> <th>Date</th> <th>Author</th> <th>Report Title</th> <th>View</th> </tr>
    </thead>
    <tbody>

		<tr>
			<?php if(isset($reports)) : foreach($reports as $row) : ?>
			<th scope="row"><?php echo $row->date ?></th> <td><?php echo $row->author ?></td> <td><?php echo $row->title ?></td> <td><a href="/reports/<?php $row->id ?>" class="btn btn-success">View</a></td> </tr> <tr>
		</tr>
		<?php endforeach; else : ?>
			<h2>No Reports Found</h2>
		<?php endif; ?>
    </tbody>
  </table>
</div>