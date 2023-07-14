
    <!-- Modal -->
    <div id="myModalPostPages" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPostPages()">X</span>
            <h2>Crear Página</h2>
            <?php require_once 'layout/formPostPages.php' ?>
            
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPostPages() {
            document.getElementById("myModalPostPages").style.display = "block";
        }

        function closeModalPostPages() {
            document.getElementById("myModalPostPages").style.display = "none";
        }
        
       
    </script>
</body>
</html>
