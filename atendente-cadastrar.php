<h1>Cadastrar Funcíonario</h1>
<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
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
                print "<option value='" . $row->id_gsa . "'>" . $row->nome_empresa . "</option>";
            }
            print "</select>";
        } else {
            print "<div class='alert alert-danger'>Nenhum dado encontrado!</div>";
        }
        ?>
    </div>
    <div class="form">
        <label>Nome do Funcíonario</label>
        <input type="text" placeholder="Ex: Marcos Rian" name="nome_atendente" class="form-control">
    </div>
    <br>

    <div class="form">
        <label>Telefone do Funcíonario</label>
        <input type="text" placeholder="Ex: (61) 9xxxx-xxxx" name="telefone_atendente" class="form-control">
    </div>
    <br>

    <div class="form">
        <label>CPF do Funcíonario</label>
        <input type="text" placeholder="Ex: 492.885.540-09" name="cpf_atendente" class="form-control">
    </div>
    <br>

    <div class="form">
        <label>Cargo do Funcíonario</label>
        <input type="text" placeholder="Ex: Repositor" name="cargo_atendente" class="form-control">
    </div>
    <br>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>

</form>