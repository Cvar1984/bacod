<title>User Record</title>
<body>
	<div class="well-lg">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Username</th>
						<th>Bio</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($this->Bacod->get_user() as $row):?>
					<tr>
						<td><?php echo $row->name;?></td>
						<td><?php echo $row->bio;?></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</body>