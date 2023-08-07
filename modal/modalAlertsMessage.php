
    <!-- Modal -->
    <div id="myModalAlertsMessage" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalAlertsMessage()"><h3>X</h3></span>
            <h1>¡Alerta!</h1>
            
      <br>
            <?php require_once 'layout/tableAlertsMessage.php' ?>
            <button onclick="closeModalAlertsMessage();">Cerrar</button>
        </div>
        
    </div>

    <audio id="audioPlayer" src="public/alerts.mp3" preload="auto"></audio>
    <script>
        // JavaScript
        function openModalAlertsMessage() {
            document.getElementById("myModalAlertsMessage").style.display = "block";
            reproducirSonido();
        }

        function closeModalAlertsMessage() {
            document.getElementById("myModalAlertsMessage").style.display = "none";
        }
        
        // Cambiar al modo oscuro
        function enableDarkMode() {
            document.body.classList.add("dark-mode");
        }
        
        // Cambiar al modo claro
        function disableDarkMode() {
            document.body.classList.remove("dark-mode");
        }

        function reproducirSonido() {
  var audio = document.getElementById('audioPlayer');
  audio.play();
}

      
    </script>
      

  


</body>
</html>
