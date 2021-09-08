<?php 
             include('../conn/conexao.php');
                    
                   $id = $_POST['idveiculo'];
                    
$sql = "UPDATE veiculos SET status='2' WHERE idveiculo='$id'";

if (mysqli_query($conexao, $sql)) {
  echo "<script>
                alert('Veículo alugado com sucesso!');
                window.location.replace('../../sistema/visualizar/');
        </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
?>


                
?>    

