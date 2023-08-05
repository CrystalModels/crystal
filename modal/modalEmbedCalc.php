
    <!-- Modal -->
    <div id="myModalembedcal" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalembedcal()"><h3>X</h3></span>
            <h2>Calculadora</h2>
               
            <iframe src="https://www.desmos.com/scientific?lang=es" width="100%" height="500px" frameborder="0"></iframe>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalembedcal() {
            document.getElementById("myModalembedcal").style.display = "block";
        }

        function closeModalembedcal() {
            document.getElementById("myModalembedcal").style.display = "none";
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
