<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model("sun");
    }

    function upload(){
        require_once APPPATH."libraries/UploadHandler.php";
        $upload_handler = new UploadHandler();
    }

    public function index()
    {

        $this->top();
        $this->load->view('main_iframe');
    }

    public function main(){
        $this->load->view('main/index');
    }

    function test(){
        $this->load->view('main/test');
    }

    function login(){
        if ($_POST){
            $member_no = trim($_POST['member_no']);
            $password = trim($_POST['password']);
            $re = $this->sun->select('member','*',array('member_no'=>$member_no,'password'=>md5($password)));
            if ($re){

                $this->session->set_userdata('member',$re[0]);
                $r = array('success'=>'yes');

            }else{
                $r = array('success'=>'no');
            }
            $user = $this->session->userdata('member');
            echo json_encode($r);exit;

        }else{
            $this->load->view('main/login');
        }
    }


    function reset_password(){
        if($_POST){

        }else{
            $this->load->view('main/reset_password');
        }
    }

    function logout(){
        $user = $this->session->userdata('member');
        if($user==""){
            //直接跳转到登录页面
            redirect('main/login');exit;
        }else{
            $this->session->sess_destroy();
            redirect('main/login');exit;
        }
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
