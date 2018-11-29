<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gerente Pagina</title>
    <link rel="icon" type="image/png" href="img/logo.png" sizes="32x32" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <style>
        body{
            background-image: url("img/body3.jpg");
            background-size: 100%;
        }
    </style>

    <script type="text/javascript">
        function checkDelete() {
            return confirm("Tem certeza disso?");

        }
        function openAba(abaName) {
            var i;
            var x = document.getElementsByClassName("conteudo");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(abaName).style.display = "block";
        }
    </script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #426bbf!important;">
    <a class="navbar-brand" href="valida.php?acao=home" style="font-family: cursive; font-size: 30px; color: white;">Fábrica de Delícias</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav ml-auto">
            <li>
                <button type="button" class="btn btn-success" onclick="window.location='valida.php?acao=cad';" style="margin-right: 10px;">
                    Cadastrar
                </button>
            </li>
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
        <ul class="abas" style=" padding-top: 5px; padding-left: 5px;">
            <div class="w3-bar w3-black">
                <button class="btn btn-primary" onclick="openAba('fun')" style="color: #0600ff;border-color: #0600ff;background-color: #fff714!important;">Funcionario</button>
                <button class="btn btn-primary" onclick="openAba('sor')" style="color: #0600ff;border-color: #0600ff;background-color: #fff714!important;">Sorvete</button>
                <button class="btn btn-primary" onclick="openAba('for')" style="color: #0600ff;border-color: #0600ff;background-color: #fff714!important;">Fornecedor</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="color: #0600ff;border-color: #0600ff;background-color: #fff714!important;">Contato</button>
            </div>
            <br>
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
<div id="body">

        <div id="fun" class="conteudo" style="margin-top: 20px; margin-bottom: 100px;">
            <?php foreach ($funcionarios as $funcionario):?>

                    <tr>

                        <div class="card" style="width: 27rem; margin-left: 13px; margin-top: 5px;display: inline-block;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "Nome: ".$funcionario->getNome()." "?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo "Função: ".$funcionario->getTipo_user()." "?></h6>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo "Email: ".$funcionario->getEmail()." "?></h6>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo "Login: ".$funcionario->getLogin()." "?></h6>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo "Telefone: ".$funcionario->getTelefone()." "?></h6>

                                <div class="form-row">
                                    <div class="form-group col-md-3" style="margin-right: -25px;">
                                        <form action="valida.php?acao=editar" method="post">
                                        <input type="hidden" value="<?php echo $funcionario->getCpf()?>" name="cpf">
                                        <button type="submit" class="btn btn-info" value="Editar" name="editar">Editar</button>
                                        </form>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <form action="valida.php?acao=deleta" method="post">
                                        <input type="hidden" value="<?php echo $funcionario->getCpf()?>" name="cpf">
                                        <button type="submit" class="btn btn-danger" value="Deletar" name="deleta" onclick="return checkDelete()">Excluir</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>

            <?php endforeach;?>
        </div>
        <div id="sor" class="conteudo" style="margin-top: 20px; margin-bottom: 100px; display: none">

            <?php foreach ($sorvetes as $sorvete):?>
                <tr>

                    <div class="card" style="width: 27rem; margin-left: 13px; margin-top: 5px; display: inline-block;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo "Nome: ".$sorvete->getNome()." "?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo "Sabor: ".$sorvete->getSabor()." "?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo "Quantidade: ".$sorvete->getQuant()." "?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo "Validade: ".$sorvete->getValidade()." "?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo "Data de Entrada: ".$sorvete->getdataEnt()." "?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><?php $cpf = $crud->getUsuario($sorvete->getCpf());$nome = $cpf->getLogin();echo "Gerente: ".$nome." "?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><?php $cnpj = $crud3->getFornecedor($sorvete->getCnpj());$forNome = $cnpj->getNome();echo "Fornecedor: ".$forNome." "?></h6>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="margin-right: -25px;">
                                    <form action="valida.php?acao=editar" method="post">
                                        <input type="hidden" value="<?php echo $sorvete->getId()?>" name="id">
                                        <button type="submit" class="btn btn-info" value="Editar" name="editar">Editar</button>
                                    </form>
                                </div>
                                <div class="form-group col-md-2">
                                    <form action="valida.php?acao=deleta" method="post">
                                        <input type="hidden" value="<?php echo $sorvete->getId()?>" name="id">
                                        <button type="submit" class="btn btn-danger" value="Deletar" name="deleta" onclick="return checkDelete()">Excluir</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </tr>
            <?php endforeach;?>
        </div>
        <div id="for" class="conteudo" style="margin-top: 20px; margin-bottom: 100px; display: none">
            <?php foreach ($fornecedores as $fornecedor):?>
                <tr>

                    <div class="card" style="width: 27rem; margin-left: 13px; margin-top: 5px; display: inline-block;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo "Nome: ".$fornecedor->getNome()." "?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><b><?php echo "Telefone: ".$fornecedor->getTelefone()." "?></b></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><b><?php echo "Email: ".$fornecedor->getEmail()." "?></b></h6>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="margin-right: -25px;">
                                    <form action="valida.php?acao=editar" method="post">
                                        <input type="hidden" value="<?php echo $fornecedor->getCnpj()?>" name="cnpj">
                                        <button type="submit" class="btn btn-info" value="Editar" name="editar">Editar</button>
                                    </form>
                                </div>
                                <div class="form-group col-md-2">
                                    <form action="valida.php?acao=deleta" method="post">
                                        <input type="hidden" value="<?php echo $fornecedor->getCnpj()?>" name="cnpj">
                                        <button type="submit" class="btn btn-danger" value="Deletar" name="deleta" onclick=" return checkDelete()">Excluir</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            <?php endforeach;?>
        </div>
</div>


</body>
</html>
