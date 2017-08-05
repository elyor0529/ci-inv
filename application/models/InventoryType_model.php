<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InventoryType_model extends CI_Model
{


    //const
    const ENT_NAME = 'inventory_types';

    //properties
    public $id;
    public $name;

    //members
    public function get_entities()
    {
        $rows = $this->db->get(SELF::ENT_NAME)->result();

        return $rows;
    }

    public function insert_entity()
    {
        $this->name = $_REQUEST["name"];

        $this->db->insert(SELf::ENT_NAME, $this);
    }

    public function get_entity($id)
    {
        $this->db->where('id', $id);
        $rows = $this->db->get(SELF::ENT_NAME)->result();

        return $rows[0];
    }

    public function update_entity($id)
    {

        $this->id = $id;
        $this->name = $_REQUEST["name"];

        $this->db->where("id", $id);
        $this->db->update(SELF::ENT_NAME, $this);
    }

    public function delete_entity($id)
    {
        $this->db->where("id", $id);
        $this->db->delete(SELF::ENT_NAME);
    }

}