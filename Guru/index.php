<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Data Guru</title>
  </head>
  <body>
    <br><br>
        <center><h1>Guru</h1></center>
        <br><br>
        <!-- CARDs -->
        <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Guru</h3><br>
                <center><a href="create.php" class="btn btn-primary">Create Data</a></center>
            </div>
            <div class="card-body">
                <!-- TABLE GURU -->
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Name</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            include '../database.php';
                            $guru =  new Guru();
                            $number = 1;
                            foreach ($guru->index() as $data){
                        ?>
                        <tr>
                        <th scope="row"><?php echo $number++ ?></th>
                        <td><?php echo $data['nip'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['alamat'] ?></td>
                        <td>
                            <form action="proses.php" method="post">
                            <a href="show.php?no=<?php echo $data['no']; ?>" class="btn btn-warning">Show</a> ||
                            <a href="edit.php?no=<?php echo $data['no']; ?>" class="btn btn-success">Edit</a> ||
                            <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                           </form>
                        </td>
                        </tr>
                      <?php
                            }
                        ?>
                    </tbody>
                </table>
                 <!-- /TABLE GURU -->
            </div>
        </div>
        </div>
    