<?php
namespace App\Controllers\Usuario;

use App\Controllers\BaseController;

class Logout extends BaseController{
    public function index(){
        session()->destroy();
        return redirect()->to(route_to('index'));
    }



}//fin class
