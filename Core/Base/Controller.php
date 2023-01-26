<?php

namespace Core\Base;

use Core\Helpers\Helper;
use Core\Model\User;


/**
 * control the opearation 
 */
abstract class Controller
{
    abstract public function render();

    protected $view = null;
    protected $data = array();


    /**
     * reqirect the user to his/her view
     *
     * @return void
     */
    protected function view()
    {
        new View($this->view, $this->data);
    }


}
