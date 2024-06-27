<?php

namespace App\Controllers;

class Users extends BaseController
{
    protected $current_page;
    protected $table;
    protected $pfield; 
    public function __construct()
    {   
        $this->table                = 'users';
        $this->pfield               = 'userID';
        $this->data['current_page'] = $this->current_page = site_url('users');;
        $this->data['main_menu']    = 'users';
        $this->module_path          = 'dashboard/users/';
    }

    public function index()
    {
        $myBuilder = $this->db->table($this->table);

        $myBuilder->select($this->table . '.*');
        $this->data['record'] = $myBuilder->get()->getResult();
        
        echo view('header', $this->data);
        echo view($this->module_path . 'index');
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
        $firstname  = $this->request->getPost('firstname');
        $lastname   = $this->request->getPost('lastname');
        $username   = $this->request->getPost('username');
        $password   = $this->request->getPost('password');
        $cpassword  = $this->request->getPost('cpassword');


        if ($password == $cpassword) {
            $data = [
                'firstname' => $firstname,
                'lastname'  => $lastname,
                'username'  => $username,
                'password'  => md5($password),
            ];

            $myBuilder = $this->db->table($this->table);
            if ($myBuilder->insert($data)) {
                $insertedID = $this->db->insertID();

                $this->message_type   = 'success';
                $this->message        = 'Saved successfully';
                $this->setMessage($this->message_type, $this->message);
                return redirect()->to($this->current_page . '/view/' . $insertedID);
            } else {
                $this->message_type   = 'danger';
                $this->message        = 'Error saving';
                $this->setMessage($this->message_type, $this->message);
                return redirect()->to($this->current_page . '/create/');
            }
        } else {
            $this->message_type   = 'danger';
            $this->message        = 'Password did not match';
            $this->setMessage($this->message_type, $this->message);
            $data = [
                'firstname' => $firstname,
                'lastname'  => $lastname,
                'username'  => $username,
            ];

            $this->data['record'] = $data;

            echo view('header', $this->data);
            echo view($this->module_path . 'create');
            echo view('footer');
        }
    }

    public function view($id)
    {
        $myBuilder = $this->db->table($this->table);

        $myBuilder->select($this->table . '.*');
        $myBuilder->where($this->pfield, $id);
        $this->data['record'] = $myBuilder->get()->getResult();

        echo view('header', $this->data);
        echo view($this->module_path . 'view');
        echo view('footer');
    }

    public function edit($id)
    {
        $myBuilder = $this->db->table($this->table);

        $myBuilder->select($this->table . '.*');
        $myBuilder->where($this->pfield, $id);
        $this->data['record'] = $myBuilder->get()->getResult();

        echo view('header', $this->data);
        echo view($this->module_path . 'edit');
        echo view('footer');
    }

    public function edit_password($id)
    {
        $myBuilder = $this->db->table($this->table);

        $myBuilder->select($this->table . '.*');
        $myBuilder->where($this->pfield, $id);
        $this->data['record'] = $myBuilder->get()->getResult();

        echo view('header', $this->data);
        echo view($this->module_path . 'edit_password');
        echo view('footer');
    }

    public function update()
    {
        $id         = $this->request->getPost('userID');
        $firstname  = $this->request->getPost('firstname');
        $lastname   = $this->request->getPost('lastname');
        $username   = $this->request->getPost('username');
        // $cpassword  = $this->request->getPost('cpassword');

        $data = [
            'firstname' => $firstname,
            'lastname'  => $lastname,
            'username'  => $username,
            // 'password'  => $password,
        ];

        $myBuilder = $this->db->table($this->table);
        $myBuilder->where($this->pfield, $id);
        if ($myBuilder->update($data)) {

            $this->message_type   = 'success';
            $this->message        = 'Updated successfully';
            $this->setMessage($this->message_type, $this->message);
            return redirect()->to($this->current_page . '/view/' .  $id);
        } else {
            $this->message_type   = 'danger';
            $this->message        = 'Error updating';
            $this->setMessage($this->message_type, $this->message);
            return redirect()->to($this->current_page . '/edit/' .  $id);
        }
    }

    public function update_password()
    {
        $id         = $this->request->getPost('userID');
        $password   = $this->request->getPost('password');
        $cpassword  = $this->request->getPost('cpassword');

        if ($password == $cpassword) {
            $data = [
                'password'  => md5($password),
            ];

            $myBuilder = $this->db->table($this->table);
            $myBuilder->where($this->pfield, $id);
            if ($myBuilder->update($data)) {
                $this->message_type   = 'success';
                $this->message        = 'Updated successfully';
                $this->setMessage($this->message_type, $this->message);
                return redirect()->to($this->current_page . '/view/' .  $id);
            } else {
                $this->message_type   = 'danger';
                $this->message        = 'Error updating';
                $this->setMessage($this->message_type, $this->message);
                return redirect()->to($this->current_page . '/edit_password/' .  $id);
            }
        } else {
            $this->message_type   = 'danger';
            $this->message        = 'Password did not match';
            $this->setMessage($this->message_type, $this->message);
            return redirect()->to($this->current_page . '/edit_password/' .  $id);
        }
    }


}