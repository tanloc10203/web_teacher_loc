<?php

namespace app\controllers;

use app\core\Controller;

class Home extends Controller
{
  public function index()
  {
    $this->view("layoutMaster", [
      'name' => 'Thứ 2',
      'page' => 'home',
      'title' => 'Home',
    ]);
  }

  public function total($x, $y)
  {
    echo $x + $y;
  }
}
