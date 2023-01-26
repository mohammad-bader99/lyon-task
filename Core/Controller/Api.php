<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Helpers\Helper;
use Core\Model\Transaction;
use Core\Model\Item;
use Core\Model\Reletional;
use Core\Model\User;

class Api extends Controller
{

        protected $request_body;
        protected $http_code = 200;


        protected $response_schema = array(
                "success" => true, // to provide the response status.
                "message_code" => "", // to provide message code for the front-end developer for a better error handling
                "body" => []
        );


        /**
         * constructer of the class
         */
        function __construct()
        {
                $this->request_body = (array) json_decode(file_get_contents("php://input"));
        }


        /**
         * redirect the user
         *
         * @return void
         */
        public function render()
        {
                header("Content-Type: application/json"); // changes the header information
                http_response_code($this->http_code); // set the HTTP Code for the response
                echo json_encode($this->response_schema); // convert the data to json format
        }


        function create_buyer()
        {
                $data=array(
                        "type"=>$this->request_body['type'],
                        "name"=>$this->request_body['name'],
                        "email"=>$this->request_body['email'],
                        "profile_picture"=>$this->request_body['pic'],
                        "password"=>$this->request_body['password'],
                 );

                $user=new User;
                $user->create($data);     

        }
        
        function create_seller()
        {
                $data=array(
                        "type"=>$this->request_body['type'],
                        "name"=>$this->request_body['name'],
                        "email"=>$this->request_body['email'],
                        "profile_picture"=>$this->request_body['pic'],
                        "password"=>$this->request_body['password'],
                        "shop_name"=>$this->request_body['shop_name'],
                        "shop_phone"=>$this->request_body['shop_phone'],
                        "shop_location"=>$this->request_body['shop_location'],
                 );

                $user=new User;
                $user->create($data);     

        }


        function delete_user()
        {
                try {
                        $name=$this->request_body['name'];

                        $user=new User;
                        $user->delete_by_name($name);

                       

                        $this->response_schema['message_code'] = "successful";
                        } catch (\Exception $error) {
                                        $this->response_schema['message_code'] = "delete was not successful";
                                        $this->http_code = 421;
                                }

        }


        function update_user()
        {
                try {
                        $user=new User;
                        $user->update($this->request_body);

                        $this->response_schema['message_code'] = "successful";
                        } catch (\Exception $error) {
                                        $this->response_schema['message_code'] = "update was not successful";
                                        $this->http_code = 421;
                                }

        }
        

        
        
        
        

        


}
