<!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?= BASE_URL . '/' ?>">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($params['title']) ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <?php if (isset($params['css']) && is_array($params['css'])) : ?>
    <?php foreach ($params['css'] as $key => $value) : ?>
      <link href="<?= $this->getCss($value) ?>" rel="stylesheet" />
    <?php endforeach; ?>
  <?php endif; ?>

</head>

<body>
  <header class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">LOGO</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE_URL . "/" ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL . "/contact" ?>">Contact</a>
                  </li>
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE_URL . "/login" ?>">Log in</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL . "/register" ?>">Register</a>
                  </li>
                </ul>

              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>