<?php 
    
    session_start();
    
    include('verifica_login.php');
                                                     
?>                 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Alguel de Veículos :: BW7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="../public/img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="../../public/css/reset.css" />
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../public/css/css.css"/>
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col text-center">
                <img class="mb-4" src="/externo/cenex/sistema/public/img/logo-ntw.svg" alt="" width="auto" height="50">
                <h2 class="h3 mb-5 font-weight-normal">Cadastro de <b>Veículos </b>BW7</h2>        
            </div>
        </div>
        <div class="row">
            <div class="col list-box">
                <form action="../../assets/action/cadastrar.php" method="POST">    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Marca/Modelo</label>
                            <input type="text" class="form-control" name="marca-modelo" placeholder="Insira a marca e modelo do veículo" required  />
                        </div>  
                        <div class="form-group col-md-6">
                            <label>Cor</label>
                            <input type="text" class="form-control" name="cor" placeholder="Insira a cor do veículo" required  />
                        </div>

                    </div>     

                    <div class="form-row">
                        <div class="col text-center ">
                           <button class="btn btn-primary mr-2" type="submit">Enviar</button>
                           <a class="btn btn-danger" href="../">Cancelar</a>
                        </div> 
                    </div>                                                               
                </form>
         </div>
    </div>       
        <div class="form-row">
            <div class="col text-center">
                <p class="mt-5 mb-3 text-muted">&copy; BW7 2021</p>              
            </div>
        </div>      
    </section>
</body>