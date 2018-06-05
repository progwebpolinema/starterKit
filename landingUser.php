<?php
    // session_start();
    // $username = $_SESSION["username"];
    // $role = $_SESSION["role"];
?>
<html>
    <head>
    <title>System - User Landing</title>
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
                        <li class="nav-item"><a href="#" class="nav-link active">Beranda</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Profil</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Pesan</a></li>
                    </ul>
                    <!-- <a href="process/userLogout.php" class="pull-right" style="color:white">Logout</a> -->
                </div>
            </nav>
        </header>
        <main class="container" role="main">
            <div class="starter-template">
                <h1>Selamat Datang</h1>
                <p>
                    Aplikasi Berbasis web ini adalah sistem bimbingan konseling Politeknik Negeri Malang. Sed gravida turpis eu metus pellentesque, eu hendrerit felis consequat. Curabitur mollis risus lectus, elementum fringilla dolor pretium et. Morbi fermentum massa purus, in molestie massa scelerisque ut. Duis et sem quis purus pellentesque venenatis. Morbi vulputate, sem non convallis mollis, risus leo euismod sapien, a bibendum quam elit in lacus. Sed pretium tincidunt ultricies. Praesent sem nunc, lacinia in sem et, luctus faucibus libero. Etiam lobortis risus in orci ultrices, non lacinia ipsum suscipit. Nulla facilisi. Mauris mollis magna vitae eleifend pellentesque. Suspendisse vehicula enim nibh, sit amet aliquet libero blandit eget. Phasellus magna nisl, suscipit vel odio a, pretium volutpat nisi. Sed placerat vulputate augue, id imperdiet ante fringilla vitae. Aliquam nec vulputate leo. Ut semper, enim egestas aliquam aliquam, orci sapien tincidunt est, ut tincidunt nibh libero vitae lorem. Nam quis sapien finibus velit volutpat venenatis.
                </p>
                <button class="btn btn-secondary" type="submit">Lebih lanjut</button>
            </div>
        </main>
        
    </body>
</html>