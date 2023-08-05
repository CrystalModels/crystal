
    <!-- Modal -->
    <div id="myModalembed" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalembed()"><h3>X</h3></span>
            <h2>Cambio de moneda actual</h2>
               
            <iframe src="https://mail.hostinger.com/?_task=mail&_mbox=INBOX" width="100%" height="500px" frameborder="0"></iframe>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalembed() {
            document.getElementById("myModalembed").style.display = "block";
        }

        function closeModalembed() {
            document.getElementById("myModalembed").style.display = "none";
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
