<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $empresa= $_POST['empresa'];
  $contato_empresa = $_POST['contato_empresa'];
  $urgencia = $_POST['urgencia'];
  $info = $_POST['info'];

  $headers = 'From: '.$email;
  $to = "rededeestagios@ectmjr.com.br";

  $assunto = "[Rede de Estágios - Sugestão] ".$empresa;
  $mensagem = "Sugestão da empresa ".$empresa.", por ".$nome." (".$email.")";
  $mensagem .= "<br/>Contato da empresa: ".$contato_empresa;

  mail($to,$assunto,$mensagem,$headers);
  header('location: index.html#contato');
?>