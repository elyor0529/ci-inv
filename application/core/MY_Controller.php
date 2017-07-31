<?php

namespace core;

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends \CI_Controller
{
    public function __construct()
    {
        parent:: __construct();

        $this->load->helper("url");
        $this->load->library('session');
    }

    protected function renderView($controller, $action, $data = null)
    {
        $this->load->view('/shared/header', $data);
        $this->load->view( $controller . '/' . $action, $data);
        $this->load->view('/shared/footer', $data);
    }

    protected function renderViewWhiteoutLayout($controller, $action, $data = null)
    {
        $this->load->view( $controller . '/' . $action, $data);
    }
}