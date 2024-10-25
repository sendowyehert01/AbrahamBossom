<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<style>
  .table-success th {
      background-color: #28a745; /* Bootstrap green */
      color: white; /* White text for contrast */
  }
</style>
<div class="container">
  <div class="row mb-1">
    <div class="col-lg-3 border border-3 rounded m-3">
      <div class="d-flex justify-content-center">
        <div class="m-4">
          <img src="style/images/452302525_2213886822325292_8888163133302808302_n.png" height="200px" width="200px" class="rounded-circle img-thumbnail" alt="sendo_test">
        </div>
      </div>
      <div class="text-center">
        <p><span class="h4"><?= $user['first_name']. ' ' . $user['middle'] . ' ' . $user['last_name'] ?></span></p>
      </div>
    </div>
    <div class="col border border-3 rounded m-3">
      <div class="d-flex justify-content-center mt-3">
        <p><span class="h3">INFORMATION</span></p>
      </div>
      <div class="container">
        <div class="row mb-3">
            <div class="col-lg-2 font-weight-bold">Full Name: </div>
            <div class="col"><?= $user['first_name']. ' ' . $user['middle'] . ' ' . $user['last_name'] ?></div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-2 font-weight-bold">Gender: </div>
            <div class="col"><?= $user['gender'] ?></div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-2 font-weight-bold">Address: </div>
            <div class="col"><?= $user['address'] ?></div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-2 font-weight-bold">Birthdate: </div>
            <div class="col"><?= $user['birth_date'] ?></div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-2 font-weight-bold">Relative Name: </div>
            <div class="col"><?= $user['relative_name'] ?></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container border-3 border rounded">
  <table class="table table-success mt-3 mb-3">
    <thead>
      <tr>
        <th scope="col">Product/Services</th>
        <th scope="col">Lot Type</th>
        <th scope="col">Date Availed</th>
        <th scope="col">Payment Method</th>
        <th scope="col">Total</th>
        <th scope="col">Reference No.</th>
        <th scope="col">Status</th>
        <th scope="col">Outstanding Balance</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($transactions as $transaction) : ?>
        <tr>
          <td><?= $transaction['service_id'] ?></td>
          <td><?= $transaction['type'] ?></td>
          <td><?= $transaction['created_at'] ?></td>
          <td><?= $transaction['mop'] ?></td>
          <td>₱ <?= number_format($transaction['total_price'], 2) ?></td>
          <td><?= $transaction['ref_id'] ?></td>
          <td><?= $transaction['status'] ?></td>
          <td>₱ <?= number_format($transaction['balance'], 2) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  </div>
</div>
  
<?php require base_path('views/partials/foot.php') ?>