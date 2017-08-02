<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends \core\MY_Controller
{

    public function __construct()
    {
        parent:: __construct();

        $this->load->library("pagination");
    }

    public function index()
    {
        $data["title"] = "Store inventory";
        $config['base_url'] = base_url() . 'inventory/index/';
        $config['total_rows'] = $this->inventory->total_records();
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = '<ul class="pagination paging-3d">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["pager"] = $this->pagination->create_links();
        $data['results'] = $this->inventory->paging_entities($config["per_page"], $page);
        $data['types'] = $this->inventorytype->get_entities();
        $data['statuses'] = $this->inventorystatus->get_entities();

        $this->session->set_flashdata('info', 'Data is loading...');
        $this->renderView("inventory", "index", $data);
    }

    public function add()
    {
        $data['title'] = "Add Items";

        $this->session->set_flashdata('warning', 'Please enter required fields...');

        $data['types'] = $this->inventorytype->get_entities();
        $data['statuses'] = $this->inventorystatus->get_entities();

        $this->renderView("inventory", "add", $data);
    }

    public function save()
    {
        if (isset($_REQUEST["save"])) {
            $this->inventory->insert_entity();
            $this->session->set_flashdata('success', 'Saved successfully ...');

            redirect("inventory/index");
        } else {

            $this->session->set_flashdata('error', 'Not validate ...');

            redirect("inventory/add");
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        if ($id == null) {
            redirect("main");
        }

        $data['title'] = "Edit Items";
        $data["row"] = $this->inventory->get_entity($id);
        $data['types'] = $this->inventorytype->get_entities();
        $data['statuses'] = $this->inventorystatus->get_entities();

        $this->session->set_flashdata('success', 'Edited successfully ...');
        $this->renderView("inventory", "edit", $data);
    }

    public function update()
    {
        $id =$_REQUEST['id'];

        if (isset($_REQUEST['edit'])) {

            $this->inventory->update_entity($id);

            redirect("inventory/index");
        } else {

            $this->session->set_flashdata('error', 'Not validate ...');

            redirect("inventory/edit" . $id);
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->inventory->delete_entity($id);
        $this->session->set_flashdata('success', 'Deleted successfully ...');

        redirect("inventory/index");
    }

}

