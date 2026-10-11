<?php
session_start();
require __DIR__ . '/sections/register/register_handler.php'; 

$pageTitle = 'Photo G - Register';
include __DIR__ . '/sections/head.php';
?>
  <body class="background">
    <?php include __DIR__ . '/sections/navbar.php'; ?>
    <?php include __DIR__ . '/sections/register/register_form.php'; ?>
    <?php include __DIR__ . '/sections/scripts.php'; ?>
  </body>
</html>