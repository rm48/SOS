
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('clientes'); ?>">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form method="POST" name="form_edit">
                    
                    <p><strong><i class="fas fa-clock">&nbsp;&nbsp;Última alteração:&nbsp;</i></strong><?php echo formata_data_banco_com_hora($cliente->cliente_data_alteracao); ?></p>

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-user-tie">&nbsp;Dados pessoais</i></legend>

                        <div class="mb-3 row">

                            <div class="col-md-4">
                                <label>Nome</label>
                                <input type="text" class="form-control-range" name="cliente_nome"  value="<?php echo $cliente->cliente_nome; ?>">
                                <?php echo form_error('cliente_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>Sobrenome</label>
                                <input type="text" class="form-control-range" name="cliente_sobrenome"  value="<?php echo $cliente->cliente_sobrenome; ?>">
                                <?php echo form_error('cliente_sobrenome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2">
                                <?php if($cliente->cliente_tipo == 1): ?>
                                    <label>CPF</label>
                                    <input type="text" class="form-control-range cpf" name="cliente_cpf"  value="<?php echo $cliente->cliente_cpf_cnpj; ?>">
                                    <?php echo form_error('cliente_cpf', '<small class="form-text text-danger">', '</small>'); ?>
                                <?php else: ?>
                                    <label>CNPJ</label>
                                    <input type="text" class="form-control-range cnpj" name="cliente_cnpj"  value="<?php echo $cliente->cliente_cpf_cnpj; ?>">
                                    <?php echo form_error('cliente_cnpj', '<small class="form-text text-danger">', '</small>'); ?>
                                <?php endif; ?>
                                
                                
                            </div>

                            <div class="col-md-2">
                                <?php if($cliente->cliente_tipo == 1): ?>
                                    <label>RG</label>
                                <?php else: ?>
                                    <label>Inscrição estadual</label>
                                <?php endif; ?>
                                <input type="text" class="form-control-range" name="cliente_rg_ie"  value="<?php echo $cliente->cliente_rg_ie; ?>">
                                <?php echo form_error('cliente_rg_ie', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                        <div class="mb-3 row">

                            <div class="col-md-2">
                                <label>Data nascimento</label>
                                <input type="date" class="form-control-range" name="cliente_data_nascimento" value="<?php echo $cliente->cliente_data_nascimento; ?>">
                                <?php echo form_error('cliente_data_nascimento', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>



                            <div class="col-md-6">
                                <label>E-mail</label>
                                <input type="email" class="form-control-range" name="cliente_email"  value="<?php echo $cliente->cliente_email; ?>">
                                <?php echo form_error('cliente_email', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2">
                                <label>Telefone fixo</label>
                                <input type="text" class="form-control-range sp_celphones" name="cliente_telefone"  value="<?php echo $cliente->cliente_telefone; ?>">
                                <?php echo form_error('cliente_telefone', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2">
                                <label>Telefone celular</label>
                                <input type="text" class="form-control-range sp_celphones" name="cliente_celular"  value="<?php echo $cliente->cliente_celular; ?>">
                                <?php echo form_error('cliente_celular', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>



                    </fieldset>



                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-map-marked-alt">&nbsp;Dados de endereço</i></legend>

                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <label>Endereço</label>
                                <input type="text" class="form-control-range" name="cliente_endereco" value="<?php echo $cliente->cliente_endereco; ?>">
                                <?php echo form_error('cliente_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2">
                                <label>Número</label>
                                <input type="text" class="form-control-range" name="cliente_numero_endereco" value="<?php echo $cliente->cliente_numero_endereco; ?>">
                                <?php echo form_error('cliente_numero_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>Complemento</label>
                                <input type="text" class="form-control-range" name="cliente_complemento" value="<?php echo $cliente->cliente_complemento; ?>">
                                <?php echo form_error('cliente_complemento', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-2">
                                <label>CEP</label>
                                <input type="text" class="form-control-range cep" name="cliente_cep" value="<?php echo $cliente->cliente_cep; ?>">
                                <?php echo form_error('cliente_cep', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>Bairro</label>
                                <input type="text" class="form-control-range" name="cliente_bairro" value="<?php echo $cliente->cliente_bairro; ?>">
                                <?php echo form_error('cliente_bairro', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-5">
                                <label>Cidade</label>
                                <input type="text" class="form-control-range" name="cliente_cidade" value="<?php echo $cliente->cliente_cidade; ?>">
                                <?php echo form_error('cliente_cidade', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-1">
                                <label>UF</label>
                                <input type="text" class="form-control-range uf" name="cliente_estado" value="<?php echo $cliente->cliente_estado; ?>">
                                <?php echo form_error('cliente_estado', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                    </fieldset>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-cog">&nbsp;Configurações</i></legend>

                        <div class="mb-3 row">
                            
                            <div class="col-md-2">
                                <label>Cliente ativo</label>
                                <select class="form-control-range"name="cliente_ativo" value="<?php echo $cliente->cliente_ativo; ?>">
                                    <option value="0" <?php echo ($cliente->cliente_ativo == 0 ? 'selected' : '');?>>Não</option>
                                    <option value="1" <?php echo ($cliente->cliente_ativo == 1 ? 'selected' : '');?>>Sim</option>
                                </select>                 
                            </div>

                            <div class="col-md-10">
                                <label>Observações</label>
                                <textarea class="form-control-range" name="cliente_obs"><?php echo $cliente->cliente_obs; ?></textarea>
                                <?php echo form_error('cliente_obs', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                            <input type="hidden" name="cliente_tipo" value="<?php echo $cliente->cliente_tipo ?>">
                            <input type="hidden" name="cliente_id" value="<?php echo $cliente->cliente_id ?>">

                        </div> 
                    </fieldset>

                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <a title="Voltar" href="<?php echo base_url('clientes'); ?>" class="btn-success btn-sm ml-4">Voltar</a>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



