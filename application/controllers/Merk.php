<?php
class Merk extends CI_Controller
{
    function index()
    {   
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $this->load->model('MerkModel','merk');
            $data['merk_data'] = $this->merk->getAll();

            $this->load->view('components/header');
            $this->load->view('components/navbar');
            $this->load->view('components/sidebar');
            $this->load->view('merk/index',$data);
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
            $this->load->view('merk/create');
            $this->load->view('components/script');
        }
    }

    function edit()
    {
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $id = $this->input->get('id');
            $this->load->model('MerkModel','merk');
            $data['merk_data'] = $this->merk->findById($id);

            $this->load->view('components/header');
            $this->load->view('components/navbar');
            $this->load->view('components/sidebar');
            $this->load->view('merk/edit',$data);
            $this->load->view('components/script');
        }
    }

    function update()
    {
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $this->load->model('MerkModel','merk');

            $idedit = $this->input->post('id');
            $nama = $this->input->post('nama');
            $produk = $this->input->post('produk');
    
            $data[] = $nama;
            $data[] = $produk;
            $data[] = $idedit;
    
            $this->merk->update($data);
            redirect(base_url()."index.php/merk");
        }
    }

    function store()
    {
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $this->load->model('MerkModel','merk');

            $nama = $this->input->post('nama');
            $produk = $this->input->post('produk');
    
            $data[] = $nama;
            $data[] = $produk;
    
            $this->merk->store($data);
            redirect(base_url()."index.php/merk");
        }
    }

    function delete()
    {
        $id = $this->input->get('id');
        $this->load->model('MerkModel','merk');
        $this->merk->delete($id);
        redirect(base_url()."index.php/merk");
    }
}