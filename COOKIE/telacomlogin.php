<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Contatos</title>
</head>
<style>
body {
	padding: 90px 500px;
	font-size: 15px;
	font-family: arial, Tahoma, sans-serif;
    
}

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


</style>
<body>
<h2>INSIRA SEU NOME</h2>

    <form method="post">
		<p class="name">
            <label for="name">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" />
            <button id="enviar">Enviar</button>
		</p>
        </form>
</body>
</html>