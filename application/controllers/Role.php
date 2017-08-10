<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends \core\MY_Controller
{

    public function index()
    {
        $data["title"] = "Roles";
        $data['rows'] = $this->role->get_entities();
  
        $this->renderView("role", "index", $data);
        
    }

}

