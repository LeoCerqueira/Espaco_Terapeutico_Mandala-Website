<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['nome'];
   $email = $_POST['email'];
   $assunto = $_POST['assunto'];
   $message = $_POST['comentario'];
  
   if (empty($name)) {
       $errors[] = 'Nome em branco.';
   }

   if (empty($assunto)){
        $errors[] = 'Sem assunto.';

   }

   if (empty($email)) {
       $errors[] = 'Sem email.';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email invalido.';
   }

   if (empty($message)) {
       $errors[] = 'Sem mensagem.';
   }


if (empty($errors)) {
    $toEmail = 'll_cerqueira@hotmail.com';
    $emailSubject = 'Email do site.';
    $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

    $bodyParagraphs = ["Nome: {$name}", "Email: {$email}","Assunto: {$assunto}", "Mensagem:", $message];
    $body = join(PHP_EOL, $bodyParagraphs);

    
} else {
    $allErrors = join('<br/>', $errors);
    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
}
}


?>