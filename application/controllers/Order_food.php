<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_food extends CI_Controller
{

    public function index()
    {
        $menu =  file_get_contents(base_url('JSON/pizza.json'));
        $data['menu'] = json_decode($menu, true);


        $this->load->view('templates/head');
        $this->load->view('templates/sidebar');
        $this->load->view('Order_food/index', $data);
        $this->load->view('templates/foot');
    }

    public function login()
    {
        $this->load->view('templates/head');
        $this->load->view('templates/sidebar');
        $this->load->view('Order_food/login');
        $this->load->view('templates/foot');
    }
}
