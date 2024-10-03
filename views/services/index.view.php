<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

  <main>
    <div>
      <ul>
        <?php foreach($services as $service) : ?>
          <a href="/service-offer?id=<?= $service['id'] ?>">
            <li><?= htmlspecialchars($service['name']) ?></li>
          </a>
        <?php endforeach; ?>
      </ul>
      <p>
        <a href="/services-offer/create">Create Service</a>
      </p>
    </div>
  </main>
  
<?php require base_path('views/partials/foot.php') ?>
