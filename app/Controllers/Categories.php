<?php

namespace App\Controllers;

class Categories extends BaseController
{
    protected $current_page;
    protected $table;
    protected $pfield; 
    public function __construct()
    {   
        $this->table                = 'categories';
        $this->data['current_page'] = $this->current_page = site_url('categories');;
        $this->data['main_menu']    = 'categories';
        $this->module_path          = 'dashboard/categories/';
    }

    public function index()
    {
        $myBuilder = $this->db->table($this->table);

        // Select columns from the main table
        $myBuilder->select($this->table . '.*');
        $this->data['record'] = $myBuilder->get()->getResult();

        echo view('header', $this->data);        
        echo view($this->module_path . 'index', $this->data);
        echo view('footer');
    }

    public function create()
    {
        echo view('header', $this->data);
        echo view($this->module_path . 'create');
        echo view('footer');
    }

    public function save()
    {
        $ctgryName = $this->request->getPost('ctgryName');
        $ctgryDesc  = $this->request->getPost('ctgryDesc');

        $data = [
            'ctgryName'=> $ctgryName,
            'ctgryDesc' => $ctgryDesc,
        ];
        
        $myBuilder = $this->db->table($this->table);
        if ($myBuilder->insert($data)) {
            $insertedID = $this->db->insertID();

            $this->message_type   = 'success';
            $this->message        = 'Saved successfully';
            $this->setMessage($this->message_type, $this->message);
            return redirect()->to($this->current_page);

        } else {
            echo "error";
            $this->message_type   = 'danger';
            $this->message        = 'Error saving';
            $this->setMessage($this->message_type, $this->message);
            return redirect()->to($this->current_page);
        }
    }

    public function edit($id)
    {
        $data =  $this->data;

        $myBuilder = $this->db->table($this->table);

        $myBuilder->select($this->table . '.*');
        
        $data['record'] = $myBuilder->get()->getResult();
        $myBuilder->where('ctgryID', $id);
        $data['field'] = $myBuilder->get()->getRow();

        $myBuilder = $this->db->table('categories');
        $myBuilder->select('categories.*');
        $data['categories'] = $myBuilder->get()->getResult();

        echo view('header', $data);
        echo view($this->module_path . 'edit',$this->data);
        echo view('footer');
    }

    public function update()
    {
        $ctgryID     = $this->request->getPost('ctgryID');
        $ctgryName   = $this->request->getPost('ctgryName');
        $ctgryDesc   = $this->request->getPost('ctgryDesc');

        $data = [
            'ctgryName'   => $ctgryName,
            'ctgryDesc'   => $ctgryDesc,
        ];

        $myBuilder = $this->db->table($this->table);
        $myBuilder->where('ctgryID', $ctgryID);
        if ($myBuilder->update($data)) {
            $this->message_type = 'success';
            $this->message      = 'Updated successfully';
            $this->setMessage($this->message_type, $this->message);
            return redirect()->to($this->current_page);
        } else {
            $this->message_type = 'danger';
            $this->message      = 'Error saving';
            $this->setMessage($this->message_type, $this->message);
            return $this->edit($id);
        }
    }

    public function delete($id)
    {
        $builder2 = $this->db->table('categories ');
        $builder2->where('ctgryID', $id);
        if ($builder2->delete()) {
            $this->setMessage('danger', 'Data Deleted successfully');
            return redirect()->to($this->current_page);
        } else {
            $this->setMessage('danger', 'Error deleting data');
            return redirect()->to($this->current_page);
        }
    }
}