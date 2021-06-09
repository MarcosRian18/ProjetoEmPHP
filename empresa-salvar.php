<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':

        $nome = $_POST["nome_empresa"];
        $tel = $_POST["telefone_empresa"];
        $cnpj = $_POST["cnpj_empresa"];
        $pdt = $_POST["produto_empresa"];


        $sql = "INSERT INTO gsa (nome_empresa, telefone_empresa, cnpj_empresa, produto_empresa) 
                VALUES ('{$nome}', '{$tel}', '{$cnpj}', '{$pdt}')";

        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<div class='alert alert-success'> Empresa cadastrada com sucesso :) </div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possivel cadastrar a empresa :( </div>";
        }
        break;

    case 'editar':
        $sql = "UPDATE gsa SET
        nome_empresa='" . $_POST["nome_empresa"] . "'
        WHERE id_gsa = " . @$_REQUEST["id_gsa"];
        $res = $conn->query($sql) or die($conn->error);

        if ($res == true) {
            print "<script> alert('Editado com Sucesso ! :)');</script>";
            print "<script>
                    location.href='?page=empresa-cadastrar';</script>
            ";
        } else {
            print "<div class='alert alert-danger'>Não foi possivel cadastrar :( </div>";
        }

        break;

    case 'excluir':
        $sql = "DELETE FROM gsa WHERE id_gsa = " . $_REQUEST["id_gsa"];
        $res = $conn->query($sql) or die($conn->error);
        if ($res == true) {
            print "<script> alert('Excluido com Sucesso ! :)');</script>";
            print "<script>
                    location.href='?page=empresa-consultar';</script>
            ";
        } else {
            print "<div class='alert alert-danger'>Não foi possivel excluir:( </div>";
        }
}
