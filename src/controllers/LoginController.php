<?php
namespace src\controllers;

use \core\Controller;


class loginController extends Controller {

    public function signin() {
       $this->render('login');
    }
    public function signup() {
        echo 'cadastro';
        
    }
   
    

}