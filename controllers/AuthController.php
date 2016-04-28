<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 28-04-16
 * Time: 16:19
 */


namespace Controllers;
use Models\Users;
class AuthController{
    private $user_model = null;

    public function __construct(Users $user){
    $this->user_model = $user;
}
    public function getLogin()
    {
        return ['view' => 'login.php', 'ressource_title' => 'User Login'];
    }
    public function getRegister()
    {
        return ['view' => 'register.php', 'ressource_title' => 'Register new user'];
    }

}
