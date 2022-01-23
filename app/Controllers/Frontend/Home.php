<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use function PHPUnit\Framework\isNull;

class Home extends BaseController
{
    private $loginModel;
    private $registerModel;
    protected $validation;
    protected $session;
    private $email;

    public function __construct()
    {
        $this->loginModel = new \App\Models\loginModel();
        $this->registerModel = new \App\Models\RegisterModel();
        $this->validation = \Config\Services::validation();
        helper(['form', 'url', 'text']);
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
    }

    public function index()
    {
        return view('Frontend/HomeView');

    }

    public function login()
    {
        if ($this->request->getMethod() == 'post') {
            $data = [
                'user_email' => $this->request->getPost('user_email'),
                'user_pass' => $this->request->getPost('user_pass'),
                'user_key' => $this->request->getPost('user_key'),
            ];
//            $user = $this->loginModel->where('email', $data['email'])->first();

            if (!$this->validation->run($data, 'login')) {
                $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                return redirect()->to(route_to('login_as'));
            } else {
                $result = $this->loginModel->girisYap($data['user_email'], $data['user_pass'], $data['user_key']);

                if (!$result) {
                    $this->session->setFlashdata(['errors' => 'Kullanıcı Adı Veya Şifre Hatalı veya E-Posta Onaylanmadı.']);
                    return redirect()->to(route_to('login_as'));

                } else {

                    $this->session->set([
                        'isLogin' => true,
                        'userData' => [
                            'id' => $result->user_id,
                            'user_email' => $result->user_email
                        ]
                    ]);
                    return redirect()->to(route_to('mail_as'));

                }
            }
        }
        return view('Frontend/LoginView');

    }

    public function register()
    {
        if ($this->request->getMethod() == 'post') {

            $data = [
                'user_name' => $this->request->getPost('user_name'),
                'user_surname' => $this->request->getPost('user_surname'),
                'user_email' => $this->request->getPost('user_email'),
                'user_pass' => $this->request->getPost('user_pass'),
                'user_pass2' => $this->request->getPost('user_pass2'),
                'user_key' => $this->request->getPost('user_key'),
                'politika' => $this->request->getPost('politika'),
                'verify_code' => random_string('alnum', 128)
            ];

            if (!$this->validation->run($data, 'register')) {
                $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                return redirect()->to(route_to('kayit_ol_as'));
            } else {
                $userCheck = $this->registerModel->where('user_email', $data['user_email'])->get();
                $userCheck = $userCheck->getRow();
                if ($userCheck) {
                    $this->session->setFlashdata(['errors' => 'Bu Mail Adresi Veritabanımızda Kayıtlı. Lütfen Farklı Bir Mail Adresi Deneyiniz.']);
                    return redirect()->to(route_to('kayit_ol_as'));
                } else {
                    $result = $this->registerModel->kayitOl(
                        $data['user_name'],
                        $data['user_surname'],
                        $data['user_email'],
                        $data['user_pass'],
                        $data['user_key'],
                        $data['verify_code'],
                    );

                    if (!$result) {
                        $this->session->setFlashdata(['errors' => 'Beklenmedik bir hata oluştu. Lütfen daha sonra tekrar deneyiniz.']);
                        return redirect()->to(route_to('kayit_ol_as'));

                    } else {
                        //TODO: mail gönderme işlemleri burda olacak. mail doğrulama

                        $this->email->setFrom('uncertainn2@gmail.com', 'Hesap Doğrulama Kodu');
                        $this->email->setTo($data['user_email']);
                        $this->email->setSubject('Hesabınızı Doğrulayın');
                        $url = '<a href="' . base_url() . '/verify/' . $data['verify_code'] . '">Hesabını Onayla</a>';
                        $this->email->setMessage($url);

                        if ($this->email->send()) {
                            $this->session->setFlashdata('success', 'Kayıt İşleminiz Başarılı. Lütfen E-postanızı onaylayınız.');
                            return redirect()->to(route_to('kayit_ol_as'));
                        } //TODO: mail gönderme işlemleri burda olacak. mail doğrulama
                        else {
                            $this->session->setFlashdata('success', 'Kayıt İşleminiz Başarılı. E-Posta Göndermede Bir Sorun Yaşandı. ');
                            return redirect()->to(route_to('kayit_ol_as'));
                        }


                    }
                }
            }
        }
        return view('Frontend/RegisterView');

    }

    public function verify($token)
    {
        $result = $this->registerModel->verify_Email($token);

        if ($result) {
            $this->session->setFlashdata('success', 'Hesabınız Başarıyla Onaylandı.Giriş Yapabilirsiniz.');
            return redirect()->to(route_to('kayit_ol_as'));
        } else {
            $this->session->setFlashdata(['errors' => 'Onaylama işlemi başarısız']);
            return redirect()->to(route_to('kayit_ol_as'));
        }
    }



}