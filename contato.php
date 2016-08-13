<?php
if(isset($_POST['enviar'])){

$nome=$_POST['nome'];
$email=$_POST['email'];
$fone=$_POST['fone'];
$msg=$_POST['msg'];
    
$msg = preg_replace("/(\\r)?\\n/i", "<br/>", $msg);
		
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=utf-8\n";

    
mail(
"contato@taidoido.com.br", "LIGA - Contato pelo site", "
		
<h1>LIGA - Contato pelo site</h1>

<p><b>Nome:</b> $nome</p>
<p><b>Email:</b> $email</p>
<p><b>Telefone:</b> $fone</p>
<p><b>Mensagem:</b> $msg</p>
		
", $headers);

echo "<script>alert('Obrigado por entrar em contato! Retornaremos sua mensagem em breve.');</script>";

}; ?>