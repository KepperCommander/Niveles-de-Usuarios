<?php
session_start();
header("location:index.php");
// Destruye la sesion actual
session_destroy();
?>