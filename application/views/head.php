<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset = "utf-8">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/specific.css');?>">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <script type="text/javascript" src="<?php echo base_url('assets/js/jQuery.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mask.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>

    <title><?php echo $titulo;?></title>
</head>
<body>

<!--MENU DE NAVEGAÇÃO FIXO
========================================================================-->

<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Controle Empresarial</a>
        </div>

        <div class="navbar-collapse navbar-right collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('cadastro/cad_nav') ?>">Cadastrar</a></li>
                        <li><a href="<?php echo base_url('clientes/listar') ?>">Listar</a></li>
                        <li><a href="<?php echo base_url('clientes/pesquisar');?>">Localizar</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lançamentos <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Novo Lançamento</a></li>
                        <li><a href="#">Pesquisar</a> </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pagamentos <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Registrar pagamento</a></li>
                        <li><a href="#">Pesquisar</a></li>
                    </ul>
                </li>
                <li><a href="#">Relatórios</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administração <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Produtos</a></li>
                        <li><a href="#">Usuarios</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>