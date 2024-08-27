<?php

include 'conexao.php';

if(isset($_POST['busca_nome']) != '') {
	$sql = mysql_query("select * from tb_funcionarios where Nome_Funcionario like '%{$_POST['busca_nome']}%' order by Nome_Funcionario asc");
} else {
	$sql = mysql_query("select * from tb_funcionarios order by Nome_Funcionario asc");
}


if(isset($_GET['apagar'])){
	$sql = mysql_query("delete from tb_funcionarios where Nome_Funcionario=". $_GET['apagar']);
	 echo "<br>";
	 echo "<center>";
	 echo "<hr>";
	 echo "USUÁRIO EXCLUÍDO COM SUCESSO!!!";
	 echo "<br>";
	 echo "<br>";
	 echo "<a href=\"listagem.php\">VOLTAR</a>"; 
	 echo "<hr>";
	return false;
	
}

?>

<html>
<body>	  
<center>
<form name="form1" method="POST" action="listagem.php">
DIGITE UM USUÁRIO: <input type="text" name="busca_nome"><input type="submit" value="FILTRAR">
</form>


<table border="1" align="center">
		    <tr>
			<th colspan="8e" bgcolor="orange">LISTAGEM DE CONTAS CADASTRADAS</th>
			</tr>
			<tr>
			<th bgcolor="yellow">N° FUNCIONÁRIO</th>
			<th bgcolor="yellow">NOME FUNCIONÁRIO</th>
			<th bgcolor="yellow">DATA ADMISSÃO</th>
			<th bgcolor="yellow">CARGO</th>
			<th bgcolor="yellow">SALÁRIO BRUTO</th>
			<th bgcolor="yellow">INSS</th>
			<th bgcolor="yellow">SALÁRIO LÍQUIDO</th>
			<th bgcolor="yellow">APAGAR</th>
			</tr>
			<tr>
				
				<?php
				while($linha = mysql_fetch_assoc($sql)) {
					?>
			<td align="center"><?php echo $linha['N_Registro']; ?></td>
			<td align="center"><?php echo $linha['Nome_Funcionario']; ?></td>
			<td align="center"><?php echo $linha['data_admissao']; ?></td>
			<td align="center"><?php echo $linha['cargo']; ?></td>
			<td align="center"><?php echo $linha['salario_bruto']; ?></td>
			<td align="center"><?php echo $linha['inss']; ?></td>
			<td align="center"><?php echo $linha['salario_liquido']; ?></td>
	       <th><a href="listagem.php?apagar='<?php echo $linha['Nome_Funcionario']; ?>'"><img src='public/images/deletar_usuario.png'></a></th>
	       <tr>
            			
			<?php  } 
			  
			  echo "<br>";
			  echo "<center>";
			  echo "<hr>";
		      echo "<a href=\"cadastro.php\">Retornar a pagina de login </a>"; 
			  echo "<hr>";
			?>
</table>
</body>
</html>





