<?php
   //Reseteamos variables a 0.
   $nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;


   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre1 = $_POST['name'];
      $email1 = $_POST['emaile'];   
      $para = $_POST['emaild']; 

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email1;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $nombre;
      $msjCorreo .= "\r\n";

    if (mail($para, $email1, $nombre1)) {
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