<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Helpers\Helper;
use Core\Model\User;

/**
 * handle the user operation
 */
class Users extends Controller
{

        /**
         * redirect the user
         *
         * @return void
         */
        public function render()
        {
                if (!empty($this->view))
                        $this->view();
        }

        
        
        public function dashboard()
        {
                $this->view = 'dashboard';
        }

        public function create_buyer_form()
        {
                $this->view = 'create_buyer';
        }
        
        public function create_seller_form()
        {
                $this->view = 'create_seller';
        }
        
        public function show_sellers_form()
        {
                $user=new User;
                $this->data=$user->get_sellers();
                $this->view = 'show_sellers_form';
        }
        
        public function show_buyers_form()
        {
                $user=new User;
                $this->data=$user->get_buyers();
                $this->view = 'show_buyers_form';
        }
        
        public function single_seller()
        {
                $user=new User;
                $this->data=$user->get_by_name($_GET['name']);
                $this->view = 'single_seller';
        }
        
        public function single_buyer()
        {
                $user=new User;
                $this->data=$user->get_by_name($_GET['name']);
                $this->view = 'single_buyer';
        }
        
        public function update_seller_form()
        {
                $user=new User;
                $this->data=$user->get_by_name($_GET['name']);
                $this->view = 'update_seller';
        }
        
        public function update_buyer_form()
        {
                $user=new User;
                $this->data=$user->get_by_name($_GET['name']);
                $this->view = 'update_buyer';
        }

     

}
