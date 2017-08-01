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

    public function get_entity($username)
    {
        $this->db->where("username", $username);
        $rows = $this->db->get(SELF::ENT_NAME)->result();

        return $rows[0];
    }

}