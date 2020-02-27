<?php

    $to = "adnanpinho@hotmail.com";
    $from = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$telefone = $_REQUEST['telefone'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
	$cmessage = $_REQUEST['message'];
	$tipo = $_REQUEST['tipo'];
	$valor = $_REQUEST['valor'];

    $headers = "From: site@site.com.br";
	$headers = "From: " . "site@site.com.br" . "\r\n";
	$headers .= "Reply-To: ". "site@site.com.br" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $subject = "Mensagem pelo Site";

    $logo = 'img/logo.png';
	$link = '#';
	
	if($valor){
		$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
		$body .= "<table style='width: 100%;'>";
		$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
		$body .= "</td></tr></thead><tbody><tr>";
		$body .= "<td style='border:none;'><strong>Nome:</strong> {$name}</td>";
		$body .= "<td style='border:none;'><strong>Telefone:</strong> {$telefone}</td>";
		$body .= "</tr>";
		$body .= "<tr><td style='border:none;'><strong>Valor:</strong> {$valor}</td></tr>";
		$body .= "<tr><td></td></tr>";
		$body .= "<tr><td style='border:none;'><strong>Tipo:</strong> {$tipo}</td></tr>";
		$body .= "<tr><td></td></tr>";
		$body .= "</tbody></table>";
		$body .= "</body></html>";
	
	}

	
    $send = mail($to, $subject, $body, $headers);

?>