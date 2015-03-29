<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_clientes extends CI_Model{

    public function listarclientes($qtd = 0, $inicio = 0){

        if($qtd > 0) $this->db->limit($qtd, $inicio);

    $this->db->order_by('cli_name');
    $query = $this->db->get('clientes');

        return $query->result();


    }

    public function pegaruserporid($id = null){

        $this->db->where('cli_id',$id);
        $query = $this->db->get('clientes');
            return $query->row();

    }

    public  function updt_user($data = null){

        $this->db->where('cli_id',$data['cli_id']);
        $this->db->update('clientes',$data);
            return $this->db->affected_rows();

    }

    public function pesq($data = null){

        $this->db->like('cli_nick',$data);
        $query = $this->db->get('clientes');
            return $query->result_array();

    }

}