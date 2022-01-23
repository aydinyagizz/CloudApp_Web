<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class Home extends BaseController
{

    protected $session;
    private $ImageModel;
    private $registerModel;
    private $loginModel;

    public function __construct()
    {
        helper('upload');
        $this->session = \Config\Services::session();
        $this->registerModel = new \App\Models\RegisterModel();
        $this->loginModel = new \App\Models\loginModel();
        $this->ImageModel = new \App\Models\ImageModel();
    }

    public function index()
    {

    }

    public function login($user_email, $user_key, $user_pass)
    {


        $data = [
            'user_email' => $user_email,
            'user_pass' => $user_key,
            'user_key' => $user_pass,
        ];
//            $user = $this->loginModel->where('email', $data['email'])->first();


        $result = $this->loginModel->girisYap($data['user_email'], $data['user_pass'], $data['user_key']);

        if (!$result) {
            return $this->response->setJSON($result);

        } else {

            $this->session->set([
                'isLogin' => true,
                'userData' => [
                    'id' => $result->user_id,
                    'user_email' => $result->user_email
                ]
            ]);

            return $this->response->setJSON($result);

        }


    }


}