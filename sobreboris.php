<?php 
if(isset($_POST['submit'])){
    $to = "marianalfr@gmail.com"; // this is your Email address
    
    $name = $_POST['nombre'];
    $sobreboris = $_POST['sobreboris'];

    $subject = "SOBRE BORIS";
    //$subject2 = "Copy of your form submission";
    $message = "NOMBRE: ". $name . "\n\n";
    $message .= "COMENTARIO:\n\n ". $sobreboris . "\n\n";
   

    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

	$headers = "From:" . $from;
	//$headers2 = "From:" . $to;
  	mail($to,$subject,$message);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: recibido.php');//"Muchas gracias por tu confirmación, " . $first_name . ". Recuerda que puedes volver a usar este formulario si tus circunstancias cambian.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>



