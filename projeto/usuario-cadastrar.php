<h1>Cadastrar Usuário</h1>
<form action="?page=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do usuario:</label>
		<input type="text" name="nome_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email:</label>
		<input type="Email" name="email_usuario" class="form-control">
	</div>

	<div class="mb-3">
		<label>Telefone:</label>
		<input type="number" name="fone_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF:</label>
		<input type="number" name="cpf_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de nascimento:</label>
		<input type="date" name="dt_nasc_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>