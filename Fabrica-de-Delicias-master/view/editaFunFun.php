<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../style.css">
    <title>Funcionario Pagina</title>
    <link rel="icon" type="image/png" href="img/logo.png" sizes="32x32" >
    <style>
        body{
            background-image: url("img/body3.jpg");
            background-size: 100%;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #426bbf!important;">
    <a class="navbar-brand" href="#" style="font-family: cursive; font-size: 30px;">Fábrica de Delícias</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav ml-auto">
            <li>
                <button type="button" class="btn btn-danger" onclick="window.location='valida.php';">
                    Sair
                </button>
            </li>
        </ul>
    </div>
</nav>

<div class="AbasControli">
    <div id="abas" style="background-color: #426bbf;">
        <ul class="abas" style="padding-top: 5px; padding-left: 5px;">
            <div class="w3-bar w3-black">
                <div class="form-row" style="margin-right: 1100">
                    <div class="form-group col-md-3" style="margin-right: 10px;">
                        <a href="valida.php?acao=home2"><button class="btn btn-primary" style="color: #0600ff;border-color: #0600ff;background-color: #fff714!important;">Voltar</button></a>
                    </div>
                        <form action="valida.php?acao=editado" method="post">
                            <input type="hidden" name="cpfFun" value="<?php echo $usuarioAtivo?>">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="color: #0600ff;border-color: #0600ff;background-color: #fff714!important;">Contato</button>
                        </form>
                    </div>
            </div>

            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Contato</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <b>Programador Chefe:</b> marcos.eduardor01@gmail.com<br>
                            <b>Redator e Estilista:</b> andrefernandes1885@gmail.com<br>
                            <b>Designer:</b> jacoisraelfranco@gmail.com<br>
                            <b>Contribuinte:</b> raissastazak@gmail.com
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</div>

<div class = "container" style="margin-top: 30px; margin-bottom: 100px;">
    <div class="row">
        <form action="valida.php?acao=editado" method="post" class="col-md-4 offset-md-4">
            <div class="card-header" style="background-color: rgb(255,247,20,0.6);">
                <h4 style="text-align: center;">Alteração de Dados<br> do Funcionário</h4>
            </div>
            <br>
            <input type="hidden" name="cpfFun" value="<?php echo $valores->getCpf()?>">

            <input type="text" class="form-control input-sm chat-input" name="nome" placeholder="Nome" value="<?php echo $valores->getNome()?>" required="" autofocus=""/>
            <input type="email" class="form-control input-sm chat-input" name="email" placeholder="E-mail" value="<?php echo $valores->getEmail()?>" required=""/>
            <input type="number" class="form-control input-sm chat-input" name="telefone" placeholder="Telefone" value="<?php echo $valores->getTelefone()?>" required=""/>
            <br>
            <input type="text" class="form-control input-sm chat-input" name="login" placeholder="Usuário" value="<?php echo $valores->getLogin()?>" required=""/>
            <input type="password" class="form-control input-sm chat-input" name="senha" placeholder="Senha" value="<?php echo $valores->getSenha()?>" required=""/>

            <input type="hidden" name="idEdi" value="4">
            <br>
            <button class="btn btn-lg btn-primary btn-block col-12"  name="editar" value="Editar" type="submit">Salvar</button>
        </form>
    </div>
</div>



</body>
</html>