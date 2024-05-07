<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
         echo view("dash_header");
         echo view('dashboard_view');
         echo view("dash_footer");
    }

    public function table()
    {
         echo view("dash_header");
         echo view('table');
         echo view("dash_footer");
    }

}
