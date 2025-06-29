        <?php if ($message = $this->session->flashdata('sucesso')): ?>
            <div class="row">
                <div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="far fa-smile-wink">&nbsp;&nbsp;</i><?php echo $message; ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div> 
            </div><?php endif; ?>

        <?php if ($message = $this->session->flashdata('error')): ?>
            <div class="row">
                <div>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-triangle">&nbsp;&nbsp;</i><?php echo $message; ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div> 
            </div><?php endif; ?>

        <?php if ($message = $this->session->flashdata('info')): ?>
            <div class="row">
                <div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-triangle">&nbsp;&nbsp;</i><?php echo $message; ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" class="text-gray-900">&times;</span>
                        </button>
                    </div>
                </div> 
            </div><?php endif; ?>

