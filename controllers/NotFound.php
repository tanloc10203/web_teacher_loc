<?php

namespace app\controllers;

use app\core\Controller;

class NotFound extends Controller
{
  public function index()
  {
    $this->view("_404");
  }
}
