    <!--HOME
    ========================================================================-->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"><!--===================================PAINEL1-->
                <div class="panel panel-vin">
                    <div class="panel-heading">
                        <div class="row ftbranco">
                            <div class="col-xs-1">
                                <i class="fa fa-line-chart fa-2x pdr10px"></i>
                            </div>
                            <div class="col-xs-7">
                                <div class="ft20pxb pdl10px">Devedores</div>
                            </div>
                            <div class="col-xs-1">
                                <div class="ft20pxb">R$2.000,00</div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body hmin220px">
                        <div class="container-fluid">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Valor</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Felipe Moreira de Oliveira</td>
                                    <td>R$1,00</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Milena Moreira de Oliveira</td>
                                    <td>R$2,00</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Tânia Maria da Mota Moreira</td>
                                    <td>R$3,00</td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Oraides Rodrigues de Oliveira</td>
                                    <td>R$4,00</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn-link">Ver mais <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
        </div><!--===================================PAINEL1.1-->
        <div class="col-md-4"><!--===================================PAINEL2-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row ftbranco">
                        <div class="col-xs-1">
                            <i class="fa fa-users fa-2x pdr10px"></i>
                        </div>
                        <div class="col-xs-7">
                            <div class="ft20pxb pdl10px">Clientes</div>
                        </div>
                    </div>
                </div>
                <div class="panel-body hmin220px">
                    <div class="container-fluid">
                    <div class="row pdt10px">
                        <a href="<?php echo base_url('cadastro/cadfis'); ?>" class="btn btn-primary btn-lg col-xs-offset-1 col-xs-10">
                            <div class="row">
                                <i class="fa fa-user-plus col-xs-1"></i> <div class="col-xs-2">Cadastrar pessoa física</div>
                            </div>
                        </a>
                    </div>
                    <div class="row pdt15px">
                        <a href="<?php echo base_url('cadastro/cademp'); ?>" class="btn btn-primary btn-lg col-xs-offset-1 col-xs-10">
                            <div class="row">
                                <i class="fa fa-building-o col-xs-1"></i><div class="col-xs-2">Cadastrar empresa</div>
                            </div>
                        </a>
                    </div>
                    <div class="row pdt15px">
                        <a href="<?php echo base_url('clientes/pesquisar');?>" class="btn btn-primary btn-lg col-xs-offset-1 col-xs-10">
                            <div class="row">
                                <i class="fa fa-search col-xs-1"></i><div class="col-xs-2">Pesquisar clientes</div>
                            </div>
                        </a>

                    </div>
                    </div>
                </div>
            </div>
        </div><!--===================================PAINEL1.2-->
        <div class="col-md-4"><!--===================================PAINEL3-->
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row ftbranco">
                        <div class="col-xs-1">
                            <i class="fa fa-shopping-cart fa-2x pdr10px"></i>
                        </div>
                        <div class="col-xs-7">
                            <div class="ft20pxb pdl10px">Lançamentos</div>
                        </div>
                    </div>
                </div>
                <div class="panel-body hmin220px">
                    <div class="container-fluid">
                        <div class="row pdt10px">
                            <a href="#" class="btn btn-green btn-lg col-xs-offset-1 col-xs-10">
                                <div class="row">
                                    <i class="fa fa-cart-plus col-xs-1"></i><div class="col-xs-2">Novo lançamento</div>
                                </div>
                            </a>
                        </div>

                        <div class="row pdt15px">
                            <a href="#" class="btn btn-green btn-lg col-xs-offset-1 col-xs-10">
                                <div class="row">
                                    <i class="fa fa-list col-xs-1"></i><div class="col-xs-2">Ultimos lançamentos</div>
                                </div>
                            </a>
                        </div>

                        <div class="row pdt15px">
                            <a href="#" class="btn btn-green btn-lg col-xs-offset-1 col-xs-10">
                                <div class="row">
                                    <i class="fa fa-search col-xs-1"></i><div class="col-xs-2">Pesquisar lançamento</div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--===================================PAINEL1.3-->
    </div>

    <div class="row">
        <div class="col-md-4"><!--===================================PAINEL2.1-->
            <div class="panel panel-vin">
                <div class="panel-heading">
                    <div class="row ftbranco">
                        <div class="col-xs-1">
                            <i class="fa fa fa-cutlery fa-2x pdr10px"></i>
                        </div>
                        <div class="col-xs-7">
                            <div class="ft20pxb pdl10px">Produtos</div>
                        </div>
                    </div>
                </div>
                <div class="panel-body hmin180px">
                    <div class="container-fluid">
                        <div class="row pdt10px">
                            <a href="<?php echo base_url('cadastro/cadprod'); ?>" class="btn btn-vin btn-lg col-xs-offset-1 col-xs-10">
                                <div class="row">
                                    <i class="fa fa-plus col-xs-1"></i><div class="col-xs-2">Novo produto</div>
                                </div>
                            </a>
                        </div>
                        <div class="row pdt15px">
                            <a href="<?php echo base_url('produtos/listarprodutos') ?>" class="btn btn-vin btn-lg col-xs-offset-1 col-xs-10">
                                <div class="row">
                                    <i class="fa fa-bars col-xs-1"></i><div class="col-xs-2">Listar produtos</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--===================================PAINEL2.1-->
        <div class="col-md-4"><!--===================================PAINEL2.1-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row ftbranco">
                        <div class="col-xs-1">
                            <i class="fa fa-calendar fa-2x pdr10px"></i>
                        </div>
                        <div class="col-xs-7">
                            <div class="ft20pxb pdl10px">Encomendas</div>
                        </div>
                    </div>
                </div>
                <div class="panel-body hmin180px">
                    <div class="container-fluid">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Data</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Felipe Moreira de Oliveira</td>
                                <td>22/02/2015</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Milena Moreira de Oliveira</td>
                                <td>23/02/2015</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#" class="btn-link">Ver mais <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
            </div>

            </div>
        </div><!--===================================PAINEL2.2-->
        <div class="col-md-4"><!--===================================PAINEL2.2-->
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row ftbranco">
                        <div class="col-xs-1">
                            <i class="fa fa-money fa-2x pdr10px"></i>
                        </div>
                        <div class="col-xs-7">
                            <div class="ft20pxb pdl10px">Pagamentos</div>
                        </div>
                    </div>
                </div>
                <div class="panel-body hmin180px">
                    <div class="container-fluid">
                        <div class="row pdt10px">
                            <a href="#" class="btn btn-green btn-lg col-xs-offset-1 col-xs-10">
                                <div class="row">
                                    <i class="fa fa-plus-square col-xs-1"></i><div class="col-xs-2">Registrar pagamento</div>
                                </div>
                            </a>
                        </div>
                        <div class="row pdt15px">
                            <a href="#" class="btn btn-green btn-lg col-xs-offset-1 col-xs-10">
                                <div class="row">
                                    <i class="fa fa-search col-xs-1"></i><div class="col-xs-2">Pesquisar pagamento</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--===================================PAINEL2.2-->
    </div>
</div>
