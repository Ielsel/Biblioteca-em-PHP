<h1>Cadastrar Atendente</h1>
<form action="?page=atendente-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do atendente:</label>
		<input type="text" name="nome_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF:</label>
		<input type="number" name="cpf_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email:</label>
		<input type="Email" name="email_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone:</label>
		<input type="number" name="fone_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>