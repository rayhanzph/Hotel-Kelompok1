<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>

  <link href="<?= base_url('assets/vendor/nucleo/css/nucleo.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/css/argon.css?v=1.2.0') ?>" rel="stylesheet" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Items Detail</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>

  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('') ?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('Admin/list') ?>">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Admin</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('Admin/items') ?>">
                <i class="ni ni-istanbul text-default"></i>
                <span class="nav-link-text">Items</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('Admin/booking') ?>">
                <i class="ni ni-collection text-blue"></i>
                <span class="nav-link-text">Booking</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('Admin/customer') ?>">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Customer</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" px-3 id="panel">
    <!-- Topnav -->

    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?= $item['items_thumbnail']; ?>); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-7"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col col-md-10">
            <h1 class="display-2 w-full text-white"><?= $item['items_name'] ?></h1>
            <p class="text-white mt-0 mb-5"><?= $item['items_desc'] ?></p>
            <div class="d-flex w-full">
              <a href="<?= base_url('Admin/items/edit/' . $item['items_id']) ?>" class="btn btn-warning">Edit</a>
              <a href="<?= base_url('Admin/items/delete/' . $item['items_id']) ?>" onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">

        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h1 class="mb-0">Items Details</h1><br>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>

                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-city">Price</label>
                      <input style="Background-color:#fff;" disabled type="text" id="input-city" class="form-control" value="<?= $item['items_price'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">City</label>
                      <input disabled style="Background-color:#fff;" type="text" id="input-country" class="form-control" value="<?= $item['items_city'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Address</label>
                      <input disabled style="Background-color:#fff;" type="text" id="input-postal-code" class="form-control" value="<?= $item['items_address'] ?>">
                    </div>
                  </div>
                </div>
            </div>

            <div class="pl-lg-4 mt-0 px-4">
              <div class="form-group">
                <label class="form-control-label">Items Facility</label>
                <textarea disabled style="Background-color:#fff;" rows="5" class="form-control"><?= $item['items_facility'] ?></textarea>
              </div>
            </div>
            <div class="row px-4">
              <?php foreach ($image as $image) : ?>
                <div class="col-lg-4 py-3">
                  <!-- <label class="form-control-label">Gambar 1</label> -->
                  <img class="card-img" style="background-size: cover;" src="<?= $image['items_image'] ?>" alt="Card image cap">
                </div>
              <?php endforeach; ?>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 px-3">
          <div class="copyright text-center  text-lg-left  text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About
                Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>