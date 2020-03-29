<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM VINDO</title>
</head>
<body>
<style>
h1 {
    padding: 90px 500px;
	font-size: 30px;
	font-family: arial, Tahoma, sans-serif;   
}
h3{
    padding: 1px 500px;
    font-size: 30px;
    font-family:  Tahoma;
    color: darkred; 
}
</style>
    <?php
    error_reporting(0);
    $nome = $_POST['nome'];
    if (isset($_COOKIE['teste'])) {
        include('SIM.php');
        echo "</br>";
        echo "<h1><i>SEJA BEM VINDO ❤</i></h1> <h3>$nome</h3>";
    }else {
        include('NÃO.php');
        echo "</br>";
        echo "Nunca te vi por aqui. Você poderia digitar seu nome para mim, por gentileza!";
        include('atv1.1CO.php');
        setcookie('teste', $nome, time() + 3600);
    }
    ?>
</body>
</html>
