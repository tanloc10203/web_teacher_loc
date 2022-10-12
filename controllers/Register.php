<?php

namespace app\controllers;

use app\core\Controller;

class Register extends Controller
{
  public function index()
  {
    $this->view("layoutMaster", [
      'page' => 'register',
      'title' => 'Register'
    ]);
  }
}
