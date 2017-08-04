<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type extends \core\MY_Controller
{
    public function index()
    {
        $data["title"] = "Types";

        $this->renderView("type", "index", $data);
    }
    public function add()
    {
        $data['title'] = "Type Items";

        $this->session->set_flashdata('warning', 'Please enter required fields...');

        $this->renderView("type", "add", $data);
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->type->delete_entity($id);
        $this->session->set_flashdata('success', 'Deleted successfully ...');

        redirect("type/index");
    }

}

