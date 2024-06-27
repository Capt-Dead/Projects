<?php

namespace App\Controllers;

class Logs extends BaseController
{
    protected $current_page;
    protected $table;
    protected $pfield; 
    public function __construct()
    {   
        $this->data['current_page'] = $this->current_page = site_url('logs');;
        $this->data['main_menu']    = 'logs';
        $this->module_path          = 'dashboard/logs/';
    }

    public function index()
    {
        echo view('header', $this->data);
        echo view($this->module_path . 'index');
        echo view('footer');
    }


}