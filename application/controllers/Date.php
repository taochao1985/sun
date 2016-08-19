<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Date extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model("sun");
        $this->top();
    }

    public function index()
    {
        $orders = $this->sun->select('clients');
        $this->load->view('date/index');
    }

    public function not_list()
    {
        $this->load->view('date/not_list');
    }

    function not_date(){
        $clients = $this->sun->select('clients');
        $data['clients'] = $clients;
        $this->load->view('date/not_date',$data);
    }

    function date_detail(){
        $client_id   = $this->uri->segment(3);
        $client_info = $this->sun->select('clients','*',array('id'=>$client_id));

        $this->load->view('date/date_detail');
    }

    function top(){
        $user = $this->session->userdata('member');
        if($user==""){
            //直接跳转到登录页面
            redirect('/main/login');exit;
        }else{
          return $user;
        }
    }
}
