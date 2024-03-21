<?php
require_once "header.php";
require_once "sidebar.php";

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard Website</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Judul</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8">
                  <form method="POST" action="result.php">
                    <h2>Belanja Online</h2>
                    <hr>
                    <div class="form-group row">
                      <label for="customer" class="col-4 col-form-label">Customer</label>
                      <div class="col-8">
                        <input id="customer" name="customer" placeholder="Nama customer" type="text"
                          class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-4">Pilih Produk</label>
                      <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                          <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                          <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin">
                          <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                      <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-4">
                  <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                      Daftar Harga
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">TV : 4.200.000</button>
                    <button type="button" class="list-group-item list-group-item-action">Kulkas : 3.100.000</button>
                    <button type="button" class="list-group-item list-group-item-action">Mesin Cuci : 3.800.000</button>
                    <button type="button" class="list-group-item list-group-item-action active"
                      aria-current="true">Harga Dapat Berubah Setiap Saat</button>
                  </div>
                </div>
              </div>
            </div>
            <hr>

            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $customer = $_POST["customer"];
                    $produk = $_POST["produk"];
                    $jumlah = $_POST["jumlah"];

                    $harga = 0;
                    switch (strtolower($produk)) {
                        case "tv":
                            $harga = 4200000;
                            break;
                        case "kulkas":
                            $harga = 3100000;
                            break;
                        case "mesin cuci":
                            $harga = 3800000;
                            break;
                    }

                    $total = $harga * $jumlah;

                    echo "<div class='alert alert-dark'>";
                    echo "<p><strong>Hasil Belanja</strong></p>";
                    echo "<p><strong>Nama Customer:</strong> $customer</p>";
                    echo "<p><strong>Produk Pilihan:</strong> " . strtoupper($produk) . "</p>"; 
                    echo "<p><strong>Jumlah Beli:</strong> $jumlah</p>";
                    echo "<p><strong>Total Belanja:</strong> Rp " . number_format($total, 0, ',', '.') . "</p>";
                    echo "</div>";
                }
             
                require_once 'footer.php';
                ?>
              

            

            </body>

            </html>