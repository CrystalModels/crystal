
    <!-- Modal -->
    <div id="myModalPutPageCurrency" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutPageCurrency()">X</span>
            <h2>Cambiar Moneda de Cobro</h2>
               
            <?php require_once 'layout/formPutPageCurrency.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutPageCurrency() {
            document.getElementById("myModalPutPageCurrency").style.display = "block";
        }

        function closeModalPutPageCurrency() {
            document.getElementById("myModalPutPageCurrency").style.display = "none";
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
