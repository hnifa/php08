<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <div class='col-md-12'>
        <h3>
            Detail Mahasiswa 
        </h3>
        <table border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$siswa->id?></td>
                <td><?=$siswa->nim?></td>
                <td><?=$siswa->nama?></td>
                <td><?=$siswa->gender?></td>
                <td><?=$siswa->tmp_lahir?></td>
                <td><?=$siswa->tgl_lahir?></td>
                <td><?=$siswa->ipk?></td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>
