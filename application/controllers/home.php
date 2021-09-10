<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();	
	}
	//public function listUsers(){
    public function allUser($curPage = '1'){
        
		if($this->session->userdata('status') != "login"){
			redirect(site_url('home/login'));
		}

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://reqres.in/api/users?page=$curPage",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
              "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } //else {
        $data['allUser'] = json_decode($response);
        //return json_decode($response);
       // }

       $data['title'] = 'List All User';

       $this->load->view('templates/header', $data);
       $this->load->view('vHome', $data);
       $this->load->view('templates/footer');
    }

    public function registrasi(){
        
		if($this->session->userdata('status') != "login"){
			redirect(site_url('home/login'));
		}

        $data['title'] = 'Registrasi';

       $this->load->view('templates/header', $data);
       $this->load->view('vRegistrasi', $data);
       $this->load->view('templates/footer');
    }

    public function cekLogin(){
        $myEmail = $this->input->post('email');
        $myPass = $this->input->post('paswd');

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://reqres.in/api/login",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "email=$myEmail&password=$myPass",
          CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $data['myResponse'] = json_decode($response);
        } 
       
       
       $data['title'] = 'Halaman Cek Login';

       //$this->load->view('templates/header', $data);
       $this->load->view('vCekLogin', $data);
       //$this->load->view('templates/footer');
    }

    public function login(){
       $data['title'] = 'Halaman Login';

       //$this->load->view('templates/header', $data);
       $this->load->view('vLogin', $data);
       //$this->load->view('templates/footer');
    }

    public function logout(){
        $this->session->sess_destroy();
        $this->login();
    }

    public function addUser(){
        if($this->session->userdata('status') != "login"){
			redirect(site_url('home/login'));
		}

        $myEmail = $this->input->post('email');
        $myPass = $this->input->post('paswd');

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://reqres.in/api/users",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "email=$myEmail&password=$myPass",
          CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $data['myResponse'] = json_decode($response);
        } 
       
       
       //$data['title'] = 'Halaman Cek Login';
       redirect(site_url('home/allUser'));

       //$this->load->view('templates/header', $data);
       //$this->load->view('vCekLogin', $data);
       //$this->load->view('templates/footer');
    }

    public function updateUser(){
        if($this->session->userdata('status') != "login"){
			redirect(site_url('home/login'));
		}

        $myFirstName = $this->input->post('firstName');
        $myLastName = $this->input->post('lastName');
        $myEmail = $this->input->post('email');

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://reqres.in/api/users/",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "first_name=$myFirstName&last_name=$myLastName&email=$myEmail",
          CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $data['myResponse'] = json_decode($response);
        } 
       
       
       //$data['title'] = 'Halaman Cek Login';
       redirect(site_url('home/allUser'));

       //$this->load->view('templates/header', $data);
       //$this->load->view('vCekLogin', $data);
       //$this->load->view('templates/footer');
    }

    public function user($id=1){
        if($this->session->userdata('status') != "login"){
			redirect(site_url('home/login'));
		}

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://reqres.in/api/users/$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
              "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } //else {
        $data['allUser'] = json_decode($response);
        //return json_decode($response);
       // }

        
        $data['title'] = 'Update User';

        $this->load->view('templates/header', $data);
        $this->load->view('vUpdate', $data);
        $this->load->view('templates/footer');

       }

   public function index(){
    redirect(site_url('home/allUser'));
   }
}
