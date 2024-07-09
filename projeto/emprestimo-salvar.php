<?php
if (!isset($conn)) {
    die("Conexão ao banco de dados não está estabelecida.");
}

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $sql = "INSERT INTO emprestimo (
                    livro_id_livro, 
                    usuario_id_usuario, 
                    atendente_id_atendente, 
                    data_emprestimo, 
                    data_devolucao
                ) VALUES (
                    ".$_POST["livro_id_livro"].", 
                    ".$_POST["usuario_id_usuario"].", 
                    ".$_POST["atendente_id_atendente"].", 
                    '".$_POST["data_emprestimo"]."',
                    '".$_POST["data_devolucao"]."'
                )";

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrou com sucesso');</script>";
            print "<script>location.href='?page=emprestimo-listar';</script>";
        }else{
            print "<script>alert('Não foi possível');</script>";
            print "<script>location.href='?page=emprestimo-listar';</script>";
        }
        break;
    
    case 'editar':
        $sql = "UPDATE emprestimo SET
                    livro_id_livro=".$_POST['livro_id_livro'].",
                    usuario_id_usuario=".$_POST['usuario_id_usuario'].",
                    atendente_id_atendente=".$_POST['atendente_id_atendente'].",
                    data_emprestimo='".$_POST['data_emprestimo']."',
                    data_devolucao='".$_POST['data_devolucao']."'
                WHERE
                    livro_id_livro=".$_POST['livro_id_livro'] AND "usuario_id_usuario=".$_POST['usuario_id_usuario'];

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Editou com sucesso');</script>";
            print "<script>location.href='?page=emprestimo-listar';</script>";
        }else{
            print "<script>alert('Não foi possível');</script>";
            print "<script>location.href='?page=emprestimo-listar';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM emprestimo WHERE livro_id_livro=".$_REQUEST['livro_id_livro'] AND "usuario_id_usuario=".$_REQUEST['usuario_id_usuario'];

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Excluiu com sucesso');</script>";
            print "<script>location.href='?page=emprestimo-listar';</script>";
        }else{
            print "<script>alert('Não foi possível');</script>";
            print "<script>location.href='?page=emprestimo-listar';</script>";
        }
        break;
}
?>
