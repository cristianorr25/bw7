<?php 
             include('../conn/conexao.php');
                    
                    $id = $_POST['idveiculo'];
                   	$marcamodelo = $_POST['marca-modelo'];
   				    $cor = $_POST['cor'];
	                $status = '1';
                    
$sql = "UPDATE veiculos SET marca = '$marcamodelo', cor = '$cor', status= '$status' WHERE idveiculo='$id'";

if (mysqli_query($conexao, $sql)) {
  echo "<script>
                alert('Veículo editado com sucesso!');
                window.location.replace('../../sistema/visualizar/');
        </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
?>


                
?>    

