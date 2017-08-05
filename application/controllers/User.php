<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends \core\MY_Controller
{

    public function index()
    {
        $data["title"] = "Users";

        $this->renderView("user", "index", $data);
    }
    public function add()
    {
        $data['title'] = "Add Users";

        $this->renderView("user", "add", $data);
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->type->delete_entity($id);

        redirect("user/index");
    }

}

