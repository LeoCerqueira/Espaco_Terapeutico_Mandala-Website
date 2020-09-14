

<?php 
if(isset($_POST['submit'])){
    $to = "ll_cerqueira@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['nome'];
  //  $last_name = $_POST['last_name'];
    $subject = "Formulário do site";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . " Escreveu o seguinte:" . "\n\n" . $_POST['comentario'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['comentario'];

    $headers = "De:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Obrigado " . $first_name . ", entraremos em contato em breve.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


