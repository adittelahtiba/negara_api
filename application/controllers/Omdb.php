<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Omdb extends CI_Controller
{

    public function index()
    {
        $menu =  file_get_contents('http://omdbapi.com/?apikey=6928eede&S=Harry');
        $data['menu'] = json_decode($menu, true);
        $this->load->view('templates/head');
        $this->load->view('templates/sidebar');
        $this->load->view('omdb/index', $data);
        $this->load->view('templates/foot');
    }
}
