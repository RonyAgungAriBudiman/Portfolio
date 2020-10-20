<?php

class Portfolio extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Portfolio';
        $this->load->view('template/header', $data);
        $this->load->view('portfolio');
        $this->load->view('template/footer');
    }
}
