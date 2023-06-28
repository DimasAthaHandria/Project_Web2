<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="/css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="/css/style.css" />
    <!-- BOOSTRAP CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>

</head>
<body>
<header>
  <!-- Jumbotron -->
  <div class="p-3 text-center bg-white border-bottom">
    <div class="container">
      <div class="row gy-3">
        <!-- Left elements -->
        <div class="col-lg-2 col-sm-4 col-4">
          <a href="https://mdbootstrap.com/" target="_blank" class="float-start">
            <h2>HNN</h2>
          </a>
        </div>
        <!-- Left elements -->

        <!-- Center elements -->
        <div class="order-lg-last col-lg-5 col-sm-8 col-8">
          <div class="d-flex float-end">
            <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
              <i class="fas fa-user-alt m-1 me-md-2"></i>
              <p class="d-none d-md-block mb-0">Sign in</p>
            </a>
            <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
              <i class="fas fa-heart m-1 me-md-2"></i>
              <p class="d-none d-md-block mb-0">Wishlist</p>
            </a>
            <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
              <i class="fas fa-shopping-cart m-1 me-md-2"></i>
              <p class="d-none d-md-block mb-0">My cart</p>
            </a>
          </div>
        </div>
        <!-- Center elements -->

        <!-- Right elements -->
        <div class="col-lg-5 col-md-12 col-12">
          <div class="input-group float-center">
            <div class="form-outline">
              <input type="search" id="form1" class="form-control" />
              <label class="form-label" for="form1">Search</label>
            </div>
            <button type="button" class="btn btn-primary shadow-0">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
        <!-- Right elements -->
      </div>
    </div>
  </div>
  <!-- Jumbotron -->

  <!-- Heading -->
  <div class="bg-primary">
    <div class="container py-4">
      <!-- Breadcrumb -->
      <nav class="d-flex">
        <h6 class="mb-0">
          <a href="" class="text-white-50">Home</a>
          <span class="text-white-50 mx-2"> > </span>
          <a href="" class="text-white"><u>Shopping cart</u></a>
        </h6>
      </nav>
      <!-- Breadcrumb -->
    </div>
  </div>
  <!-- Heading -->
</header>

<!-- cart + summary -->
<section class="bg-light my-5">
  <div class="container">
    <div class="row">
      <!-- cart -->
      <div class="col-lg-9">
        <div class="card border shadow-0">
          <div class="m-4">
            <h4 class="card-title mb-4">Your shopping cart</h4>
            <div class="row gy-3 mb-4">
              <div class="col-lg-5">
                <div class="me-lg-5">
                  <div class="d-flex">
                    <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/11.webp" class="border rounded me-3" style="width: 96px; height: 96px;" />
                    <div class="">
                      <a href="#" class="nav-link">Winter jacket for men and lady</a>
                      <p class="text-muted">Yellow, Jeans</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                <div class="">
                  <select style="width: 100px;" class="form-select me-4">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="">
                  <text class="h6">$1156.00</text> <br />
                  <small class="text-muted text-nowrap"> $460.00 / per item </small>
                </div>
              </div>
              <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                <div class="float-md-end">
                  <a href="#!" class="btn btn-light border px-2 icon-hover-primary"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                  <a href="#" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                </div>
              </div>
            </div>

            <div class="row gy-3 mb-4">
              <div class="col-lg-5">
                <div class="me-lg-5">
                  <div class="d-flex">
                    <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/12.webp" class="border rounded me-3" style="width: 96px; height: 96px;" />
                    <div class="">
                      <a href="#" class="nav-link">Mens T-shirt Cotton Base</a>
                      <p class="text-muted">Blue, Medium</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                <div class="">
                  <select style="width: 100px;" class="form-select me-4">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="">
                  <text class="h6">$44.80</text> <br />
                  <small class="text-muted text-nowrap"> $12.20 / per item </small>
                </div>
              </div>
              <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                <div class="float-md-end">
                  <a href="#!" class="btn btn-light border px-2 icon-hover-primary"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                  <a href="#" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                </div>
              </div>
            </div>

            <div class="row gy-3">
              <div class="col-lg-5">
                <div class="me-lg-5">
                  <div class="d-flex">
                    <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/13.webp" class="border rounded me-3" style="width: 96px; height: 96px;" />
                    <div class="">
                      <a href="#" class="nav-link">Blazer Suit Dress Jacket for Men</a>
                      <p class="text-muted">XL size, Jeans, Blue</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                <div class="">
                  <select style="width: 100px;" class="form-select me-4">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="">
                  <text class="h6">$1156.00</text> <br />
                  <small class="text-muted text-nowrap"> $460.00 / per item </small>
                </div>
              </div>
              <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                <div class="float-md-end">
                  <a href="#!" class="btn btn-light border px-2 icon-hover-primary"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                  <a href="#" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                </div>
              </div>
            </div>
          </div>

          <div class="border-top pt-4 mx-4 mb-4">
            <p><i class="fas fa-truck text-muted fa-lg"></i> Free Delivery within 1-2 weeks</p>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip
            </p>
          </div>
        </div>
      </div>
      <!-- cart -->
      <!-- summary -->
      <div class="col-lg-3">
        <div class="card mb-3 border shadow-0">
          <div class="card-body">
            <form>
              <div class="form-group">
                <label class="form-label">Have coupon?</label>
                <div class="input-group">
                  <input type="text" class="form-control border" name="" placeholder="Coupon code" />
                  <button class="btn btn-light border">Apply</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card shadow-0 border">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Total price:</p>
              <p class="mb-2">$329.00</p>
            </div>
            <div class="d-flex justify-content-between">
              <p class="mb-2">Discount:</p>
              <p class="mb-2 text-success">-$60.00</p>
            </div>
            <div class="d-flex justify-content-between">
              <p class="mb-2">TAX:</p>
              <p class="mb-2">$14.00</p>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <p class="mb-2">Total price:</p>
              <p class="mb-2 fw-bold">$283.00</p>
            </div>

            <div class="mt-3">
              <a href="#" class="btn btn-success w-100 shadow-0 mb-2"> Make Purchase </a>
              <a href="#" class="btn btn-light w-100 border mt-2"> Back to shop </a>
            </div>
          </div>
        </div>
      </div>
      <!-- summary -->
    </div>
  </div>
</section>
<!-- cart + summary -->

<!-- Recommended -->

<!-- Footer -->
<footer class="text-center text-lg-start text-muted bg-primary mt-3">
  <!-- Section: Links  -->

  <!-- Section: Links  -->

  <div class="">
    <div class="container">
      <div class="d-flex justify-content-between py-4 border-top">
        <!--- payment --->
        <div class="col-12 col-lg-3 col-sm-12 mb-2">
            <!-- Content -->
            <a href="https://mdbootstrap.com/" target="_blank" class="text-white h2">
              DimasHandria
            </a>
            <p class="mt-1 text-white">
              © dimashandria07@gmail.com
            </p>
          </div>
        <!--- payment --->

        <!--- language selector --->
        <div class="dropdown dropup">
          <a class="dropdown-toggle text-white" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i>English </a>

          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
            <li>
              <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
            </li>
          </ul>
        </div>
        <!--- language selector --->
      </div>
    </div>
  </div>
</footer>
<!-- Footer -->
</body>
</html>