<script>
    $(document).ready(function(){
    $('.tel').mask('(00)0000-0000');
    $('.cep').mask('00.000-000')
    $('.cnpj').mask('00.000.000/0000-00')
    });
</script>

<div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body hmin520px">
                <div class="container-fluid">
                    <div class="page-header"><h4><i class="fa fa-building"></i> Cadastro empresa</h4></div>

                    <form method="post" action="<?php base_url('cadastro/cademp'); ?>" class="form-horizontal">

                        <?php if($this->session->flashdata('cadastrook')):?>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-5">
                                    <div class="alert alert-success tcenter">
                                        <b><i class="fa fa-check-square-o"></i><?php echo "  ".$this->session->flashdata('cadastrook');?></b>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>

                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-5">
                                <div class="alerta alerta-danger"><i class="pdl10px">* Preenchimento obrigatório</i></div>
                                <?php echo validation_errors('<div class="alerta alerta-danger pdl10px"><i class="fa fa-exclamation-triangle pdr10px"></i>','</div>'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rsocial" class="col-md-offset-1 col-md-2 control-label">Razão social*</label>
                            <div class="col-md-5">
                                <input type="text" id="rsocial" name="rsocial" class="form-control" value="<?php echo set_value('rsocial'); ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nfanta" class="col-md-offset-1 col-md-2 control-label">Nome fantasia*</label>
                            <div class="col-md-5">
                                <input type="text" id="nfanta" name="nfanta" class="form-control" value="<?php echo set_value('nfanta'); ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-offset-1 col-md-2 control-label">E-mail*</label>
                            <div class="col-md-5">
                                <input type="email" id="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cnpj" class="col-md-offset-1 col-md-2 control-label">CNPJ*</label>
                            <div class="col-md-2">
                                <input type="text" id="cnpj" name="cnpj" class="form-control cnpj" value="<?php echo set_value('cnpj'); ?>" required/>
                            </div>

                            <label for="cep" class="col-md-1 control-label">CEP*</label>
                            <div class="col-md-2">
                                <input type="text" id="cep" name="cep" class="form-control cep" value="<?php echo set_value('cep'); ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tel1" class="col-md-offset-1 col-md-2 control-label">Telefone*</label>
                            <div class="col-md-2">
                                <input type="text" id="tel1" name="tel1" placeholder="Telefone 1" class="form-control tel" value="<?php echo set_value('tel1'); ?>" required/>
                            </div>

                            <label for="tel2" class="col-md-1 control-label">Telefone</label>
                            <div class="col-md-2">
                                <input type="text" id="tel2" name="tel2" placeholder="Telefone 2" class="form-control tel" value="<?php echo set_value('tel2'); ?>" required/>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="estado" class="col-md-offset-1 col-md-2 control-label">Estado*</label>
                            <div class="col-md-2">
                                <input type="text" id="estado" name="estado" class="form-control" value="<?php echo set_value('estado'); ?>" required/>
                            </div>

                            <label for="cidade" class="col-md-1 control-label">Cidade*</label>
                            <div class="col-md-2">
                                <input type="text" id="cidade" name="cidade" class="form-control" value="<?php echo set_value('cidade'); ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bairro" class="col-md-offset-1 col-md-2 control-label">Bairro*</label>
                            <div class="col-md-5">
                                <input type="text" id="bairro" name="bairro" class="form-control" value="<?php echo set_value('bairro'); ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rua" class="col-md-offset-1 col-md-2 control-label">Rua*</label>
                            <div class="col-md-3">
                                <input type="text" id="rua" name="rua" class="form-control" value="<?php echo set_value('rua'); ?>" required/>
                            </div>

                            <label for="numero" class="col-md-1 control-label">Número*</label>
                            <div class="col-md-1">
                                <input type="text" id="numero" name="numero" class="form-control" value="<?php echo set_value('numero'); ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Cadastrar" class="btn btn-primary col-md-offset-4 col-md-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
