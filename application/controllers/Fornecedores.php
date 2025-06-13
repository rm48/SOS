<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Fornecedores extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua sessão expirou.');
            redirect('login');
        }
    }

    public function index() {

        $data = array(
            'titulo' => 'Fornecedores cadastrados',
            'styles' => array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
            ),
            'scripts' => array(
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/datatables/app.js'
            ),
            'fornecedores' => $this->core_model->get_all('fornecedores'),
        );

//        echo '<pre>';
//        print_r($data['fornecedores']);
//        exit();

        $this->load->view('layout/header', $data);
        $this->load->view('fornecedores/index');
        $this->load->view('layout/footer');
    }

    public function edit($fornecedor_id = NULL) {

        if (!$fornecedor_id || !$this->core_model->get_by_id('fornecedores', array('fornecedor_id' => $fornecedor_id))) {

            $this->session->set_flashdata('error', 'Fornecedor não encontrado');
            redirect(fornecedores);
        } else {
            $data = array(
                'titulo' => 'Atualizar fornecedor',
                'scripts' => array(
                    'vendor/mask/jquery.mask.min.js',
                    'vendor/mask/app.js'
                ),
                'fornecedor' => $this->core_model->get_by_id('fornecedores', array('fornecedor_id' => $fornecedor_id)),
            );

//            echo '<pre>';
//            print_r($data['fornecedor']);
//            exit();

            /*
             *     [fornecedor_id] => 1
              [fornecedor_data_cadastro] => 2025-06-13 18:16:46
              [fornecedor_razao] => Lucio Componentes Ltda
              [fornecedor_nome_fantasia] => Lucio Inc
              [fornecedor_cnpj] => 25.851.950/0001-50
              [fornecedor_ie] =>
              [fornecedor_telefone] =>
              [fornecedor_celular] =>
              [fornecedor_email] => lucioinc&contato.com.br
              [fornecedor_contato] => Fulano de Tal
              [fornecedor_cep] =>
              [fornecedor_endereco] =>
              [fornecedor_numero_endereco] =>
              [fornecedor_bairro] =>
              [fornecedor_complemento] =>
              [fornecedor_cidade] =>
              [fornecedor_estado] =>
              [fornecedor_ativo] => 1
              [fornecedor_obs] =>
              [fornecedor_data_alteracao] => 2025-06-13 18:16:46
             */


//            $this->form_validation->set_rules('first_name', '', 'trim|required');
//            $this->form_validation->set_rules('last_name', '', 'trim|required');
//            $this->form_validation->set_rules('email', '', 'trim|required|valid_email|callback_email_check');
//            $this->form_validation->set_rules('username', '', 'trim|required|callback_username_check');
//            $this->form_validation->set_rules('password', 'Senha', 'min_length[5]|max_length[255]');
//            $this->form_validation->set_rules('confirm_password', 'Confirme', 'matches[password]');
//
//            if ($this->form_validation->run()) {
//
//                $data = elements(
//                        array(
//                            'first_name',
//                            'last_name',
//                            'email',
//                            'username',
//                            'active',
//                            'password'
//                        ), $this->input->post()
//                );
//
//                $data = $this->security->xss_clean($data);
//
//                /* Verifica se foi passado o password */
//                $password = $this->input->post('password');
//
//                if (!$password) {
//
//                    unset($data['password']);
//                }
//                //, array('id' => $usuario_id)
//                if ($this->ion_auth->update($usuario_id, $data)) {
//
//                    $perfil_usuario_db = $this->ion_auth->get_users_groups($usuario_id)->row();
//
//                    $perfil_usuario_post = $this->input->post('perfil_usuario');
//
//                    /* Se for diferente, atualiza o grupo */
//                    if ($perfil_usuario_db->id != $perfil_usuario_post) {
//
//                        $this->ion_auth->remove_from_group($perfil_usuario_db->id, $usuario_id);
//                        $this->ion_auth->add_to_group($perfil_usuario_post, $usuario_id);
//                    }
//
//                    $this->session->set_flashdata('sucesso', 'Dados salvos com sucesso');
//                } else {
//                    $this->session->set_flashdata('error', 'Erro ao salvar os dados');
//                }
//                redirect('usuarios');
//            } else {
//
//                $data = array(
//                    'titulo' => 'Editar usuário',
//                    'usuario' => $this->ion_auth->user($usuario_id)->row(),
//                    'perfil_usuario' => $this->ion_auth->get_users_groups($usuario_id)->row(),
//                );

            $this->load->view('layout/header', $data);
            $this->load->view('fornecedores/edit');
            $this->load->view('layout/footer');
        }
    }

}
