<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Mahasiswa</title>
    <style>
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Form Nilai Ujian</h1>
        <form method="POST" action="form_nilaimahasiswa.php">
            <div class="form-group row">
                <label for="nim" class="col-sm-4 col-form-label">NIM</label>
                <div class="col-sm-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="mk" class="col-sm-4 col-form-label">Pilih Mata Kuliah</label>
                <div class="col-sm-8">
                    <select id="mk" name="mk" class="custom-select">
                        <option value="Data Warehouse">Pemweb2</option>
                        <option value="Basdat">Basis Data</option>
                        <option value="StatProb">Statistik</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-sm-4 col-form-label">Nilai</label>
                <div class="col-sm-8">
                    <input id="nilai" name="nilai" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-4 col-sm-8">
                    <button name="simpan" type="simpan" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
        if (isset($_POST["simpan"])) {
            require_once "nilai_mahasiswa.php";

            $nim = $_POST["nim"];
            $mk = $_POST["mk"];
            $nilai = $_POST["nilai"];

            $mahasiswa1 = new Mahasiswa($nim, $mk, $nilai);
            
            echo "<h2>Nilai Mahasiswa</h2><br>";
            echo "<p>Nim: " . $mahasiswa1->nim . "</p>";
            echo "<p>Mata Kuliah: " . $mahasiswa1->mk . "</p>";
            echo "<p>Nilai: " . $mahasiswa1->predikat_nilai() . "</p>";
        }
        

        ?>