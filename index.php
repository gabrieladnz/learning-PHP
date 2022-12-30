<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet">
    <!-- link ícones bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Get started with PHP</title>
</head>

<body>
    <div id="texto">
        <p><span class="bi bi-arrow-right"></span> Exercício da trilha de aprendizado em PHP!</p>
    </div>
    <nav>
        <a href="https://github.com/gabrieladnz" target="_blank"><button type="button" id="botGit">gabrieladnz <span class="bi bi-github"></span></button></a>
        <a href="https://www.linkedin.com/in/gabrieladnz/" target="_blank"><button type="button" id="botLinkd"><span class="bi bi-linkedin"></span></button></a>
        <a href="mailto:gabrieladnz.dev@gmail.com?" target="_blank"><button type="button" id="botEmail"><span class="bi bi-envelope-fill"></span></button></a>
    </nav>

    <!-- formulário de envio de email -->
    <section id="formEmail">
        <br>
        <h4 id="tituloEmail">EMAIL FÁCIL</h4>
        <form name="contact" method="POST" action="processo.php">
            <?php
            if (isset($_POST['name']) && empty(trim($_POST['name']))) {
                echo "<p class=\"alert\">Name is required</p>";
                $form_complete = false;
            }
            ?>
            <label for="name" id="labelEmail">Nome:</label><input style="margin-left: 16%; height: 30px;" required /><br>
            <?php
            $email_regex = '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
            if (isset($_POST['email']) && empty(trim($_POST['email']))) {
                echo "<p class=\"alert\">Email is required</p>";
                $form_complete = false;
            } else if (isset($_POST['email']) && !preg_match($email_regex, $_POST['email'])) {
                echo "<p class=\"alert\">Please enter a valid Email Address.</p>";
                $form_complete = false;
            }
            ?>
            <label for="name" id="labelEmail">Email:</label><input type="email" name="email" style="margin-left: 16%; margin-top: 4%; height: 30px;"><br>
            <?php
            if (isset($_POST['message']) && empty(trim($_POST['message']))) {
                echo "<p class=\"alert\">Message is required</p>";
                $form_complete = false;
            }
            ?>
            <label for="message" id="labelEmail">Mensagem:</label><input id="inMess" style="margin-left: 6%; margin-top: 4%;">
            <button id="botaoEnviar" type="submit" name="submit" value="Submit">Enviar <span style="color:aliceblue;" class="bi bi-send"></span></button>
        </form>
    </section>

    <style>
        .alert {
            color: red;
            font-weight: bold;
        }
    </style>

    <?php
    $form_complete =  (!is_null($form_complete)) ? $form_complete : true;
    if ($form_complete) {
        foreach ($_POST as $name => $value) {
            if ('submit' != $name) {
                if (is_array($value)) {
                    $value = implode(', ', $value);
                }
                echo "<p><b>" . ucfirst($name) . "</b> is $value.</p>";
            }
        }
    }
    ?>
    <!--
    // função que lê arquivo e exibe na página
    readfile('doc/teste.txt');
    -->
</body>

</html>