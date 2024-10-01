<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

  <main>
    <div class="mx-auto max-w-5xl py-6 sm:px-6 lg:px-8">
      <form method="POST" action="/serivces">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $service['id']?>">

        <div class="space-y-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="col-span-full">
                <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Name of Service</label>
                <input type="text" name="name" value="<?= $service['name']?>">
                <?php if (isset($errors['name'])) : ?>
                  <p class="text-red-500 text-sm mt-2"><?= $errors['name'] ?></p>
                <?php endif; ?>
              </div>
              <div class="col-span-full">
                <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Price of Service</label>
                <input type="number" name="price">
                <?php if (isset($errors['price'])) : ?>
                  <p class="text-red-500 text-sm mt-2"><?= $errors['price'] ?></p>
                <?php endif; ?>
              </div>
              <div class="col-span-full">
                <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Service Description</label>
                <div class="mt-2">
                  <textarea 
                    id="description" 
                    name="description" 
                    rows="3"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    ><?= $_POST['description'] ?? '' ?></textarea>
                </div>
                <?php if (isset($errors['description'])) : ?>
                  <p class="text-red-500 text-sm mt-2"><?= $errors['description'] ?></p>
                <?php endif; ?>
                <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about this service.</p>
              </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/notes" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</a>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
      </form>
    </div>
  </main>
  
<?php require base_path('views/partials/foot.php') ?>