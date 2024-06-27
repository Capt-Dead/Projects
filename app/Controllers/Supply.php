<?php

namespace App\Controllers;

class Supply extends BaseController
{
    protected $current_page;
    protected $table;
    protected $pfield; 
    public function __construct()
    {   
        $this->table                = 'supplies';
        $this->data['current_page'] = $this->current_page = site_url('supply');;
        $this->data['main_menu']    = 'supply';
        $this->module_path          = 'dashboard/supply/';
    }

    public function index()
    {
        $myBuilder = $this->db->table($this->table);

        // Select columns from the main table
        $myBuilder->select($this->table . '.*');
        $myBuilder->select('categories.*');

        // Perform a join between the main table and 'categories' table
        $myBuilder->join('categories', 'categories.ctgryID =' . $this->table . '.ctgryID', 'left');
        // Fetch the result
        $this->data['record'] = $myBuilder->get()->getResult();
 
        echo view('header', $this->data);
        echo view($this->module_path . 'index');
        echo view('footer');
    }

    public function create()
    {
        $myBuilder = $this->db->table('categories');

        $myBuilder->select('categories.*');
        $this->data['record'] = $myBuilder->get()->getResult();
        
        echo view('header', $this->data);
        echo view($this->module_path . 'create');
        echo view('footer');
    }

    public function save()
    {
        $suppName  = $this->request->getPost('suppName');
        $suppSize  = $this->request->getPost('suppSize');
        $suppQuan  = $this->request->getPost('suppQuan');
        $suppUnit  = $this->request->getPost('suppUnit');
        $ctgryID = $this->request->getPost('ctgryID');

        $data = [
            'suppName'  => $suppName,
            'suppSize'  => $suppSize,
            'suppQuan'  => $suppQuan,
            'suppUnit'  => $suppUnit,
            'ctgryID' => $ctgryID,
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

        $myBuilder->where('suppID', $id);

        $data['record'] = $myBuilder->get()->getRow();
        $data['supply'] = $myBuilder->get()->getResult();

        $myBuilder = $this->db->table('categories');
        $myBuilder->select('categories.*');
        $data['ctgry'] = $myBuilder->get()->getResult();

        echo view('header', $data);
        echo view($this->module_path . 'edit');
        echo view('footer');
    }   

    public function update()
    {
        $suppID    = $this->request->getPost('suppID');
        $suppName  = $this->request->getPost('suppName');
        $suppSize  = $this->request->getPost('suppSize');
        $suppQuan  = $this->request->getPost('suppQuan');
        $suppUnit  = $this->request->getPost('suppUnit');
        $ctgryID   = $this->request->getPost('ctgryID');

        $data = [
            'suppName'   => $suppName,
            'suppSize'   => $suppSize,
            'suppQuan'   => $suppQuan,
            'suppUnit'   => $suppUnit,
            'ctgryID'   => $ctgryID,
        ];

        $myBuilder = $this->db->table($this->table);
        $myBuilder->where('suppID', $suppID);
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
}