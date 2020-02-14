<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as v;
use Zend\Diactoros\Response\RedirectResponse;

class AuthController extends BaseController {
    public function viewLogin(){
        return $this->renderHtml('login.twig');
    }

    public function AuthLogin($request){
        $postData = $request->getParsedBody();
        $responseMessage = null;
        $user = User::where('email', $postData['email'])->first();
        if($user){
            if(\password_verify($postData['password'], $user->password)){
                $_SESSION['userId'] = $user->id;
                return new RedirectResponse('/admin');
            }else{
                $responseMessage = "Bad credentials";
            }
        }else{
            $responseMessage = "Bad credentials";
        }
        return $this->renderHtml('login.twig', [
            'responseMessage' => $responseMessage,
        ]);
    }

    public function Logout(){
        unset($_SESSION['userId']);
        return new RedirectResponse('/login');
    }
    
}