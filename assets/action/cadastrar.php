<?php

include('../conn/conexao.php');


	$marcamodelo = $_POST['marca-modelo'];
    $cor = $_POST['cor'];
	$status = '1';
		
$sql = "INSERT INTO veiculos (marca, cor, status)
VALUES ('$marcamodelo', '$cor', '$status')";

if (mysqli_query($conexao, $sql)) {
  echo "<script>
				alert('Veículo inserido com sucesso!');
				window.location.replace('../../sistema');
		</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
		

?>
