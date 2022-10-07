<?php

namespace app\core;

class Application
{
  private $controller = "home";
  private $action = "index";
  private array $params = [];

  public function __construct()
  {
    // $_GET['url']; => array(0 => controller, 1 => active <-> method phương thức của class (hàm), còn lại params)
    $array_path = self::processUrl();

    if (isset($array_path[0]) && file_exists(CONTROLLER_PATH . $array_path[0] . ".php"))
      $this->controller = $array_path[0];
    else
      return self::redirect("./notFound");

    $class = "\\app\\controllers\\$this->controller";
    $this->controller = new $class;

    if (isset($array_path[1]) && method_exists($this->controller, $array_path[1]))
      $this->action = $array_path[1];

    unset($array_path[0], $array_path[1]);

    $this->params = $array_path ?? [];

    // if(isset($array_path))
    //   $this->params = $array_path;
    // else $this->params = [];

    call_user_func_array([$this->controller, $this->action], $this->params);
  }

  public static function processUrl()
  {
    if (isset($_GET['url']))
      return explode("/", filter_var(trim($_GET['url'], "/")));

    return ['0' => 'home'];
  }

  public static function redirect($url = "")
  {
    if (!empty($url)) header("Location: $url");
  }
}
