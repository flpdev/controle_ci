<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_cad extends CI_Model{

    public function insercli($dados=NULL){
        if ($dados != NULL):

            $this->db->insert('clientes', $dados);
        	return $this->db->affected_rows();

        endif;
    }


    public function inserpro($dados=NULL){

        $this->db->insert('produtos',$dados);
        return $this->db->affected_rows();
    }
}