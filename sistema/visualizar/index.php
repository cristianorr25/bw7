<?php 
	
	session_start();
    
    include('verifica_login.php');
    
    include('../../assets/conn/conexao.php'); 
    
  	$query = "select * from veiculos";

	$result = mysqli_query($conexao, $query);
                                                                                                          
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Alguel de Veículos :: BW7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="../../public/img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="../../public/css/reset.css" />
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../public/css/css.css"/>
</head>
<body>

<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg">
    <a class="logo-laranjal" href="#"><img src="../../public/img/logo.png" width="150px" height="auto" alt="Logo BW7"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="../">Início</a></li>
            <li class="nav-item active"><a class="nav-link" href="../visualizar">Aluguéis</a></li>
        </ul>
        </div>
</nav>
<div class="navbar fixed-top sombra container-fluid">
    <ul class="nav">
        <li class="nav-item">Você está em:</li>
        <li><i class="fas fa-home"></i> Aluguéis :: Visualizar</li>
    </ul>
    <ul class="nav  justify-content-end">
        <li class="nav-item dropdown">
        <li class="nav-item">Usuário: </li>
        <li class="nav-item"><strong>Cristiano</strong></li></li>
        <li><a href="../login/logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
    </ul>
</div>
</header>

<section class="principal bg-color-cinza">
	<div class="container-fluid">		
		<div class="row list-box">
			<div class="table-responsive">
				<table class="table display" id="example1">
					<thead>
						<tr>
							<th scope="col"><span class="font-weight-light text-primary">Marca/Modelo</span></th>		
							<th scope="col"><span class="font-weight-light text-primary">Status</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Editar Veículo</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Alugar Veículo</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Devolver Veículo</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Excluir Veículo</span></th>

						</tr>
					</thead>
					<tbody>
						<?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>	
					 
							<tr>
								<form action="" method="POST" name="projetos" id="projetos">
			                    	<input type="hidden" value="<?php echo $row['idveiculo'];?>" name="idveiculo">
									<th scope="row" class="font-weight-bold"><?php echo $row['marca']?></th>

									<td><?php 
			                            if($row['status'] == "1") echo "  <strong><font color='#17A2B8'>  Disponível </font></strong>  "; 
			                            if($row['status'] == "2") echo "  <strong><font color='#DC3545'>  Alugado </font></strong> "; 
			                            ?></td>
										
									</td>

			                        <td> 
			                        <?php if ($row['status'] == '1') { ?> 	          
			                      		<button type="submit" formaction="../../sistema/editar/" class="  btn btn-info">Editar</button>
			                      	<?php }  ?> 	
			                        </td>
			                        <td>
			                         <?php if ($row['status'] == '1') { ?> 	          
			                      		<button type="submit" formaction="../../assets/action/alugar-veiculo.php" onclick="return confirm('Deseja Alugar esse Veículo?')" class="  btn btn-success">Alugar</button>
			                        </td>
			                       	<?php }  ?>  
			                    	<td> 
			                    	<?php if ($row['status'] == '2') { ?>            
			                      		<button type="submit" formaction="../../assets/action/devolver-veiculo.php" onclick="return confirm('Deseja Alugar esse Veículo?')" class="  btn btn-warning">Devolver</button>
			                      	<?php }  ?> 	
			                        </td>
			                        		                        		                        
			                        <td>
			                        <?php if ($row['status'] == '1') { ?>             
			                      		<button type="submit" formaction="../../assets/action/excluir-veiculo.php" onclick="return confirm('Deseja Excluir esse Veículo?')" class=" btn btn-danger">Excluir</button>
			                      	<?php }  ?> 	
			                        </td>		                        		                        

                       			</form> 
							</tr>
					<?php }  ?>		
				  	</tbody>	  					  			   			 
				</table>
			</div>        	             	
		</div> 
	</div>

	<div class="col text-center mt-3">
		  <a class="btn btn-secondary" href="../">Voltar</a> 
	</div> 
</section> 

<footer >
        <div class="container-fluid">    
            <div class="row footer-direita footer-pad">
                <div>
                    <p class="copy">2021 © Copyright -
                        <a href="https://bw7.com.br" target="blank">BW7 Soluções Web</a>
                    </p>
                </div>  
            </div>
        </div>
    </footer>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../../public/js/Http.js"></script>
    <script src="../../public/js/jquery.min.js"></script>
    <script src="../../public/js/chamaPosts.js"></script>
    
    <!-- DataTables -->
    <script src="/interno/cenex/sistema/public/js/jquery.dataTables.min.js"></script>

    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": true,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>  
    
    
</body>

       	

