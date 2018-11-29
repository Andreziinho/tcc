<div  id="fun" class = "conteudo" style="margin-top: 50px; position: absolute; left: 37%;">
    <div class="wrapper">
        <form action="valida.php?acao=cadastroFun" method="post" class="form-signin">
            <h3 class="form-signin-heading">Cadastro de Funcionários</h3>
            <br>

            <input type="text" class="form-control col-9" name="name" placeholder="Nome" >
            <input type="email" class="form-control col-9" name="email" placeholder="E-mail" >
            <input type="number" class="form-control col-9" name="telefone" placeholder="Telefone" >
            <br>
            <input type="text" class="form-control col-9" name="login" placeholder="Usuário" >
            <input type="password" class="form-control col-9" name="senha" placeholder="Senha" >

            <button class="btn btn-lg btn-primary btn-block col-9"  name="cadastro" value="Cadastrar" type="submit">Registrar</button>
        </form>
    </div>
</div>

<div  id="sor" class = "conteudo" style="margin-top: 50px; position: absolute; left: 37%; display: none;">
    <div class="wrapper">
        <form action="valida.php?acao=cadastroSor" method="post" class="form-signin">
            <h3 class="form-signin-heading">Cadastro de Funcionários</h3>
            <br>
            <input type="text" class="form-control col-9" name="nome" placeholder="Nome do Sorvete">
            <input type="text" class="form-control col-9" name="sabor" placeholder="Sabor" />
            <input type="number" class="form-control col-9" name="qtd" placeholder="Quantidade (Caixas)" />
            <input type="number" class="form-control col-9" name="validade" placeholder="Validade (Ano)" />
            <br>
            <input type="number" class="form-control col-9" name="data_ent" placeholder="Data de Entrada (Ano)" />
            <input type="text" class="form-control col-9" name="cpf" placeholder="Login" />
            <input type="text" class="form-control col-9" name="cnpj" placeholder="Nome da Empresa" />
            <br>
            <button class="btn btn-lg btn-primary btn-block col-9"  name="cadastro" value="Cadastrar" type="submit">Inserir</button>
        </form>
    </div>
</div>

<div  id="for" class = "conteudo" style="margin-top: 50px; position: absolute; left: 37%; display: none;">
    <div class="wrapper">
        <form action="valida.php?acao=cadastroFor" method="post" class="form-signin">
            <h3 class="form-signin-heading">Cadastro de Funcionários</h3>
            <br>
            <input type="number" class="form-control col-9" name="cnpj" placeholder="CNPJ">
            <input type="text" class="form-control col-9" name="nome" placeholder="Nome da Empresa" />
            <input type="email" class="form-control col-9" name="email" placeholder="E-mail" />
            <input type="number" class="form-control col-9" name="telefone" placeholder="Telefone" />
            <br>
            <button class="btn btn-lg btn-primary btn-block col-9"  name="cadastro" value="Cadastrar" type="submit">Registrar</button>
        </form>
    </div>
</div>