<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inserção de Registros</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div style="text-align: center">
            <h3>Cadastro de Pessoas</h3>
            <form method="post" action="../controllers/inserir.php">
                Nome <br>
                <input type="text" name="nome" required> <br><br>
                Sobrenome <br>
                <input type="text" name="sobrenome" required> <br><br>
                Data Nascimento <br>
                <input type="date" name="data" required> <br><br>
                Gênero <br>
                <select name="genero">
                    <option selected disabled></option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select> <br><br>
                Estado Civil <br>
                <input type="radio" name="ec" value="Solteiro(a)"> Solteiro(a)
                <input type="radio" name="ec" value="Casado(a)"> Casado(a)
                <input type="radio" name="ec" value="Divorciado(a)"> Divorciado(a)
                <input type="radio" name="ec" value="Viúvo(a)"> Viúvo(a) <br><br>
                <input type="submit" value="Inserir">
                <a href="principal.php"> Voltar</a>
                
            </form>            
        </div>
    </body>
</html>
