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
                ?>
            </div>
            <!-- Sidebar Section -->
            <div class="col-md-4 m-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="harga-info">Daftar Harga</h3>
                        <p>TV : 4.200.000</p>
                        <p>Kulkas : 3.100.000</p>
                        <p>Mesin Cuci : 3.800.000</p>
                        <p class="harga-info">Harga Dapat Berubah Setiap Saat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>