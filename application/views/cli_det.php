

<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-body hmin520px">
            <div class="container-fluid">
                <div class="page-header"><h4><i class="fa fa-user"></i> Cadastro pessoa física</h4></div>

                <form method="post" class="form-horizontal">

                    <div class="form-group">
                        <label for="nome" class="col-md-offset-1 col-md-2 control-label"><?php if ($inf->cli_tip==0){echo'Nome';}else{echo 'Razão social';};?></label>
                        <div class="col-md-5">
                            <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $inf->cli_name;?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="apelido" class="col-md-offset-1 col-md-2 control-label"><?php if($inf->cli_tip==0){echo'Apelido';}else{echo'Nome fantasia';};?></label>
                        <div class="col-md-5">
                            <input type="text" id="apelido" name="apelido" class="form-control" value="<?php echo $inf->cli_nick;?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-offset-1 col-md-2 control-label">E-mail</label>
                        <div class="col-md-5">
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo $inf->cli_email;?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cpf:" class="col-md-offset-1 col-md-2 control-label"><?php if($inf->cli_tip==0){echo'CPF';}else{echo'CNPJ';};?></label>
                        <div class="col-md-2">
                            <input type="text" id="cpf" name="cpf" class="form-control cpf" value="<?php echo $inf->cli_doc?>" disabled>
                        </div>

                        <label for="cep" class="col-md-1 control-label">CEP</label>
                        <div class="col-md-2">
                            <input type="text" id="cep" name="cep" class="form-control cep" value="<?php echo $inf->cli_cep;?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tel1" class="col-md-offset-1 col-md-2 control-label">Telefone</label>
                        <div class="col-md-2">
                            <input type="text" id="tel1" name="tel1" class="form-control tel" value="<?php echo $inf->cli_tel1;?>" disabled>
                        </div>

                        <label for="tel2" class="col-md-1 control-label">Telefone</label>
                        <div class="col-md-2">
                            <input type="text" id="tel2" name="tel2" class="form-control tel" value="<?php echo $inf->cli_tel2;?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="estado" class="col-md-offset-1 col-md-2 control-label">Estado</label>
                        <div class="col-md-2">
                            <input type="text" id="estado" name="estado" class="form-control" value="<?php echo $inf->cli_est;?>" disabled>
                        </div>

                        <label for="cidade" class="col-md-1 control-label">Cidade</label>
                        <div class="col-md-2">
                            <input type="text" id="cidade" name="cidade" class="form-control" value="<?php echo $inf->cli_cid;?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bairro" class="col-md-offset-1 col-md-2 control-label">Bairro</label>
                        <div class="col-md-5">
                            <input type="text" id="bairro" name="bairro" class="form-control" value="<?php echo $inf->cli_bai;?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="rua" class="col-md-offset-1 col-md-2 control-label">Rua</label>
                        <div class="col-md-3">
                            <input type="text" id="rua" name="rua" class="form-control" value="<?php echo $inf->cli_rua;?>" disabled>
                        </div>

                        <label for="numero" class="col-md-1 control-label">Número</label>
                        <div class="col-md-1">
                            <input type="text" id="numero" name="numero" class="form-control" value="<?php echo $inf->cli_num;?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="row col-md-offset-3">
                            <div class="col-md-1">
                                <a href="<?php echo base_url('clientes/listar'); ?>"class="btn btn-primary">Voltar</a>
                            </div>
                            <div class="col-md-1">
                                <a href="<?php echo base_url("clientes/editar/$inf->cli_id"); ?>"class="btn btn-default">Editar cadastro</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
