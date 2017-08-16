<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model
{

    //conts
    const ENT_NAME = 'inventories';

    //properties
    public $id;
    public $img;
    public $type_id;
    public $name;
    public $quantity;
    public $serial_number;
    public $location;
    public $size;
    public $status_id;
    public $description;
    public $date;
    public $user_id;

    //members
    public function paging_entities($limit, $offset)
    {
        $this->db->order_by('id', 'DESC');

        $this->do_search();

        return $this->db->get(SELF::ENT_NAME, $limit, $offset)->result();
    }

    public function filter_status_records($status)
    {
        $this->db->where('status_id', $status);

        $this->do_search();

        return $this->db->get(SELF::ENT_NAME)->num_rows();
    }

    public function get_entities_by_status($limit, $offset, $status)
    {
        $this->db->where('status_id', $status);

        $this->do_search();

        $this->db->order_by('id', 'DESC');

        return $this->db->get(SELF::ENT_NAME, $limit, $offset)->result();
    }

    public function filter_type_records($type)
    {
        $this->db->where('type_id', $type);

        $this->do_search();

        return $this->db->get(SELF::ENT_NAME)->num_rows();
    }

    public function get_entities_by_type($limit, $offset, $type)
    {
        $this->db->where('type_id', $type);

        $this->do_search();

        $this->db->order_by('id', 'DESC');

        return $this->db->get(SELF::ENT_NAME, $limit, $offset)->result();
    }

    public function total_records()
    {
        $this->do_search();

        return $this->db->get(SELF::ENT_NAME)->num_rows();
    }

    public function insert_entity($img)
    {
        $this->img = $img;
        $this->user_id = $_SESSION["user_id"];
        $this->type_id = $_REQUEST["type_id"];
        $this->name = $_REQUEST["name"];
        $this->quantity = $_REQUEST["quantity"];
        $this->serial_number = $_REQUEST["serial_number"];
        $this->location = $_REQUEST["location"];
        $this->size = $_REQUEST["size"];
        $this->status_id = $_REQUEST["status_id"];
        $this->description = $_REQUEST["description"];
        $this->date = $_REQUEST["date"];

        $this->db->insert(SELf::ENT_NAME, $this);
    }

    public function get_entity($id)
    {
        $this->db->where('id', $id);

        return $this->db->get(SELF::ENT_NAME)->result()[0];
    }

    public function update_entity($id, $img)
    {

        $this->id = $id;
        $this->img = $img;
        $this->user_id = $_SESSION["user_id"];
        $this->type_id = $_REQUEST["type_id"];
        $this->name = $_REQUEST["name"];
        $this->quantity = $_REQUEST["quantity"];
        $this->serial_number = $_REQUEST["serial_number"];
        $this->location = $_REQUEST["location"];
        $this->size = $_REQUEST["size"];
        $this->status_id = $_REQUEST["status_id"];
        $this->description = $_REQUEST["description"];
        $this->date = $_REQUEST["date"];
        $this->db->where("id", $id);
        $this->db->update(SELF::ENT_NAME, $this);
    }

    public function delete_entity($id)
    {
        $this->db->where("id", $id);
        $this->db->delete(SELF::ENT_NAME);
    }

    public function get_locations()
    {
        $this->db->distinct();
        $this->db->select("location");

        $this->set_current_user();

        return $this->db->get(SELF::ENT_NAME)->result();
    }

    public function get_monitoring()
    {
        $this->db->select('location, COUNT(location) as total');
        $this->db->group_by('location');
        $this->db->order_by('total', 'DESC');

        return $this->db->get(SELF::ENT_NAME, 10)->result();
    }

    public function total_record()
    {

        $this->do_search();

        return $this->db->get(SELF::ENT_NAME)->num_rows();
    }

    public function get_count_by_status($status_id)
    {
        $this->db->where('status_id', $status_id);

        $this->do_search();

        return $this->db->get(SELF::ENT_NAME)->num_rows();
    }

    private function do_search()
    {

        $this->set_current_user();

        /*
         * left bar page categories
         * */

        //status
        $status = array_key_exists("status", $_GET) ? $_GET["status"] : "";
        if (isset($status) && strlen(trim($status)) > 0 && is_numeric(trim($status))) {
            $this->db->where('status_id', $status);
        }

        //type
        $type = array_key_exists("type", $_GET) ? $_GET["type"] : "";
        if (isset($type) && strlen(trim($type)) > 0 && is_numeric(trim($type))) {
            $this->db->where('type_id', $type);
        }

        /*
         * general search fields:
        */

        //locations
        $location = array_key_exists("location", $_GET) ? $_GET["location"] : "";
        if (isset($location) && strlen(trim($location)) > 0) {
            $this->db->where('location', $location);
        }
        //query
        $q = array_key_exists("q", $_GET) ? $_GET["q"] : "";
        if (isset($q) && strlen(trim($q)) > 0) {
            $this->db->like('name', $q);
            $this->db->or_like('date', $q);
            $this->db->or_like('size', $q);
            $this->db->or_like('quantity', $q);
            $this->db->or_like('serial_number', $q);

        }

    }

    private function set_current_user()
    {

        if ($_SESSION['role_id'] == ROLE_USER) {
            $this->db->where('user_id', $_SESSION['user_id']);
        }

    }

}