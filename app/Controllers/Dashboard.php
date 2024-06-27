<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    protected $current_page;
    protected $table;
    protected $pfield; 
    public function __construct()
    {   

        $this->table                = 'categories';
        $this->table2               = 'supplies';
        $this->table3               = 'users';
        $this->data['current_page'] = $this->current_page = site_url('dashboard');;
        $this->data['main_menu']    = 'dashboard';
        $this->module_path          = 'dashboard/dashboard/';
    } 

    public function index()
    {

        $data = $this->data;
        $myBuilder = $this->db->table($this->table);
        $myBuilder2 = $this->db->table($this->table2);
        $myBuilder3 = $this->db->table($this->table3);

        // Count fields from the categories table
        $myBuilder->select($this->table . '.*');
        $this->data['record'] = $myBuilder->get()->getResult();
        $data['categories'] = $myBuilder->get()->getNumRows();

        // Count fields from the users table
        $myBuilder2->select($this->table2 . '.*');
        $this->data['record'] = $myBuilder2->get()->getResult();
        $data['supply'] = $myBuilder2->get()->getNumRows();

        // Count fields from the users table
        $myBuilder3->select($this->table3 . '.*');
        $this->data['record'] = $myBuilder3->get()->getResult();
        $data['users'] = $myBuilder3->get()->getNumRows();

        echo view('header', $data);  
        echo view($this->module_path . 'index', $this->data);
        echo view('footer');
    }
}