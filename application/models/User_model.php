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

        return $this->db->get(SELF::ENT_NAME)->result()[0];
    }

    public function get_entities()
    {
        return $this->db->get(SELF::ENT_NAME)->result(); 
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
        return $this->db->get(SELF::ENT_NAME)->result()[0];
    }

    public function delete_entity($id)
    {
        $this->db->where("id", $id);
        $this->db->delete(SELF::ENT_NAME);
    }

    public function update_entity($id)
    {
        $this->id = $id;
        $this->full_name = $_REQUEST["full_name"];
        $this->email = $_REQUEST["email"];
        $this->username = $this->email;
        $this->password = $_REQUEST["password"];
        $this->role_id = $_SESSION["role_id"];
        $this->is_active = true;
        $this->db->where("id", $id);
        $this->db->update(SELF::ENT_NAME, $this);
    }

    public function change_status($id)
    {
        $ent = $this->get_entity($id);

        $ent->is_active = $ent->is_active == 0 ? 1 : 0;

        $this->db->where("id", $id);
        $this->db->update(SELF::ENT_NAME, $ent);
    }

    public function total_record()
    {
        return $this->db->get(SELF::ENT_NAME)->num_rows();
    }

    public function get_users_count_by_status($status)
    {
        $this->db->where('is_active', $status);
        
        return $this->db->get(SELF::ENT_NAME)->num_rows();
    }

}