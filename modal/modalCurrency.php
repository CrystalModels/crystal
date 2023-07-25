
    <!-- Modal -->
    <div id="myModalCurrency" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalCurrency()"><h3>X</h3></span>
            <h2>Monedas</h2>
            <a href="#" onclick="openModalPostCurrency();" class="table-button">Crear moneda</a>
      <br>
            <?php require_once 'layout/tableCurrencys.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalCurrency() {
            document.getElementById("myModalCurrency").style.display = "block";
        }

        function closeModalCurrency() {
            document.getElementById("myModalCurrency").style.display = "none";
        }
        
        // Cambiar al modo oscuro
        function enableDarkMode() {
            document.body.classList.add("dark-mode");
        }
        
        // Cambiar al modo claro
        function disableDarkMode() {
            document.body.classList.remove("dark-mode");
        }
    </script>
</body>
</html>
