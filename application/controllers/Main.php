<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends \core\MY_Controller
{

    public function __construct()
    {
        parent:: __construct();
    }


    public function index()
    {
        $usr = $this->session->userdata("username");

        if (isset($usr)) {
            redirect("/dashboard/index");
        } else {

            redirect("/main/login");
        }

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

            if ($this->user->authorize($username, $password)) {

                $user = $this->user->get_entity($username);

                $this->session->set_userdata(array('user_id' => $user->id, 'user_name' => $user->full_name));

                redirect("main/index");
            } else {
                $this->session->set_flashdata("error", "Invalid Username or Password");
            }
        }

        redirect("main/login");
    }

    public function logout()
    {
        $this->session->unset_userdata("user_id");
        $this->session->unset_userdata("user_name");

        redirect("main/login");
    }

}

   