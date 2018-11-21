<?php
$_POST['name']='Anonymous';
if(isset($_POST['action'])) {
	$data = array(
		'name' => $_POST['name'],
		'message' => gzdeflate($_POST['message'])
	);
$this->db->insert('table_message', $data);}?>

<title>Chat Rooms</title>
<body class="modal-body">
	<div class="modal-header">
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Username</th>
						<th>Message</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($this->bacod_model->get_message() as $row):?>
					<tr>
						<td><?=$row->name;?></td>
						<td><?=gzinflate($row->message);?></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
	<?=form_open('',array('method'=>'post','class'=>'modal-footer'));?>
	<?=$form['message'];?>
	<?=$form['button'];?>
	<?=form_close();?>
</body>