<?php require base_path('views/partials/head.php') ?>
<link rel="stylesheet" href="style/signin.css">

<div class="register-container">
    <div class="tops">
        <form action="/sessions" method="post">
            <h2 class="text-center">SIGN IN</h2>
            <div class="icons upicon mt-4">
                <!-- <a type="button" class="phone text-dark fs-5 rounded"><i class="bi bi-telephone-fill"></i></a>
                <a type="button" class="phone text-dark fs-5 rounded"><i class="bi bi-instagram"></i></a>
                <a type="button" class="phone text-dark fs-5 rounded"><i class="bi bi-globe"></i></a> -->
            </div>
            <div class="form-group">
                <input name="email" type="text" class="form-control formCont" placeholder="Enter email.." required="required">
            </div>
            <?php if (isset($errors['email'])) : ?>
                <div class="text-danger">
                    <p><?= $errors['email'] ?></p>
                </div>
            <?php endif; ?>
            <div class="form-group mt-3 position-relative">
                <input name="password" id="password" type="password" class="form-control formCont" placeholder="Enter password.." required="required">
                <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword()">
                    <i class="bi bi-eye-slash" id="togglePasswordIcon"></i>
                </span>
            </div>
            <?php if (isset($errors['password'])) : ?>
                <div class="text-danger">
                    <p><?= $errors['password'] ?></p>
                </div>
            <?php endif; ?>
            <div class="clearfix mt-3">
                <a href="/forgot" class="forgot">Forgot Password?</a>
            </div>
            <div class="form-group mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-block sign-btn">SIGN IN</button>
            </div>
        </form>
    </div>
    <div class="top-container">
        <div class="backimg"></div>
        <div class="bottom">
            <h2 class="text-center welcome">WELCOME TO <br>ABMG!</h2>
            <div class="clearfix mt-3 ">
                <a href="/register" class="forgot text-white">Don't have an account?</a>
            </div>
            <div class="form-group mt-5 d-flex justify-content-center">
                <a href="/register" class="btn btn-success btn-block sign-btn mt-4">SIGN UP</a>
            </div>
            <div class="clearfix guest">
                <a href="/" class="forgot text-white">For guest only, <strong>Click here</strong>.</a>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const toggleIcon = document.getElementById('togglePasswordIcon');
        
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
