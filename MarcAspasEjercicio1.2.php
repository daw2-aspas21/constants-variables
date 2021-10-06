<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;
if ($_SESSION['ok'] != 1){
    echo "Sorry, but you don't have permission to view this page!";
    exit();
}
?>
<html>
    <head>
     <title> Mi serie favorita <?php echo $_GET['FAVSERIE'];?></title>
    </head>
    <body>
<?php
echo "Bienvenido a mi pagina, ";
echo $_COOKIE["username"];
echo "! <br/>";
echo "My favourite serie is ";
echo $_GET['FAVSERIE'];
$serierate = 9;
echo '<br>';
echo "La puntuacion que le doy a la pelicula es de: ";
echo $serierate;
echo '<br>';
$nombre_usuario = $_GET['FAVSERIE'] ?? 'Breaking Bad';
$nombre_usuario = isset($_GET['FAVSERIE']) ? $_GET['FAVSERIE']: 'Breaking Bad';
$nombre_usuario = $_GET['FAVSERIE'] ?? $_POST['FAVSERIE'] ?? 'Breaking Bad';

echo $nombre_usuario;
?>
</body>
</html>