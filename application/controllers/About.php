<?php

class About extends CI_Controller
{
    public function index()
    {
        $this->load->helper(array('umur', 'date'));
        $tgl =  '1987-05-11';

        $data['judul'] = 'About';
        $data['umur']  = hitung_umur($tgl);
        $this->load->view('template/header', $data);
        $this->load->view('about', $data);
        $this->load->view('template/footer');
    }
}
