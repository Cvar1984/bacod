<title>User Record</title>
<body class="modal-body">
	<div class="modal-content">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Username</th>
						<th>Bio</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($this->bacod_model->get_user() as $row):?>
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