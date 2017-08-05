<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends \core\MY_Controller
{

    public function index()
    {
        $data["title"] = "Roles";
        $data['roles'] = $this->inventorytype->get_entities();
        $this->renderView("status", "index", $data);

    }

}

