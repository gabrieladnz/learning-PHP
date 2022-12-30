<?php
$message = '';
foreach( $_POST as $name => $value ) {
    if ( 'submit' != $name ) {
        if ( is_array( $value ) ) {
            $value = implode( ', ', $value );
        }
         $message .= ucfirst( $name ) ." is $value.\n\n";
    }
 }

 $to = "Gabriela Diniz<gabrieladnz.dev@gmail.com>";
 $subject = "Teste mail: " . $_POST['reason'];
 $from = $_POST['name'] . '<' . $_POST['email'] . '>';

 $headers = 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

 if ( mail( $to, $subject, $message, $headers ) ) {
     echo "<h3>Email enviado com sucesso.</h3>";
 } else {
    echo "Email não enviado. Tente novamente.";
 }
