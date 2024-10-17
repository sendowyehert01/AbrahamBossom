<?php require base_path('./views/admin/partials/head.php') ?>

  <main>
    <div>
      <p>
        <a href="/admin/inquiries">Go Back</a>
      </p>
          <p><?= $service['name'] ?></p>
          <p><?= $service['description'] ?></p>

          <footer>
            <a href="/admin/inquiries/edit?id=<?= $service['id'] ?>">Edit Inquiry</a>
          </footer>

            <form method="POST">
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
    </div>
  </main>
  
  <?php require base_path('./views/admin/partials/foot.php') ?>
