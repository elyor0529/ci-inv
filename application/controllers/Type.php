<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type extends \core\MY_Controller
{
    public function index()
    {
        $data["title"] = "Types";

        $this->renderView("type", "index", $data);
    }

}

