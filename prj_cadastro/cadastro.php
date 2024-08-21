<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <main class="mainCommon">
        <div class="background">
        </div>
        <div class="card">
            <h1 class="cardTitle">
                Cadastro Funcionários
            </h1>
            <form name="form1" method="post">

                <div class="width-100">
                    <label class="labelInput" for="nome">Nome do Funcionário:</label>
                    <div class="textInput width-100-noflex">
                        <input type="text" id="nome" name="txt_employeename" value="">
                    </div>
                </div>

                <div class="display-flex-center">
                    <div class="width-100 left-input-margin">
                        <label class="labelInput" for="registerNumber">Nº Registro:</label>
                        <div class="textInput width-100-noflex">
                            <input type="number" id="registerNumber" name="num_registernumber" value="">
                        </div>
                    </div>
                    <div class="width-100 right-input-margin">
                        <label class="labelInput" for="admissionDate">Data de Admissão:</label>
                        <div class="textInput width-100-noflex">
                            <input type="date" id="admissionDate" name="date_admissiondate" value="">
                        </div>
                    </div>
				</div>
                
                <div class="display-flex-center">
                    <div class="width-100 left-input-margin">
                        <label class="labelInput" for="qtdeMinWages">QTDE de Salários Mínimos:</label>
                        <div class="textInput width-100-noflex">
                            <input type="number" id="qtdeMinWages" name="num_qtdeMinWages" value="">
                        </div>
                    </div>
                    <div class="width-100 right-input-margin">
                        <label class="labelInput" for="qtdeMinWages">Cargo:</label>
                        <div class="textInput width-100-noflex">
                            <select class="custom-select" id="selectRole" name="num_selectRole">
                                <option value="Auxiliar Administrativo">Auxiliar Administrativo</option>
                                <option value="Analista de Projetos">Analista de Projetos</option>
                                <option value="Gerente de Projetos">Gerente de Projetos</option>
                                <option value="Gerente de Suporte">Gerente de Suporte</option>
                                <option value="Programador Jr.">Programador Jr.</option>
                                <option value="Analista de Sistemas">Analista de Sistemas</option>
                            </select>
                        </div>
                    </div>
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