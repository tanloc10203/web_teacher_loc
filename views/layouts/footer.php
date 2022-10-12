<div class="container">
  <div class="row">
    <div class="col text-center">
      <h2>FOOTER</h2>
    </div>
  </div>
</div>

<div id="overlay" style="display:none;">
  <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;"></div>
  <br />
  Loading...
</div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

<?php if (isset($params['js']) && is_array($params['js'])) : ?>
  <?php foreach ($params['js'] as $key => $value) : ?>
    <script src="<?= $this->getJs($value) ?>"></script>
  <?php endforeach; ?>
<?php endif; ?>

</body>

</html>