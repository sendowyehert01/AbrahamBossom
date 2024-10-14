<?php require base_path('views/admin/partials/head.php') ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
  /* Custom slow-fade gradient background */
  .bg-gradient-success {
    background: rgb(0,135,72);
    background: linear-gradient(90deg, rgba(0,135,72,1) 0%, rgba(0,135,72,1) 43%, rgba(160,230,198,1) 95%);
    color: white;
  }
</style>

<div class="col-10 mt-3">

  <div class="row">
    
    <!-- Total Customers Card -->
    <div class="col-md-4 mb-3">
      <div class="card text-white bg-gradient-success shadow-sm"> <!-- Custom Gradient Class -->
        <div class="card-body d-flex align-items-center">
          <div>
            <h5 class="card-title">Total Customers</h5>
            <h3 class="card-text"><?= $totalCustomers ?></h3>
          </div>
          <div class="ms-auto">
            <i class="fas fa-users fa-2x"></i> <!-- Icon -->
          </div>
        </div>
      </div>
    </div>

    <!-- Total Staff Card -->
    <div class="col-md-4 mb-3">
      <div class="card text-white bg-gradient-success shadow-sm"> <!-- Custom Gradient Class -->
        <div class="card-body d-flex align-items-center">
          <div>
            <h5 class="card-title">Total Staff</h5>
            <h3 class="card-text"><?= $totalStaffs ?></h3>
          </div>
          <div class="ms-auto">
            <i class="fas fa-user-tie fa-2x"></i> <!-- Icon -->
          </div>
        </div>
      </div>
    </div>

    <!-- Total Services Card -->
    <div class="col-md-4 mb-3">
      <div class="card text-white bg-gradient-success shadow-sm"> <!-- Custom Gradient Class -->
        <div class="card-body d-flex align-items-center">
          <div>
            <h5 class="card-title">Total Services</h5>
            <h3 class="card-text"><?= $totalServices ?></h3>
          </div>
          <div class="ms-auto">
            <i class="fas fa-concierge-bell fa-2x"></i> <!-- Icon -->
          </div>
        </div>
      </div>
    </div>
    
  </div> <!-- End of Row -->

  <!-- Chart for Dashboard Stats -->
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Overview of System Statistics (Pie Chart)</h5>
          <canvas id="pieChart" width="300" height="300"></canvas> <!-- Pie Chart Size -->
        </div>
      </div>
    </div>
    
    <div class="col-md-8 mb-3">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Overview of System Statistics (Bar Graph)</h5>
          <canvas id="barChart" width="300" height="140"></canvas> <!-- Bar Chart Size -->
        </div>
      </div>
    </div>
  </div> <!-- End of Row -->

</div>

<?php require base_path('views/admin/partials/foot.php') ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Pie Chart
const pieCtx = document.getElementById('pieChart').getContext('2d');
const pieChart = new Chart(pieCtx, {
    type: 'pie',
    data: {
        labels: ['Customers', 'Staffs', 'Services'],
        datasets: [{
            label: 'System Overview',
            data: [<?= $totalCustomers ?>, <?= $totalStaffs ?>, <?= $totalServices ?>],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'System Overview (Pie Chart)'
            }
        }
    }
});

// Bar Graph
const barCtx = document.getElementById('barChart').getContext('2d');
const barChart = new Chart(barCtx, {
    type: 'bar',
    data: {
        labels: ['Customers', 'Staffs', 'Services'],
        datasets: [{
            label: 'Total Count',
            data: [<?= $totalCustomers ?>, <?= $totalStaffs ?>, <?= $totalServices ?>],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'System Overview (Bar Graph)'
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
