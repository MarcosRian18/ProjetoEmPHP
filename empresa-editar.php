<h1>Editar Empresa</h1>
<?php
$sql = "SELECT * FROM gsa WHERE id_gsa = " . $_REQUEST["id_gsa"];
$res = $conn->query($sql) or die($conn->error);
$row = $res->fetch_object();
?>
<form action="?page=empresa-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_gsa" value="<?php print $row->id_gsa;?>">

    <div class="form-group">
        <label>Nome da Empresa</label>
        <input type="text" name="nome_empresa" value="<?php print $row->nome_empresa; ?>" class="form-control">
    </div>

    <div class="form-group">
        <label>Telefone da Empresa</label>
        <input type="text" name="telefone_empresa" value="<?php print $row->telefone_empresa; ?>" class="form-control">
    </div>

    <div class="form-group">
        <label>CNPJ da Empresa</label>
        <input type="text" name="cnpj_empresa" value="<?php print $row->cnpj_empresa; ?>" class="form-control">
    </div>

    <div class="form-group">
        <label>Tipo de Produto da Empresa</label>
        <input type="text" name="produto_empresa" value="<?php print $row->produto_empresa; ?>" class="form-control">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
</form>