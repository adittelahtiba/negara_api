<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Templates extends CI_Controller
{


    public function undangan($kode)
    {
        $data['kode'] = $kode;
        $this->load->view('undangan/head', $data);

        $this->load->view('undangan/galeri', $data);

        //level fitur pada undagan
        // if (substr($kode, 0, 1) <> 'E') {
        //     $this->load->view('undangan/galeri', $data);
        //     if (substr($kode, 0, 1) <> 'D') {
        //         $this->load->view('undangan/galeri', $data);
        //         if (substr($kode, 0, 1) <> 'C') {
        //             $this->load->view('undangan/galeri', $data);
        //             if (substr($kode, 0, 1) <> 'B') {
        //                 $this->load->view('undangan/galeri', $data);
        //             }
        //         }
        //     }
        // }

        $this->load->view('undangan/foot', $kode);
    }
}
