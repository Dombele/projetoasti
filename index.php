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
                <legend>Acesso Restrito</legend>
                    <table>
                        <tr>
                            <td>
                                <label for="username">username: </label>
                            </td>
                            <td>
                                <input type="text" name="username" id="username">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">password: </label>
                            </td>
                            <td>
                                <input type="password" name="password" id="password">   
                            </td>
                        </tr>
                        <tr>
                        <td>
                            <input type="submit" value="Acessar" name="btn_aces">
                        </td>
                        <td>
                            <input type="submit" value="Cadastrar" name="btn_cad">
                        </td>
                        </tr>
                    </table>
            </fieldset>
        </form>
    </div>
</body>
</html>