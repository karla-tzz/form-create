<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);

$para = "beatrizkarla864@gmail.com";
$assunto = "Coleta de dados - Formulário";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

$cabeca = "From: kbkarlinha186@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo ("E-mail enviado com sucesso!");
}else{
    echo ("Houve um erro ao enviar o e-mail!");
}

?>