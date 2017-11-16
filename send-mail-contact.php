<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'];
  $assunto = $_POST['assunto'];

  $headers = 'From: '.$email;
  $to = "rededeestagios@ectmjr.com.br";
  
  $msg = "De: ".$nome." <".$email.">";
  $msg .= $mensagem;

  mail($to,$assunto,$msg,$headers);
  header('location: index.html#contato');
?>