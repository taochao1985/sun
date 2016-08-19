<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model("sun");
        $this->top();
    }

    public function index()
    {
        $client_id      = $this->uri->segment(3);
        $client_info    = $this->sun->select('clients','*',array('id'=>$client_id));
        $data['client'] = $client_info[0];

        $this->load->view('client/index',$data);
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
