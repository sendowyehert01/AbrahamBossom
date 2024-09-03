<header class="p-3 my-0 header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3">
                <i class="bi bi-telephone icons"></i>
                <i class="bi bi-instagram icons"></i>
                <i class="bi bi-globe2 icons"></i>
            </div>

            <div class="text-center flex-grow-1">
                <div class="d-flex justify-content-center p-0 m-0">
                    <div class="title d-flex align-items-center">
                        <div class="img-container">
                            <img class="centered-image" src="style/images/452302525_2213886822325292_8888163133302808302_n.png" alt="logo">
                        </div>
                        <div class="head-title">
                            <h2 class="header-title">ABRAHAMS BOSOM</h2>
                            <hr>
                            <h3 class="header-subtitle">Memorial Garden</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3">
  <?php if ($_SESSION['user'] ?? false) : ?>
    <i class="bi bi-bell icons"></i>
    <i class="bi bi-search icons"></i>
    <div class="dropdown">
      <i class="bi bi-person icons"  id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li>
          <form action="/sessions" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <button class="dropdown-item">Log Out</button>
          </form>
        </li>
      </ul>
    </div>
  <?php else : ?>
    <a href="/register" class="<?= isUrl('/register') ? "bg-gray-900 text-white" : "text-gray-300"; ?>">Register</a>
    <a href="/login" class="<?= isUrl('/login') ? "bg-gray-900 text-white" : "text-gray-300"; ?>">Login</a>
  <?php endif; ?>
</div>

        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-success">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 mx-md-2 mt-3">
            <li class="nav-item mx-5">
              <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item mx-5 dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/apartment-typelots">APPARTMENT-TYPE LOTS</a></li>
                <li><a class="dropdown-item" href="/lawnlots">LAWN LOTS</a></li>
                <li><a class="dropdown-item" href="/familystates">FAMILY STATES</a></li>
                <li><a class="dropdown-item" href="/interment">INTERMENT</a></li>
                <li><a class="dropdown-item" href="/cremation">CREMATION</a></li>
              </ul>
            </li>
            <?php if ($_SESSION['user'] ?? false) : ?>
            <li class="nav-item mx-5">
              <a class="nav-link active text-white" aria-current="page" href="/payment">Payment Method</a>
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link active text-white" aria-current="page" href="/location">Plot Location</a>
            </li>
            <?php endif; ?>
            <li class="nav-item mx-5">
              <a class="nav-link active text-white" aria-current="page" href="/about">About</a>
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link active text-white" aria-current="page" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>