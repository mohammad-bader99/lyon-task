<?php

namespace Core\Model;

use Core\Base\Model;


/**
 * handle operations on user table
 */
class User extends Model
{

    public function get_sellers()
    {
        $data = array();
        $result = $this->connection->query("SELECT * FROM users WHERE type='seller';");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                $data[] = $row;
            }
        }
        return $data;
    }
    
    public function get_buyers()
    {
        $data = array();
        $result = $this->connection->query("SELECT * FROM users WHERE type='buyer';");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                $data[] = $row;
            }
        }
        return $data;
    }
    
    public function get_by_name($name)
    {
        $data = array();
        $result = $this->connection->query("SELECT * FROM users WHERE name='$name';");

   
            return $result->fetch_array();
               
    }

    public function delete_by_name($name)
    {
        
            $result = $this->connection->query("DELETE FROM users WHERE name='$name'");  
        

    }
    
}
