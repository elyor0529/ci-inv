<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type extends \core\MY_Controller
{
    public function index()
    {
        $data["title"] = "Types";
        $data['rows'] = $this->inventorytype->get_entities();

        $this->renderView("type", "index", $data);
    }

    public function add()
    {
        $data['title'] = "Add Type";

       // $this->session->set_flashdata('warning', 'Please enter required fields...');
        $this->renderView("type", "add", $data);
    }

    public function save()
    {
        if (isset($_REQUEST["save"])) {

            $this->inventorytype->insert_entity();
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
        $data["row"] = $this->inventorytype->get_entity($id);


        $this->renderView("type", "edit", $data);
    }

    public function update()
    {
        $id = $_REQUEST['id'];


        if (isset($_REQUEST['edit'])) {

            $this->inventorytype->update_entity($id);
            $this->session->set_flashdata('success', 'Edited successfully ...');
            redirect("type/index");
        } else {

            $this->session->set_flashdata('error', 'Not validate ...');

            redirect("type/edit/" . $id);
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        if (isset($id)) {
            $this->inventorytype->delete_entity($id);
            $this->session->set_flashdata('success', 'Deleted successfully ...');
        }

        redirect("type/index");
    }


}

