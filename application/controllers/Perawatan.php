<?php
class Perawatan extends CI_Controller
{
    function index()
    {
        $isAuth = $this->session->has_userdata('USERNAME');
        if($isAuth) {
            $this->load->view('components/header');
            $this->load->view('components/navbar');
            $this->load->view('components/sidebar');
            $this->load->view('perawatan/index');
            $this->load->view('components/script');
        } else {
            redirect(base_url()."index.php/auth/login");
        }
    }
}