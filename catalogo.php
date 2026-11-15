<?php
$titulo = "Catálogo | Guía de Pistolas";
require 'includes/datos.php';
include 'includes/header.php';
?>
<main class="container my-5">
  <h1 class="mb-4">Catálogo de modelos</h1>

  <div class="row g-3 mb-4">
    <div class="col-md-8">
      <input type="text" id="buscador" class="form-control" placeholder="Buscar por nombre, país o calibre...">
    </div>
    <div class="col-md-4">
      <select id="filtroTipo" class="form-select">
        <option value="">Todos los tipos</option>
        <option value="Semiautomática">Semiautomática</option>
        <option value="Revólver">Revólver</option>
      </select>
    </div>
  </div>

  <div class="row g-4" id="listado">
    <?php foreach ($pistolas as $p): ?>
    <div class="col-md-6 col-lg-3 item"
         data-tipo="<?= htmlspecialchars($p['tipo']) ?>"
         data-texto="<?= htmlspecialchars(mb_strtolower($p['nombre'].' '.$p['pais'].' '.$p['calibre'])) ?>">
      <div class="card h-100 shadow-sm">
        <div class="card-img-top placeholder-img d-flex align-items-center justify-content-center">
          <i class="bi bi-crosshair fs-1"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title"><?= htmlspecialchars($p['nombre']) ?></h5>
          <span class="badge <?= $p['tipo']==='Revólver' ? 'bg-secondary' : 'bg-dark' ?> mb-2"><?= $p['tipo'] ?></span>
          <p class="card-text small mb-1"><strong>Calibre:</strong> <?= htmlspecialchars($p['calibre']) ?></p>
          <p class="card-text small mb-0"><strong>Año:</strong> <?= $p['anio'] ?></p>
        </div>
        <div class="card-footer bg-white border-0">
          <button class="btn btn-outline-dark btn-sm w-100 btn-detalle"
                  data-bs-toggle="modal" data-bs-target="#modalDetalle"
                  data-nombre="<?= htmlspecialchars($p['nombre']) ?>"
                  data-tipo="<?= htmlspecialchars($p['tipo']) ?>"
                  data-calibre="<?= htmlspecialchars($p['calibre']) ?>"
                  data-pais="<?= htmlspecialchars($p['pais']) ?>"
                  data-anio="<?= $p['anio'] ?>"
                  data-capacidad="<?= $p['capacidad'] ?>"
                  data-descripcion="<?= htmlspecialchars($p['descripcion']) ?>">
            Ver detalles
          </button>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <p id="sinResultados" class="text-center text-muted mt-4 d-none">No se encontraron resultados.</p>
</main>

<div class="modal fade" id="modalDetalle" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mNombre"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p id="mDescripcion"></p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Tipo:</strong> <span id="mTipo"></span></li>
          <li class="list-group-item"><strong>Calibre:</strong> <span id="mCalibre"></span></li>
          <li class="list-group-item"><strong>País:</strong> <span id="mPais"></span></li>
          <li class="list-group-item"><strong>Año:</strong> <span id="mAnio"></span></li>
          <li class="list-group-item"><strong>Capacidad:</strong> <span id="mCapacidad"></span> cartuchos</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
