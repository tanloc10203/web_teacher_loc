<?php

namespace app\models;

use app\core\Database;

class AuthModel extends Database
{
  public string $fullName = "";
  public string $username = "";
  public string $password = "";
}
