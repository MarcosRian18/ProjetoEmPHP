<form action="?page=final-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="form-group">
        <label>Empresa</label>
        <?php
        $sql = "SELECT * FROM gsa";
        $res = $conn->query($sql);
        print "<select name='gsa_id_gsa' class='form-control'>";
        print "<option>&#10146 Selecione </option>";
        while ($row = $res->fetch_object()) {
            print "<option value='" . $row->id_gsa . "' >" . $row->nome_empresa . "</option>";
        }
        print "</select>";
        ?>
    </div>

    <div class="form-group">
        <label>Funcíonarios</label>
        <?php
        $sql_1 = "SELECT * FROM gsa_atendente";
        $res_1 = $conn->query($sql_1);
        print "<select name='gsa_atendente_id_atendente' class='form-control'>";
        print "<option>&#10146 Selecione </option>";
        while ($row_1 = $res_1->fetch_object()) {
            print "<option value='" . $row_1->id_atendente . "' >" . $row_1->nome_atendente . "</option>";
        }
        print "</select>";
        ?>
    </div>
    <button class='btn btn-success' type="submit">Enviar</button>
</form>