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
    public $date;
    public $user_id;

    //members
    public function paging_entities($limit, $offset)
    {
        if ($_SESSION["role_id"] == ROLE_USER) {
            $this->db->where('user_id', $_SESSION["user_id"]);
        }
        $this->db->order_by('id', 'DESC');
        $rows = $this->db->get(SELF::ENT_NAME, $limit, $offset)->result();

        return $rows;
    }

    public function filter_status_records($status)
    {
        $this->db->where('status_id', $status);
        $rows = $this->db->get(SELF::ENT_NAME);

        return $rows->num_rows();
    }

    public function get_entities_by_status($limit, $offset, $status)
    {
        $this->db->where('status_id', $status);

        if ($_SESSION["role_id"] == ROLE_USER) {
            $this->db->where('user_id', $_SESSION["user_id"]);
        }

        $this->db->order_by('id', 'DESC');
        $rows = $this->db->get(SELF::ENT_NAME, $limit, $offset)->result();

        return $rows;
    }

    public function filter_type_records($type)
    {
        $this->db->where('type_id', $type);
        $rows = $this->db->get(SELF::ENT_NAME);

        return $rows->num_rows();
    }

    public function get_entities_by_type($limit, $offset, $type)
    {
        $this->db->where('type_id', $type);
        if ($_SESSION["role_id"] == ROLE_USER) {
            $this->db->where('user_id', $_SESSION["user_id"]);
        }
        $this->db->order_by('id', 'DESC');
        $rows = $this->db->get(SELF::ENT_NAME, $limit, $offset)->result();

        return $rows;
    }

    public function total_records()
    {
        $rows = $this->db->get(SELF::ENT_NAME);

        return $rows->num_rows();
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
        $this->date = $_REQUEST["date"];

        $this->db->insert(SELf::ENT_NAME, $this);
    }

    public function get_entity($id)
    {
        $this->db->where('id', $id);
        $rows = $this->db->get(SELF::ENT_NAME)->result();

        return $rows[0];
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
        $rows = $this->db->get(SELF::ENT_NAME)->result();

        return $rows;
    }

    public function location_entity($id)
    {
        $this->db->where('id', $id);
        $rows = $this->db->get(SELF::ENT_NAME)->result();

        return $rows[0];
    }

    public function total_record()
    {
        if ($_SESSION['role_id'] == ROLE_USER) {
            $this->db->where('user_id', $_SESSION['user_id']);
        }

        $rows = $this->db->get(SELF::ENT_NAME)->num_rows();

        return $rows;
    }

    public function get_count_by_status($status_id)
    {
        if ($_SESSION['role_id'] == ROLE_USER) {
            $this->db->where('user_id', $_SESSION['user_id']);
        }

        $this->db->where('status_id', $status_id);
        $rows = $this->db->get(SELF::ENT_NAME)->num_rows();

        return $rows;
    }

    public function get_search($location, $q)
    {

        if ($_SESSION['role_id'] == ROLE_USER) {
            $this->db->where('user_id', $_SESSION['user_id']);
        }

        if (isset($location)) {
            $this->db->where('location', $location);
        }

        $this->db->like('name', $q);
        $this->db->or_like('date', $q);
        $this->db->or_like('size', $q);
        $this->db->or_like('quantity', $q);
        $this->db->or_like('serial_number', $q);

        $query = $this->db->get(SELF::ENT_NAME);
        return $query->result();
    }


}
