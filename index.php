<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Get started with PHP</title>
</head>
<body>
    <form>
        <label>Destinatário:</label><input>
        <label>Mensagem:</label><input>
    </form>

    <?php 
    // função que lê arquivo e exibe na página
    readfile('doc/teste.txt');
    ?>
</body>
</html>