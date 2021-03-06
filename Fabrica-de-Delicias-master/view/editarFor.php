<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <link rel="stylesheet" href="../style.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="img/logo.png" sizes="32x32" >
        <style>
            body{
                background-image: url("img/body3.jpg");
                background-size: 100%;
            }
        </style>
    </head>
    <body>
    <?php include "cab.php"; ?>

    <div class = "container" style="margin-top: 30px; margin-bottom: 100px;">
        <div class="row">
            <form action="valida.php?acao=editado" method="post" class="col-md-4 offset-md-4">
                <div class="card-header" style="background-color: rgb(255,247,20,0.6);">
                    <h4 style="text-align: center;">Alteração de Dados<br> do Fornecedor</h4>
                </div>
                <br>
                <input type="hidden" name="cnpj" value="<?php echo $valores->getCnpj()?>">

                <input type="text" class="form-control input-sm chat-input" name="nome" placeholder="Nome" value="<?php echo $valores->getNome()?>" required="" autofocus=""/>
                <input type="email" class="form-control input-sm chat-input" name="email" placeholder="E-mail" value="<?php echo $valores->getEmail()?>" required=""/>
                <input type="number" class="form-control input-sm chat-input" name="telefone" placeholder="Telefone" value="<?php echo $valores->getTelefone()?>" required=""/>
                <br>
                <input type="hidden" name="idEdi" value="2">
                <br>
                <button class="btn btn-lg btn-primary btn-block col-12"  name="editar" value="Editar" type="submit">Salvar</button>
            </form>
        </div>
    </div>

</body>
</html>