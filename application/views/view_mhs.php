<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list mhs</title>
</head>

<body>
    <table border="1px solid black">
        <tr>
            <td>Nama Mahasiswa</td>
            <td>NIM</td>
            <td>Alamat</td>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?php echo $mhs['nama']; ?></td>
                <td><?php echo $mhs['nim']; ?></td>
                <td><?php echo $mhs['alamat']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>