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

        h3 {
            font-size: 1.5em;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="submit"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #ff7e5f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #feb47b;
        }
    </style>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Mahasiswa Baru</h3>
    </header>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama lengkap" required />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat" required></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama" required>
                    <option value="">Pilih Agama</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="Nama sekolah" required />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

