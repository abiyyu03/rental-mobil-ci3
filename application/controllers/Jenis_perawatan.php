<?php
class Jenis_perawatan extends CI_Controller
{
    function index()
    {   
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $this->load->model('JenisPerawatanModel','jenis_perawatan');
            $data['jenis_perawatan_data'] = $this->jenis_perawatan->getAll();

            $this->load->view('components/header');
            $this->load->view('components/navbar');
            $this->load->view('components/sidebar');
            $this->load->view('jenis_perawatan/index',$data);
            $this->load->view('components/script');
        } else {
            redirect(base_url()."index.php/auth/login");
        }
    }

    function create()
    {
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $this->load->view('components/header');
            $this->load->view('components/navbar');
            $this->load->view('components/sidebar');
            $this->load->view('jenis_perawatan/create');
            $this->load->view('components/script');
        }
    }

    function store()
    {
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $this->load->model('JenisPerawatanModel','jenis_perawatan');

            $nama = $this->input->post('nama');
    
            $data[] = $nama;
    
            $this->jenis_perawatan->store($data);
            redirect(base_url()."index.php/jenis_perawatan");
        }
    }
    
    function delete()
    {
        $id = $this->input->get('id');
        $this->load->model('JenisPerawatanModel','jenis_perawatan');
        $this->jenis_perawatan->delete($id);
        redirect(base_url()."index.php/jenis_perawatan");
    }

    function edit () {
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $id = $this->input->get('id');
            $this->load->model('JenisPerawatanModel','jenis_perawatan');
            $data['jenis_perawatan_data'] = $this->jenis_perawatan->findById($id);

            $this->load->view('components/header');
            $this->load->view('components/navbar');
            $this->load->view('components/sidebar');
            $this->load->view('jenis_perawatan/edit',$data);
            $this->load->view('components/script');
        }
    }

    function update()
    {
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $this->load->model('JenisPerawatanModel','jenis_perawatan');

            $idedit = $this->input->post('id');
            $nama = $this->input->post('nama');
    
            $data[] = $nama;
            $data[] = $idedit;
    
            $this->jenis_perawatan->update($data);
            redirect(base_url()."index.php/jenis_perawatan");
        }
    }
}