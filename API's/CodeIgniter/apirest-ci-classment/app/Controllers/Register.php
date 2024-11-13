<?php
namespace App\Controllers;

use App\Controllers\BaseController;

use CodeIgniter\API\ResponseTrait;

use App\Models\UserModel;

class Register extends BaseController 
{
    use ResponseTrait;
    public function index()
{
    $rules = [
        'usuario_documento' => ['rules' => 'required|min_length[4]|max_length[12]'],
        'usuario_nombre_completo' => ['rules' => 'required|min_length[4]|max_length[255]'],
        'usuario_telefono' => ['rules' => 'required|min_length[4]|max_length[12]'],
        'email' => ['rules' => 'required|min_length[4]|max_length[255]|valid_email|is_unique[users.email]'],
        'password' => ['rules' => 'required|min_length[4]|max_length[255]|'],
        'usuario_edad' => ['rules' => 'required|min_length[1]|max_length[2]'],
        'usuario_genero' => ['rules' => 'required|min_length[4]|max_length[10]'],
        'usuario_estatura' => ['rules' => 'required|min_length[1]|max_length[10]'], 
        'usuario_peso' => ['rules' => 'required|min_length[4]|max_length[10]'],
        'usuario_objetivo' => ['rules' => 'required|min_length[4]|max_length[255]']
    ];

    if ($this->validate($rules)){
        $model = new UserModel();
        $data = [
            'usuario_documento' => $this->request->getVar('usuario_documento'),
            'usuario_nombre_completo' => $this->request->getVar('usuario_nombre_completo'),
            'usuario_telefono' => $this->request->getVar('usuario_telefono'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'usuario_edad' => $this->request->getVar('usuario_edad'),
            'usuario_genero' => $this->request->getVar('usuario_genero'),
            'usuario_estatura' => $this->request->getVar('usuario_estatura'),
            'usuario_peso' => $this->request->getVar('usuario_peso'),
            'usuario_objetivo' => $this->request->getVar('usuario_objetivo')
        ];
        $model->save($data);
        
        return $this->respond(['message' => 'Registered Successfully'], 200);
    }else{
        $response = [
            'errors' => $this->validator->getErrors(),
            'message' => 'Invalid Input' 
        ];
        return $this->fail($response, 409);
    }

}

}
