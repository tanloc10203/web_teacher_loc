<?php

namespace app\models;

use app\core\db\DbModel;

class UserModel extends DbModel
{
  public string $fullName = '';
  public string $username = '';
  public string $password = '';

  public function tableName(): string
  {
    return 'users';
  }

  public function labels(): array
  {
    return [
      'fullName' => 'Họ và tên',
      'username' => 'Tài khoản',
      'password' => 'Mật khẩu',
    ];
  }

  public function save()
  {
    $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    return parent::save();
  }

  public function rules(): array
  {
    return [
      'fullName' => [self::RULE_REQUIRED],
      'username' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 4]],
      'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 32]],
    ];
  }

  public function attributes(): array
  {
    return ['fullName', 'password', 'username'];
  }

  public function primaryKey(): string
  {
    return 'id';
  }

  public function getDisplayName(): string
  {
    return $this->fullName;
  }
}
