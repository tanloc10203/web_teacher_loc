<?php

namespace app\models;

use \Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
  protected $table = "users";

  private array $errors = [];

  public function validate($data = [])
  {
    if (empty($data['username'])) {
      $this->errors['username'] = "Không được bỏ trông";
    }

    if (empty($data['password']))
      $this->errors['password'] = "Không được bỏ trông";
    else if (strlen($data['password']) < 8)
      $this->errors['password'] = "Mật khẩu có ít nhất 8 kí tự";
  }

  public function getError(): array
  {
    return $this->errors;
  }
}
