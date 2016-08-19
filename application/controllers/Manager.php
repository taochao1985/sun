<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model("sun");
        $this->top();
    }

    function data_assign(){
        $clients = $this->sun->select('clients');
        $data['clients'] = $clients;
        $this->load->view('manager/data_assign',$data);
    }

    function sale_result(){
        $this->load->view('manager/sale_result');
    }

    function data_caculate(){
        $this->load->view('manager/data_caculate');
    }

    function data_assign_change(){
        $clients = $this->sun->select('clients');
        $data['clients'] = $clients;
        $this->load->view('manager/data_assign_change',$data);
    }

    function audio_record_list(){
        $this->load->view('manager/audio_record_list');
    }

    function event_list(){
        $this->load->view('manager/event_list');
    }


    public function index()
    {
        $this->load->view('manager/index');
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
