<?php
if(isset($_POST['action'])) {
	$data = array(
		'usernme' => $_POST['username'],
		'email' => $_POST['email'],
		'password'=> $_POST['password']
	);
if($this->db->insert('table_user', $data)) {
	echo 'sukses';

}
unset($data);}?>
<body class="modal-body">
	<div class="modal-title">
		<h1>Register your account</h1>
	</div>
	<div class="modal-content">
		<?=form_open('',array('method'=>'post'));?>
		<?=$form['username'];?>
		<?=$form['email'];?>
		<?=$form['password'];?>
		<?=$form['button'];?>
		<?=form_close();?>
	</div>
</body>
