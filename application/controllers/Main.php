<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends \core\MY_Controller
{

    public function index()
    {
        if ($this->session->has_userdata("logged_in")) {
            redirect("/dashboard/index");
        }

        redirect("/auth/login");
    }

}

   