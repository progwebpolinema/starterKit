<?php
    // session_start();
    // $username = $_SESSION["username"];
    // $role = $_SESSION["role"];
?>
<html>
    <head>
    <title>System - Admin Landing</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/customIndex.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
                <img src="img/logo_poltek.png" alt="logoBrand" id="logoBrand">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="#" class="nav-link active">Data Mahasiswa</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Data Dosen</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Data Karyawan</a></li>
                    </ul>
                    <!-- <a href="process/userLogout.php" class="pull-right" style="color:white">Logout</a> -->
                </div>
            </nav>
        </header>
        <main class="container" role="main">
            <div class="starter-template">
                <a class="btn btn-success" href="tambahMhsForm.php">Tambah</a>
                <table class="table mt-2">
                    <thead class="thead-dark">
                        <tr>
                            <th>NIM</th>
                            <th>NAMA</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

            </div>
        </main>
        
    </body>
</html>