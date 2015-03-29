<div class="container-fluid" xmlns="http://www.w3.org/1999/html">
    <div class="panel panel-default hmin520px">
        <div class="panel-body">
            <div class="container-fluid">
                <div class="page-header"><h4><i class="fa fa-search"></i> Pesquisar cliente</h4></div>

                <form method="post" action="<?php echo base_url('clientes/pesquisar');?>"class="form-horizontal">

                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-5">
                            <?php echo validation_errors('<div class="alerta alerta-danger pdl10px"><i class="fa fa-exclamation-triangle pdr10px"></i>','</div>'); ?>
                        </div>
                    </div>

                    <div class="form-group pdt20px">
                        <label for="pesquisar" class="col-md-offset-1 col-md-2 control-label">Pesquisar</label>
                        <div class="col-md-5">
                            <input type="text" id="pesquisar" name="pesquisar" class="form-control" placeholder="Apelido / Razão Social" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Pesquisar" class="btn btn-primary col-md-offset-4 col-md-3">
                    </div>
                </form>

                <?php if($this->session->flashdata('nenhum')):?>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-5">
                            <div class="alert alert-danger tcenter">
                                <b><i class="fa fa-exclamation-circle"></i><?php echo "  ".$this->session->flashdata('nenhum');?></b>
                            </div>
                        </div>
                    </div>
                <?php endif;?>

                <?php if(isset($resultado)):?>

                <div class="panel panel-default">
                    <table class="table table table-striped ">
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

                        <?php foreach($resultado as $row){?>
                            <tr>
                                <td class='col-md-2'><?php echo$row['cli_name'];?></td>
                                <td class='col-md-1'><?php echo$row['cli_tel1']?></td>
                                <td class='col-md-1'><?php echo$row['cli_tel2']?></td>
                                <td class='col-md-1'><?php echo$row['cli_email']?></td>
                                <td class='col-md-1'><?php
                                    if ($row['cli_tip'] == 0)
                                    {
                                        echo 'Pessoa fisica';
                                    }else{
                                        echo 'Empresa';
                                    };?></td>
                                <td class='col-md-1'>
                                    <a href="<?php echo base_url("clientes/detalhes/".$row['cli_id']);?>" class="btn btn-xs btn-info">Detalhes</a>
                                </td>
                            </tr>
                        <?php }; ?>
                        </tbody>
                    </table>
                </div>

                <?php endif;?>

            </div>
        </div>
    </div>
</div>