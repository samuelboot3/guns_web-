<?php
$titulo = "Inicio | Guía de Pistolas";
require 'includes/datos.php';
include 'includes/header.php';
$semi = count(array_filter($pistolas, fn($p) => $p['tipo'] === 'Semiautomática'));
$rev  = count($pistolas) - $semi;
?>
<header class="hero text-center text-white d-flex align-items-center">
  <div class="container">
    <h1 class="display-4 fw-bold">Guía informativa de pistolas</h1>
    <p class="lead">Historia, tipos y normas de seguridad sobre las armas cortas más conocidas.</p>
    <a href="catalogo.php" class="btn btn-warning btn-lg">Ver catálogo</a>
  </div>
</header>

<main class="container my-5">
  <div class="row text-center g-4 mb-5">
    <div class="col-md-4"><div class="card shadow-sm h-100"><div class="card-body">
      <h2 class="display-6"><?= count($pistolas) ?></h2><p class="mb-0">Modelos en el catálogo</p></div></div></div>
    <div class="col-md-4"><div class="card shadow-sm h-100"><div class="card-body">
      <h2 class="display-6"><?= $semi ?></h2><p class="mb-0">Semiautomáticas</p></div></div></div>
    <div class="col-md-4"><div class="card shadow-sm h-100"><div class="card-body">
      <h2 class="display-6"><?= $rev ?></h2><p class="mb-0">Revólveres</p></div></div></div>
  </div>

  <div class="row g-4">
    <div class="col-md-6">
      <h3>¿Qué es una pistola?</h3>
      <p>Una pistola es un arma de fuego corta, diseñada para ser empleada con una sola mano. Se divide principalmente en
      <strong>semiautomáticas</strong>, que recargan la siguiente munición con la energía del disparo, y
      <strong>revólveres</strong>, que usan un tambor giratorio con varias recámaras.</p>
    </div>
    <div class="col-md-6">
      <h3>Sobre este proyecto</h3>
      <p>Sitio web sencillo desarrollado con <strong>PHP</strong>, <strong>JavaScript</strong> y <strong>Bootstrap 5</strong>.
      El contenido es de carácter histórico y educativo; no promueve el uso de armas. En muchos países su tenencia
      está regulada por ley.</p>
    </div>
  </div>
</main>
<?php include 'includes/footer.php'; ?>
