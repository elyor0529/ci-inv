<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends \core\MY_Controller
{

    public function index()
    {
        $data["title"] = "Users";

        $this->renderView("user", "index", $data);
    }

}

