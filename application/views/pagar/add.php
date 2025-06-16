
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('pagar'); ?>">Contas</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form method="POST" name="form_add">

                    

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-file-excel">&nbsp;Dados da conta</i></legend>


                        <div class="mb-3 row">

                            <div class="col-md-6">
                                <label>Fornecedor</label>
                                <select class="form-control-range" name="conta_pagar_fornecedor_id">
                                    <?php foreach ($fornecedores as $fornecedor): ?>
                                        <option value="<?php echo $fornecedor->fornecedor_id ?>" ><?php echo $fornecedor->fornecedor_nome_fantasia ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('conta_pagar_fornecedor_id', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2">
                                <label>Data de vencimento</label>
                                <input type="date" class="form-control-range" name="conta_pagar_data_vencimento"  value="<?php echo set_value('conta_pagar_data_vencimento'); ?>">
                                <?php echo form_error('conta_pagar_data_vencimento', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                            <div class="col-md-2">
                                <label>Valor da conta</label>
                                <input type="text" class="form-control-range money2" name="conta_pagar_valor"  value="<?php echo set_value('conta_pagar_valor'); ?>">
                                <?php echo form_error('conta_pagar_valor', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                            <div class="col-md-2">
                                <label>Situação</label>
                                <select class="form-control-range" name="conta_pagar_status">                              
                                        <option value="0">Pendente</option>
                                        <option value="1">Paga</option>                                                                                                    
                                </select>                   
                            </div>

                        </div>
                        
                         <div class="mb-3 row">                       
                            <div class="col-md-12">
                                <label>Observações</label>
                                <textarea class="form-control-range" name="conta_pagar_obs"><?php echo set_value('conta_pagar_obs'); ?></textarea>
                                <?php echo form_error('conta_pagar_obs', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
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



