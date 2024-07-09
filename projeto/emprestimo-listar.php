<h1>Listar Empréstimo</h1>
<?php
	$sql = "SELECT * FROM emprestimo as e
			INNER JOIN livro as l
			ON e.livro_id_livro = l.id_livro
			INNER JOIN usuario as u
			ON e.usuario_id_usuario = u.id_usuario
			INNER JOIN atendente as a
			ON e.atendente_id_atendente = a.id_atendente";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Livro</th>";
		print "<th>Usuário</th>";
		print "<th>Atendente</th>";
		print "<th>Data de empréstimo</th>";
		print "<th>Data de devolução</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->nome_atendente."</td>";
			print "<td>".$row->data_emprestimo."</td>";
			print "<td>".$row->data_devolucao."</td>";
			print "<td>
						<button onclick=\"location.href='?page=emprestimo-editar&livro_id_livro=".$row->livro_id_livro."';\" class='btn btn-success'>Editar</button>
						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=emprestimo-salvar&acao=excluir&livro_id_livro=".$row->livro_id_livro."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não possui resultado";
	}
?>