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
            <form>

                <label class="labelInput" for="userName">Nome de Usuário:</label><br>
                <div class="textInput">
					<input type="text" id="userName" name="userName" value="">
				</div>
                <label class="labelInput" for="userEmail">Email:</label><br>
                <div class="textInput">
					<input type="email" id="userEmail" name="userEmail" value="">
				</div>
                <label class="labelInput" for="userPassword">Senha:</label><br>
                <div class="textInput">
                    <input type="password" id="userPassword" name="userPassword" value="">
                </div>
		
                <div class="submitButtons">
                    <div class="submitInput">
                        <input class="submitButton" type="submit" value="Cadastrar">
                    </div>
                    <div class="submitInput">
                        <input class="submitButton" type="submit" value="Login">
                    </div>
                </div>

            </form> 
        </div>
    </main>
</body>
</html>