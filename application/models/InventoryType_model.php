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

}