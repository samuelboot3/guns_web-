<?php
$titulo = "Seguridad | Guía de Pistolas";
require 'includes/datos.php';
include 'includes/header.php';
?>
<main class="container my-5">
  <h1 class="mb-4">Normas básicas de seguridad</h1>
  <div class="alert alert-warning">
    <i class="bi bi-exclamation-triangle-fill"></i>
    Las armas de fuego solo deben ser manejadas por personas autorizadas y capacitadas, conforme a la ley de cada país.
  </div>
  <div class="accordion" id="acordeon">
    <?php foreach ($reglas_seguridad as $i => $regla): ?>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button <?= $i ? 'collapsed' : '' ?>" type="button"
                data-bs-toggle="collapse" data-bs-target="#r<?= $i ?>">
          Regla <?= $i + 1 ?>
        </button>
      </h2>
      <div id="r<?= $i ?>" class="accordion-collapse collapse <?= $i ? '' : 'show' ?>" data-bs-parent="#acordeon">
        <div class="accordion-body"><?= htmlspecialchars($regla) ?></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</main>
<?php include 'includes/footer.php'; ?>
