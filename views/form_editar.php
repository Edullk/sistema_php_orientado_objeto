<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edição de Registros</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div style="text-align: center">
            <a href="listar.php"> VOLTAR <a/>
            
            <h3>Edição de Pessoas</h3>
            <?php 
                //Recuperar o valor do parâmetro 'id' da URL
                $id = filter_input(INPUT_GET, "id");
                //Inclui o arquivo de conexão
                include_once '../loader/autoload.php';
                //instancia o obejto 
                $pDAO = new PessoaDAO();
                $p = new Pessoa();
                //passsar valor do id para o atributo 
                $p->setId($id);
                //atibui resultado a variavel
                $obj = $pDAO->listar($p);
                
            ?>
            <form method="post" action="../controllers/editar.php">
                Nome <br>
                <input type="text" name="nome" required value="<?=$obj->nome?>"> <br><br>
                Sobrenome <br>
                <input type="text" name="sobrenome" required value="<?=$obj->sobrenome?>"> <br><br>
                Data Nascimento <br>
                <input type="date" name="data" required value="<?=$obj->data_nascimento?>"> <br><br>
                Gênero <br>
                <select name="genero">
                    <?php
                    if($obj->genero == "M"){
                        print "<option selected value='M'>Masculino</option>";
                        print "<option value='F'>Feminino</option>";
                    }else{
                        print "<option value='M'>Masculino</option>";
                        print "<option selected value='F'>Feminino</option>";
                    }
                    ?>
                </select> <br><br>
                Estado Civil <br>
                <input type="radio" name="ec" value="Solteiro(a)"
                       <?=($obj->estado_civil == "Solteiro(a)") ? "checked" : ""?> > Solteiro(a)
                
                <input type="radio" name="ec" value="Casado(a)"
                       <?=($obj->estado_civil == "Casado(a)") ? "checked" : ""?> > Casado(a)
                
                <input type="radio" name="ec" value="Divorciado(a)"
                       <?=($obj->estado_civil == "Divorciado(a)") ? "checked" : ""?> > Divorciado(a)
                
                <input type="radio" name="ec" value="Viúvo(a)"
                       <?=($obj->estado_civil == "Viúvo(a)") ? "checked" : ""?> > Viúvo(a) <br><br>
                
                <input TYPE="hidden" name ="id" value="<?=$obj->id?>"> 
                <input type="submit" value="Editar"
                       onclick="return confirm ('deseja editar o registro?')">                
            </form>            
        </div>
    </body>
</html>
