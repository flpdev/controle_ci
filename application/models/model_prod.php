<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_prod extends CI_Model{

    public function listarprod($qtd = 0, $inicio = 0){

        if($qtd > 0)$this->db->limit($qtd, $inicio);

        $this->db->order_by('prdt_id','desc');
        $query = $this->db->get('produtos');
        return $query->result_array();

    }

    public function pesqprod($data=null){

        $this->db->like('prdt_name',$data);
        $query = $this->db->get('produtos');
        return $query->result_array();

    }

    public function pegarporid($id=null){

        $this->db->where('prdt_id',$id);
        $query = $this->db->get('produtos');
        return $query->row();


    }

    public function update($update = NULL){

        $this->db->where('prdt_id',$update['prdt_id']);
        $this->db->update('produtos',$update);
        return $this->db->affected_rows();

    }

}