<?php
    $to = 'Hello@Statalog.org';
    $firstname = $_POST["fname"];
    $email= $_POST["email"];
    $text= $_POST["message"];



    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'  '.$laststname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Email: '.$text.'</td></tr>

    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo "Your message is making it's way to us!;
    }else{
        echo 'Oops, it seems something is wrong. Please, try again';
    }

?>
