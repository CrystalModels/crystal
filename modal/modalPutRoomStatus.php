
    <!-- Modal -->
    <div id="myModalPutRoomStatus" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutRoomStatus()">X</span>
            <h2>Cambiar Estado</h2>
               
            <?php require_once 'layout/formPutRoomStatus.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutRoomStatus() {
            document.getElementById("myModalPutRoomStatus").style.display = "block";
        }

        function closeModalPutRoomStatus() {
            document.getElementById("myModalPutRoomStatus").style.display = "none";
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
