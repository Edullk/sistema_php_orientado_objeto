<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tela incial</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       <div style="text-align: center">
           <h1 class="text-primary">Sistema Web - 00</h1>
           <FIELDSET class="jumbotron">
            
            <form class="form-inline" method="post" action="controllers/autenticar.php"> 
       			usuario: <br>
                        <input class="form-control" type="text" name="usuario" required=""> <br> <br>
       			senha: <br>
                        <input class="form-control" type="password" name="senha" required=> <br> <br>
                        <input class="btn btn-primary" type="submit" name="entrar">      			
       		</form>
               <br/>
               <img class="img-responsive center-block" src="php-logo-2.png" alt="" width="250px"> 
       	</FIELDSET>
           <span class="text-muted">&COPY; copyrigth 2020 - todos os direitos reservados - prof Anderson </span>
    
       </div>
    </body>
</html>
