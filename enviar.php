<?php
   //Reseteamos variables a 0.
   $nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;


   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre1 = $_POST['name'];
      $email1 = $_POST['emaile'];
      $para = $_POST['emaild'];
      $subject = 'Aca van todos los partidos, miralo';

      $msjCorreo = '<img src="C:\wamp64\www\TP-Integrador-1\1.jpg">' ;


    if (mail($para, $subject, $msjCorreo)) {
         echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
  }
?>
