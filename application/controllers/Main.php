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
        if ($this->session->has_userdata("logged_in")) {
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

                $user = $this->user->get_entity_by_login($username);
                $data = Array(
                    'user_id' => $user->id,
                    'user_name' => $user->full_name,
                    'role_id' =>$user->role_id,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($data);

                redirect("main/index");
            } else {
                $this->session->set_flashdata("error", "Invalid Username or Password");
            }
        }

        redirect("main/login");
    }


    public function logout()
    {
        unset(
            $_SESSION['user_id'],
            $_SESSION['user_name'],
            $_SESSION['role_id'],
            $_SESSION['logged_in']
        );

        redirect("main/login");
    }

}

   