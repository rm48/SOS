
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('produtos'); ?>">Serviços</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form method="POST" name="form_edit">

                    <p><strong><i class="fas fa-clock">&nbsp;&nbsp;Última alteração:&nbsp;</i></strong><?php echo formata_data_banco_com_hora($produto->produto_data_alteracao); ?></p>

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-box-open">&nbsp;Dados principais</i></legend>

                        <div class="mb-3 row">

                            <div class="col-md-2">
                                <label>Código interno do produto</label>
                                <input type="text" class="form-control-range" name="produto_nome"  value="<?php echo $produto->produto_codigo; ?>"readonly="">                  
                            </div>

                            <div class="col-md-10">
                                <label>Descrição do produto</label>
                                <input type="text" class="form-control-range" name="produto_descricao"  value="<?php echo $produto->produto_descricao; ?>">
                                <?php echo form_error('produto_descricao', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                        <div class="mb-3 row">

                            <div class="col-md-4">
                                <label>Marca</label>
                                <select class="form-control-range" name="produto_marca_id">
                                    <?php foreach ($marcas as $marca): ?>
                                    <option title="<?php echo ($marca->marca_ativa == 0 ? 'Indisponível' : 'Marca ativa'); ?>"value="<?php echo $marca->marca_id ?>" <?php echo ($marca->marca_id == $produto->produto_marca_id ? 'selected' : '') ?> <?php echo ($marca->marca_ativa == 0 ? 'disabled' : ''); ?>><?php echo ($marca->marca_ativa == 0 ? $marca->marca_nome . '&nbsp; -> &nbsp;Inativa' : $marca->marca_nome) ?></option>
                                    <?php endforeach; ?>
                                </select>                               
                            </div>

                            <div class="col-md-4">
                                <label>Categoria</label>
                                <select class="form-control-range" name="produto_marca_id">
                                    <?php foreach ($categorias as $categoria): ?>
                                        <option title="<?php echo ($categoria->categoria_ativa == 0 ? 'Indisponível' : 'Categoria ativa'); ?>"value="<?php echo $categoria->categoria_id ?>" <?php echo ($categoria->categoria_id == $produto->produto_categoria_id ? 'selected' : '') ?> <?php echo ($categoria->categoria_ativa == 0 ? 'disabled' : ''); ?>><?php echo ($categoria->categoria_ativa == 0 ? $categoria->categoria_nome . '&nbsp; -> &nbsp;Inativa' : $categoria->categoria_nome) ?></option>
                                    <?php endforeach; ?>
                                </select>                              
                            </div>

                            <div class="col-md-4">
                                <label>Fornecedor</label>
                                <select class="form-control-range" name="produto_marca_id">
                                    <?php foreach ($fornecedores as $fornecedor): ?>
                                        <option title="<?php echo ($fornecedor->fornecedor_ativo == 0 ? 'Indisponível' : 'Fornecedor ativo'); ?>"value="<?php echo $fornecedor->fornecedor_id ?>" <?php echo ($fornecedor->fornecedor_id == $produto->produto_fornecedor_id ? 'selected' : '') ?> <?php echo ($fornecedor->fornecedor_ativo == 0 ? 'disabled' : ''); ?>><?php echo ($fornecedor->fornecedor_ativo == 0 ? $fornecedor->fornecedor_nome_fantasia . '&nbsp; -> &nbsp;Inativo' : $fornecedor->fornecedor_nome_fantasia) ?></option>
                                    <?php endforeach; ?>
                                </select>                              
                            </div>



                        </div>

                    </fieldset>

                    <div class="mb-3 row">

                        <input type="hidden" name="produto_id" value="<?php echo $produto->produto_id ?>">

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



