<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends \core\MY_Controller
{

    public function index()
    {
        $data["title"] = "Report by status code '" . $_REQUEST["status"] . "'";

        $this->renderView("report", "index", $data);
    }

}

