<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends \core\MY_Controller
{

    public function index()
    {
        $data["title"] = "Statuses";

        $this->renderView("status", "index", $data);

    }

}

