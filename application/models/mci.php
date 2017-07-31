<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mci extends CI_Model
{


    function list($limit, $offset)
    {
        $this->db->order_by('id', 'DESC');

        $data_inv = $this->db->get('inventories', $limit, $offset);

        foreach ($data_inv->result() as $data) {
            $myinv[] = $data;
        }

        return $myinv;
    }

    function total()
    {
        $data_inv = $this->db->get('inventories');

        return $data_inv->num_rows();
    }

    function add()
    {
        $id = $this->input->post("id");
        $t_id = $this->input->post("type_id");
        $in = $this->input->post("in");
        $qty = $this->input->post("qty");
        $sn = $this->input->post("sn");
        $loc = $this->input->post("loc");
        $sz = $this->input->post("sz");
        $status_id = $this->input->post("status_id");

        $data = array(
            "id" => $id,
            "type_id" => $t_id,
            "name" => $in,
            "quantity" => $qty,
            "serial_number" => $sn,
            "location" => $loc,
            "size" => $sz,
            "status_id" => $status_id,
            "date" => date("F j, Y, g:i a")
        );

        $this->db->insert("inventor", $data);
    }

    function edit($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('inventories');

        return $query->result();
    }

    function update($id)
    {

        $t_id = $this->input->post("t_id");
        $in = $this->input->post("in");
        $qty = $this->input->post("qty");
        $sn = $this->input->post("sn");
        $loc = $this->input->post("loc");
        $sz = $this->input->post("sz");
        $status_id = $this->input->post("status_id");
        $data = array(
            "type_id" => $t_id,
            "name" => $in,
            "quantity" => $qty,
            "serial_number" => $sn,
            "location" => $loc,
            "size" => $sz,
            "status_id" => $status_id,

        );
        $this->db->where("id", $id);
        $this->db->update("inventories", $data);
    }

    function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("inventories");
    }

    function can_login($username, $password)
    {
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        $query = $this->db->get("users");

        return $query->num_rows() > 0;
    }
}
