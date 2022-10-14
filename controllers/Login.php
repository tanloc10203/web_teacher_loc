<?php

namespace app\controllers;

use app\core\Controller;

class Login extends Controller
{
  public function index()
  {
    $this->view("layoutMaster", [
      'page' => 'login',
      'title' => 'Login',
      'js' => ['main', 'login',],
      'css' => ['main'],
    ]);
  }
}
