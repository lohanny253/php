<?php
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["senha"]);
unset($_SESSION["tipo"]);
session_destroy();
header("location: index.php");
exit;