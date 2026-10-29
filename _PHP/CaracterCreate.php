<?php

$nome = $_POST['nome']
$race = $_POST['race']
$tamanho = $_POST['tamanho']
$descricao = $_POST['descricao']
$stylerace = $_POST['stylerace']
$olho = $_POST['olho']
$cabelo = $_POST['cabelo']
$nariz = $_POST['nariz']
$boca = $_POST['boca']
$sombrancelha = $_POST['sombrancelha']
$corolho = $_POST['corolho']
$pele = $_POST['pele']
$corcabelo = $_POST['corcabelo']
$classe = $_POST['classe']
$chifre = $_POST['chifre']
$orelha = $_POST['orelha']
$calda = $_POST['calda']
$marca = $_POST['marca']

$linha = date('d/m/Y H:i:s') . " | " . $nome . " | " . $race . " | " . $tamanho . " | " . $descricao . " | " . $stylerace . " | " . $olho . " | " . $cabelo . " | " . $nariz . " | " . $boca . " | " . $sombrancelha . " | " . $corolho . " | " . $pele . " | " . $corcabelo . " | " . $classe . " | " . $chifre . " | " . $orelha . " | " . $calda . " | " . $marca . PHP_EOL;

file_put_contents('../_TXT/CaracterCreate.txt',$linha, FILE_APPEND);

header('location: ../_HTML/CaracterCreate.html')
?>