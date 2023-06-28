<?php
require_once '../library/koneksi.php';
?>
<!-- <?php

// $_id = $_GET['id'];
// $sql = "SELECT * FROM produk WHERE id=?";
// $stmt = $conn->prepare($sql);
// $stmt->execute([$_id]);
// $row = $stmt->fetch();
?> -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
    <!-- JuFotron -->
    <div class="p-3 text-center bg-white border-bottom">
      <div class="container">
        <div class="d-flex justify-content-between">
          <!-- Left elements -->
          <div class="">
            <a href="https://mdbootstrap.com/" target="_blank" class="">
              <h2>HNN</h2>
            </a>
          </div>
          <!-- Left elements -->

          <!-- right elements -->
          <div class="">
            <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="me-1 border rounded py-1 px-3 nav-link" target="_blank"> <i class="fas fa-user-alt me-2"></i>Sign in </a>
          </div>
          <!-- right elements -->
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
            <a href="" class="text-white-50">2. Shopping cart</a>
            <span class="text-white-50 mx-2"> > </span>
            <a href="" class="text-white"><u>3. Order info</u></a>
            <span class="text-white-50 mx-2"> > </span>
            <a href="" class="text-white-50">4. Payment</a>
          </h6>
        </nav>
        <!-- Breadcrumb -->
      </div>
    </div>
    <!-- Heading -->
  </header>

  <section class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-8 mb-4">
          <div class="card mb-4 border shadow-0">
            <div class="p-4 d-flex justify-content-between">
              <div class="">
                <h5>Have an account?</h5>
                <p class="mb-0 text-wrap ">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
              <div class="d-flex align-items-center justify-content-center flex-column flex-md-row">
                <a href="#" class="btn btn-outline-primary me-0 me-md-2 mb-2 mb-md-0 w-100">Register</a>
                <a href="#" class="btn btn-primary shadow-0 text-nowrap w-100">Sign in</a>
              </div>
            </div>
          </div>

          <!-- Checkout -->
          <div class="card shadow-0 border">
            <div class="p-4">
              <h5 class="card-title mb-3">Guest checkout</h5>
              <div class="row">
              <form>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar-times-o"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" placeholder="Masukan tanggal pesanan anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama_pemesan" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama_pemesan" name="nama_pemesan" placeholder="Masukan nama anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="alamat" name="alamat" placeholder="Masukan alamat anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="hp" class="col-4 col-form-label">No HP</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-phone-square"></i>
          </div>
        </div> 
        <input id="hp" name="hp" placeholder="Masukan nomor telepon anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-500px"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Masukan email anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jml_pesanan" class="col-4 col-form-label">Jumlah Pemesan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-cart-plus"></i>
          </div>
        </div> 
        <input id="jml_pesanan" name="jml_pesanan" placeholder="Masukan jumlah pesanan anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="komen" class="col-4 col-form-label">Komentar</label> 
    <div class="col-8">
      <textarea id="komen" name="komen" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="kategori" class="col-4 col-form-label">Kategori</label> 
    <div class="col-8">
      <select id="kategori" name="kategori" class="custom-select" required="required">
        <option value="kategori">kategori</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">Keep me up to date on news</label>
              </div>

              <hr class="my-4" />


              <div class="float-end">
                <a href="hasil_pesanan.php" class="btn btn-success shadow-0 border">Continue</a>
              </div>
            </div>
          </div>
          <!-- Checkout -->
        </div>
        <div class="col-xl-4 col-lg-4 d-flex justify-content-center justify-content-lg-end">
          <div class="ms-lg-4 mt-4 mt-lg-0" style="max-width: 320px;">
            <h6 class="mb-3">Summary</h6>
            <div class="d-flex justify-content-between">
              <p class="mb-2">Total price:</p>
              <p class="mb-2">$195.90</p>
            </div>
            <div class="d-flex justify-content-between">
              <p class="mb-2">Discount:</p>
              <p class="mb-2 text-danger">- $60.00</p>
            </div>
            <div class="d-flex justify-content-between">
              <p class="mb-2">Shipping cost:</p>
              <p class="mb-2">+ $14.00</p>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <p class="mb-2">Total price:</p>
              <p class="mb-2 fw-bold">$149.90</p>
            </div>

            <div class="input-group mt-3 mb-4">
              <input type="text" class="form-control border" name="" placeholder="Promo code" />
              <button class="btn btn-light text-primary border">Apply</button>
            </div>

            <hr />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center text-lg-start text-muted bg-primary mt-3">
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start pt-4 pb-4">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-12 col-lg-3 col-sm-12 mb-2">
            <!-- Content -->
            <a href="https://mdbootstrap.com/" target="_blank" class="text-white h2">
              DimasHandria
            </a>
            <p class="mt-1 text-white">
              © dimashandria07@gmail.com
            </p>
          </div>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  </footer>
  <!-- Footer -->
</body>

</html>