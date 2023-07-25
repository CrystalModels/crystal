
    <!-- Modal -->
    <div id="myModalPutCurrencyStatus" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutCurrencyStatus()"><h3>X</h3></span>
            <h2>Cambiar estado</h2>
               
            <?php require_once 'layout/formPutCurrencyStatus.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutCurrencyStatus() {
            document.getElementById("myModalPutCurrencyStatus").style.display = "block";
        }

        function closeModalPutCurrencyStatus() {
            document.getElementById("myModalPutCurrencyStatus").style.display = "none";
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
