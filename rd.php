<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$celular = addslashes($_POST['celular']);
$mensagem = addslashes($_POST['mensagem']);

$me = "ribeiro.profissional.rodrigo@gmail.com";
$assunto = "contatos";

$corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."contato: ".$celular."\n"."Mensagem: ".$mensagem;

$cima = "from rodrigo.ribeiro.fodastico@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();


if(mail($me,$assunto,$corpo,$cima)){
    echo("Email enviado com sucesso");

}else{
    echo("Houve algum erro,email não enviado");
}



?>