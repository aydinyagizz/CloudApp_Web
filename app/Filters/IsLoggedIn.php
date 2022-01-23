<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class IsLoggedIn implements FilterInterface
{
    //TODO: login olmadan panelin alt sayfalarına ulaşamaz login olmadan mail onaylayamaz
    public function before(RequestInterface $request, $arguments = null)
    {
        $segment = $request->uri->getSegments();
        $stopFilter = ['login'];
        $isStopUri = in_array($segment[0], $stopFilter);

        if ($segment[0] == 'panel' && !$isStopUri && !session()->isLogin) {
            return redirect()->to(route_to('login_as'));
        }

        if ($segment[1] == 'mail' && !session()->isLogin){
            return redirect()->to(route_to('login_as'));
        }
    }
    //TODO: giriş yaptıktan sonra login ve loginin alt sayfaları register ve registerin alt sayfalarına gidemez..
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $segment = $request->uri->getSegments();
        $stopFilter = ['login','register'];
        $isStopUri = in_array($segment[0], $stopFilter);

        if ($isStopUri && session()->isLogin ) {
            return redirect()->to(route_to('admin_index'));
        }

    }
}