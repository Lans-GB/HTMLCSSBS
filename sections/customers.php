<?php
$customers = [
  ['name' => 'Lara Jane L.',  'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, ut et! Sed nulla beatae accusantium ratione sit sequi omnis id, deleniti laborum magni ut perferendis ad deserunt quia! Necessitatibus, temporibus.'],
  ['name' => 'Mela Zane P.',  'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam facilis vero sint sit voluptatibus cupiditate est similique ipsum consequuntur, iusto corporis porro, voluptas neque, debitis nesciunt! Facere magnam ab iusto.'],
  ['name' => 'Jhasfher L.',   'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit culpa doloremque, corrupti possimus aliquam consectetur, vitae ullam deserunt officiis maiores rerum, ipsa cupiditate aspernatur! Quos enim id iure? Repellendus, assumenda.'],
  ['name' => 'Eli Em C.',     'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi vitae officia soluta hic itaque esse fugit, voluptatem quam, nemo minima neque maiores quas consequatur a odio incidunt error. Quaerat, laboriosam!'],
  ['name' => 'Tala Mau B.',   'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem debitis labore et magni! Quaerat minima voluptatum inventore tenetur? Tempore porro quibusdam quod, quos enim blanditiis expedita consequuntur inventore. Nam, quo.'],
  ['name' => 'Ao S.',         'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim magni deserunt maiores architecto? Provident tenetur mollitia quaerat quam autem, maxime incidunt dolor odio error totam sapiente temporibus fugit corporis obcaecati!'],
];
?>
<h3 class="fw-bold text-center mb-4">Our Happy Customers</h3>

<div class="row g-3 mb-4">
  <?php foreach ($customers as $c): ?>
    <div class="col-12 col-lg-3">
      <div class="card glass-panel h-100 text-center p-3">
        <i class="bi bi-person-circle fs-1 text-primary mb-2"></i>
        <div class="card-body p-0">
          <h6 class="fw-bold mb-1"><?= htmlspecialchars($c['name']) ?></h6>
          <p class="card-text small text-muted"><?= htmlspecialchars($c['text']) ?></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
