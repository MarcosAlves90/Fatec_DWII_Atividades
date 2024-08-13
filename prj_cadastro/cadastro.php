<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <title>Document</title>
</head>
<body>
    <main class="mainCommon">
        <div class="background">
        </div>
        <div class="card">
            <h1 class="cardTitle">
                Cadastro Contas
            </h1>
            <form name="form1" method="post">

                <label class="labelInput" for="nome">Nome de Usuário:</label><br>
                <div class="textInput">
					<input type="text" id="nome" name="txt_usuario" value="">
				</div>
                <label class="labelInput" for="email">Email:</label><br>
                <div class="textInput">
					<input type="email" id="email" name="txt_email" value="">
				</div>
                <label class="labelInput" for="senha">Senha:</label><br>
                <div class="textInput">
                    <input type="password" id="senha" name="txt_senha" value="">
                </div>
		
                <div class="submitButtons">
                    <div class="submitInput">
                        <input value="Cadastrar" class="submitButton" type="submit" value="Cadastrar" onclick="document.form1.action='cadastrar.php'">
                    </div>
                    <div class="submitInput">
                        <input value="Login" class="submitButton" type="submit" value="Login" onclick="document.form1.action='cadastrar.php'">
                    </div>
                </div>

            </form> 
        </div>
    </main>
</body>
</html>