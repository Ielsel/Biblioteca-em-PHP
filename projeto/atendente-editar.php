<h1>Editar Atendente</h1>
<?php
	$sql_2 = "SELECT * FROM atendente WHERE id_atendente=".$_REQUEST['id_atendente'];
	$res_2 = $conn->query($sql_2);
	$row_2 = $res_2->fetch_object();
?>
<form action="?page=atendente-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_atendente" value="<?php print $row_2->id_atendente; ?>">
	<div class="mb-3">
		<label>Nome do atendente:</label>
		<input type="text" name="nome_atendente" value="<?php print $row_2->nome_atendente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF:</label>
		<input type="number" name="cpf_atendente" value="<?php print $row_2->cpf_atendente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email:</label>
		<input type="Email" name="email_atendente" value="<?php print $row_2->email_atendente; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="number" name="fone_atendente" value="<?php print $row_2->fone_atendente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>