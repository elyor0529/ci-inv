<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends \core\MY_Controller
{

    public function __construct()
    {
        parent:: __construct();

        $this->load->library("pagination");
    }

    public function index()
    {
        $data["title"] = "Madinat Jumeirah";

        $this->renderView("dashboard", "index", $data);
    }

    public function report()
    {
        if (isset($_REQUEST["status"])) {
            $status = $this->inventorystatus->get_entity($_REQUEST["status"]);
            $data["title"] = "Report by status '" . $status->name . "'";

            $config['base_url'] = base_url() . 'dashboard/report?status=' . $status->id;
            $config['total_rows'] = $this->inventory->filter_status_records($status->id);
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
            $data['results'] = $this->inventory->get_entities_by_status($config["per_page"], $page, $status->id);
        }

        if (isset($_REQUEST["type"])) {
            $type = $this->inventorytype->get_entity($_REQUEST["type"]);
            $data["title"] = "Report by type '" . $type->name . "'";

            $config['base_url'] = base_url() . 'dashboard/report?type=' . $type->id;
            $config['total_rows'] = $this->inventory->filter_type_records($type->id);
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
            $data['results'] = $this->inventory->get_entities_by_type($config["per_page"], $page, $type->id);
        }

        $this->session->set_flashdata('info', 'Data is loading...');

        $this->renderView("dashboard", "report", $data);
    }
}

