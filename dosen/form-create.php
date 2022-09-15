<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Dosen</h1>
    <form action="create.php" method="POST">
    <table cellpadding="1">
        <tr>
            <td>Nama dosen : </td>
            <td><input type="text" id="nama_dosen" name="nama_dosen"></td>
        </tr>

        <tr>
            <td>No. telepon : </td>
            <td><input type="number" id="telp" name="telp"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value = "simpan" name="btn"></button></td>
        </tr>

    </table>

    </form>
</body>
</html>