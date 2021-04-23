<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li>
                <a href="<?= base_url('beranda') ?>" class="nav_link">Home</a>
            </li>&nbsp;&nbsp;
            <li>
                <a href="<?= base_url('data-siswa') ?>" class="nav_link">Data Siswa</a>
            </li>&nbsp;&nbsp;
            <li>
                <a href="<?= base_url('info-kegiatan') ?>" class="nav_link">Info Kegiatan</a>
            </li>
        </ul>

        <!-- Tombol Login / Register -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-link">
                <a href="<?= base_url('login') ?>" class="btn btn-outline-primary">Login</a>
            </li>&nbsp;&nbsp;
            <li class="nav-link">
                <a href="<?= base_url('registrasi') ?>" class="btn btn-outline-success">Registrasi</a>
            </li>
        </ul>
    </nav>
    <?= $this->renderSection("content") ?>
    <footer class="fixed-bottom bg-dark text-white">
        <div class="text-center">
            Camp 404
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>