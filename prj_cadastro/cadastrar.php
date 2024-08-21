<?php
    include 'conexao.php';

    $nomeFuncionario = mysql_real_escape_string($_POST["txt_employeename"]);
    $numeroRegistro = mysql_real_escape_string($_POST["num_registernumber"]);
    $dataAdmissao = mysql_real_escape_string($_POST["date_admissiondate"]);
    $qtdeSalariosMinimos = mysql_real_escape_string($_POST["num_qtdeMinWages"]);
    $cargo = mysql_real_escape_string($_POST["num_selectRole"]);

    $salarioBruto = $qtdeSalariosMinimos * 1412;
    $inss = $salarioBruto > 1550 ? 0.11 : 0;
    $salarioLiquido = $salarioBruto * (1-$inss);

    $sql = "SELECT * FROM tb_funcionarios WHERE N_Registro = '$numeroRegistro'";
    $result = mysql_query($sql, $conecta_db);
    if (mysql_num_rows($result) > 0) {
        echo "<center>";
        echo "<hr>";
        echo "Os dados inseridos já constam no banco";
        echo "<hr>";
        echo "<br>";
    } else {
        $sql = "INSERT INTO tb_funcionarios (Nome_Funcionario, N_Registro, data_admissao, cargo, qtde_salarios, salario_bruto, inss, salario_liquido) VALUES ('$nomeFuncionario', '$numeroRegistro', '$dataAdmissao', '$cargo', '$qtdeSalariosMinimos', '$salarioBruto', '$inss', '$salarioLiquido')";
        mysql_query($sql, $conecta_db);
        echo "<center>";
        echo "<hr>";
        echo "CONTA CRIADA COM SUCESSO!!!";
        echo "<hr>";
        echo "<br>";
}
?>