<?php
    class shipping extends CI_Controller
    {
        private $api_key = 'c9dee7bf58a93c289dab14f74738f693';
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
                //CURLOPT_POSTFIELDS => "origin=501&destination=114&weight=1700&courier=jne",
                CURLOPT_HTTPHEADER => array(
                  "content-type: application/json",
                  //"key: $this->api_key"
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
    
?>