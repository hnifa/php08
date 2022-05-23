<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <script>
        function hapusDosen(pesan){
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
            Daftar Dosen 
        </h3>
        <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Pendidikan</th>                
                <th>Action</th>                
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($dosen as $dsn){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$dsn->nama?></td>
                <td><?=$dsn->nidn?></td>
                <td><?=$dsn->pendidikan?></td>
                <td>
                    <a href="<?php echo base_url("index.php/dosen/detail/$dsn->id") ?>">Detail</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/dosen/edit/$dsn->id") ?> class="btn btn-success active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/dosen/delete/$dsn->id") ?> class="btn btn-danger active" onclick="return hapusDosen('Apakah Anda yakin ingin menghapus dosen yang bernama <?php echo $dsn->nama ?>')" >Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
        </table>
        <a href= <?php echo base_url("index.php/dosen/form") ?> class="btn btn-primary active" >Tambah</a>
    </div>
</body>
</html>
