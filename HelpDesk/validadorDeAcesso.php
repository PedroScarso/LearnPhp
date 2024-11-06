<?php
session_start();

  if(!isset($_SESSION['Autenticado']) || $_SESSION['Autenticado'] != 'Sim') {
    header ('Location: index.php?login=erro2');
  }
?>