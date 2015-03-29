<?php if(isset($modal)!=false):?><!-- Se variável modal existir executar modal -->

<script type="text/javascript" xmlns="http://www.w3.org/1999/html">

    $(document).ready(function(){
        $('#myModal').modal('show');
    });

    $(document).ready(function(){
        $('.valor').mask('000.000.000.000.000,00', {reverse: true});
    });

</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar produto</h4>
            </div>
            <div class="modal-body">

                <!-- /////////////////////////////////////////////////////// -->
                <form method="post" action="<?php echo base_url('cadastro/cadprod')?>" class="form-horizontal">

                    <div class="form-group">
                        <label for="nome" class="control-label col-md-3">Nome*</label>
                        <div class="col-md-5">
                            <input type="text" value="<?php echo $modal->prdt_name?>" name="nome" id="nome" class="form-control">
                        </div>

                        <label for="valor" class="control-label col-md-1">Valor*</label>
                        <div class="col-md-2">
                            <input type="text" value="<?php echo $modal->prdt_pric?>" name="valor" id="valor" class="form-control valor" placeholder="R$">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="desc" class="control-label col-md-3">Descrição*</label>
                        <div class="col-md-8">
                            <input type="text" value="<?php echo $modal->prdt_desc?>" name="desc" id="desc" class="form-control">
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////// -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Gravar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php endif?><!-- Se variável modal existir executar modal -->

<div class="container-fluid">

    <div class="panel panel-default hmin520px">
        <div class="panel-body">
            <div class="page-header"><h4>Produtos cadastrados</h4></div>

            <form class="form-horizontal col-md-offset-3" method="post" action="<?php echo base_url('produtos/listarprodutos') ?>">
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="text" name="pesq" id="pesq" class="form-control" placeholder="Nome produto">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Pesquisar">
                </div>
            </form>
        </div>

        <?php if(isset($erro)==true){ ?>
            <div class="container-fluid">
                <div class="alert alerta-danger col-md-7 col-md-offset-2"><div class="tcenter"><i class="fa fa-exclamation-circle"></i><?php echo' '.$erro ?></div></div>
            </div>
        <?php }else{ ?>

        <div class="col-md-8 col-md-offset-2 container-fluid">
            <div class="panel panel-default col-md-12">
            <table class="table table-striped col-md-12"><!-- Tabela produtos default -->
                <thead>
                    <tr>
                        <th class="col-md-7">Nome</th>
                        <th class="col-md-3">Valor</th>
                        <th class="col-md-2">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($produto as $linha):?>
                        <tr>
                            <td><?php echo $linha['prdt_name']?></td>
                            <td><?php echo $linha['prdt_pric'] ?></td>
                            <form method="post" action="<?php echo base_url('produtos/listarprodutos')?>">
                                <td>
                                    <input type="hidden" name="id" value="<?php echo $linha['prdt_id']?>">
                                    <input type="submit" value="Editar"class="btn btn-xs btn-primary"
                                </td>
                            </form>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table><!-- Tabela produtos default -->
            </div>
                <?php if(isset($paginacao)!=null):?>
                    <div class="col-md-offset-5">
                        <?php echo $paginacao; ?>
                    </div>
                <?php endif?>
        <?php } ?>
        </div>
    </div>

</div><!-- fim panel principal-->