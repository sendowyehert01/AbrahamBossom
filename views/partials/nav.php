<style>
  .dropdown-menu .dropdown-item:hover {
    background-color: #b3c9b4;
    color: #37733a;
  }
</style>

<header class="p-3 my-0 header">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3">
            <!-- Icons removed here -->
        </div>

        <div class="text-center flex-grow-1 d-flex justify-content-center align-items-center" style="margin-left: 9rem">
            <div class="title d-flex align-items-center">
                <div class="img-container">
                    <img class="centered-image" src="style/images/logo_no_bg.png" alt="logo">
                </div>
                <div class="head-title">
                    <h2 class="header-title">ABRAHAMS BOSOM</h2>
                    <hr>
                    <h3 class="header-subtitle">Memorial Garden</h3>
                </div>
            </div>
        </div>

        <div class="d-flex gap-3">
            <?php if ($_SESSION['user'] ?? false) : ?>
                <div class="dropdown">
                    <i class="bi bi-bell icons" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false"></i>

                    <ul class="dropdown-menu dropdown-notif" aria-labelledby="notificationDropdown">
                        <div class="notif"><p>Notification</p></div>

                        <li class="d-flex align-items-center dropdown-list">
                            <div class="notif-container"><img class="notif-img" src="/assets/img/bell-notif.png" alt="...."></div>
                            <div class="dropdown-text">
                                <a class="dropdown-item drop-items" href="#">Payment Succesfull</a>
                                <p class="drop-text drop-item">Your payment has been completed...</p>
                            </div>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical d-flex align-items-center drop-bi" id="notificationDropdown" data-bs-toggle="dropdown"></i>
                                <ul class="dropdown-menu drop-head">
                                    <li class="li-item"><a class="dropdown-item head-item" href="#">Mark as Read</a></li>
                                    <li class="li-item"><a class="dropdown-item head-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </li>

                        <div class="notif-button" style="margin-top:2px;width: 100%;"><button><p>See all notifications</p></button></div>
                    </ul>
                </div>
                <i class="bi bi-search icons"></i>
                <div class="dropdown">
                    <i class="bi bi-person icons" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a href="/user-profile?id=<?= $_SESSION['user']['id'] ?>" class="dropdown-item">My Profile</a></li>
                        <li>
                            <form action="/sessions" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="dropdown-item">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
              <?php else : ?>
                <a class="register btn btn-outline-success" href="/register">REGISTER</a>
                <a class="login btn btn-outline-success" href="/login">LOGIN</a>
            <?php endif; ?>
        </div>
    </div>
</header>

<?php
  $current_page = basename($_SERVER['REQUEST_URI'], ".php");
?>

<nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 mx-md-2 mt-3">
                <li class="nav-item mx-5">
                    <a class="nav-link <?= $current_page == '' ? 'active text-warning' : 'text-white' ?>" aria-current="page" href="/">HOME</a>
                </li>
                <li class="nav-item mx-5 dropdown">
                    <a class="nav-link dropdown-toggle <?= strpos($current_page, 'services') !== false ? 'active text-warning' : 'text-white' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SERVICES
                    </a>
                    <ul class="dropdown-menu">
                        <?php foreach ($services as $service) { ?>
                            <li><a class="dropdown-item" href="/services?id=<?= $service['id'] ?>"><?= $service['name'] ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <?php if ($_SESSION['user'] ?? false) : ?>
                    <li class="nav-item mx-5">
                        <a class="nav-link <?= $current_page == 'payment' ? 'active text-warning' : 'text-white' ?>" aria-current="page" href="/payment">PAYMENT METHOD</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link <?= $current_page == 'location' ? 'active text-warning' : 'text-white' ?>" aria-current="page" href="/location">PLOT LOCATION</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item mx-5">
                    <a class="nav-link <?= $current_page == 'about' ? 'active text-warning' : 'text-white' ?>" aria-current="page" href="/about">ABOUT</a>
                </li>
                <!-- <li class="nav-item mx-5">
                    <a class="nav-link <?= $current_page == 'contact' ? 'active text-warning' : 'text-white' ?>" aria-current="page" href="/contact">CONTACT</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
