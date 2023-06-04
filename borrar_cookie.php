<?php
//No hay una funcion para quitar una cookie
setcookie("idioma_solicitado","",time()-1,"/")//Al ser negativo,se "elimina" la  cookie
?>
<a href="usar-cookie.php">REGRESAR</a>