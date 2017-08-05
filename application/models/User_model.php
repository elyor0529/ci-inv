<?php
/**
 * Created by PhpStorm.
 * User: Sam Mirzaev
 * Date: 8/1/2017
 * Time: 11:17 PM
 */

class User_model extends CI_Model
{

    //const
    const ENT_NAME = 'users';

    //properties
    public $id;
    public $full_name;
    public $email;
    public $username;
    public $password;
    public $is_active;
    public $role_id;

    //members
    public function authorize($username, $password)
    {
        $this->db->where("username", $username);
        $this->db->where("password", $password);

        $rows = $this->db->get(SELF::ENT_NAME)->num_rows();

        return $rows > 0;
    }

    public function get_entity_by_login($username)
    {
        $this->db->where("username", $username);
        $rows = $this->db->get(SELF::ENT_NAME)->result();

        return $rows[0];
    }

    public function get_entities()
    {
        $rows = $this->db->get(SELF::ENT_NAME)->result();

        return $rows;
    }

    public function insert_entity()
    {
        $this->role_id = $_REQUEST["role_id"];
        $this->full_name = $_REQUEST["full_name"];
        $this->email = $_REQUEST["email"];
        $this->username = $this->email;
        $this->password = $_REQUEST["password"];
        $this->is_active = $_REQUEST["is_active"];

        $this->db->insert(SELf::ENT_NAME, $this);
    }

    public function get_entity($id)
    {
        $this->db->where('id', $id);
        $rows = $this->db->get(SELF::ENT_NAME)->result();

        return $rows[0];
    }

    public function delete_entity($id)
    {
        $this->db->where("id", $id);
        $this->db->delete(SELF::ENT_NAME);
    }


}