<?php 
  session_start(); 
  if (isset($_SESSION["EcoSearch"]["logado"]) && $_SESSION["EcoSearch"]["logado"] == true) {
    $logado = true;
  } else {
    $logado = false;
  }
?>
<?=$_SESSION["EcoSearch"]["tipoUser"]?>