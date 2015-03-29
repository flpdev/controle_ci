<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-body hmin520px">
            <div class="container-fluid">
                <div class="page-header"><h4><i class="fa fa-user"></i> Clientes Cadastrados</h4></div>
                <div class="panel panel-default">

                <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th class="col-md-2">Nome</th>
                                <th class="col-md-1">Telefone</th>
                                <th class="col-md-1">Telefone</th>
                                <th class="col-md-1">E-mail</th>
                                <th class="col-md-1">Tipo</th>
                                <th class="col-md-1">Detalhes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($cliente as $linha):?>
                                    <tr>
                                        <td class="col-md-2"><?php echo $linha->cli_name?></td>
                                        <td class="col-md-1"><?php echo $linha->cli_tel1?></td>
                                        <td class="col-md-1"><?php echo $linha->cli_tel2 ?></td>
                                        <td class="col-md-1"><?php echo $linha->cli_email?></td>
                                        <td class="col-md-1"><?php
                                                if ($linha->cli_tip == 0)
                                                {
                                                    echo 'Pessoa fisica';
                                                }else{
                                                    echo 'Empresa';
                                        };?></td>
                                        <td class="col-md-1">
                                            <a href="<?php echo base_url("clientes/detalhes/$linha->cli_id");?>" class="btn btn-xs btn-info">Detalhes</a>
                                        </td>
                                    </tr>
                            <?php endforeach?>
                        </tbody>

                </table>

                        <div class="col-md-offset-5">
                            <?php echo $paginacao; ?>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>