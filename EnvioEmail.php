<?php
//Vari�veis

$nome = $_POST['nome'];
$email = $_POST['email'];

$mensagem = $_POST['sugestao'];


// Compo E-mail
	$arquivo = "
	<style type='text/css'>
	body {
	margin:0px;
	font-family:Verdane;
	font-size:12px;
	color: #666666;
	}
	a{
	color: #666666;
	text-decoration: none;
	}
	a:hover {
	color: #FF0000;
	text-decoration: none;
	}
	</style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
	<tr>
                 <td width='500'>Nome:$nome</td>
                </tr>
                <tr>
                  <td width='320'>E-mail:<b>$email</b></td>
	   </tr>
                <tr>
                  <td width='320'>Mensagem:$mensagem</td>
                </tr>
            </td>
          </tr>  
          
        </table>
    </html>
	";

//enviar
	
	// emails para quem ser� enviado o formul�rio
	$emailenviar = "clovisystem_net@hotmail.com";
	$destino = $emailenviar;
	$assunto = "Contato pelo WebSystem";

	// � necess�rio indicar que o formato do e-mail � html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    	$headers .= 'From: $nome <$email>';
	//$headers .= "Bcc: $EmailPadrao\r\n";
	
	$enviaremail = mail($destino, $assunto, $arquivo, $headers);
	if($enviaremail){
	$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link ser� enviado para o e-mail fornecido no formul�rio";
	echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
	} else {
	$mgm = "ERRO AO ENVIAR E-MAIL!";
	echo "";
	}
?>


Read more: http://www.linhadecodigo.com.br/artigo/3619/enviando-email-com-php.aspx#ixzz2wiLpxb00