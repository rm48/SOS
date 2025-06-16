<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Produtos extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua sessão expirou.');
            redirect('login');
        }

        $this->load->model('produtos_model');
    }

    public function index() {

        $data = array(
            'titulo' => 'Produtos cadastrados',
            'styles' => array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
            ),
            'scripts' => array(
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/datatables/app.js'
            ),
            'produtos' => $this->produtos_model->get_all(),
        );

//        echo '<pre>';
//        print_r($data['produtos']);
//        exit();

        $this->load->view('layout/header', $data);
        $this->load->view('produtos/index');
        $this->load->view('layout/footer');
    }

    public function edit($produto_id = NULL) {

        if (!$produto_id || !$this->core_model->get_by_id('produtos', array('produto_id' => $produto_id))) {
            $this->session->set_flashdata('error', 'Produto não encontrado');
            redirect('produtos');
        } else {
            $this->form_validation->set_rules('produto_descricao', '', 'trim|required|min_length[5]|max_length[145]|callback_check_produto_descricao');
            $this->form_validation->set_rules('produto_unidade', 'Produto unidade', 'trim|required|min_length[2]|max_length[5]');
            $this->form_validation->set_rules('produto_preco_custo', 'Preço de custo', 'trim|required|max_length[45]');
            $this->form_validation->set_rules('produto_preco_venda', 'Preço de venda', 'trim|required|max_length[45]|callback_check_produto_preco_venda');
            $this->form_validation->set_rules('produto_estoque_minimo', 'Estoque mínimo', 'required|greater_than_equal_to[0]');
            $this->form_validation->set_rules('produto_qtde_estoque', 'Quantidade em estoque', 'required');
            $this->form_validation->set_rules('produto_obs', 'Observação', 'max_length[255]');



            if ($this->form_validation->run()) {

                exit('validado');
            } else {

                //Erro de validação

                $data = array(
                    'titulo' => 'Atualizar produto',
                    'scripts' => array(
                        'vendor/mask/jquery.mask.min.js',
                        'vendor/mask/app.js'
                    ),
                    'produto' => $this->core_model->get_by_id('produtos', array('produto_id' => $produto_id)),
                    'marcas' => $this->core_model->get_all('marcas'),
                    'categorias' => $this->core_model->get_all('categorias'),
                    'fornecedores' => $this->core_model->get_all('fornecedores'),
                );

                $this->load->view('layout/header', $data);
                $this->load->view('produtos/edit');
                $this->load->view('layout/footer');
            }
        }
    }

    public function check_produto_descricao($produto_descricao) {

        $produto_id = $this->input->post('produto_id');

        if ($this->core_model->get_by_id('produtos', array('produto_descricao' => $produto_descricao, 'produto_id !=' => $produto_id))) {
            $this->form_validation->set_message('check_produto_descricao', 'Este produto já existe.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    
    public function check_produto_preco_venda($produto_preco_venda){
        $produto_preco_custo = $this->input->post('produto_preco_custo');
        
         if ($produto_preco_custo > $produto_preco_venda) {
            $this->form_validation->set_message('check_produto_preco_venda', 'O preço de venda deve ser igual ou maior que o preço de custo.');
            return FALSE;
        } else {
            return TRUE;
        }
        
    }

}
