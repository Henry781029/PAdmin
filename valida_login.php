<?php 

include ("Bdatos.php");


$email = $_POST["email"];
$password = $_POST['password'];

$query = "SELECT * FROM registro WHERE email = '$email' AND password = '$password'";
$resultado = $conexion->query($query);

$row = $resultado->fetch_assoc();

if($row['email'] == $email && $row['password'] == $password){

    $_SESSION['email'] = $email;

    header("Location:propietarios.php");

}else{

    header("Location:login.php");

}

?>