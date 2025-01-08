<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBarang;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = new ModelBarang();

        // Mengambil semua data dari tabel tb_matkul
        $data['matkul'] = $model->findAll();

        // Validasi jika data kosong
        if (!$data['matkul']) {
            $data['matkul'] = [];
        }

        // Mengirim data ke view
        echo view("templates/header");
        echo view("templates/sidebar");
        echo view("dashboard", $data);
        echo view("templates/footer");
    }
}



// class Dashboard extends BaseController
// {
//     public function index()
//     {
//         // $this->load->view("dashboard");
//         $data['matkul'] = $this->model_matkul->tampil_data()->result();
//         echo view('templates/header');
//         echo view('templates/sidebar');
//         echo view('templates/footer');
//         echo view('dashboard', $data);
//     }
// }