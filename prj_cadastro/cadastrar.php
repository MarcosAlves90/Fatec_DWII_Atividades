<?php
    include 'conexao.php';
    $usuario = $_POST["txt_usuario"];
    $email = $_POST["txt_email"];
    $senha = $_POST["txt_senha"];
    $sql = mysql_query ("SELECT * FROM tb_cadastro
                        WHERE usuario = '$usuario'
                        OR email = '$email'");
    if (mysql_num_rows($sql) > 0) {
        echo "<center>";
        echo "<hr>";
        echo "CONTA EXISTENTE!!!";
        echo "<hr>";
        echo "<br>";
    }
    else {
        $sql=mysql_query ("INSERT INTO tb_cadastro
                         (usuario, email, senha)
                         VALUES ('$usuario', '$email', '$senha')");
        echo "<center>";
        echo "<hr>";
        echo "CONTA CRIADA COM SUCESSO!!!";
        echo "<hr>";
        echo "<br>";
    }
?>
