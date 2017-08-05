<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model
{

    //const
    const ENT_NAME = 'roles';

    //properties
    public $id;
    public $name;

    //members
    public function get_entities()
    {

        $rows = $this->db->get(SELF::ENT_NAME)->result();
        return $rows;
    }

    public function get_entity($id)
    {
        $this->db->where('id', $id);
        $rows = $this->db->get(SELF::ENT_NAME)->result();
        return $rows[0];
    }

}
