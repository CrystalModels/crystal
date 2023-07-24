<!-- HTML -->
<div id="gallery"></div>

<script>
function obtenerNombresImagenes() {
  fetch('multimedio.php') // Ruta al archivo PHP que obtiene la lista de imágenes
    .then(response => response.json())
    .then(data => {
      const imagenes = data;

      // Aquí tienes el array 'imagenes' que contiene los nombres de todas las imágenes en la carpeta del servidor
      console.log(imagenes);

      // Puedes realizar más acciones aquí, como mostrar las imágenes en pantalla
      mostrarImagenesEnPantalla(imagenes);
    })
    .catch(error => {
      console.error('Error:', error);
    });
}

function mostrarImagenesEnPantalla(imagenes) {
  const gallery = document.getElementById('gallery');
  gallery.innerHTML = '';

  // Crear elementos de imagen y agregarlos al contenedor
  imagenes.forEach(imagen => {
    const imgElement = document.createElement('img');
    imgElement.src = 'ruta/de/la/carpeta/' + imagen; // Ajusta la ruta según tu estructura de carpetas en el servidor
    gallery.appendChild(imgElement);
  });
}

// Llamar a la función para obtener los nombres de imágenes desde el servidor
obtenerNombresImagenes();
</script>