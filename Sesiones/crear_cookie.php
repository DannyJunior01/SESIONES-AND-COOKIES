<?php
$nombre_cookie = "mi_cookie";
$valor_cookie = "Daniel";
$tiempo_cookie = time() + (1*60);
setcookie($nombre_cookie,$valor_cookie,$tiempo_cookie);
if(isset($_COOKIE[$nombre_cookie])){
    echo "se creo correctamente";
}else{
    echo "no se pudo crear";
}
?>