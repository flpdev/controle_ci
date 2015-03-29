<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller{

    public function __construct(){ /*************************************************************************CONSTRUCT*/
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');

    }

    public function cadfis (){ /*********************************************************LOADER CADASTRO PESSOA FISICA*/

        $this->form_validation->set_rules('nome', '<b>Nome</b>', 'required|max_length[50]|strtolower|ucwords|trim');
        $this->form_validation->set_rules('apelido', '<b>Apelido</b>', 'required|max_length[50]|strtolower|ucwords|trim');
        $this->form_validation->set_rules('email', '<b>E-mail</b>', 'required|valid_email|maxlength[35]|strtolower|strtolower|trim');
        $this->form_validation->set_rules('cpf', '<b>CPF</b>', 'required|min_length[14]|is_unique[clientes.cli_doc]|trim');
        $this->form_validation->set_message('is_unique','Ja existe um cadastro para o %s informado, favor verificar.');
        $this->form_validation->set_rules('cep', '<b>CEP</b>', 'required|min_length[10]|trim');
        $this->form_validation->set_rules('tel1', '<b>Telefone 1</b>', 'required|trim');
        $this->form_validation->set_rules('tel2', 'Telefone 2|trim');
        $this->form_validation->set_rules('estado', '<b>Estado</b>', 'required|strtolower|ucwords|max_length[40]|trim');
        $this->form_validation->set_rules('cidade', '<b>Cidade</b>', 'required|strtolower|ucwords|max_length[50]|trim');
        $this->form_validation->set_rules('bairro', '<b>Bairro</b>', 'required|strtolower|ucwords|max_length[50]|trim');
        $this->form_validation->set_rules('rua', '<b>Rua</b>', 'required|strtolower|ucwords|max_length[50]|trim');
        $this->form_validation->set_rules('numero', '<b>Número</b>', 'required|strtolower|ucwords|max_length[20]|trim');


        if($this->form_validation->run()==true){

            $dados = array(
                'cli_tip'   => '0',
                'cli_name'  => $this->input->post('nome'),
                'cli_nick'  => $this->input->post('apelido'),
                'cli_email' => $this->input->post('email'),
                'cli_doc'   => $this->input->post('cpf'),
                'cli_cep'   => $this->input->post('cep'),
                'cli_tel1'  => $this->input->post('tel1'),
                'cli_tel2'  => $this->input->post('tel2'),
                'cli_est'   => $this->input->post('estado'),
                'cli_cid'   => $this->input->post('cidade'),
                'cli_bai'   => $this->input->post('bairro'),
                'cli_rua'   => $this->input->post('rua'),
                'cli_num'   => $this->input->post('numero'),
            );

            $this->load->model('model_cad');
            $this->model_cad->insercli($dados);

            if ($this->db->affected_rows()){

                $this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso!');
                redirect('cadastro/cadfis');
            };

        }/*FIM FORMVALIDATION*/

        $infpg = array(
            'titulo'=>'Cadastro - Pessoa'
        );

        $this->load->view('head',$infpg);
        $this->load->view('cadfis');
        $this->load->view('footer');

    }/*FIM CADFIS*/

    public function cademp (){ /************************************************************LOADER CADASTRO DE EMPRESA*/

        $this->form_validation->set_rules('rsocial', '<b>Razão Social</b>', 'required|max_length[50]|strtolower|ucwords|trim');
        $this->form_validation->set_rules('nfanta', '<b>Nome Fantasia</b>', 'required|max_length[50]|strtolower|ucwords|trim');
        $this->form_validation->set_rules('email', '<b>E-mail</b>', 'required|valid_email|maxlength[35]|strtolower|trim');
        $this->form_validation->set_rules('cnpj', '<b>CNPJ</b>', 'required|min_length[18]|is_unique[clientes.cli_doc]|trim');
        $this->form_validation->set_message('is_unique','Ja esxiste um cadastro para o %s informado, favor verificar.');
        $this->form_validation->set_rules('cep', '<b>CEP</b>', 'required|min_length[10]|trim');
        $this->form_validation->set_rules('tel1', '<b>Telefone 1</b>', 'required|trim');
        $this->form_validation->set_rules('tel2', 'Telefone 2|trim');
        $this->form_validation->set_rules('estado', '<b>Estado</b>', 'required|strtolower|ucwords|max_length[40]|trim');
        $this->form_validation->set_rules('cidade', '<b>Cidade</b>', 'required|strtolower|ucwords|max_length[50]|trim');
        $this->form_validation->set_rules('bairro', '<b>Bairro</b>', 'required|strtolower|ucwords|max_length[50]|trim');
        $this->form_validation->set_rules('rua', '<b>Rua</b>', 'required|strtolower|ucwords|max_length[50]|trim');
        $this->form_validation->set_rules('numero', '<b>Número</b>', 'required|strtolower|ucwords|max_length[20]|trim');


        if($this->form_validation->run()==true){

            $dados = array(

                'cli_tip'   => '1',
                'cli_name'  => $this->input->post('rsocial'),
                'cli_nick'  => $this->input->post('nfanta'),
                'cli_email' => $this->input->post('email'),
                'cli_doc'   => $this->input->post('cnpj'),
                'cli_cep'   => $this->input->post('cep'),
                'cli_tel1'  => $this->input->post('tel1'),
                'cli_tel2'  => $this->input->post('tel2'),
                'cli_est'   => $this->input->post('estado'),
                'cli_cid'   => $this->input->post('cidade'),
                'cli_bai'   => $this->input->post('bairro'),
                'cli_rua'   => $this->input->post('rua'),
                'cli_num'   => $this->input->post('numero'),
            );

            $this->load->model('model_cad');
            $this->model_cad->insercli($dados);

            if ($this->db->affected_rows()){

                $this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso!');
                redirect('cadastro/cadfis');

            };


        }/*FIM FORMVALIDATION*/

        $infpg = array(
            'titulo'=>'Cadastro - Empresa',
        );

        $this->load->view('head',$infpg);
        $this->load->view('cademp');
        $this->load->view('footer');


    } /*FIM CADEMP*/

    public function cad_nav (){/***************************************************************LOADER CADASTRO NAVBAR*/

        $dados = array(
            'titulo' => 'Cadastro',
        );

        $this->load->view('head',$dados);
        $this->load->view('cad_nav');
        $this->load->view('footer');

    }/*FIM CADNAV*/

    public function cadprod(){ /**************************************************************LOADER CADASTRO PRODDUTO*/

        $this->form_validation->set_rules('nome','<b>Nome</b>','trim|strtolower|ucwords|required|max_length[50]');
        $this->form_validation->set_rules('valor','<b>Valor</b>','trim|required|min_length[4]');
        $this->form_validation->set_rules('desc','<b>Descrição</b>','trim|required|max_length[50]|strtolower|ucfirst');

        if ($this->form_validation->run()==true){

            $dados['prdt_name'] = $this->input->post('nome');
            $dados['prdt_pric'] = $this->input->post('valor');
            $dados['prdt_desc'] = $this->input->post('desc');

            $this->load->model('model_cad');
            $this->model_cad->inserpro($dados);

            if ($this->db->affected_rows()){

                $this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso!');
                redirect('cadastro/cadprod');
            };
        }


        $this->load->model('model_prod');
        $this->load->library('pagination');

        $config['base_url'] = base_url('cadastro/cadprod');
        $config['total_rows'] = count($this->model_prod->listarprod());
        $config['per_page'] = 3;

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

        $lista['produto'] = $this->model_prod->listarprod($qtd, $inicio);
        $lista['paginacao'] = $this->pagination->create_links();

        $infpg['titulo'] = 'Cadastro - Produto';

        $this->load->view('head',$infpg);
        $this->load->view('prdt_cad',$lista);
        $this->load->view('footer');
    } /*FIM CADPROD*/

} /*FIM CONTROLER*/

