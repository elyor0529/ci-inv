<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends \core\MY_Controller
{

    public function index()
    {
        $data["title"] = "Users";
        $data['rows'] = $this->user->get_entities();
        $data['roles'] = $this->role->get_entities();

        $this->renderView("user", "index", $data);
    }

    public function add()
    {
        $data["title"] = "Add Users";
        $data['roles'] = $this->role->get_entities();

        $this->renderView("user", "add", $data);
    }

    public function save()
    {
        if (isset($_REQUEST["save"])) {
            $this->user->insert_entity();
            $this->session->set_flashdata('success', 'Saved successfully ...');

            redirect("user/index");
        } else {

            $this->session->set_flashdata('error', 'Not validate ...');

            redirect("user/add");
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->user->delete_entity($id);

        redirect("user/index");
    }

    public function profile_edit()
    {

        $id = $this->uri->segment(3);
        if ($id == null) {
            redirect("dashboard/index");
        }

        $data['title'] = "Edit Profile";
        $data["row"] = $this->user->profile_get_entity($id);

        $this->session->set_flashdata('success', 'Edited successfully ...');
        $this->renderView("dashboard", "profile", $data);
    }

    public function send_info()
    {
        $id = $this->uri->segment(3);

        $this->send_email($id);

        redirect("user/index");
    }

    public function change_status()
    {
        $id = $this->uri->segment(3);

        $this->user->change_status($id);
        $this->session->set_flashdata('success', 'Your status has been changed');

        redirect("user/index");
    }

}

