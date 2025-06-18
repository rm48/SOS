<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Ordens_serv extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua sessão expirou.');
            redirect('login');
        }
        
        $this->load->model('ord_serv_model');
    }

    public function index() {

        $data = array(
            'titulo' => 'Ordens de serviço',
            'styles' => array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
            ),
            'scripts' => array(
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/datatables/app.js'
            ),
            'ordens_servicos' => $this->ord_serv_model->get_all(),
        );
        
//        echo '<pre>';
//        print_r($data['ordens_servicos']);
//        exit();

        $this->load->view('layout/header', $data);
        $this->load->view('Ordens_serv/index');
        $this->load->view('layout/footer');
    }
}