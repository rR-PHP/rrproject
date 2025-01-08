<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        // $this->load->view("dashboard");
        echo view('templates/header');
        echo view('templates/sidebar');
        echo view('templates/footer');
        echo view('dashboard');
    }
}