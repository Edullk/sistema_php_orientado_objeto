<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Pessoas</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container" style="text-align: center">
            <h3 class="text-primary">Lista de Pessoas</h3>
            <table class="table tab-pane">
                <tr class="bg-primary" >
                    <td>NOME</td>
                    <td>SOBRENOME</td>
                    <td>Data Nascimento</td>
                    <td>Gênero</td>
                    <td>Estado Civil</td>
                    <td> </td>
                </tr>

                <?php
                //inclui o arquivo conexãophp
               include_once '../loader/autoload.php';
                //instancia o objeto $pdao
                $pDAO = new PessoaDAO();
                //percorre todos os objetos encontrados 
                foreach ($pDAO->listarTudo() as $obj) {


                    //cria um objeto DateTime e formata a data
                    $dataBR = date_format(date_create($obj->data_nascimento), "d/m/Y");
                    print "<tr>";
                    print "<td>$obj->nome</td>";
                    print "<td>$obj->sobrenome</td>";
                    print "<td>$dataBR</td>";
                    print "<td>$obj->genero</td>";
                    print "<td>$obj->estado_civil</td>";

                    print "<td>";
                    print "<a href='form_editar.php?id=$obj->id'> Editar || </a>";
                    print "<a href='../controllers/deletar.php?id=$obj->id'
                                            onclick='return confirm(\"Deseja excluir o registro?\")'>excluir<a/> ";
                    print "</td>";
                    print "</tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>
