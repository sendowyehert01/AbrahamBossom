<?php require base_path('views/partials/head.php') ?>

  <main>
    <div>
      <form method="POST" action="/services-offer/store">
        <div>
            <div>
              <div>
                <label for="about">Name of Service</label>
                <input type="text" name="name">
                <?php if (isset($errors['name'])) : ?>
                  <p class="text-danger"><?= $errors['name'] ?></p>
                <?php endif; ?>
              </div>
              <div>
                <label for="about">Price of Service</label>
                <input type="number" name="price">
                <?php if (isset($errors['price'])) : ?>
                  <p class="text-danger"><?= $errors['price'] ?></p>
                <?php endif; ?>
              </div>
              <div>
                <label for="about">Service Description</label>
                <div class="mt-2">
                  <textarea 
                    id="description" 
                    name="description" 
                    rows="3"
                    ><?= $_POST['description'] ?? '' ?></textarea>
                </div>
                <?php if (isset($errors['description'])) : ?>
                  <p class="text-danger"><?= $errors['description'] ?></p>
                <?php endif; ?>
                <p>Write a few sentences about this service.</p>
              </div>
            </div>
        </div>
        <div>
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </form>
    </div>
  </main>
