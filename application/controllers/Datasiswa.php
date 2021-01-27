<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Datasiswa extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Siswa_model', 'siswa');

        $this->methods['index_get']['limit'] = 15;
        $this->methods['index_delete']['limit'] = 15;
        $this->methods['index_post']['limit'] = 15;
        $this->methods['index_put']['limit'] = 15;
    }


    public function index_get()
    {


        $siswa = $this->siswa->getSiswaAll();
        $id = $this->get('id');

        //id hanya untuk hereuy

        if ($siswa) {
            // Set the response and exit
            if ($id) {
                $this->response([
                    'data' => $siswa[$id]
                ], RestController::HTTP_OK);
            } else {
                $this->response([
                    'data' => $siswa
                ], RestController::HTTP_OK);
            }
        } else {
            // Set the response and exit
            $this->response([
                'status' => false,
                'message' => 'No student were found'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');

        if ($id) {
            if ($this->siswa->deleteSiwa($id) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted success'
                ], RestController::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], RestController::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response([
                'status' => false,
                'message' => 'provide an id'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function index_post()
    {
        $data = [
            'Nomor_induk' => $this->post('Nomor_induk'),
            'NISN' => $this->post('NISN'),
            'Nama_siswa' => $this->post('Nama_siswa'),
            // 'Jenis_kelamin' => $this->post('Jenis_kelamin'),
            // 'Tempat_lahir' => $this->post('Tempat_lahir'),
            // 'Tanggal_lahir' => $this->post('Tanggal_lahir'),
            // 'Agama' => $this->post('Agama'),
            // 'Nama_ayah' => $this->post('Nama_ayah'),
            // 'Nama_ibu' => $this->post('Nama_ibu'),
            // 'Pekerjaan_ortu' => $this->post('Pekerjaan_ortu'),
            // 'Alamat' => $this->post('Alamat'),
            // 'Asal_sekolah' => $this->post('Asal_sekolah'),
            // 'Status_keuangan' => $this->post('Status_keuangan'),
            // 'Tahun_masuk' => $this->post('Tahun_masuk'),
            // 'Nomor_ijazah' => $this->post('Nomor_ijazah'),
            // 'Nomor_skhun' => $this->post('Nomor_skhun'),
            // 'Nomor_peserta' => $this->post('Nomor_peserta'),
            // 'keterangan' => $this->post('keterangan'),
            // 'Nomor_telp' => $this->post('Nomor_telp'),
            // 'Email' => $this->post('Email'),
            // 'Kode_jurusan' => $this->post('Kode_jurusan'),
            // 'Foto' => $this->post('Foto'),
        ];
        // var_dump($data);
        // die;

        if ($this->siswa->addSiswa($data) > 0) {
            //ok
            $this->response([
                'status' => true,
                'message' => 'add success'
            ], RestController::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'add failed'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'Nomor_induk' => $this->put('Nomor_induk'),
            'NISN' => $this->put('NISN'),
            'Nama_siswa' => $this->put('Nama_siswa'),
            // 'Jenis_kelamin' => $this->put('Jenis_kelamin'),
            // 'Tempat_lahir' => $this->put('Tempat_lahir'),
            // 'Tanggal_lahir' => $this->put('Tanggal_lahir'),
            // 'Agama' => $this->put('Agama'),
            // 'Nama_ayah' => $this->put('Nama_ayah'),
            // 'Nama_ibu' => $this->put('Nama_ibu'),
            // 'Pekerjaan_ortu' => $this->put('Pekerjaan_ortu'),
            // 'Alamat' => $this->put('Alamat'),
            // 'Asal_sekolah' => $this->put('Asal_sekolah'),
            // 'Status_keuangan' => $this->put('Status_keuangan'),
            // 'Tahun_masuk' => $this->put('Tahun_masuk'),
            // 'Nomor_ijazah' => $this->put('Nomor_ijazah'),
            // 'Nomor_skhun' => $this->put('Nomor_skhun'),
            // 'Nomor_peserta' => $this->put('Nomor_peserta'),
            // 'keterangan' => $this->put('keterangan'),
            // 'Nomor_telp' => $this->put('Nomor_telp'),
            // 'Email' => $this->put('Email'),
            // 'Kode_jurusan' => $this->put('Kode_jurusan'),
            // 'Foto' => $this->put('Foto'),
        ];
        // var_dump($data);
        // die;

        if ($this->siswa->updateSiswa($data, $id) > 0) {
            //ok
            $this->response([
                'status' => true,
                'message' => 'update success'
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'update failed'
            ], RestController::HTTP_NOT_MODIFIED);
        }
    }
}
