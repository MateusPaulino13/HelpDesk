<?php
session_start();

session_destroy();
header('location:index.php');
// remover indices do array de sessão
// unset()

// destroir a variável de sessão
// session_destroy()    