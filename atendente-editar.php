<h1>Editar Funcíonario</h1>
<?php
$sql_principal = "SELECT * FROM gsa_atendente WHERE id_atendente =" . $_REQUEST["id_atendente"];
$res_principal = $conn->query($sql_principal) or die($conn->error);
$row_principal = $res_principal->fetch_object();
?>
<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_atendente" value="<?php print $_REQUEST["id_atendente"]; ?>">

    <div class="form-group">
        <label>Empresa</label>
        <?php
        $sql = "SELECT * FROM gsa";
        $res = $conn->query($sql) or die($conn->error);
        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<select name='gsa_id_gsa' class='form-control'>";
            print "<option>-=Selecione=-</option>";

            while ($row = $res->fetch_object()) {
                if ($row_principal->id_gsa == $row->id_gsa) {
                    print "<option selected value='" . $row->id_gsa . "'>" . $row->nome_empresa . "</option>";
                } else {
                    print "<option value='" . $row->id_gsa . "'>" . $row->nome_empresa . "</option>";
                }
            }
            print "</select>";
        } else {
            print "<div class='alert alert-danger'>Nenhum dado encontrado!</div>";
        }
        ?>
    </div>
    <div class="form">
        <label>Nome do Funcíonario</label>
        <input type="text" name="nome_atendente" value="<?php print $row_principal->nome_atendente;   ?>" class="form-control">
    </div>
    <br>

    <div class="form">
        <label>Telefone do Funcíonario</label>
        <input type="text" name="telefone_atendente" value="<?php print $row_principal->telefone_atendente;   ?>" class="form-control">
    </div>
    <br>

    <div class="form">
        <label>Cargo do Funcíonario</label>
        <input type="text" name="cargo_atendente" value="<?php print $row_principal->cargo_atendente;   ?>" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>

</form>