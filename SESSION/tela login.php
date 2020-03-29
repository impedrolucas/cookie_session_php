<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
</head>
<style>
body {
	padding: 90px 500px;
	font-size: 13px;
	font-family: arial, Tahoma, sans-serif;
}

a { color:#000; }

h2 {
	margin-bottom: 20px;
	color: #133141;
}

input, textarea {
	padding: 10px;
	border: 1px solid #E5E5E5;
	width: 200px;
	color: #999999;
	box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
		
}

textarea {
	width: 400px;
	height: 150px;

}

.form label {
	margin-bottom: 10px;
	color: #999999;
    display: block;
}


<?php
    error_reporting(0);
    session_start();

    $user = $_POST['user'];
 

    if (isset($_SESSION['LOGADO'])) {
        $_SESSION['LOGADO'] = $user;
        $texto = "Olá, {$_SESSION['LOGADO']}! ";
        
    } else {
        $_SESSION['LOGADO'] = " ";
        $texto = "Olá, é novo por aqui? Cadastre-se!";
        $_SESSION['PASS'] = $pass;
    }
?>

</style>
<body>
	<h2>LOGIN</h2>

<form method="post"  class="form">
	<p class="form" method="POST">
            <label for="name">Nome</label>
            <input type="text" name="user" placeholder="Nome" />
</p>
            <label for="email">Senha</label>
            <input type="password" name="pass"  placeholder="Senha"/>
            <button>ENTRAR</button>
            <p class="message"><?= $texto ?></p>
</p>		
	
















        






