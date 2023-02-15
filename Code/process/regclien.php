<?php
include '../conexion/configServer.php';
include '../conexion/consulSQL.php';

sleep(3);
$cod_Cliente= $_POST['clien-cod'];
$nameCliente= $_POST['clien-name'];
$fullnameCliente= $_POST['clien-fullname'];
$apeCliente= $_POST['clien-lastname'];
$passCliente= md5($_POST['clien-pass']);
$dirCliente= $_POST['clien-dir'];
$phoneCliente= $_POST['clien-phone'];
$emailCliente= $_POST['clien-email'];


if(!$cod_Cliente=="" && !$nameCliente=="" && !$apeCliente=="" && !$dirCliente=="" && !$phoneCliente=="" && !$emailCliente=="" && !$fullnameCliente==""){
    $verificar=  ejecutarSQL::consultar("select * from cliente where Codigo_Cliente='".$cod_Cliente."'");
    $verificaltotal = mysqli_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("cliente", "Codigo_Cliente, Usuario, Nombre, Apellido, Direccion, Clave, Telefono, Email", "'$cod_Cliente','$nameCliente','$fullnameCliente','$apeCliente','$dirCliente', '$passCliente','$phoneCliente','$emailCliente'")){
            echo '<img src="imagenes/img/ok.png" class="center-all-contens"><br>El registro se completo con éxito';
        }else{
           echo '<img src="imagenes/img/error.png" class="center-all-contens"><br>Ha ocurrido un error.<br>Por favor intente nuevamente'; 
        }
    }else{
        echo '<img src="imagenes/img/error.png" class="center-all-contens"><br>El CI que ha ingresado ya esta registrado.<br>Por favor ingrese otro número de CI';
    }
}else {
    echo '<img src="imagenes/img/error.png" class="center-all-contens"><br>Error los campos no deben de estar vacíos';
}
