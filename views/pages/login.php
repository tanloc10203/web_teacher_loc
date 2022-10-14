<?php

use app\core\forms\Form;

$form = new Form();
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-5">
      <h1 class="text-center">Đăng nhập</h1>

      <?php $form->begin("", 'post', 'login') ?>

      <?php $form->field($params['model'], "username") ?>

      <?php $form->field($params['model'], "password")->passwordField() ?>

      <button type="submit" class="btn btn-primary" id="btn-login">Đăng nhập</button>

      <?php $form->end() ?>
    </div>
  </div>
</div>