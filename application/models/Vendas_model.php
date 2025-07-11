<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Vendas_model extends CI_Model {

    public function get_all() {
        $this->db->select([
            'vendas.*',
            'clientes.cliente_id',
            'CONCAT(clientes.cliente_nome, " ", clientes.cliente_sobrenome) as cliente_nome_completo',
            'vendedores.vendedor_id',
            'vendedores.vendedor_nome_completo',
            'formas_pagamentos.forma_pagamento_id',
            'formas_pagamentos.forma_pagamento_nome as forma_pagamento',
        ]);

        $this->db->join('clientes', 'cliente_id = venda_cliente_id', 'LEFT');
        $this->db->join('vendedores', 'vendedor_id = venda_vendedor_id', 'LEFT');
        $this->db->join('formas_pagamentos', 'forma_pagamento_id = venda_forma_pagamento_id', 'LEFT');

        return $this->db->get('vendas')->result();
    }
    
    public function get_by_id($venda_id = NULL) {
        $this->db->select([
            'vendas.*',
            'clientes.cliente_id',
            'CONCAT(clientes.cliente_nome, " ", clientes.cliente_sobrenome) as cliente_nome_completo',
            'vendedores.vendedor_id',
            'vendedores.vendedor_nome_completo',
            'formas_pagamentos.forma_pagamento_id',
            'formas_pagamentos.forma_pagamento_nome as forma_pagamento',
        ]);

        $this->db->join('clientes', 'cliente_id = venda_cliente_id', 'LEFT');
        $this->db->join('vendedores', 'vendedor_id = venda_vendedor_id', 'LEFT');
        $this->db->join('formas_pagamentos', 'forma_pagamento_id = venda_forma_pagamento_id', 'LEFT');

        return $this->db->get('vendas')->row();
    }

    public function get_all_produtos_by_venda($venda_id = NULL) {

        if ($venda_id) {

            $this->db->select([
                'venda_produtos.*',
                'produtos.produto_descricao',
            ]);

            $this->db->join('produtos', 'produto_id = venda_produto_id_produto', 'LEFT');

            $this->db->where('venda_produto_id_venda', $venda_id);

            return $this->db->get('venda_produtos')->result();
        }
    }

    public function delete_old_products($venda_id = NULL) {

        if ($venda_id) {

            $this->db->delete('venda_produtos', array('venda_produto_id_venda' => $venda_id));
        }
    }

    public function get_all_produtos($venda_id = NULL){
        
        if($venda_id){
            
            $this->db->select([
                'venda_produtos.*',
                'FORMAT(SUM(REPLACE(venda_produto_valor_unitario, ",", "")), 2) as venda_produto_valor_unitario',
                'FORMAT(SUM(REPLACE(venda_produto_valor_total, ",", "")), 2) as venda_produto_valor_total',
                'FORMAT(SUM(REPLACE(venda_produto_valor_total, ",", "")), 2) as venda_valor_total',
                'produtos.produto_id',
                'produtos.produto_descricao',
            ]);
            
            $this->db->join('produtos', 'produto_id = venda_produto_id_produto', 'LEFT');
            $this->db->where('venda_produto_id_produto', $venda_id);
            
            $this->db->group_by('venda_produto_id_produto');
            
            return $this->db->get('venda_produtos')->result();
        }
    }
    
    public function get_valor_final_venda($venda_id = NULL) {
        
        if($venda_id){
            
            $this->db->select([
                 'FORMAT(SUM(REPLACE(venda_produto_valor_total, ",", "")), 2) as venda_valor_total',
            ]);
            
            $this->db->join('produtos', 'produto_id = venda_produto_id_produto', 'LEFT');
            $this->db->where('venda_produto_id_venda', $venda_id);
        }
        
        return $this->db->get('ordem_tem_servicos')->row();
    }

}
