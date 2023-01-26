<?php
session_start();


use Core\Model\User;
use Core\Router;



spl_autoload_register(function ($class_name) {
    if (strpos($class_name, 'Core') === false)
        return;
    $class_name = str_replace("\\", '/', $class_name); // \\ = \
    $file_path = __DIR__ . "/" . $class_name . ".php";
    require_once $file_path;
});



Router::get('/','users.dashboard'); 
Router::get('/create-buyer','users.create_buyer_form');
Router::get('/create-seller','users.create_seller_form');
Router::get('/show-sellers','users.show_sellers_form'); 
Router::get('/display_seller','users.single_seller');  
Router::get('/update-seller-form','users.update_seller_form'); 
Router::get('/show_buyers','users.show_buyers_form'); 
Router::get('/display_buyer','users.single_buyer');
Router::get('/update-buyer-form','users.update_buyer_form'); 

Router::post('/api/create-seller', "api.create_seller"); 
Router::post('/api/create-buyer', "api.create_buyer"); 
Router::delete('/api/delete-user', "api.delete_user"); 
Router::put('/api/update-user', "api.update_user"); 



Router::post('/api/create-transaction', "api.create_transaction"); //  Create new transaction using ajax
Router::get('/api/get-transaction', "api.get_transaction"); // Displays all user transaction using ajax
Router::put('/api/update-transaction', "api.update_transaction"); // Update user transaction using ajax
Router::delete('/api/delete-transaction', "api.delete_transaction"); // Delete transaction using ajax



Router::redirect();
