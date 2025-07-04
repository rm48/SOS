
<?php $this->load->view('layout/sidebar'); ?>


<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>

        <?php $this->load->view('layout/message'); ?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a title="Cadastrar novo serviço" href="<?php echo base_url('servicos/add'); ?>" class="btn-success btn-sm float-right"><i class="fas fa-plus"></i>&nbsp;Novo</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Serviço</th>
                                <th>Preço</th>
                                <th>Descrição</th>
                                <th class="text-center pr-2">Ativo</th>
                                <th class="text-right pr-4">Ações</th>
                            </tr>
                        </thead>                
                        <tbody>
                            <?php foreach ($servicos as $servico): ?>
                                <tr>
                                    <td><?php echo $servico->servico_id ?></td>
                                    <td><?php echo $servico->servico_nome ?></td>
                                    <td><?php echo 'R$&nbsp;' . $servico->servico_preco ?></td>
                                    <td><?php echo word_limiter($servico->servico_descricao, 10) ?></td>                      
                                    <td class="text-center"><?php echo ($servico->servico_ativo == 1 ? '<span class="badge badge-info btn-sm">Sim</span>' : '<span class="badge badge-warning btn-sm text-gray-900">Não</span>') ?></td>
                                    <td class="text-right">
                                        <a title="Editar" href="<?php echo base_url('servicos/edit/' . $servico->servico_id); ?>" class="btn btn-sm btn-primary"><i class="fas fa-pen"></i></a>
                                        <a title="Excluir" href="javascript(void)" data-toggle="modal" data-target="#servico-<?php echo $servico->servico_id; ?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                                    </td>

                                </tr>


                            <div class="modal fade" id="servico-<?php echo $servico->servico_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tem certeza?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">O serviço será excluído do sistema.</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                                            <a class="btn btn-danger btn-sm" href="<?php echo base_url('servicos/del/' . $servico->servico_id); ?>">Sim</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



