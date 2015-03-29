<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends CI_Controller{


    public function __construct(){/*Construct, carregar helpers/libraries*/
        parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
    }/*Construct, carregar helpers/libraries*/

    public function listarprodutos(){

        if($this->input->post('id')==null){/*Se id igual a null*/

            if($this->input->post('pesq')==null){/*Caso nenhuma busca seja realizada faça*/

                $this->load->model('model_prod');
                $this->load->library('pagination');

                $config['base_url'] = base_url('produtos/listarprodutos');
                $config['total_rows'] = count($this->model_prod->listarprod());
                $config['per_page'] = 6;

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

                $this->load->view('head');
                $this->load->view('prdt_pesq',$lista);
                $this->load->view('footer');

            }else{/*Caso alguma pesquisa seja realizada*/

                $data = $this->input->post('pesq');

                $this->load->model('model_prod');
                $lista['produto'] = $this->model_prod->pesqprod($data);

                if ($lista['produto']==null){/*Se pesquisa retornar null faça*/

                    $lista['erro'] = 'Nenhum resultado encontrado para os dados informados na pesquisa';

                    $this->load->view('head');
                    $this->load->view('prdt_pesq',$lista);
                    $this->load->view('footer');

                }else{/*Se pesquisa retornar algum resultado faça*/

                    $this->load->view('head');
                    $this->load->view('prdt_pesq',$lista);
                    $this->load->view('footer');

                }
            }

        }else{/*se id diferente de null*/


            $id = $this->input->post('id');

            $this->load->model('model_prod');
            $lista['modal'] = $this->model_prod->pegarporid($id);

            /*-------------------------------------------------*/

            $this->load->model('model_prod');
            $this->load->library('pagination');

            $config['base_url'] = base_url('produtos/listarprodutos');
            $config['total_rows'] = count($this->model_prod->listarprod());
            $config['per_page'] = 6;

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

            /*-------------------------------------------------*/

            $this->load->view('head');
            $this->load->view('prdt_pesq',$lista);
            $this->load->view('footer');
        }
    }
}