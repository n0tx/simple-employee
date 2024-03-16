<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmployeeController extends BaseController
{
    public function index()
    {
        $employeeModel = new \App\Models\EmployeeModel();
        $data['title'] = 'Simple Employee Management';
        $data['employees'] = $employeeModel->findAll();

        return view('employee', $data);
    }

    public function add()
    {
        $employeeModel = new \App\Models\EmployeeModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'gender' => $this->request->getPost('gender'),
            'age' => $this->request->getPost('age'),
            'first_vaccine' => $this->request->getPost('first_vaccine'),
            'second_vaccine' => $this->request->getPost('second_vaccine')
        ];
        $employeeModel->save($data);
        echo '
        <script>
            alert("Employee Data Added");
            window.location="'.base_url('/').'";
        </script>';
    }

    public function edit($id = null) {
        $employeeModel = new \App\Models\EmployeeModel();
        $data['title'] = 'Simple Employee Management';
        $data['employee'] = $employeeModel->find($id);

        return view('employee_edit', $data);
    }


}
