<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model("sun");
        $this->user = $this->top();
    }

    public function index()
    {
        $today_date = date('Y-m-d');
        $client_info    = $this->sun->select('original_lists','*',array('m_id'=>0),1,0,array('id'=>'desc'));
        $temp_client = $client_info[0];
        $this->sun->update('original_lists',array('m_id'=>$this->user->id,'used_date'=>$today_date,'used_time'=>date('H:i:s')),array('id'=>$temp_client->id));
        $data['client'] = $temp_client;
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
