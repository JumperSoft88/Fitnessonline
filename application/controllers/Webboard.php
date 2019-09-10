<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: mgi
 * Date: 24/2/2018 AD
 * Time: 22:55
 */

class Webboard extends CI_Controller
{

    function __Construct(){
        parent::__Construct ();

        $this->load->database();
        $this->load->model('info_model');

    }



    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        if ($this->form_validation->run() == FALSE)
        {
            echo 'xxx';
        }
        else
        {
            echo 'yyy';
        }
    }



    public function topic()
    {
        $this->load->view('topic');
    }

    public function submit_topic()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('topic','Topic','trim|required');
        $this->form_validation->set_rules('detail','Detail','required');
        //$this->form_validation->set_rules('name','Name','required');
        //$this->form_validation->set_rules('email','Email','required');
       // $this->form_validation->set_rules('member_type','Member type','required');


        if ($this->form_validation->run() == TRUE) {
            echo 'form validated';

            $data = $arrayName = array(
                'topic' => $_POST['topic'],
                'detail' =>  $_POST['detail'],
                'name' => $_SESSION['username'],
                'email'  => $_SESSION['email'],
                'member_type'  => $_SESSION['member_type'],
                'created' => date('Y-m-d H:i:s')

            );
            $this->db->insert('fit_questions',$data);

            $this->session->set_flashdata("success","Your account has been registered. You can check email for confirm");
            redirect("webboard/index_forum","refresh");
        }

        //load view
       //$this ->load->view('info');

    }

    public function view_post($id)
    {

        $_SESSION['post_id'] = $id;

        //Question
        $this->db->select('*');
        $this->db->from('fit_questions');
        $this->db->where($arrayName = array('id' => $id ));
        $query = $this->db->get();
        $result = $query->result();


        $view= $result[0]->view+1;
        $user_code = $result[0]->name;

        $data = array(
            'view' => $view
        );


        $this->db->where('id',$id);
        $this->db->update('fit_questions', $data);

        //Answer
        $this->db->select('*');
        $this->db->from('fit_answers');
        $this->db->where($arrayName = array('question_id' => $id ));
        $query = $this->db->get();
        $result_answer = $query->result();


        if(!empty($result)){


            if(isset($_SESSION['username'])){

               // $this->db->select('*');
               // $this->db->from('fit_member');
              //  $this->db->where($arrayName = array('member_username' =>  $_SESSION['username']));

              //  $query = $this->db->get();
              //  $result_user = $query->result();

                if(isset($_SESSION['member_type'])){
                    if($_SESSION['member_type'] == 'member'){

                        $_SESSION['answer'] = 'isAnswer';
                        $_SESSION['user_code'] = $user_code;

                        if(!empty($result_answer))
                        {
                            $data['topic_posts'] = $result;
                            $data['answer_posts'] = $result_answer;

                        }else{
                            //echo  $_SESSION['username'];
                            //echo  $_SESSION['member_type'];

                            $data['topic_posts'] = $result;
                            $data['answer_posts'] = 'none';

                        }

                        $photo_header = $this->info_model->check_user_photo_header($user_code);

                        echo  $_SESSION['user_code'];

                        //insert view trainer

                        $data_his = $arrayName = array(
                            'his_username' => $_SESSION['username'],
                            'his_email' =>  $_SESSION['email'],
                            'createdDate' => date('Y-m-d H:i:s'),
                            'his_view_id' => $id,
                            'his_username_trainer'  => $user_code

                        );

                        $this->info_model->insert_history_view_trainer_model($data_his);


                        $data['photo_header'] = $photo_header;

                        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
                        $this->lang->load($lang,$lang);
                        $this->load->view('view_topic',$data);

                    }else{
                       // echo $query->row('name');

                        if($user_code == $_SESSION['username']){
                            $_SESSION['answer'] = 'isAnswer';
                            $_SESSION['user_code'] = $user_code;

                            if(!empty($result_answer))
                            {
                                $data['topic_posts'] = $result;
                                $data['answer_posts'] = $result_answer;

                            }else{
                                //echo  $_SESSION['username'];
                                //echo  $_SESSION['member_type'];

                                $data['topic_posts'] = $result;
                                $data['answer_posts'] = 'none';

                            }

                            $photo_header = $this->info_model->check_user_photo_header($_SESSION['username']);

                            $data['photo_header'] = $photo_header;

                            $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
                            $this->lang->load($lang,$lang);
                            $this->load->view('view_topic',$data);

                        }else{
                            redirect("","refresh");
                        }
                        //implement trainer
                        //echo 'กำลังปรับปรุง '.$id;
                    }

                }

            }else{
                //$data['topic_posts'] = $result;
                //$data['answer_posts'] = 'none';

                //$this->load->view('view_topic',$data);
                $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
                $this->lang->load($lang,$lang);
                $this->load->view('select_logon');
            }
        }

    }


    public function answer_question($question_id)
    {

        $this->load->library('form_validation');

        //$this->form_validation->set_rules('answer_name','Name','trim|required');
        //$this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('detail','Detail','required');

        if ($this->form_validation->run() == TRUE) {
            //echo 'form validated';

            $data = $arrayName = array(
                'name' => $_SESSION['username'],
                'email' =>  $_SESSION['email'],
                'detail' => $_POST['detail'],
                'question_id'  => $question_id,
                'user_code'  => 'test0000',
                'created' => date('Y-m-d')

            );
            $this->db->insert('fit_answers',$data);



            $this->db->select('*');
            $this->db->from('fit_questions');
            $this->db->where($arrayName = array('id' => $question_id ));
            $query = $this->db->get();
            $result = $query->result();


            $reply= $result[0]->reply+1;

            $data = array(
                'reply' => $reply
            );


            $this->db->where('id',$question_id);
            $this->db->update('fit_questions', $data);

            $url = 'webboard/view_post/'.$_SESSION['post_id'];


            redirect($url,"refresh");
        }


    }

    public function index_forum($index = 0)
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

    public function forum_fitness($index = 0)
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


        $data['posts'] = $this->get_question_list_fitness_center($config['per_page'], $data['page']);

        $data['pagination'] = $this->pagination->create_links();

        if(!empty($data['posts'])){


            $photo_header = $this->info_model->check_user_photo_header_webboard();

            $data['posts'] = $data['posts'];
            $data['photo_header'] = $photo_header;
            $this->load->view('forum_fitness_center',$data);

        } else{
            $this->load->view('forum_fitness_center');
        }
    }

    function get_question_list($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('fit_questions');
        $this->db->where('member_type', 'trainer');
        $this->db->limit($limit, $start);
        $this->db->order_by("created", "desc");
        $query = $this->db->get();
        # $result = $query->result();


        return $query->result();
    }

    function get_question_list_fitness_center($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('fit_questions');
        $this->db->where('member_type', 'ftcenter');
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

    public function view_trainer_post(){


    }
}