<?php
$slides = [
  ['img' => 'assets/images/photo_6129787349764870505_w.jpg', 'title' => 'Sea Side with a View',       'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'],
  ['img' => 'assets/images/photo_6129787349764870506_w.jpg', 'title' => 'Sieze the way with a rise',  'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'],
  ['img' => 'assets/images/photo_6129787349764870507_w.jpg', 'title' => 'Lorem ipsum dolor',          'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'],
];
?>
<!-- Carousel -->
<div class="col-lg-6 text-center">
  <div id="carouselExampleCaptions" class="carousel slide shadow rounded-4 overflow-hidden" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <?php foreach ($slides as $i => $s): ?>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i ?>"<?= $i === 0 ? ' class="active" aria-current="true"' : '' ?>></button>
      <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
      <?php foreach ($slides as $i => $s): ?>
        <div class="carousel-item<?= $i === 0 ? ' active' : '' ?>">
          <img src="<?= htmlspecialchars($s['img']) ?>" class="d-block w-100 carousel-img" alt="Slide <?= $i + 1 ?>">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-2">
            <h5><?= htmlspecialchars($s['title']) ?></h5>
            <p><?= htmlspecialchars($s['text']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
