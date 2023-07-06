
    <!-- Modal -->
    <div id="myModalPostCurrency" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPostCurrency()">X</span>
        
            <?php require_once 'layout/formPostCurrency.php' ?>
            
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPostCurrency() {
            document.getElementById("myModalPostCurrency").style.display = "block";
        }

        function closeModalPostCurrency() {
            document.getElementById("myModalPostCurrency").style.display = "none";
        }
        
       
    </script>
</body>
</html>
