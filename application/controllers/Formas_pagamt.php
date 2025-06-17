<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Formas_pagamt extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua sessão expirou.');
            redirect('login');
        }
    }

    public function index() {

        $data = array(
            'titulo' => 'Formas de pagamento',
            'styles' => array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
            ),
            'scripts' => array(
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/datatables/app.js'
            ),
            'formas_pagamentos' => $this->core_model->get_all('formas_pagamentos'),
        );
        
//        echo '<pre>';
//        print_r($data['formas_de_pagamento']);
//        exit();

        $this->load->view('layout/header', $data);
        $this->load->view('formas_pagamt/index');
        $this->load->view('layout/footer');
    }
}