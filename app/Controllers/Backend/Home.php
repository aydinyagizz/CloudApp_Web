<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class Home extends BaseController
{

    protected $session;
    private $ImageModel;

    public function __construct()
    {
        helper('upload');
        $this->session = \Config\Services::session();
        $this->ImageModel = new \App\Models\ImageModel();
    }

    public function index()
    {
        $data = [
            'record' => $this->ImageModel->GetAllImage(),
            'storage' => $this->ImageModel->GetBar()
        ];


        return view('Backend/HomeView', $data);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(route_to('home_page'));
    }

    public function imageUpload()
    {
        //TODO:Form Post Edildi mi
        if ($this->request->getMethod() == 'post'){
            $img = $this->request->getFile('file');

            //TODO:Resim var mı var ise aşağıdakileri yap
            if ($img->isValid() && !$img->hasMoved()) {

                $data = [
                    'image_user_id' => $_SESSION['userData']['id'],
                    'image_name' => $img->getName(),
                    'image_url' => 'N0N',
                    'image_mime' => $img->getMimeType(),
                    'image_type' => $img->getType(),
                    'image_size' => $img->getSize()/(1000*1024),
                    'image_data' => file_get_contents($img->getTempName()),
                ];
                $countInsert = $this->ImageModel->ImageInsert($data);

                if ($countInsert) {
                    return redirect()->to(route_to('admin_index'));
                }
            }
            return redirect()->to(route_to('admin_index'));

        }


    }

}