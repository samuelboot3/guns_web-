// Filtro y buscador del catálogo
document.addEventListener('DOMContentLoaded', () => {
  const buscador = document.getElementById('buscador');
  const filtroTipo = document.getElementById('filtroTipo');
  const items = document.querySelectorAll('.item');
  const sinResultados = document.getElementById('sinResultados');

  function filtrar() {
    const texto = buscador.value.toLowerCase().trim();
    const tipo = filtroTipo.value;
    let visibles = 0;
    items.forEach(item => {
      const coincide = item.dataset.texto.includes(texto) && (tipo === '' || item.dataset.tipo === tipo);
      item.classList.toggle('d-none', !coincide);
      if (coincide) visibles++;
    });
    sinResultados.classList.toggle('d-none', visibles > 0);
  }

  if (buscador && filtroTipo) {
    buscador.addEventListener('input', filtrar);
    filtroTipo.addEventListener('change', filtrar);
  }

  // Rellenar el modal de detalles
  document.querySelectorAll('.btn-detalle').forEach(btn => {
    btn.addEventListener('click', () => {
      const d = btn.dataset;
      document.getElementById('mNombre').textContent = d.nombre;
      document.getElementById('mDescripcion').textContent = d.descripcion;
      document.getElementById('mTipo').textContent = d.tipo;
      document.getElementById('mCalibre').textContent = d.calibre;
      document.getElementById('mPais').textContent = d.pais;
      document.getElementById('mAnio').textContent = d.anio;
      document.getElementById('mCapacidad').textContent = d.capacidad;
    });
  });
});
