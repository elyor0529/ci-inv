<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        $data['title'] = "Login";

        $this->load->view('auth/login', $data);
    }

    public function login_validation()
    {

        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];

        if (isset($username) && isset($password)) {

            $user = $this->user->authorize($username, $password);

            if ($user) {
                if ($user->is_active == 0) {
                    $this->session->set_flashdata("error", "You are deactivate.");
                } else {
                    $data = Array(
                        'user_id' => $user->id,
                        'user_name' => $user->full_name,
                        'role_id' => $user->role_id,
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($data);

                    redirect("main/index");
                }
            } else {
                $this->session->set_flashdata("error", "Invalid Username or Password");
            }
        }

        redirect("auth/login");
    }

    public function logout()
    {
        unset(
            $_SESSION['user_id'],
            $_SESSION['user_name'],
            $_SESSION['role_id'],
            $_SESSION['logged_in']
        );

        redirect("auth/login");
    }

}

   