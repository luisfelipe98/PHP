<?php

session_start();

// Conferir se existe alguém logado
if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
    header('Location: login.php');
}

?>