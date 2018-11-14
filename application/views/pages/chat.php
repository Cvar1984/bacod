<title>Chat Rooms</title>
<body>
	<div class="well-lg">
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<?php foreach ($this->Bacod->get_message() as $row):?>
					<tr>
						<th>Username</th>
						<th>Message</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?=$row->name;?></td>
						<td><?=$row->message;?></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</body>