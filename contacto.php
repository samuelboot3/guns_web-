<?php
$titulo = "Contacto | Guía de Pistolas";
$errores = [];
$enviado = false;
$nombre = $correo = $mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre  = trim($_POST['nombre'] ?? '');
    $correo  = trim($_POST['correo'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    if ($nombre === '') $errores[] = "El nombre es obligatorio.";
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) $errores[] = "Ingrese un correo válido.";
    if (mb_strlen($mensaje) < 10) $errores[] = "El mensaje debe tener al menos 10 caracteres.";

    if (!$errores) {
        // Aquí se podría guardar en BD o enviar con mail(). Para el trabajo solo se confirma.
        $enviado = true;
    }
}
include 'includes/header.php';
?>
<main class="container my-5" style="max-width: 640px;">
  <h1 class="mb-4">Contacto</h1>

  <?php if ($enviado): ?>
    <div class="alert alert-success">¡Gracias, <?= htmlspecialchars($nombre) ?>! Tu mensaje fue recibido.</div>
  <?php endif; ?>
  <?php if ($errores): ?>
    <div class="alert alert-danger"><ul class="mb-0">
      <?php foreach ($errores as $e): ?><li><?= htmlspecialchars($e) ?></li><?php endforeach; ?>
    </ul></div>
  <?php endif; ?>

  <form method="post" novalidate>
    <div class="mb-3">
      <label class="form-label" for="nombre">Nombre</label>
      <input class="form-control" id="nombre" name="nombre" value="<?= htmlspecialchars($enviado ? '' : $nombre) ?>">
    </div>
    <div class="mb-3">
      <label class="form-label" for="correo">Correo</label>
      <input type="email" class="form-control" id="correo" name="correo" value="<?= htmlspecialchars($enviado ? '' : $correo) ?>">
    </div>
    <div class="mb-3">
      <label class="form-label" for="mensaje">Mensaje</label>
      <textarea class="form-control" id="mensaje" name="mensaje" rows="4"><?= htmlspecialchars($enviado ? '' : $mensaje) ?></textarea>
    </div>
    <button class="btn btn-dark" type="submit">Enviar</button>
  </form>
</main>
<?php include 'includes/footer.php'; ?>
