

<style>
          footer {
            background-color: #f0f0f0;
            padding: 5px;
            text-align: center;
            font-size: 10px;
            color: #b968ce;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
<footer>
        <div>
            <p>Versión del software: <?php
      require_once 'version/version.php';
      $sub_domaincon = new model_ver();
      echo $sub_domain = $sub_domaincon->versioning();
      ?></p>
            
            <p>Soporte: soporte@example.com</p>
            <p><a href="room.php?roomId=${student.roomId}" target="_blank">Versiones anteriores</a></p>
            <p>&copy; <?php 
    echo $ano_actual = date('Y');?></p>
          </div>
    </footer>