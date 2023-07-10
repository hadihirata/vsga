<html>

<head>
    <title>Membuat Form Validasi</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="" /></td>
                <td><input type="submit" name="cek" value="cek" /></td>
            </tr>
        </table>
    </form>

    <?php
    $nama = $_POST['nama'];
    echo $nama;
    ?>
</body>

</html>