<?php

namespace app\controllers;

use app\core\Controller;

class Home extends Controller
{
  public function index()
  {
    $model = $this->model("HomeModel");

    $this->view("layoutMaster", [
      'name' => 'Thứ 2',
      'page' => 'home',
      'title' => 'Home',
      'dataStudent' => $model::all()->find(1),
      'total' => $model::all()->count(),
    ]);
  }

  public function total($x, $y)
  {
    echo $x + $y;
  }
}
