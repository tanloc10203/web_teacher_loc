<?php

use app\core\forms\Form;

$form = new Form();

?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-5">
      <h1 class="text-center">Đăng ký</h1>

      <?php $form->begin(BASE_URL . "/register", 'post', 'register') ?>

      <div class="mb-3">
        <?php echo $form->field($params['model'], "fullName")  ?>
      </div>

      <div class="mb-3">
        <?php echo $form->field($params['model'], "username") ?>
      </div>

      <div class="mb-3">
        <?php echo $form->field($params['model'], "password")->passwordField() ?>
      </div>

      <button class="btn btn-primary" type="submit">Đăng ký</button>

      <?php $form->end() ?>
    </div>
  </div>
</div>