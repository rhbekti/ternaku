<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Kartu Pengguna <?= $row->user_id; ?></title>
</head>
<body>
    <table style="border:1px solid #000;">
        <tr>
            <th>ID</th>
            <th>Nama</th>
        </tr>
        <tbody>
            <tr>
                <td><?= $row->user_id; ?></td>
                <td><?= $row->user_nama;?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>