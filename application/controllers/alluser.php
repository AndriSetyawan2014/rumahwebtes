<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alluser extends CI_Controller {
	
	public function index(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://reqres.in/api/users?page=1",
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
        } else {
        return json_decode($response);
        }
    }

    public function tampil(){
        echo '<pre>';
            print_r ($this->index());
        echo '</pre>';
    }
}
