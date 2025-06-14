
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('vendedores'); ?>">Vendedores</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form method="POST" name="form_edit">

                    <p><strong><i class="fas fa-clock">&nbsp;&nbsp;Última alteração:&nbsp;</i></strong><?php echo formata_data_banco_com_hora($vendedor->vendedor_data_alteracao); ?></p>

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-user-secret">&nbsp;Dados pessoais</i></legend>

                        <div class="mb-3 row">

                            <div class="col-md-6">
                                <label>Nome completo</label>
                                <input type="text" class="form-control-range" name="vendedor_nome_completo"  value="<?php echo $vendedor->vendedor_nome_completo; ?>">
                                <?php echo form_error('vendedor_nome_completo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-3">
                                <label>CPF</label>
                                <input type="text" class="form-control-range cpf" name="vendedor_cpf"  value="<?php echo $vendedor->vendedor_cpf; ?>">
                                <?php echo form_error('vendedor_cpf', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                            <div class="col-md-3">
                                <label>RG</label>
                                <input type="text" class="form-control-range" name="vendedor_rg"  value="<?php echo $vendedor->vendedor_rg; ?>">
                                <?php echo form_error('vendedor_rg', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                        <div class="mb-3 row">
                            
                            <div class="col-md-6">
                                <label>E-mail</label>
                                <input type="email" class="form-control-range" name="vendedor_email"  value="<?php echo $vendedor->vendedor_email; ?>">
                                <?php echo form_error('vendedor_email', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                            <div class="col-md-3">
                                <label>Telefone fixo</label>
                                <input type="text" class="form-control-range sp_celphones" name="vendedor_telefone"  value="<?php echo $vendedor->vendedor_telefone; ?>">
                                <?php echo form_error('vendedor_telefone', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                            <div class="col-md-3">
                                <label>Celular</label>
                                <input type="text" class="form-control-range sp_celphones" name="vendedor_celular"  value="<?php echo $vendedor->vendedor_celular; ?>">
                                <?php echo form_error('vendedor_celular', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>


                    </fieldset>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-map-marked-alt">&nbsp;Dados de endereço</i></legend>

                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <label>Endereço</label>
                                <input type="text" class="form-control-range" name="vendedor_endereco" value="<?php echo $vendedor->vendedor_endereco; ?>">
                                <?php echo form_error('vendedor_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2">
                                <label>Número</label>
                                <input type="text" class="form-control-range" name="vendedor_numero_endereco" value="<?php echo $vendedor->vendedor_numero_endereco; ?>">
                                <?php echo form_error('vendedor_numero_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>Complemento</label>
                                <input type="text" class="form-control-range" name="vendedor_complemento" value="<?php echo $vendedor->vendedor_complemento; ?>">
                                <?php echo form_error('vendedor_complemento', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-2">
                                <label>CEP</label>
                                <input type="text" class="form-control-range cep" name="vendedor_cep" value="<?php echo $vendedor->vendedor_cep; ?>">
                                <?php echo form_error('vendedor_cep', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>Bairro</label>
                                <input type="text" class="form-control-range" name="vendedor_bairro" value="<?php echo $vendedor->vendedor_bairro; ?>">
                                <?php echo form_error('vendedor_bairro', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-5">
                                <label>Cidade</label>
                                <input type="text" class="form-control-range" name="vendedor_cidade" value="<?php echo $vendedor->vendedor_cidade; ?>">
                                <?php echo form_error('vendedor_cidade', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-1">
                                <label>UF</label>
                                <input type="text" class="form-control-range uf" name="vendedor_estado" value="<?php echo $vendedor->vendedor_estado; ?>">
                                <?php echo form_error('vendedor_estado', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                    </fieldset>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-cog">&nbsp;Configurações</i></legend>

                        <div class="mb-3 row">

                            <div class="col-md-3">
                                <label>Vendedor ativo</label>
                                <select class="form-control-range"name="vendedor_ativo" value="<?php echo $vendedor->vendedor_ativo; ?>">
                                    <option value="0" <?php echo ($vendedor->vendedor_ativo == 0 ? 'selected' : ''); ?>>Não</option>
                                    <option value="1" <?php echo ($vendedor->vendedor_ativo == 1 ? 'selected' : ''); ?>>Sim</option>
                                </select>                 
                            </div>
                            
                            <div class="col-md-3">
                                <label>Código</label>
                                <input type="text" class="form-control-range" name="vendedor_codigo" value="<?php echo $vendedor->vendedor_codigo; ?>"readonly="">
                                <?php echo form_error('vendedor_codigo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-6">
                                <label>Observações</label>
                                <textarea class="form-control-range" name="vendedor_obs"><?php echo $vendedor->vendedor_obs; ?></textarea>
                                <?php echo form_error('vendedor_obs', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>


                            <input type="hidden" name="vendedor_id" value="<?php echo $vendedor->vendedor_id ?>">

                        </div> 
                    </fieldset>

                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <a title="Voltar" href="<?php echo base_url($this->router->fetch_class()); ?>" class="btn-success btn-sm ml-4">Voltar</a>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



