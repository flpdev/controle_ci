
<script>
    $(document).ready(function(){
        $('.valor').mask('000.000.000.000.000,00', {reverse: true});
    });
</script>

<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-body hmin520px">
            <div class="page-header"><h4>Cadastrar produto</h4></div>
            <form method="post" action="<?php echo base_url('cadastro/cadprod')?>" class="form-horizontal">

                <?php if($this->session->flashdata('cadastrook')):?>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-6">
                            <div class="alert alert-success tcenter">
                                <b><i class="fa fa-check-square-o"></i><?php echo "  ".$this->session->flashdata('cadastrook');?></b>
                            </div>
                        </div>
                    </div>
                <?php endif;?>

                <div class="form-group">
                    <div class="col-md-offset-3 col-md-6">
                        <div class="alerta alerta-danger"><i class="pdl10px">* Preenchimento obrigatório</i></div>
                        <?php echo validation_errors('<div class="alerta alerta-danger pdl10px"><i class="fa fa-exclamation-triangle pdr10px"></i>','</div>'); ?>
                    </div>
                </div>


                <div class="form-group">
                    <label for="nome" class="control-label col-md-1 col-md-offset-2">Nome*</label>
                    <div class="col-md-3">
                        <input type="text" name="nome" id="nome" class="form-control">
                    </div>

                    <label for="valor" class="control-label col-md-1">Valor*</label>
                    <div class="col-md-2">
                        <input type="text" name="valor" id="valor" class="form-control valor" placeholder="R$">
                    </div>
                </div>
                <div class="form-group">
                    <label for="desc" class="control-label col-md-1 col-md-offset-2">Descrição*</label>
                    <div class="col-md-6">
                        <input type="text" name="desc" id="desc" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-5">
                        <input type="submit" value="Cadastrar" class="btn btn-primary col-md-3">
                    </div>
                </div>
            </form>

            <div class="panel panel-default col-md-6 col-md-offset-3">
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="col-md-4">Nome</th>
                                <th class="col-md-2">Valor</th>
                                <th class="col-md-1">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($produto as $item):?>
                            <tr>
                                <td><?php echo $item['prdt_name']?></td>
                                <td><?php echo $item['prdt_pric']?></td>
                                <td><a href="<?php echo base_url("produtos/update/".$item['prdt_id'])?>" class="btn btn-info btn-xs">Editar</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="col-md-3 col-md-offset-5">
                <?php echo $paginacao;?>
            </div>

        </div>
    </div>
</div>