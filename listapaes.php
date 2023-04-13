<head>
	<title>Lista Produto</title>
	<?php
	$produto = $_POST['produto'];
	include_once("conexao/conexaomysql.php");	
	?>
</head>
			
<body>
  	<br>
  	<br>
	<?php
   
  	$seleciona = "SELECT * FROM produtos where produto = '$produto' ORDER BY produto"; 
	?>		
<center>
<font face="arial" size="2"><b>Lista Produto:  <?php echo $produto; ?> </b></font>
  		<table  border = "2">
    		<tr>
      		<th>Id</th>
      		<th scope="col">Produto</th>
      		<th scope="col">Qtde</th>
      		<th scope="col">unidade</th>
		    </tr>

			<?php
			// Executa a consulta
			$stmt = mysqli_query($conn, $seleciona);
			if ($stmt === false) {
  				echo "Falha de conexão.\n";  
   	 		die(print_r(mysqli_errors(), true));
			}
			$seleciona_resultado = mysqli_query($conn, $seleciona);
			while($row_resultado = mysqli_fetch_assoc($seleciona_resultado))
				{
				?>
				<tr>
				<td><?php echo $row_resultado['id'] ?></td>
				<td><?php echo $row_resultado['produto'] ?></td>
				<td><?php echo $row_resultado['qtde']; ?></td>
				<td><?php echo $row_resultado['unidade']; ?></td> 
				</tr> <?php
				}
				?>
		</table>
		</center>
</body>