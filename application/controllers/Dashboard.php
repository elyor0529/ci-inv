<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends \core\MY_Controller
{

    public function index()
    {
        $data["title"] = "Madinat Jumeirah";

        $this->renderView("dashboard", "index", $data);
    }

}

