<!DOCTYPE html>
<?php 
    session_start();
    //verefica se usuario nao esta autenticado 
    if(!$_SESSION["autenticado"]){
       print "<script>alert('sem permisão de acesso. Efetue o Login'); location=
           'index.php'</script>";
    }
    if(filter_input(INPUT_GET, "sair") == "ok"){
        include_once 'loader/autoload.php';
        LoginDAO::deslogar();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tela principal</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div style="text-align: center" class="container">
            <span style="font-weight: bold" style="font-size: 14pt"><?= $_SESSION["usuario"] ?></span>,
        Bem vindo(a)ao nosso sistema web
        <hr/>
        <h2 class="text-muted"> Menu principal <h2>
                <a href= 'form_inserir.php' ><button class="btn btn-block glyphicon glyphicon-plus"> INSERIR |</a>
                <a href= 'listar.php'> LISTAR |</a>
                <a href="../index.php" onclick="return confirm ('deseja sair do sistema?')"> SAIR |</a>
                 
         </div>       
    </body>
</html>
