<?php $pagina = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($titulo ?? 'Pistolas: guía informativa') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><i class="bi bi-crosshair"></i> Guía de Pistolas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link <?= $pagina=='index.php'?'active':'' ?>" href="index.php">Inicio</a></li>
        <li class="nav-item"><a class="nav-link <?= $pagina=='catalogo.php'?'active':'' ?>" href="catalogo.php">Catálogo</a></li>
        <li class="nav-item"><a class="nav-link <?= $pagina=='seguridad.php'?'active':'' ?>" href="seguridad.php">Seguridad</a></li>
        <li class="nav-item"><a class="nav-link <?= $pagina=='contacto.php'?'active':'' ?>" href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>
