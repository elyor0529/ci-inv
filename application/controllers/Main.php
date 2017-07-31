<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends \core\MY_Controller
{

    public function index()
    {
        $usr = $this->session->userdata("user");

        if (isset($usr)) {
            redirect("/dashboard/index");
        }

        redirect("/main/login");
    }

    public function login()
    {
        $data['title'] = "Login";

        $this->renderViewWhiteoutLayout("main", "login", $data);
    }

    public function login_validation()
    {

        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];

        if (isset($username) && isset($password)) {

            $this->load->model("mci");
            if ($this->mci->can_login($username, $password)) {

                $session_data = array("username" => $username);
                $this->session->set_userdata($session_data);

                redirect("main/index");
            } else {
                $this->session->set_flashdata("error", "Invalid Username or Password");
            }
        }

        redirect("main/login");
    }

    public function logout()
    {
        $this->session->unset_userdata("user");

        redirect("main/login");
    }

}

   