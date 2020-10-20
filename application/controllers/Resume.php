<?php

class Resume extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Resume';
        $this->load->view('template/header', $data);
        $this->load->view('resume');
        $this->load->view('template/footer');
    }
}
