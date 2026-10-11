<?php
$pageTitle = 'PhotoG - Landing';
include __DIR__ . '/sections/head.php';
?>
  <body class="background">

    <?php include __DIR__ . '/sections/navbar.php'; ?>

    <!-- Main Container -->
    <div class="main-wrapper d-flex align-items-center justify-content-center p-3 p-md-5">
      <div class="hero-card p-4 p-md-5">

        <!-- HERO SECTION: Text + Carousel -->
        <div class="row align-items-center g-4 mb-5">
          <?php include __DIR__ . '/sections/hero.php'; ?>
          <?php include __DIR__ . '/sections/carousel.php'; ?>
        </div>

        <!-- CUSTOMER PANEL SECTION -->
        <div class="customer-panel pt-3 border-top border-secondary border-opacity-25">
          <?php include __DIR__ . '/sections/customers.php'; ?>
          <?php include __DIR__ . '/sections/quote.php'; ?>
        </div>

      </div>
    </div>

    <?php include __DIR__ . '/sections/scripts.php'; ?>
  </body>
</html>
