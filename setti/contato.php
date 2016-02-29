<?php
$headers = "Content-type: text/html; charset=utf-8\r\n";
$headers .= "X-Priority: 1\n";
$headers .= "X-MSMail-Priority: Normal\n";
$headers .= "Importance: High\n";
$headers .= "X-Mailer: php\n";
$headers .= "Mailer: smtp\n";
$headers .= "From: \"Setti\" <dehmirandac2@gmail.com>\r\n";

$mail_to      = 'dehmirandac2@gmail.com';
$mail_subject = 'Assunto Aqui';

$mail_message  = '<strong>Nome</strong>: '.$_POST['nome'];
$mail_message  .= '<br>';
$mail_message  .= '<strong>E-mail:</strong> '.$_POST['email'];
$mail_message  .= '<br>';
$mail_message  .= '<strong>Assunto:</strong>  '.$_POST['assunto'];
$mail_message  .= '<br>';
$mail_message  .= '<strong>Mensagem:</strong> '.$_POST['mensagem'];


if ( mail($mail_to,$mail_subject,$mail_message,$headers) )
	echo 'success';
else
	echo 'error';	

?>