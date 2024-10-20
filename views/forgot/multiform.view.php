<?php require base_path('views/partials/head.php') ?>
<link rel="stylesheet" href="style/signin.css">

<style>

.form-group {
  margin-bottom: 1rem; /* Ensure proper spacing between form groups */
}

.inpuT {
  width: 100%;
  padding-right: 40px; /* Add space for the icon inside the input field */
}

.toggle-password {
  position: absolute;
  right: 10px; /* Keep the icon on the right side */
  top: 50%;
  transform: translateY(-50%); /* Vertically center the icon */
  cursor: pointer;
  color: #6c757d; /* Optional: gray color for the icon */
}

.toggle-password:hover {
  color: #000; /* Optional: change color on hover */
}


</style>

<div class="register-container">
  <div class="tops">
    <form action="/forgot_multiform" method="post">
      <h2 class="text-center">CREATE NEW PASSWORD</h2>
      <div class="form-group">
        <!-- <input type="hidden" name="_method" value="PATCH"> -->
        <input type="hidden" name="email" value="<?= $email ?>">

        <label for="password" class="form-label labeL">Password</label>
        <input placeholder="Enter Password.." type="password" name="password" class="form-control inpuT" id="password" required>
      </div>
      <?php if (isset($errors['password'])): ?>
        <div class="text-danger">
          <p><?= $errors['password'] ?></p>
        </div>
      <?php endif; ?>
      <label for="confirm_pass" class="form-label labeL mt-3">Confirm Password</label>
      <div class="form-group position-relative">
  <input type="password" name="confirm_pass" class="form-control inpuT" id="confirm_pass" placeholder="Confirm Password.." required>
  <span class="toggle-password position-absolute end-0 top-50 translate-middle-y pe-3" onclick="togglePassword('confirm_pass')">
    <i class="bi bi-eye-slash" id="toggleConfirmPasswordIcon"></i>
  </span>
</div>


      <?php if (isset($errors['confirm_pass'])): ?>
        <div class="text-danger">
          <p><?= $errors['confirm_pass'] ?></p>
        </div>
      <?php endif; ?>

      <div class="form-group mt-3 d-flex justify-content-center">
        <button type="submit" class="btn btn-success btn-block">UPDATE PASSWORD</button>
      </div>
    </form>
  </div>
  <div class="top-container">
    <div class="backimg"></div>
    <div class="bottom">
      <h2 class="text-center welcome">WELCOME TO <br>ABMG!</h2>
    </div>
  </div>
</div>

<script>
  function togglePassword(fieldId) {
  const passwordField = document.getElementById(fieldId);
  const toggleIcon = passwordField.nextElementSibling.querySelector('i');

  if (passwordField.type === 'password') {
    passwordField.type = 'text';
    toggleIcon.classList.remove('bi-eye-slash');
    toggleIcon.classList.add('bi-eye');
  } else {
    passwordField.type = 'password';
    toggleIcon.classList.remove('bi-eye');
    toggleIcon.classList.add('bi-eye-slash');
  }
}

</script>

</body>

</html>