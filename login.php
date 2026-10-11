<?php
session_start();
require __DIR__ . '/sections/login/login_handler.php';

$pageTitle = 'Photo G - Login';
include __DIR__ . '/sections/head.php';
?>
  <body>
    <?php include __DIR__ . '/sections/navbar.php'; ?>
    <?php include __DIR__ . '/sections/login/login_form.php'; ?>
    <?php include __DIR__ . '/sections/scripts.php'; ?>
  </body>
</html>