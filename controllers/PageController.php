<?php

/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 28-04-16
 * Time: 15:27
 */
namespace Controllers;

class PageController extends Controller
{
    public function home()
    {
        return ['view' => 'home.php', 'ressource_title' => 'Home page'];
    }

    public function admin()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ?a=getLogin&r=auth');
        }
        return ['view' => 'home.php', 'ressource_title' => 'Admin Page'];
    }
}