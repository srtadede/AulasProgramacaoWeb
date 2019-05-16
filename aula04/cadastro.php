<?php


if{empty($_POST['nome']) or empty($_POST['senha']) or empty($_POST['email']) or empty($_POST['observacao'])
    echo "<script>
    alert('Existem campos obrigatórios que não foram preenchidos, por gentileza, preeencha todos e em seguida, chica em enviar. Obrigado! xD');";
    echo "javascript:window.location='index.php';</script>";
}
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_PÓST['senha'];
$observacao $_POST['observacao'];


if(strlen($nome)) >= 10){
echo $nome."<br>";
echo strlen($nome)."<br>"; 
}else{
    echo "<script>
    alert('Nome muito curto');";
    echo "javascript:window.location='index.php';</script>";
}
echo $email."<br>";
echo $senha."<br>";
echo $observacao."<br>";
?>