
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
                                <label>Código interno</label>
                                <input type="text" class="form-control-range" name="produto_nome"  value="<?php echo $produto->produto_codigo; ?>"readonly="">                  
                            </div>

                            <div class="col-md-10">
                                <label>Descrição do produto</label>
                                <input type="text" class="form-control-range" name="produto_descricao"  value="<?php echo $produto->produto_descricao; ?>">
                                <?php echo form_error('produto_descricao', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                        <div class="mb-3 row">

                            <div class="col-md-3">
                                <label>Marca</label>
                                <select class="form-control-range" name="produto_marca_id">
                                    <?php foreach ($marcas as $marca): ?>
                                        <option value="<?php echo $marca->marca_id ?>" <?php echo ($marca->marca_id == $produto->produto_marca_id ? 'selected' : '') ?>><?php echo $marca->marca_nome; ?></option>
                                    <?php endforeach; ?>
                                </select>                               
                            </div>

                            <div class="col-md-3">
                                <label>Categoria</label>
                                <select class="form-control-range" name="produto_marca_id">
                                    <?php foreach ($categorias as $categoria): ?>
                                        <option value="<?php echo $categoria->categoria_id ?>" <?php echo ($categoria->categoria_id == $produto->produto_categoria_id ? 'selected' : '') ?>><?php echo $categoria->categoria_nome ?></option>
                                    <?php endforeach; ?>
                                </select>                              
                            </div>

                            <div class="col-md-3">
                                <label>Fornecedor</label>
                                <select class="form-control-range" name="produto_marca_id">
                                    <?php foreach ($fornecedores as $fornecedor): ?>
                                        <option value="<?php echo $fornecedor->fornecedor_id ?>" <?php echo ($fornecedor->fornecedor_id == $produto->produto_fornecedor_id ? 'selected' : '') ?>><?php echo $fornecedor->fornecedor_nome_fantasia ?></option>
                                    <?php endforeach; ?>
                                </select>                              
                            </div>

                            <div class="col-md-3">
                                <label>Produto unidade</label>
                                <input type="text" class="form-control-range" name="produto_unidade"  value="<?php echo $produto->produto_unidade; ?>">
                                <?php echo form_error('produto_unidade', '<small class="form-text text-danger">', '</small>'); ?>

                            </div>

                        </div>


                    </fieldset>

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-funnel-dollar">&nbsp;Precificação e estoque</i></legend>

                        <div class="mb-3 row">                         

                            <div class="col-md-3">
                                <label>Preço de custo</label>
                                <input type="text" class="form-control-range money" name="produto_preco_custo"  value="<?php echo $produto->produto_preco_custo; ?>">
                                <?php echo form_error('produto_preco_custo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-3">
                                <label>Preço de venda</label>
                                <input type="text" class="form-control-range money" name="produto_preco_venda"  value="<?php echo $produto->produto_preco_venda; ?>">
                                <?php echo form_error('produto_preco_venda', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-3">
                                <label>Estoque mínimo</label>
                                <input type="number" class="form-control-range" name="produto_estoque_minimo"  value="<?php echo $produto->produto_estoque_minimo; ?>">
                                <?php echo form_error('produto_estoque_minimo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-3">
                                <label>Quantidade em estoque</label>
                                <input type="number" class="form-control-range" name="produto_qtde_estoque"  value="<?php echo $produto->produto_qtde_estoque; ?>">
                                <?php echo form_error('produto_qtde_estoque', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-3">
                                <label>Produto ativo</label>
                                <select class="form-control-range" name="produto_ativo">
                                    <option value="0" <?php echo ($produto->produto_ativo == 0 ? 'selected' : ''); ?>>Não</option>
                                    <option value="1" <?php echo ($produto->produto_ativo == 1 ? 'selected' : ''); ?>>Sim</option>
                                </select>                               
                            </div>
                            
                            <div class="col-md-9">
                                <label>Observações</label>
                                <textarea class="form-control-range" name="produto_obs"><?php echo $produto->produto_obs; ?></textarea>
                                <?php echo form_error('produto_obs', '<small class="form-text text-danger">', '</small>'); ?>
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



