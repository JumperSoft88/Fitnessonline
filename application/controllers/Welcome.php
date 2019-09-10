<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    function __Construct(){
        parent::__Construct ();

        $this->load->database(); // load database
        $this->load->model('info_model');

    }

	public function index($index = 0)
	{
		//$this->lang->load("thailand","thailand");
		$lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
		$this->lang->load($lang,$lang);

		$this->load->library('pagination');
		$config['base_url'] = site_url('welcome/index/');
		$config['total_rows'] =$this->db->count_all('fit_questions');
        $config['per_page'] = 50;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

		##$this->pagination->initialize($config);


        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data


        $data['posts'] = $this->get_question_list($config['per_page'], $data['page']);

        $data['pagination'] = $this->pagination->create_links();

        if(!empty($data['posts'])){


            $photo_header = $this->info_model->check_user_photo_header_webboard();

            $data['posts'] = $data['posts'];
            $data['photo_header'] = $photo_header;
            $this->load->view('info',$data);

        } else{
            $this->load->view('info');
        }
    }

    function get_question_list($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('fit_questions');
        $this->db->limit($limit, $start);
        $this->db->order_by("created", "desc");
        $query = $this->db->get();
       # $result = $query->result();


        return $query->result();
    }




	public function change($type)
	{
		$this->session->set_userdata('lang',$type);
		redirect("","refresh");
	}



}
