<h1>Consultar Empresa</h1>
<?php
$sql = "SELECT * FROM gsa";
$res = $conn->query($sql) or die($conn->error);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p>Encontrou <b>$qtd</b> Resultado(s).</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome da Empresa!</th>";
    print "<th>Telefone da Empresa!</th>";
    print "<th>CNPJ da Empresa!</th>";
    print "<th>Produto da Empresa!</th>";

    print "<th> Ações!</th>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_gsa . "</td>";
        print "<td>" . $row->nome_empresa . "</td>";
        print "<td>" . $row->telefone_empresa . "</td>";
        print "<td>" . $row->cnpj_empresa . "</td>";
        print "<td>" . $row->produto_empresa . "</td>";


        print "<td>
                    <button class='btn btn-success' onclick=\"
                    location.href='?page=empresa-editar&id_gsa=" . $row->id_gsa . "';\">Editar</button>
                    
                    <button class='btn btn-danger' 
                    onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=empresa-salvar&acao=excluir&id_gsa=" . $row->id_gsa . "';}else{false;}\">Excluir</button>
               </td>";
        "</tr>";
    }
    print "</table>";
} else {
    print "<div class='alert alert-danger'>Nenhum dado encontrado!</div>";
}
?>