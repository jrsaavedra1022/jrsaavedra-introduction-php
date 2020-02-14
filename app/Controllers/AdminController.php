<?php

namespace App\Controllers;

class AdminController extends BaseController {
    
    public function indexAdmin(){
        return $this->renderHTML('admin.twig');
    }
}