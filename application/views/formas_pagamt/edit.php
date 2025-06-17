
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('modulo'); ?>">Formas de pagamento</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form method="POST" name="form_edit">
                    
                    <!-- ********************************* -->
                    <!-- controller formas_pagamt: $formap -->
                    <!-- ********************************* -->
                    
                    <p><strong><i class="fas fa-clock">&nbsp;&nbsp;Última alteração:&nbsp;</i></strong><?php echo formata_data_banco_com_hora($formap->forma_pagamento_data_alteracao); ?></p>

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-cash-register">&nbsp;Dados da forma de pagamento</i></legend>

                        <div class="mb-3 row">

                            <div class="col-md-6">
                                <label>Forma de pagamento</label>
                                <input type="text" class="form-control-range" name="forma_pagamento_nome"  value="<?php echo $formap->forma_pagamento_nome; ?>">
                                <?php echo form_error('forma_pagamento_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-3">
                                <label>Forma de pagamento ativa</label>
                                <select class="form-control-range"name="forma_pagamento_ativa" value="<?php echo $formap->forma_ativa; ?>">
                                    <option value="0" <?php echo ($formap->forma_pagamento_ativa == 0 ? 'selected' : ''); ?>>Não</option>
                                    <option value="1" <?php echo ($formap->forma_pagamento_ativa == 1 ? 'selected' : ''); ?>>Sim</option>
                                </select>                 
                            </div>
                            
                            <div class="col-md-3">
                                <label>Aceita parcelamento</label>
                                <select class="form-control-range"name="forma_pagamento_aceita_parc" value="<?php echo $formap->forma_ativa; ?>">
                                    <option value="0" <?php echo ($formap->forma_pagamento_aceita_parc == 0 ? 'selected' : ''); ?>>Não</option>
                                    <option value="1" <?php echo ($formap->forma_pagamento_aceita_parc == 1 ? 'selected' : ''); ?>>Sim</option>
                                </select>                 
                            </div>

                        </div>                        

                    </fieldset>

                    <div class="mb-3 row">

                        <input type="hidden" name="forma_pagamento_id" value="<?php echo $formap->forma_pagamento_id ?>">

                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <a title="Voltar" href="<?php echo base_url($this->router->fetch_class()); ?>" class="btn-success btn-sm ml-4">Voltar</a>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



