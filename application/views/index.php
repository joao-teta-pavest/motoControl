<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<html>
<head>

<title>Moto Control</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="<?php echo base_url('assets/css/base.css');?>">
<!-- jQuery library -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet"
	href=" <?php echo base_url('assets/css/base.css');?> ">

<link rel="stylesheet"
	href=" <?php echo base_url('assets/css/menu.css');?> ">
	<script
	src=" <?php echo base_url('assets/js/code.js');?> "></script>
</head>
<body>
	 <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       MotoControl
                    </a>
                </li>
                <li>
                    <a href="#">A minha Conta</a>
                </li>
                <li>
                    <a href="#">Motorizadas</a>
                </li>
                <li>
                    <a href="#">Gestão de saldo</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatorios <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Relatorios</li>
                    <li><a href="#">Entradas</a></li>
                    <li><a href="#">Saídas</a></li>
                    <li><a href="#">Avarias</a></li>
                    <li><a href="#">Observações</a></li>
                    <li><a href="#">Motoristas</a></li>
                  </ul>
                </li>
                <li>
                    <a href="#">Apoio Técnico</a>
                </li>
                <li>
                    <a href="#">Sair</a>
                </li>
             
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->




        <!-- Page Content -->
        <div id="page-content-wrapper">
        <!-- Botão para mostrar/esconder menu -->
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
          <!-- Fim Botão para mostrar/esconder menu -->  
          
            <div class="container">
                <div class="row">
                <h1> Inicio</h1>
            <p>Bem vindo ao Moto Control, a solução perfeita para o control das suas motorizadas.</p>
            <p>Por favor não exite em contactar-nos em caso de duvidas ou problemas.</p>
            <br>
            <br>
            </div>
            
            
            
          
            
            <br>
            <br>
             <div class="row">
                <h1> Destaques</h1>
       
            <br>
            <br>
            </div>
            </div>
            
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>
</html>