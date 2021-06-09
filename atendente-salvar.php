<?php
switch (@$_REQUEST["acao"]) {
    case 'cadastrar':

        $atendente = @$_POST["nome_atendente"];
        $telefone = @$_POST["telefone_atendente"];
        $cpf = @$_POST["cpf_atendente"];
        $cargo = @$_POST["cargo_atendente"];
        
        $sql2 = "INSERT INTO gsa_final (gsa_id_gsa, gsa_atendente_id_atendente) VALUES ({$_POST['id_gsa']}, {$_POST['id_atendente']})";

        $sql = "INSERT INTO gsa_atendente (nome_atendente, telefone_atendente, cpf_atendente, cargo_atendente)
                VALUES ('{$atendente}', '{$telefone}', '{$cpf}', '{$cargo}')";

        $conn->query($sql) or die($conn->error);

        $res = $conn->query($sql) or die($conn->error);


        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso! :) ') </script>";
            echo "<script> document.location.href='?page=atendente-consultar';</script>";
        } else {
            print "<div class='alert alert-danger'>Não foi possivel cadastrar :( </div>";
        }

        break;

    case 'editar':
        $empresa = @$_POST["id_gsa"];
        $atendente = @$_POST["nome_atendente"];

        $sql = "UPDATE gsa_atendente 
        SET id_atendente={$_POST["id_atendente"]}, nome_atendente='{$atendente}' WHERE id_atendente=" . $_REQUEST["id_atendente"];

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script>alert('Editado com sucesso! :) ') </script>";
            header("Location:?page=atendente-consultar'");
        } else {
            print "<div class='alert alert-danger'>Não foi possivel editar :( </div>";
        }

    case 'excluir':
        $sql = "DELETE FROM gsa_atendente WHERE id_atendente = " . $_REQUEST["id_atendente"];
        $res = $conn->query($sql) or die($conn->error);
        if ($res == true) {
            print "<script> alert('Excluido com Sucesso ! :)');</script>";
            print "<script>
                    location.href='?page=atendente-consultar';</script>";
        } else {
            print "<div class='alert alert-danger'>Não foi possivel excluir:( </div>";
        }
        break;
}
