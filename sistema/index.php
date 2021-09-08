<!DOCTYPE html>

<?php
session_start();
include('login/verifica_login.php');
?>


<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Alguel de Veículos :: BW7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="../public/img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="../public/css/reset.css" />
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../public/css/css.css"/>
</head>
<body>

<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg">
    <a class="logo-laranjal" href="#"><img src="../public/img/logo.png" width="150px" height="auto" alt="Logo BW7"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="index.php">Início</a></li>
             <li class="nav-item active"><a class="nav-link" href="visualizar/">Aluguéis</a></li>
        </ul>
        </div>
</nav>
<div class="navbar fixed-top sombra container-fluid">
    <ul class="nav">
        <li class="nav-item">Você está em:</li>
        <li><i class="fas fa-home"></i> Início</li>
    </ul>
    <ul class="nav  justify-content-end">
        <li class="nav-item dropdown">
        <li class="nav-item">Usuário: </li>
        <li class="nav-item"><strong>Cristiano</strong></li></li>
        <li><a href="login/logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
    </ul>
</div>
</header>
<!-- CONTEÚDO PRINCIPAL --><!-- CONTEÚDO PRINCIPAL -->
<section class="principal bg-color-cinza">
    <div class="container-fluid">


        <div class= "row">
            <div class="col">
                <div class = "row">
                    <div class="col-md-6 col-sm-6">
                        <div class="box align-middle">                     
                                            
                                <a href="cadastrar/">
                                <img src="../public/img/icons/criar.svg" width="65" height="65" alt="Listar ações">
                                <p class="acoes text-center align-middle"><span class="font-weight-bold">Novo</span> Veículo</p>
                                </a>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="box align-middle">
                                <a href="visualizar/">
                                <img src="../public/img/icons/listar.svg" width="65" height="65" alt="Listar ações">
                                <p class="acoes text-center align-middle"><span class="font-weight-bold">Listar</span> Aluguéis</p>
                                </a>

                        </div>
                    </div>

                </div>

                
                </div>

            </div>   

<!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Selecione o lugar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class = "row">
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <a href="#"></a>
                        <img src="./public/img/orange-avaliable.png" width="65" height="65" alt="Disponível">
                        <p class="text-center align-middle"><b>001- Disponível:</b></p>
                        <p><span class="font-weight-bold"></span>Selecionar este Lugar</span></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-disable.png" width="65" height="65" alt="Desabilitado">
                        <p class="text-center align-middle"><b>002 - Indisponível:</b></p>
                        <p><span class="font-weight-bold"></span>Distanciamento COVID-19</span></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-avaliable.png" width="65" height="65" alt="Disponível">
                        <p class="text-center align-middle"><b>003 - Disponível:</b></p>
                        <p><span class="font-weight-bold"></span>Selecionar este Lugar</span></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-disable.png" width="65" height="65" alt="Desabilitado">
                        <p class="text-center align-middle"><b>004 - Indisponível:</b></p>
                        <p><span class="font-weight-bold"></span>Distanciamento COVID-19</span></p>
                    </div>
                </div>
            </div>

            <div class = "row">
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <a href="#"></a>
                        <img src="./public/img/orange-avaliable.png" width="65" height="65" alt="Disponível">
                        <p class="text-center align-middle"><b>005 - Disponível:</b></p>
                        <p><span class="font-weight-bold"></span>Selecionar este Lugar</span></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-disable.png" width="65" height="65" alt="Desabilitado">
                        <p class="text-center align-middle"><b>006 - Indisponível:</b></p>
                        <p><span class="font-weight-bold"></span>Distanciamento COVID-19</span></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-avaliable.png" width="65" height="65" alt="Disponível">
                        <p class="text-center align-middle"><b>007 -Disponível:</b></p>
                        <p><span class="font-weight-bold"></span>Selecionar este Lugar</span></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-disable.png" width="65" height="65" alt="Desabilitado">
                        <p class="text-center align-middle"><b>008 - Indisponível:</b></p>
                        <p><span class="font-weight-bold"></span>Distanciamento COVID-19</span></p>
                    </div>
                </div>
            </div>

            <div class = "row">
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <a href="#"></a>
                        <img src="./public/img/orange-avaliable.png" width="65" height="65" alt="Disponível">
                        <p class="text-center align-middle"><b> 009 -Disponível:</b></p>
                        <p><span class="font-weight-bold"></span>Selecionar este Lugar</span></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-disable.png" width="65" height="65" alt="Desabilitado">
                        <p class="text-center align-middle"><b>010 - Indisponível:</b></p>
                        <p><span class="font-weight-bold"></span>Distanciamento COVID-19</span></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-avaliable.png" width="65" height="65" alt="Disponível">
                        <p class="text-center align-middle"><b>011- Disponível:</b></p>
                        <p><span class="font-weight-bold"></span>Selecionar este Lugar</span></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-disable.png" width="65" height="65" alt="Desabilitado">
                        <p class="text-center align-middle"><b>012 - Indisponível:</b></p>
                        <p><span class="font-weight-bold"></span>Distanciamento COVID-19</span></p>
                    </div>
                </div>
            </div>

            <div class = "row">
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <a href="#"></a>
                        <img src="./public/img/orange-avaliable.png" width="65" height="65" alt="Disponível">
                        <p class="text-center align-middle"><b>013 - Disponível:</b></p>
                        <p><span class="font-weight-bold"></span>Selecionar este Lugar</span></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-disable.png" width="65" height="65" alt="Desabilitado">
                        <p class="text-center align-middle"><b>014 - Indisponível:</b></p>
                        <p><span class="font-weight-bold"></span>Distanciamento COVID-19</span></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-avaliable.png" width="65" height="65" alt="Disponível">
                        <p class="text-center align-middle"><b>015 - Disponível:</b></p>
                        <p><span class="font-weight-bold"></span>Selecionar este Lugar</span></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-disable.png" width="65" height="65" alt="Desabilitado">
                        <p class="text-center align-middle"><b>016 - Indisponível:</b></p>
                        <p><span class="font-weight-bold"></span>Distanciamento COVID-19</span></p>
                    </div>
                </div>
            </div>

            <div class = "row">
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <a href="#"></a>
                        <img src="./public/img/orange-avaliable.png" width="65" height="65" alt="Disponível">
                        <p class="text-center align-middle"><b>017 - Disponível:</b></p>
                        <p><span class="font-weight-bold"></span>Selecionar este Lugar</span></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-disable.png" width="65" height="65" alt="Desabilitado">
                        <p class="text-center align-middle"><b>018 - Indisponível:</b></p>
                        <p><span class="font-weight-bold"></span>Distanciamento COVID-19</span></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-avaliable.png" width="65" height="65" alt="Disponível">
                        <p class="text-center align-middle"><b>019 - Disponível:</b></p>
                        <p><span class="font-weight-bold"></span>Selecionar este Lugar</span></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="./public/img/orange-disable.png" width="65" height="65" alt="Desabilitado">
                        <p class="text-center align-middle"><b>020 - Indisponível:</b></p>
                        <p><span class="font-weight-bold"></span>Distanciamento COVID-19</span></p>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Continuar</button>
        </div>
      </div>
    </div>
  </div>
<!-- FIM Modal -->
          
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
    <script src="../public/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>