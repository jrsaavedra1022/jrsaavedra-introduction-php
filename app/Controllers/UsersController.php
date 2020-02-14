<?php

namespace App\Controllers;
//imports
use Respect\Validation\Validator as v;
use App\Models\User;

// user Controller
class UsersController extends BaseController {
    //view users register
    public function viewAddUser(){
        return $this->renderHtml('addUser.twig');
    }

    //register
    public function saveUser($request){
        //validate post
        $response_message = null;
        if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $userValidator = v::key('name', v::stringType()->notEmpty())
            ->key('lastname', v::stringType()->notEmpty())
            ->key('document', v::stringType()->notEmpty())
            ->key('email', v::stringType()->notEmpty())
            ->key('password', v::stringType()->notEmpty()->length(6, null))
            ->keyValue('passwordConfirm', 'equals', 'password');
            try {
                $userValidator->assert($postData);
                //save user
                $user = new User();
                $user->name = $postData['name'];
                $user->last_name = $postData['lastname'];
                $user->document = $postData['document'];
                $user->email = $postData['email'];
                $user->password = password_hash($postData['password'], PASSWORD_DEFAULT);
                $user->save();

                $response_message = 'Saved';
            }catch(\Exception $e){
                $response_message = $e->getMessage();
            }
            // var_dump($postData);
        }
        return $this->renderHtml('addUser.twig', [
            "response_message" => $response_message,
        ]);
    }
}
