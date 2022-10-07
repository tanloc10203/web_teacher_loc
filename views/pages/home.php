<h1>Name: <?= htmlspecialchars($params['name']) ?></h1>

<?php foreach ($params['dataStudent'] as $row) { ?>
  <p><?= htmlspecialchars($row['hoten']) . "-" . htmlspecialchars($row['namsinh']) ?></p>
<?php } ?>

<h1>Tổng = <?= htmlspecialchars($params['total']) ?></h1>