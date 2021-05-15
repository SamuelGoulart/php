<?php

if (!$_SESSION["usuarioId"]) {
    header('Location: ../index.php');
    exit();
}