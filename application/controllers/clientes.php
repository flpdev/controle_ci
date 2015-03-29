<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller{

    public function __construct(){ /*************************************************************************CONSTRUCT*/
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');

    }

    public function listar(){/************************************************************************LISTAR CLIENTES*/

        /*INICIO PAGINAÇÃO*/

        $this->load->model('model_clientes');
        $this->load->library('pagination');

        $config['base_url'] = base_url('clientes/listar');
        $config['total_rows'] = count($this->model_clientes->listarclientes());
        $config['per_page'] = 8;

        $qtd = $config['per_page'];
        ($this->uri->segment(3) != '') ? $inicio = $this->uri->segment(3) : $inicio = 0;

        $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'Primeira';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Ultima';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = false;
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = false;
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $lista['cliente'] = $this->model_clientes->listarclientes($qtd, $inicio);
        $lista['paginacao'] = $this->pagination->create_links();

        /*FIM PAGINAÇÃO*/

        $infpg = array(
            'titulo' => 'Lista de clientes',
        );

        $this->load->view('head',$infpg);
        $this->load->view('cli_list',$lista);
        $this->load->view('footer');

    }/******************************************************************************************FIM LISTAR CLIENTES*/

    public function detalhes(){/********************************************************************DETALHES CLIENTES*/

        $id['usuario'] = $this->uri->segment(3);

        $this->load->model('model_clientes');
        $dados['inf'] = $this->model_clientes->pegaruserporid($id['usuario']);

        $inf = array(
            'titulo' => 'Detalhes',
        );


        $this->load->view('head',$inf);
        $this->load->view('cli_det',$dados);
        $this->load->view('footer');

    }/**************************************************************************************FIM DETALHES CLIENTES*/

    public function editar(){/**********************************************************************EDITAR CLIENTES*/

        $id['usuario'] = $this->uri->segment(3);

        $inf = array(
            'titulo' => 'Detalhes',
        );

        $this->load->model('model_clientes');
        $dados['inf'] = $this->model_clientes->pegaruserporid($id['usuario']);

        $this->form_validation->set_rules('nome', '<b>Nome</b>', 'required|max_length[50]|strtolower|ucwords|trim');
        $this->form_validation->set_rules('apelido', '<b>Apelido</b>', 'required|max_length[50]|strtolower|ucwords|trim');
        $this->form_validation->set_rules('email', '<b>E-mail</b>', 'required|valid_email|maxlength[35]|strtolower|strtolower|trim');
        $this->form_validation->set_rules('cep', '<b>CEP</b>', 'required|min_length[10]|trim');
        $this->form_validation->set_rules('tel1', '<b>Telefone 1</b>', 'required|trim');
        $this->form_validation->set_rules('tel2', 'Telefone 2|trim');
        $this->form_validation->set_rules('estado', '<b>Estado</b>', 'required|strtolower|ucwords|max_length[40]|trim');
        $this->form_validation->set_rules('cidade', '<b>Cidade</b>', 'required|strtolower|ucwords|max_length[50]|trim');
        $this->form_validation->set_rules('bairro', '<b>Bairro</b>', 'required|strtolower|ucwords|max_length[50]|trim');
        $this->form_validation->set_rules('rua', '<b>Rua</b>', 'required|strtolower|ucwords|max_length[50]|trim');
        $this->form_validation->set_rules('numero', '<b>Número</b>', 'required|strtolower|ucwords|max_length[20]|trim');

        if($this->form_validation->run()==true){

            $data = array(

                'cli_id'    => $this->uri->segment(3),
                'cli_name'  => $this->input->post('nome'),
                'cli_nick'  => $this->input->post('apelido'),
                'cli_email' => $this->input->post('email'),
                'cli_doc'   => $this->input->post('doc'),
                'cli_cep'   => $this->input->post('cep'),
                'cli_tel1'  => $this->input->post('tel1'),
                'cli_tel2'  => $this->input->post('tel2'),
                'cli_est'   => $this->input->post('estado'),
                'cli_cid'   => $this->input->post('cidade'),
                'cli_bai'   => $this->input->post('bairro'),
                'cli_rua'   => $this->input->post('rua'),
                'cli_num'   => $this->input->post('numero'),

            );

            $this->load->model('model_clientes');
            $this->model_clientes->updt_user($data);

            if ($this->db->affected_rows()){


                $id['usuario'] = $this->uri->segment(3);

                $this->load->model('model_clientes');
                $dados['inf'] = $this->model_clientes->pegaruserporid($id['usuario']);

                $inf = array(
                    'titulo' => 'Detalhes',
                );

                $this->session->set_flashdata('updateok','Alteração realizada com sucesso!');
                $this->load->view('head',$inf);
                $this->load->view('cli_det',$dados);
                $this->load->view('footer');

            } else {

                $this->load->view('head',$inf);
                $this->load->view('cli_det',$dados);
                $this->load->view('footer');

            }

        } else {

        $this->load->view('head',$inf);
        $this->load->view('cli_edi',$dados);
        $this->load->view('footer');

        }

    }/******************************************************************************************FIM EDITAR CLIENTES*/

    public function pesquisar(){/**********************************************************************PESQUISAR CLIENTES*/

        $this->form_validation->set_rules('pesquisar','<b>Campo pesquisa</b>','trim|max_length[50]|min_length[3]|required');

        if($this->form_validation->run()==true){

            $data = $this->input->post('pesquisar');

            $this->load->model('model_clientes');
            $resultado = $this->model_clientes->pesq($data);


			if ($resultado==null){

	            $this->session->set_flashdata('nenhum','Nenhuma informação foi encontrada para o parâmetro informado, favor realizar novamente a busca.');
	            redirect('clientes/pesquisar');

	        }else{

			    $infpg = array('titulo'=>'Cadastro - Pessoa');
			    $dados['resultado'] = $resultado;

			    $this->load->view('head',$infpg);
			    $this->load->view('cli_pes',$dados);
			    $this->load->view('footer');
    		}

		}else{

	    $infpg = array('titulo'=>'Cadastro - Pessoa');
        $this->load->view('head',$infpg);
        $this->load->view('cli_pes');
        $this->load->view('footer');

    	}
    
    }/******************************************************************************************FIM PESQUISAR CLIENTES*/
}