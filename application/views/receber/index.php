
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
                <a title="Cadastrar nova conta" href="<?php echo base_url('receber/add'); ?>" class="btn-success btn-sm float-right"><i class="fas fa-plus"></i>&nbsp;Nova</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cliente</th>
                                <th>Valor da conta</th>
                                <th>Data de vencimento</th>
                                <th>Data de pagamento</th>
                                <th class="text-center pr-2">Situação</th>
                                <th class="text-right pr-4">Ações</th>
                            </tr>
                        </thead>                
                        <tbody>
                            <?php foreach ($contas_receber as $conta): ?>
                                <tr>
                                    <td><?php echo $conta->conta_receber_id ?></td>
                                    <td><?php echo $conta->cliente_nome ?></td>
                                    <td><?php echo 'R$&nbsp;' . $conta->conta_receber_valor ?></td>
                                    <td><?php echo formata_data_banco_sem_hora($conta->conta_receber_data_vencimento); ?></td> 
                                    <td><?php echo ($conta->conta_receber_status == 1 ? formata_data_banco_com_hora($conta->conta_receber_data_pagamento) : 'Aguardando pagamento') ?></td>

                                    <td class="text-center">

                                        <?php
                                        if ($conta->conta_receber_status == 1) {
                                            echo '<span class="badge badge-success btn-sm">Paga</span>';
                                        } else if (strtotime($conta->conta_receber_data_vencimento) > strtotime(date('Y-m-d'))) {
                                            echo '<span class="badge badge-dark btn-sm">A pagar</span>';
                                        } else if (strtotime($conta->conta_receber_data_vencimento) == strtotime(date('Y-m-d'))) {
                                            echo '<span class="badge badge-warning btn-sm text-gray-900">Vence hoje</span>';
                                        } else {
                                            echo '<span class="badge badge-danger btn-sm">Vencida</span>';
                                        }
                                        ?>
                                    </td>
                                    <td class="text-right">
                                        <a title="Editar" href="<?php echo base_url('receber/edit/' . $conta->conta_receber_id); ?>" class="btn btn-sm btn-primary"><i class="fas fa-pen"></i></a>
                                        <a title="Excluir" href="javascript(void)" data-toggle="modal" data-target="#conta-<?php echo $conta->conta_receber_id; ?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                                    </td>

                                </tr>


                            <div class="modal fade" id="conta-<?php echo $conta->conta_receber_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tem certeza?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">A conta será excluída do sistema.</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                                            <a class="btn btn-danger btn-sm" href="<?php echo base_url('receber/del/' . $conta->conta_receber_id); ?>">Sim</a>
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



