<?php require base_path('./views/admin/partials/head.php') ?>
<?php require base_path('./views/admin/services/create.view.php') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.1/css/all.min.css" integrity="sha384-1234567890abcdef" crossorigin="anonymous">


<div class="col-10 mt-3">
  <!-- Button trigger modal -->
  <div class="mb-3">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
      <i class="fas fa-plus"></i> Create Service
    </button>
  </div>

  <div class="border rounded shadow-sm">
    <div class="text-center text-white bg-success border rounded-top py-3 h4">
      SERVICES
    </div>
    <div class="p-3">
      <table id="serviceTable" class="table table-hover table-responsive-sm align-middle">
        <thead class="text-white" style="background-color: #a5ccba">
          <tr class="text-center">
            <th>Service Name</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($services as $service) : ?>
            <tr>
              <td>
                <a href="/admin/service?id=<?= $service['id'] ?>" class="text-decoration-none text-dark">
                  <?= htmlspecialchars($service['name']) ?>
                </a>
              </td>
              <td><?= $service['description'] ?></td>
              <td class="text-center">
                <div class="btn-group" role="group" aria-label="Service actions">
                  <a href="/admin/services/upload?id=<?= $service['id'] ?>" 
                     class="btn btn-sm btn-success me-1" 
                     title="Upload">
                    <i class="fas fa-upload"></i>
                    Upload
                  </a>
                  <a href="/admin/services/edit?id=<?= $service['id'] ?>" 
                     class="btn btn-sm btn-primary me-1" 
                     title="Update">
                    <i class="fas fa-edit"></i>
                    Update
                  </a>
                  <form method="POST" 
                        action="/admin/service?id=<?= $service['id'] ?>" 
                        onsubmit="return confirm('Are you sure you want to delete this service?');"
                        class="d-inline">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" 
                            class="btn btn-sm btn-danger" 
                            title="Archive">
                      <i class="fas fa-archive"></i>
                      Archive
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>    

<script>
$(document).ready(function(){
  $('#serviceTable').DataTable({
    responsive: true,
    language: {
      searchPlaceholder: "Search Services",
    },
    pagingType: 'full_numbers',
    lengthMenu: [[5, 10, 25, 50], [5, 10, 25, 50]]
  });
});
</script>

<script>
(() => {
  'use strict'

  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

<?php require base_path('./views/admin/partials/foot.php') ?>