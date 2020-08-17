<?php
    $message_sent=false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
        
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
           
            // submit the form
        $name = $_POST['nome'];
        $visitor_email = $_POST['email'];
        $message = $_POST['comentario'];
    
        $email_from = "nairia_mascarenhas@hotmail.com";
        $email_subject = $_POST['assunto'];
        $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n".
                            "User Subject: $email_subject\n".
                                "User Menssage: $message.\n";
    
        $to = "nairia_mascarenhas@hotmail.com";
        $headers = "From: $email_from \r\n";
        $headers .= "Reply-To: $visitor_email \r\n";
    
        mail($to,$email_subject,$email_body,$headers);
        header("Location: index.html");

        

        }

    }

   

?>