<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <ul>
        <?php /** @var array<string, array> $notes */ ?>
        <?php foreach($services as $service) : ?>
          <a href="/service-offer?id=<?= $service['id'] ?>" class="text-blue-500 hover:underline">
            <li><?= htmlspecialchars($service['name']) ?></li>
          </a>
        <?php endforeach; ?>
      </ul>
      <p class="mt-6">
        <a href="/services-offer/create" class="text-blue-500 underline">Create Service</a>
      </p>
    </div>
  </main>
  
<?php require base_path('views/partials/foot.php') ?>