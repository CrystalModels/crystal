<ul>
  <li>
    <input type="checkbox" id="item1" value="1">
    <label for="item1">Item 1</label>
  </li>
  <li>
    <input type="checkbox" id="item2" value="2">
    <label for="item2">Item 2</label>
  </li>
  <li>
    <input type="checkbox" id="item3" value="3">
    <label for="item3">Item 3</label>
  </li>
  <!-- Agrega más ítems si es necesario -->
</ul>

<button onclick="getSelectedItems()">Obtener ítems seleccionados</button>

<script>
  function getSelectedItems() {
    // Obtener todos los checkboxes
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var selectedItems = [];

    // Recorrer los checkboxes y guardar los valores seleccionados en el array
    checkboxes.forEach(function(checkbox) {
      if (checkbox.checked) {
        selectedItems.push(checkbox.value);
      }
    });

    // Imprimir los valores seleccionados
    console.log(selectedItems);

    // Aquí puedes realizar la consulta con los valores seleccionados
  }
</script>
