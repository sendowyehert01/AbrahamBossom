<?php require base_path('./views/admin/partials/head.php') ?>
<?php require base_path('./views/admin/services/create.view.php') ?>

<div class="col-10 mt-3">

  <!-- Button trigger modal -->
  <div class="mb-3">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="">
      <i class="fas fa-plus"></i> Create Customer
    </button>
  </div>

  <div class="border rounded shadow-sm">
    <div class="text-center text-white bg-success border rounded-top py-3 h4">
      CUSTOMERS
    </div>
    <div class="p-3">
      <table id="myTable" class="table table-hover table-responsive-sm align-middle mt-5">
        <thead class="text-white" style="background-color: #a5ccba">
          <tr class="text-center">
            <th>Position</th>
            <th>Customer Name</th>
            <th>Gender</th>
            <th>Birth Date</th>
            <th>Address</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($customers as $customer) : ?>
            <tr>
              <td class="text-center"><?= $customer['position'] ?></td>
              <td>
                <a href="/admin/customer?id=<?= $customer['id'] ?>" class="text-decoration-none text-dark">
                  <?= htmlspecialchars($customer['first_name'] . ' ' . $customer['middle'] . ' ' . $customer['last_name'] . ' ' . $customer['suffix'] ?? '') ?>
                </a>
              </td>
              <td class="text-center"><?= $customer['gender'] ?></td>
              <td class="text-center"><?= $customer['birth_date'] ?></td>
              <td><?= $customer['address'] ?></td>
              <td class="text-center">
                <div class="dropdown">
                  <button class="btn btn-sm btn-secondary btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-cogs"></i> Actions
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li>
                      <a class="dropdown-item" href="/admin/customers/edit?id=<?= $customer['id'] ?>">
                        <i class="fas fa-edit"></i> Update
                      </a>
                    </li>
                    <li>
                      <form method="POST" action="/admin/customer?id=<?= $customer['id'] ?>" onsubmit="return confirm('Are you sure you want to delete this customer?');">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="dropdown-item text-danger">
                          <i class="fas fa-trash-alt"></i> Delete
                        </button>
                      </form>
                    </li>
                  </ul>
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
  $('#myTable').DataTable({
    responsive: true,
    language: {
      searchPlaceholder: "Search Customers",
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
