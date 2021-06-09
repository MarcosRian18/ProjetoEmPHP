<h1>Consultar Empresas/Funcíonario</h1>
<?php
$sql = "SELECT * FROM gsa_final AS f INNER JOIN gsa AS g ON g.id_gsa = f.gsa_id_gsa INNER JOIN gsa_atendente AS a ON a.id_atendente = f.gsa_atendente_id_atendente";
$res = $conn->query($sql) or die($conn->error);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-striped table-bordered table-hover'>";
    print "<tr>";
    print "<td>#</td>";
    print "<td>Nome das Empresas</td>";
    print "<td>Nome dos Funcíonarios</td>";
    print "<td>Telefone dos Funcíonarios</td>";
    print "<td>CPF dos Funcíonarios</td>";
    print "<td>Cargos dos Funcíonarios</td>";
    print "<td class='width'180px''>Ações</td>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->gsa_id_gsa . "</td>";
        print "<td>" . $row->nome_empresa . "</td>";
        print "<td>" . $row->nome_atendente . "</td>";
        print "<td>" . $row->telefone_atendente . "</td>";
        print "<td>" . $row->cpf_atendente . "</td>";
        print "<td>" . $row->cargo_atendente . "</td>";

        print "<td>               
             <button class='btn btn-danger' 
             onclick=\"if(confirm('Tem certeza que deseja excluir?'))
             {location.href='?page=final-salvar&acao=excluir&id_atendente=" . $row->id_atendente . "&id_gsa=" . $row->id_gsa . "';}else{false;}\">Excluir</button>

            </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<div class='alert alert-danger'>Não encontrou resultados.</div>";
}

?>