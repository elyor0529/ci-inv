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

        if ($_SESSION["role_id"] == ROLE_ADMIN) {
            $data["total_users"] = $this->user->total_record();
            $data["total_active_users"] = $this->user->get_users_count_by_status(1);
            $data["total_not_active_users"] = $this->user->get_users_count_by_status(0);

        } else {
            $data["total_status"] = $this->inventory->total_record();
            $data["old_status"] = $this->inventory->get_count_by_status(2);
            $data["new_status"] = $this->inventory->get_count_by_status(3);
            $data["fada_status"] = $this->inventory->get_count_by_status(4);
        }

        $this->renderView("dashboard", "index", $data);
    }

    public function profile()
    {
        $data["title"] = "Change Profile";
        $data["row"] = $this->user->get_entity($_SESSION['user_id']);
        $this->renderView("dashboard", "profile", $data);
    }

    public function profile_update()
    {
        $id = $_SESSION['user_id'];

        if (isset($_REQUEST['profile_edit'])) {

            $this->user->update_entity($id);
            $user = $this->user->get_entity($id);
            $data = Array(
                'user_id' => $user->id,
                'user_name' => $user->full_name,
                'role_id' => $user->role_id,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($data);

            $this->send_email($id);

        } else {
            $this->session->set_flashdata('error', 'Not validate ...');
        }

        redirect("dashboard/profile");
    }

    public function report()
    {
        $statusCode = array_key_exists("status", $_GET) ? $_GET["status"] : "";
        $typeCode = array_key_exists("type", $_GET) ? $_GET["type"] : "";
        if (isset($statusCode) && strlen(trim($statusCode)) > 0 && is_numeric(trim($statusCode))) {
            $statusEnt = $this->inventorystatus->get_entity($statusCode);
            $data["title"] = "Report by status '" . $statusEnt->name . "'";
            $data["status"] = $statusCode;
            $config['base_url'] = base_url() . 'dashboard/report?status=' . $statusEnt->id;
            $config['total_rows'] = $this->inventory->filter_status_records($statusEnt->id);
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
            $data['results'] = $this->inventory->get_entities_by_status($config["per_page"], $page, $statusEnt->id);

        } elseif (isset($typeCode) && strlen(trim($typeCode)) > 0 && is_numeric(trim($typeCode))) {

            $typeEnt = $this->inventorytype->get_entity($typeCode);
            $data["title"] = "Report by type '" . $typeEnt->name . "'";
            $data["type"] = $typeCode;
            $config['base_url'] = base_url() . 'dashboard/report?type=' . $typeEnt->id;
            $config['total_rows'] = $this->inventory->filter_type_records($typeEnt->id);
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
            $data['results'] = $this->inventory->get_entities_by_type($config["per_page"], $page, $typeEnt->id);

        } else {
            $data["title"] = "All report";

            $config['base_url'] = base_url() . 'dashboard/report';
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
        }
        $data['locations'] = $this->inventory->get_locations();

        $this->session->set_flashdata('info', 'Data is loading...');

        $this->renderView("dashboard", "report", $data);
    }

    public function inventory_monitoring()
    {
        header("Content-Type: application/json");
        $result = $this->inventory->get_monitoring();
        $json = json_encode($result);

        echo $json;
    }

}

