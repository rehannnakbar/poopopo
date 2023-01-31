<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TES</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
       
    

    <div class="container-sm">
        <a href="tess "class="btn btn-info">Register</a>
        <a href="login.php "class="btn btn-info">Logout</a>
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-info">
            <tr>
                <th>Id</th>
                <th>nama_pemesan</th>
                <th>nomor_ruangan</th>
                
            </tr>

        <?php foreach($hotel as $data): ?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['nama_pemesan'] ?></td>
                <td><?= $data['nomor_ruangan'] ?></td>

                <td>
                    <a href="edit.php?nik=<?= $data['id'] ?>"class="btn btn-info">Update</a>
                    <a href="proses_hapus.php?nik=<?= $data['id'] ?>"class="btn btn-info">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>

        </table>
        </div>

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>