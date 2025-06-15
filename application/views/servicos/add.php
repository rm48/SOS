
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('servicos'); ?>">Serviços</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form method="POST" name="form_add">

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-laptop">&nbsp;Dados do serviço</i></legend>

                        <div class="mb-3 row">

                            <div class="col-md-6">
                                <label>Serviço</label>
                                <input type="text" class="form-control-range" name="servico_nome"  value="<?php echo set_value('servico_nome'); ?>">
                                <?php echo form_error('servico_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-3">
                                <label>Preço</label>
                                <input type="text" class="form-control-range money" name="servico_preco"  value="<?php echo set_value('servico_preco'); ?>">
                                <?php echo form_error('servico_preco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-3">
                                <label>Serviço ativo</label>
                                <select class="form-control-range"name="servico_ativo" value="<?php echo $servico->servico_ativo; ?>">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>                 
                            </div>

                        </div>

                        <div class="mb-3 row">

                            <div class="col-md-12">
                                <label>Descrição do serviço</label>
                                <textarea class="form-control-range" name="servico_descricao"><?php echo set_value('servico_descricao'); ?></textarea>
                                <?php echo form_error('servico_descricao', '<small class="form-text text-danger">', '</small>'); ?>
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



