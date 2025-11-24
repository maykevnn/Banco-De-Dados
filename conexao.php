<?php


$host    = "localhost";
$usuario = "root";
$senha   = ""; 
$banco   = "mayke_1d";     


$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}


mysqli_set_charset($conexao, "utf8");
    

$cloud_name = "dgv2n07de"; 
$api_key    = "129574969238313";
$api_secret = "NyPssjq-UrQ1Jt6KpN1E_SsiS1c";    

?>

