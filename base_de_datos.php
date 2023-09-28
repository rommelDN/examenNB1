<?php
$contrasena = "kVm5ihofUBSt5vB7oFzZ";
$usuario = "postgres";
$nombreBaseDatos = "railway";
$rutaServidor = "postgresql://postgres:kVm5ihofUBSt5vB7oFzZ@containers-us-west-194.railway.app:6611/railway";
$puerto = "6611";

try{
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDatos",$usuario,$contrasena);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    echo "ocurrio un error con la base de datos" . $e->getMessage();

}
?>