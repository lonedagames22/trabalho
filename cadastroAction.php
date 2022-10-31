<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="../../css/CadActio.css">
 <title>Cadastro - MYSQLI</title>
</head>
<body>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
<?php
 $host = "localhost";
 $usuario = "root";
 $senha = "usbw";
 $bd = "tcc";
 try{
 $conecta = new PDO("mysql:dbname=$bd; host=$host; port=3306; chars
et=utf8", $usuario, $senha, $email);
 $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }catch(PDOException $e){
 echo "falha ao conectar: ". $e->getMessage();
 }

 $sql = "INSERT INTO usuario (usuario, email, senha)
 VALUES ('".$_POST['txtUsuario']."', '".$_POST['txtEmail']."', '".$_POST['txtSenha']."')";

 try{
 $resultado = $conecta->query($sql);
 echo '
 <a href="index.php">
 <h1 class="w3-button w3-blue">Produto Salvo com sucesso! </h1>
 </a>
 ';
 }catch(PDOException $e){
 echo '
 <a href="index.php">
 <h1 class="w3-button w3-blue">ERRO! </h1>
 </a>
 ';
 }
 ?>

</div>
</body>
</html>