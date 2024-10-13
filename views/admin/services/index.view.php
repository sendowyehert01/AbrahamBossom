<?php require base_path('./views/admin/partials/head.php') ?>
<?php require base_path('./views/admin/services/create.view.php') ?>

  <div class="col-10 mt-3">

    <!-- Button trigger modal -->
    <div class="mb-3">
      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#createModal">
        Create Service
      </button>
    </div>
    <!-- Button trigger modal -->

    <div class="border rounded">
      <div class="text-center text-monospace text-white bg-success border rounded-top p-3 h4">
        SERVICES
      </div>
      <div class="p-3">
        <table id="myTable" class="table border" >  
            <thead>  
              <tr>  
                <th>Service Name</th>  
                <th>Service Price</th>  
                <th>Description</th> 
                <th></th> 
              </tr>  
            </thead>  
            <tbody>  
              <?php foreach($services as $service) : ?>
                <tr>  
                  <td>            
                    <a href="/admin/service?id=<?= $service['id'] ?>" class="text-decoration-none">
                      <?= htmlspecialchars($service['name']) ?>
                    </a>
                  </td>  
                  <td><?= $service['price'] ?></td>  
                  <td><?= $service['description'] ?></td>  
                  <td>
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li>
                        <a class="dropdown-item" href="/admin/services/edit?id=<?= $service['id'] ?>" >
                          Update
                        </a>
                      </li>
                      <li>
                        <form method="POST" action="/admin/service?id=<?= $service['id'] ?>">
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit" class="dropdown-item text-danger">Delete</button>
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
    $('#myTable').dataTable();
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

  
