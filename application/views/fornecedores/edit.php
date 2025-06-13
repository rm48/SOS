
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('fornecedores'); ?>">Fornecedores</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form method="POST" name="form_edit">

                    <p><strong><i class="fas fa-clock">&nbsp;&nbsp;Última alteração:&nbsp;</i></strong><?php echo formata_data_banco_com_hora($fornecedor->fornecedor_data_alteracao); ?></p>

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-user-tag">&nbsp;Dados principais</i></legend>

                        <div class="mb-3 row">

                            <div class="col-md-6">
                                <label>Razão social</label>
                                <input type="text" class="form-control-range" name="fornecedor_razao"  value="<?php echo $fornecedor->fornecedor_razao; ?>">
                                <?php echo form_error('fornecedor_razao', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-6">
                                <label>Nome fantasia</label>
                                <input type="text" class="form-control-range" name="fornecedor_nome_fantasia"  value="<?php echo $fornecedor->fornecedor_nome_fantasia; ?>">
                                <?php echo form_error('fornecedor_nome_fantasia', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                        <div class="mb-3 row">

                            <div class="col-md-4">
                                <label>CNPJ</label>
                                <input type="text" class="form-control-range cnpj" name="fornecedor_cnpj"  value="<?php echo $fornecedor->fornecedor_cnpj; ?>">
                                <?php echo form_error('fornecedor_cnpj', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>Inscrição estadual</label>
                                <input type="text" class="form-control-range" name="fornecedor_ie"  value="<?php echo $fornecedor->fornecedor_ie; ?>">
                                <?php echo form_error('fornecedor_ie', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>Telefone fixo</label>
                                <input type="text" class="form-control-range sp_celphones" name="fornecedor_telefone"  value="<?php echo $fornecedor->fornecedor_telefone; ?>">
                                <?php echo form_error('fornecedor_telefone', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                        <div class="mb-3 row">

                            <div class="col-md-4">
                                <label>Celular</label>
                                <input type="text" class="form-control-range sp_celphones" name="fornecedor_celular"  value="<?php echo $fornecedor->fornecedor_celular; ?>">
                                <?php echo form_error('fornecedor_celular', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>E-mail</label>
                                <input type="email" class="form-control-range" name="fornecedor_email"  value="<?php echo $fornecedor->fornecedor_email; ?>">
                                <?php echo form_error('fornecedor_email', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>Nome do contato</label>
                                <input type="text" class="form-control-range" name="fornecedor_contato"  value="<?php echo $fornecedor->fornecedor_contato; ?>">
                                <?php echo form_error('fornecedor_contato', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                        </div>

                    </fieldset>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-map-marked-alt">&nbsp;Dados de endereço</i></legend>

                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <label>Endereço</label>
                                <input type="text" class="form-control-range" name="fornecedor_endereco" value="<?php echo $fornecedor->fornecedor_endereco; ?>">
                                <?php echo form_error('fornecedor_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2">
                                <label>Número</label>
                                <input type="text" class="form-control-range" name="fornecedor_numero_endereco" value="<?php echo $fornecedor->fornecedor_numero_endereco; ?>">
                                <?php echo form_error('fornecedor_numero_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>Complemento</label>
                                <input type="text" class="form-control-range" name="fornecedor_complemento" value="<?php echo $fornecedor->fornecedor_complemento; ?>">
                                <?php echo form_error('fornecedor_complemento', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-2">
                                <label>CEP</label>
                                <input type="text" class="form-control-range cep" name="fornecedor_cep" value="<?php echo $fornecedor->fornecedor_cep; ?>">
                                <?php echo form_error('fornecedor_cep', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>Bairro</label>
                                <input type="text" class="form-control-range" name="fornecedor_bairro" value="<?php echo $fornecedor->fornecedor_bairro; ?>">
                                <?php echo form_error('fornecedor_bairro', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-5">
                                <label>Cidade</label>
                                <input type="text" class="form-control-range" name="fornecedor_cidade" value="<?php echo $fornecedor->fornecedor_cidade; ?>">
                                <?php echo form_error('fornecedor_cidade', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-1">
                                <label>UF</label>
                                <input type="text" class="form-control-range uf" name="fornecedor_estado" value="<?php echo $fornecedor->fornecedor_estado; ?>">
                                <?php echo form_error('fornecedor_estado', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                    </fieldset>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-cog">&nbsp;Configurações</i></legend>

                        <div class="mb-3 row">

                            <div class="col-md-2">
                                <label>Cliente ativo</label>
                                <select class="form-control-range"name="fornecedor_ativo" value="<?php echo $fornecedor->fornecedor_ativo; ?>">
                                    <option value="0" <?php echo ($fornecedor->fornecedor_ativo == 0 ? 'selected' : ''); ?>>Não</option>
                                    <option value="1" <?php echo ($fornecedor->fornecedor_ativo == 1 ? 'selected' : ''); ?>>Sim</option>
                                </select>                 
                            </div>

                            <div class="col-md-10">
                                <label>Observações</label>
                                <textarea class="form-control-range" name="fornecedor_obs"><?php echo $fornecedor->fornecedor_obs; ?></textarea>
                                <?php echo form_error('fornecedor_obs', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>


                            <input type="hidden" name="fornecedor_id" value="<?php echo $fornecedor->fornecedor_id ?>">

                        </div> 
                    </fieldset>

                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <a title="Voltar" href="<?php echo base_url('fornecedores'); ?>" class="btn-success btn-sm ml-4">Voltar</a>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



