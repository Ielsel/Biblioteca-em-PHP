<h1>Editar Empréstimo</h1>
<?php
	$sql_1 = "SELECT * FROM emprestimo WHERE livro_id_livro=".$_REQUEST["livro_id_livro"];
	$res_1 = $conn->query($sql_1);
	$row_1 = $res_1->fetch_object();
?>
<form action="?page=emprestimo-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="livro_id_livro" value="<?php print $row_1->livro_id_livro; ?>">
	<div class="mb-3">
		<label>Livro</label>
		<select name="livro_id_livro" class="form-control">
			<option>-=Selecione=-</option>
		<?php
			$sql = "SELECT * FROM livro";
			$res = $conn->query($sql);
			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					if($row_1->livro_id_livro == $row->id_livro){
						print "<option value='".$row->id_livro."' selected>".$row->titulo_livro."</option>";
					}else{
						print "<option value='".$row->id_livro."'>".$row->titulo_livro."</option>";
					}					
				}
			}else{
				print "<option>Não possui livro</option>";
			}
		?>
		</select>
	</div>
	<div class="mb-3">
		<label>Usuário</label>
		<select name="usuario_id_usuario" class="form-control">
			<option>-=Selecione=-</option>
		<?php
			$sql = "SELECT * FROM usuario";
			$res = $conn->query($sql);
			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					if($row_1->usuario_id_usuario == $row->id_usuario){
						print "<option value='".$row->id_usuario."' selected>".$row->nome_usuario."</option>";
					}else{
						print "<option value='".$row->id_usuario."'>".$row->nome_usuario."</option>";
					}					
				}
			}else{
				print "<option>Não possui usuário</option>";
			}
		?>
		</select>
	</div>
	<div class="mb-3">
		<label>Atendente</label>
		<select name="atendente_id_atendente" class="form-control">
			<option>-=Selecione=-</option>
		<?php
			$sql = "SELECT * FROM atendente";
			$res = $conn->query($sql);
			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					if($row_1->atendente_id_atendente == $row->id_atendente){
						print "<option value='".$row->id_atendente."' selected>".$row->nome_atendente."</option>";
					}else{
						print "<option value='".$row->id_atendente."'>".$row->nome_atendente."</option>";
					}					
				}
			}else{
				print "<option>Não possui atendente</option>";
			}
		?>
		</select>
	</div>
	<div class="mb-3">
		<label>Data empréstimo:</label>
		<input type="date" name="data_emprestimo" value="<?php print $row_1->data_emprestimo; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data devolução:</label>
		<input type="date" name="data_devolucao" value="<?php print $row_1->data_devolucao; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>