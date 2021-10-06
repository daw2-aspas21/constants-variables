<?php
session_start();
setcookie("username", "Marc", time() +3600);
$_SESSION['username'] = "Marc";
($_SESSION['userpass'] == '2345');
$_SESSION['ok'] = 1;
?>
<html>
    <head>
        <title> Mi serie favorita </title>
    </head>
    <form name="formulario" method="post" action="ejemploPost.php">
       Nombre: <input type="text" name="nombre" value="">
       Email: <input type="text" name="nombre" value="">
       <input type="submit"/>
    </form>
<body>
    <form name="formulario" method="post" action="ejemploPost.php">
       Nombre: <input type="text" name="nombre" value="">
       Email: <input type="text" name="nombre" value="">
       <input type="submit"/>
    </form>
<?php
define("FAVSERIE","Breaking Bad");
echo "Mi Serie Favorita es: ";
echo FAVSERIE;
echo '<br/>';
$serierate = 9;
echo "La puntuacion que le doy a la pelicula es de: ";
echo $serierate;
date_default_timezone_set('UTC');
echo '<br/>';
echo date('lunes');
echo '<br/>';
$myfavserie = urlencode("Breaking Bad");
echo "<a href='MarcAspasEjercicio1.2.php?FAVSERIE=$myfavserie'>";
echo "Click here to see information about my favourite serie!";
echo "</a>";
?>
</body>
</html>