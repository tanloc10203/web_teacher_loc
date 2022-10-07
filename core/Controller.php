<?php

namespace app\core;

class Controller
{
  public function model($model)
  {
    if (file_exists(MODEL_PATH . $model . ".php")) {
      $class = "\\app\\models\\$model";
      return new $class;
    }

    exit("MODEL NOT FOUND!");
  }

  public function view($view, $params = [])
  {
    if (file_exists(VIEW_PATH . $view . ".php")) {
      return require_once VIEW_PATH . $view . ".php";
    }

    exit("VIEW NOT FOUND!");
  }

  public function getLayout($nameLayout, $params = [])
  {
    if (file_exists(VIEW_LAYOUTS_PATH . $nameLayout . '.php')) {
      return require_once VIEW_LAYOUTS_PATH . $nameLayout . '.php';
    }

    exit("GET LAYOUT NOT FOUND!");
  }

  public function getPage($namePage, $params = [])
  {
    if (file_exists(VIEW_PAGES_PATH . $namePage . '.php')) {
      return require_once VIEW_PAGES_PATH . $namePage . '.php';
    }

    exit("GET PAGE NOT FOUND!");
  }

  public function getCss($nameCss)
  {
    echo PUBLIC_PATH . "/css/$nameCss.css";
  }

  public function getJs($nameJs)
  {
    echo PUBLIC_PATH . "/js/$nameJs.js";
  }
}
