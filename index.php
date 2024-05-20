<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa Baru Politeknik</title>
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            background: url(back.jpeg);
        }

        header {
            text-align: center;
            padding: 20px 0;
            color: #fff;
        }

        h1 {
            margin-bottom: 10px;
            font-size: 2em;
        }

        h3 {
            font-size: 1.5em;
        }

        h4 {
            text-align: center;
            margin-top: 20px;
            color: #fff;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 1.2em;
        }

        p {
            text-align: center;
            color: #fff;
            font-size: 1.2em;
            margin-top: 20px;
        }

        p.success {
            color: #28a745;
        }

        p.error {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <header>
        <h1>Politeknik Negeri Madiun</h1>
        <h3>Pendaftaran Mahasiswa Baru</h3>
    </header>
    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Form pendaftaran</a></li>
            <li><a href="list-siswa.php">Calon Mahasiswa</a></li>
        </ul>
    </nav>
    <?php if (isset($_GET['status'])): ?>
        <p class="<?php echo $_GET['status'] === 'sukses' ? 'success' : 'error'; ?>">
            <?php echo $_GET['status'] === 'sukses' ? 'Pendaftaran siswa baru berhasil!' : 'Pendaftaran gagal!'; ?>
        </p>
    <?php endif; ?>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
