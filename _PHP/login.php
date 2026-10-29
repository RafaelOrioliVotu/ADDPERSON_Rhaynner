<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$csenha = $_POST['csenha'];
$email = $_POST['email'];
$cemail = $_POST['cemail'];


$linha = date('d/m/Y H:i:s') . " | " . $nome . " | " . $sobrenome . " | " . $usuario . " | " . $senha . " | " . $csenha . " | " . $email . " | " . $cemail . PHP_EOL;
file_put_contents('../_TXT/login.txt',$linha, FILE_APPEND);


if ($csenha === $senha and $cemail === $email) {
    header('Location: CaracterCreate.html');
    exit();
}elseif ($csenha !== $senha and $cemail === $email){
    echo "Senhas não corrempondem uma com a outra!!!";
}elseif ($cemail !== $email and $csenha === $senha){
    echo "Emails não corrempondem um com o outro!!!";
}else {
    echo "Senhas não corrempondem uma com a outra!!!"<break>;
    echo "Emails não corrempondem um com o outro!!!";
}   
?>