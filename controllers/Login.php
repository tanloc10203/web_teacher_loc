<?php

namespace app\controllers;

use app\core\Controller;
use app\models\UsersModel;

class Login extends Controller
{
  public function index()
  {
    $user = new UsersModel();

    if ($this->isPost()) {
      $data = $this->getBody();
      $user->validate($data);

      if (count($user->getError()) !== 0) {
        echo json_encode(['error' => true, 'message' => 'Create failed', 'dataError' => $user->getError()]);
        exit;
      }

      echo json_encode(['error' => true, 'message' => 'Create failed']);
      exit;
    }

    $this->view("layoutMaster", [
      'page' => 'login',
      'title' => 'Login',
      'js' => ['main', 'login',],
      'css' => ['main'],
    ]);
  }
}
