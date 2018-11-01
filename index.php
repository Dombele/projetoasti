<?php


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login - ASTI</title>
</head>
<body>
    <div>
        <form action="#" method="POST" id="#form_login">
            <fieldset>
                <legend>Identificação</legend>
                    <table>
                        <tr>
                            <td>
                                <label for="ident">Identificação: </label>
                            </td>
                            <td>
                                <input name="ident" id="ident" placeholder="Digite seu CPF ou CNPJ">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Senha: </label>
                            </td>
                            <td>
                                <input type="password" name="password" id="password" placeholder="****************">   
                            </td>
                        </tr>
                        <tr>
                        <td>
                            <input type="submit" value="Acessar" name="btn_aces"/>
                        </td>
                        <td>
                            <input type="submit" value="Cadastrar" name="btn_cad"/>
                        </td>
                        </tr>
                    </table>
            </fieldset>
            <p><a href="default.php">Voltar</a></p>
        </form>
        <?php 
            $id = $_POST['ident'];
            $pw = $_POST['password'];
            echo "<p><span>Identificação: </span>".$id."</p>";
            echo "<p><span>Senha: </span>".$pw."</p>";
        ?>
    </div>
</body>
</html>