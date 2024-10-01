<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p class="mb-6">
        <a href="/services-offer" class="text-blue-500 underline">Go Back</a>
      </p>
          <p><?= $service['name'] ?></p>
          <p><?= $service['description'] ?></p>

          <footer class="mt-6">
            <a href="/services-offer/edit?id=<?= $service['id'] ?>">Edit Service</a>
          </footer>

          <form method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
    </div>
  </main>
  
<?php require base_path('views/partials/foot.php') ?>