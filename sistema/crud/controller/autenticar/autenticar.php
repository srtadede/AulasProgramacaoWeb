<?php
require_once('../banco/conexao.php');
session_start();
if (isset($_POST['autenticar'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $resultado = $conexao->query("SELECT * FROM usuario WHERE usuario='$usuario' AND senha='$senha'") or die($conexao->error());
    if (mysqli_num_rows($resultado) > 0) {
        $row = $resultado->fetch_array();
        $_SESSION['id'] = $row['id'];
        $_SESSION['usuario'] = $row['usuario'];
        header("location: ../../menu.php");
    } else {
        echo '<script type="text/javascript">
        alert("Dados Inválidos!");
        window.location="../../index.php";	
        </script>';
    }
}