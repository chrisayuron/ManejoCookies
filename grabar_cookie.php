 <?php
    setcookie("idioma_solicitado",$_GET["idioma"],time()+86400,"/"); //86400 son los segundos en un dia
    /*Primero parametro nombre de la cookie,
    Segundo parametro, el que se trae de la pagina anterior
    Tercer parametro, tiempo de duracion de la cookie. Se puede calcular el tiempo multiplicando 60seg x 60min x 24 horas x Ndias
    Cuarto parametro, ubicacion de la cookie (si no ponemos, sera solo en esta pagina) "/" indica todo el directorio */
    header("Location:usar-cookie.php");
  ?>