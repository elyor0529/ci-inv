<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends \core\MY_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->library("form_validation");
        $this->load->library("pagination");
    }

    public function index()
    {
        //pager
        $config['base_url'] = base_url() . 'inventory/index/';
        $config['total_rows'] = $this->mci->total();
        $config['per_page'] = 5;
        $config["uri_segment"] = 3;
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination" style="-webkit-box-shadow: 6px 3px 71px -2px rgba(0,0,0,1);
																  -moz-box-shadow: 6px 3px 71px -2px rgba(0,0,0,1);
																  box-shadow: 6px 3px 71px -2px rgba(0,0,0,1);">';
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

        $data['results'] = $this->mci->list($config["per_page"], $page);
        $data["pager"] = $this->pagination->create_links();

        $data["title"] = "Store inventory";


        $this->session->set_flashdata('info', 'Data is loading...');

        $this->renderView("inventory", "index", $data);
    }

    public function add()
    {
        $data['title'] = "Add Items";

        $this->session->set_flashdata('warning', 'Please enter required fields...');

        $this->renderView("inventory", "add", $data);
    }

    public function save()
    {
        if ($this->input->post("save")) {
            $this->mci->add();
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

        $data = $this->mci->edit($id);

        $data["row"] = $data[0];

        $this->session->set_flashdata('success', 'Edited successfully ...');
        $data['title'] = "Edit Items";

        $this->renderView("inventory", "edit", $data);
    }

    public function update()
    {
        if ($this->input->post('edit')) {
            $id = $this->input->post('id');
            $this->mci->update($id);

            redirect("inventory/index");
        } else {

            $id = $this->input->post('id');
            $this->session->set_flashdata('error', 'Not validate ...');

            redirect("inventory/edit" . $id);
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->mci->delete($id);
        $this->session->set_flashdata('success', 'Deleted successfully ...');

        redirect("inventory/index");
    }

}

