<script>
    $(document).ready(function(){
        $('.tel').mask('(00)0000-0000');
        $('.cep').mask('00.000-000')
        $('.cnpj').mask('00.000.000/0000-00')
        $('.cpf').mask('000.000.000-00')
    });
</script>

<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-body hmin520px">
            <div class="container-fluid">
                <div class="page-header"><h4><i class="fa fa-user"></i> Cadastro pessoa física</h4></div>

                <form method="post" action="<?php echo base_url("clientes/editar/$inf->cli_id"); ?>" class="form-horizontal">

                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-5">
                            <div class="alerta alerta-danger"><i class="pdl10px">* Preenchimento obrigatório</i></div>
                            <?php echo validation_errors('<div class="alerta alerta-danger pdl10px"><i class="fa fa-exclamation-triangle pdr10px"></i>','</div>');?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nome" class="col-md-offset-1 col-md-2 control-label"><?php if ($inf->cli_tip==0){echo'*Nome';}else{echo '*Razão social';};?></label>
                        <div class="col-md-5">
                            <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $inf->cli_name;?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="apelido" class="col-md-offset-1 col-md-2 control-label"><?php if($inf->cli_tip==0){echo'*Apelido';}else{echo'*Nome fantasia*';};?></label>
                        <div class="col-md-5">
                            <input type="text" id="apelido" name="apelido" class="form-control" value="<?php echo $inf->cli_nick;?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-offset-1 col-md-2 control-label">*E-mail</label>
                        <div class="col-md-5">
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo $inf->cli_email;?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="doc" class="col-md-offset-1 col-md-2 control-label"><?php if($inf->cli_tip==0){echo'*CPF';}else{echo'*CNPJ';};?></label>
                        <div class="col-md-2">
                            <input type="text" id="doc" name="doc" class="form-control <?php if($inf->cli_tip==0){echo 'cpf';}else{echo 'cnpj';};?>" value="<?php echo $inf->cli_doc?>" required>
                        </div>

                        <label for="cep" class="col-md-1 control-label">*CEP</label>
                        <div class="col-md-2">
                            <input type="text" id="cep" name="cep" class="form-control cep" value="<?php echo $inf->cli_cep;?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tel1" class="col-md-offset-1 col-md-2 control-label">*Telefone</label>
                        <div class="col-md-2">
                            <input type="text" id="tel1" name="tel1" class="form-control tel" value="<?php echo $inf->cli_tel1;?>" required>
                        </div>

                        <label for="tel2" class="col-md-1 control-label">Telefone</label>
                        <div class="col-md-2">
                            <input type="text" id="tel2" name="tel2" class="form-control tel" value="<?php echo $inf->cli_tel2;?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="estado" class="col-md-offset-1 col-md-2 control-label">*Estado</label>
                        <div class="col-md-2">
                            <input type="text" id="estado" name="estado" class="form-control" value="<?php echo $inf->cli_est;?>" required>
                        </div>

                        <label for="cidade" class="col-md-1 control-label">*Cidade</label>
                        <div class="col-md-2">
                            <input type="text" id="cidade" name="cidade" class="form-control" value="<?php echo $inf->cli_cid;?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bairro" class="col-md-offset-1 col-md-2 control-label">*Bairro</label>
                        <div class="col-md-5">
                            <input type="text" id="bairro" name="bairro" class="form-control" value="<?php echo $inf->cli_bai;?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="rua" class="col-md-offset-1 col-md-2 control-label">*Rua</label>
                        <div class="col-md-3">
                            <input type="text" id="rua" name="rua" class="form-control" value="<?php echo $inf->cli_rua;?>" required>
                        </div>

                        <label for="numero" class="col-md-1 control-label">*Número</label>
                        <div class="col-md-1">
                            <input type="text" id="numero" name="numero" class="form-control" value="<?php echo $inf->cli_num;?>" required>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="row col-md-offset-3">
                            <div class="col-md-1">
                                <a href="<?php echo base_url("clientes/detalhes/$inf->cli_id"); ?>"class="btn btn-primary">Voltar</a>
                            </div>
                            <div class="col-md-1">
                                <input type="submit" value="Gravar alteração" class="btn btn-warning">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>