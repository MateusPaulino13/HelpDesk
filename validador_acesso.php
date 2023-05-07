<?php
 session_start();

 if (!isset($_SESSION['autentidado']) || $_SESSION['autenticado'] != "SIM") {
    header("Location: index.php?login=erro2");
  }
