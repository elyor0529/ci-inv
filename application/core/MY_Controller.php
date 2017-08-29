<?php

namespace core;

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends \CI_Controller
{
    public function __construct()
    {
        parent:: __construct();

        $this->load->helper("url");
        $this->load->library('session');

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            //echo  "Already logged in";
        } else {
            redirect("auth/login");
        }
    }

    protected function renderView($controller, $action, $data = null)
    {
        $data['types'] = $this->inventorytype->get_entities();
        $data['statuses'] = $this->inventorystatus->get_entities();


        if ($_SESSION["role_id"] == ROLE_OPERATOR) {
            $data["is_dashboard"] = true;
        } else {
            $data["is_dashboard"] = false;
        }

        $this->load->view('/shared/header', $data);
        $this->load->view($controller . '/' . $action, $data);
        $this->load->view('/shared/footer', $data);
    }

    protected function renderViewWhiteoutLayout($controller, $action, $data = null)
    {
        $this->load->view($controller . ' / ' . $action, $data);
    }

    public function send_email($id)
    {
        $user = $this->user->get_entity($id);
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'samandarmirzayev@gmail.com',
            'smtp_pass' => 'sam1988r',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from("samandarmirzayev@gmail.com", 'Samandar Mirzaev');
        $this->email->to($user->email);
        $this->email->subject('Madinat Jumeirah  - User credentials');
        $this->email->message('Dear, ' . $_SESSION["user_name"] . ' !
       <br/> <br/>Your credentials <br/> User-name: ' . $user->email . '
       <br/> Password: ' . $user->password . '
       <br/> <br/> Best regards,
       <br/> Jumeirah IT adminstration.');
        $this->email->send();
        $this->session->set_flashdata('success', 'Message has been sent to user.');

        if ($this->email->send()) {
            //echo 'Your email was sent, thanks ' . $_SESSION["user_name"] . '.';
        } else {
            // show_error($this->email->print_debugger());
        }
    }

}