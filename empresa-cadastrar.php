
<h1>Cadastrar Empresa</h1>
<form action="?page=empresa-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="form-group">
        <label>Nome da Empresa</label>
        <input type="text" name="nome_empresa" class="form-control">
    </div>

    <div class="form-group">
        <label>Telefone da Empresa</label>
        <input type="text" name="telefone_empresa" class="form-control">
    </div>

    <div class="form-group">
        <label>CNPJ da Empresa</label>
        <input type="text" name="cnpj_empresa" class="form-control">
    </div>

    <div class="form-group">
        <label>Tipo de Produto da Empresa</label>
        <input type="text" name="produto_empresa" class="form-control">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
</form>