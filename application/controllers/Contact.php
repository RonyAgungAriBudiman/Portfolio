<?php

class Contact extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Contact';
        $this->load->view('template/header', $data);
        $this->load->view('contact');
        $this->load->view('template/footer');
    }
}
