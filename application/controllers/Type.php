<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type extends \core\MY_Controller
{
    public function index()
    {
        $data["title"] = "Types";

        $this->renderView("type", "index", $data);
    }
    //members
    public function add()
    {
        $data['title'] = "Add Type";

        $this->session->set_flashdata('warning', 'Please enter required fields...');

        $this->renderView("type", "add", $data);
    }

    public function save()
    {
        if (isset($_REQUEST["save"])) {
            $this->inventory->insert_entity();

            $this->session->set_flashdata('success', 'Saved successfully ...');

            redirect("type/index");
        } else {

            $this->session->set_flashdata('error', 'Not validate ...');

            redirect("type/add");
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        if ($id == null) {
            redirect("type/add");
        }

        $data['title'] = "Edit Items";
        $data["row"] = $this->inventory->get_entity($id);

        $this->session->set_flashdata('success', 'Edited successfully ...');
        $this->renderView("inventory", "edit", $data);
    }

    public function update()
    {
        $id = $_REQUEST['id'];

        echo $id;

        if (isset($_REQUEST['edit'])) {

            $this->inventory->update_entity($id);

            redirect("type/index");
        } else {

            $this->session->set_flashdata('error', 'Not validate ...');

            redirect("type/edit/" . $id);
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->inventory->delete_entity($id);
        $this->session->set_flashdata('success', 'Deleted successfully ...');

        redirect("type/index");
    }


}

