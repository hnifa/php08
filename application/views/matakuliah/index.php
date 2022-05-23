<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    <script>
        function hapusMatakuliah(pesan){
            if(confirm(pesan)){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
</head>
<body>
    <div class='col-md-12'>
        <h3>
            Daftar Mata Kuliah
        </h3>
        <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($matakuliah as $mt){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$mt->nama?></td>
                <td><?=$mt->sks?></td>
                <td><?=$mt->kode?></td>
                <td>
                    <a href= <?php echo base_url("index.php/matakuliah/edit/$mt->id") ?> class="btn btn-success active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/matakuliah/delete/$mt->id") ?> class="btn btn-danger active" onclick="return hapusMatakuliah('Apakah Anda yakin ingin menghapus matakuliah <?php echo $mt->nama ?>')" >Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
        </table>
        <a href= <?php echo base_url("index.php/matakuliah/form") ?> class="btn btn-primary active" >Tambah</a>
    </div>
</body>
</html>
