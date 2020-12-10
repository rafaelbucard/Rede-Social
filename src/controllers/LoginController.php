<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\LoginHandler;
use\src\handlers\LoguinHandeler;


class loginController extends Controller {

    public function signin() {
       $this->render('login');
    }

    public function signinAction() {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
        if ($email && $password) {
            $token = LoginHandler::verifyLogin($email, $password);
            
        } else {
            $_SESSION['flash'] = 'Digite os campos de e-mail e senha';
            $this->redirect('login');
        }
    }

    public function signup() {
        echo 'cadastro';
        
    }
   
    

}