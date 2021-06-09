<?php
switch (@$_REQUEST["acao"]) {
    case 'cadastrar':
        $empresa = $_POST["gsa_id_gsa"];
        $atendente = $_POST["gsa_atendente_id_atendente"];

        $sql = "INSERT INTO gsa_final (gsa_id_gsa, gsa_atendente_id_atendente)
                VALUES ({$empresa}, {$atendente})";

        $res = $conn->query($sql) or die($conn->error);


        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso! :) ') </script>";
            echo "<script> document.location.href='?page=final-consultar';</script>";
        } else {
            print "<div class='alert alert-danger'>Não foi possivel cadastrar :( </div>";
        }

        break;

    case 'excluir':
        $empresa = $_REQUEST["id_gsa"];
        $atendente = $_REQUEST["id_atendente"];

        $sql = "DELETE FROM gsa_final WHERE gsa_atendente_id_atendente = " . $atendente . " AND gsa_id_gsa= " . $empresa;
        $res = $conn->query($sql) or die($conn->error);
        if ($res == true) {
            print "<script> alert('Excluido com Sucesso ! :)');</script>";
            print "<script>
                    location.href='?page=final-consultar';</script>";
        } else {
            print "<div class='alert alert-danger'>Não foi possivel excluir:( </div>";
        }
        break;
}
