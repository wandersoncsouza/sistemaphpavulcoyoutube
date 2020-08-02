<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro sistema em PHP</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <input type="hidden" name="acao_form1">
        <input type="submit" value="Enviar!">
    </form>

    <form action="" method="post">
        <input type="text" name="email" placeholder="Digite seu e-mail">
        <input type="hidden" name="acao_form2">
        <input type="submit" value="Enviar!">
    </form>
</body>

</html>