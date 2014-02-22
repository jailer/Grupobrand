<?
$mail="grupobrand@yahoo.com";

$nombre = $_POST["nombre"];
$e_mail = $_POST["e_mail"];
$mensaje = $_POST["mensaje"];
$telefono= $_POST["telefono"];
 
$thanks= "contactenos.html";

$message= "
nombre=".$nombre."
e_mail=".$e_mail."
mensaje=".$mensaje."
telefono=".$telefono."
";

if(mail($mail,"new message",$message));

header ("location: $thanks");

?>