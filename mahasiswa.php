<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/logo_umy.png" sizes="32x32" type="image/png">

    <!-- Custom styles for this template -->
    <link href="assets/css/mahasiswa.css" rel="stylesheet">
</head>

<body>
    <!-- Load Navbar -->
    <div class="header">
        <?php include 'navbar.php' ?>
    </div>
    <!-- End Navbar -->
    <div class="container-fluid">
        <div class="row">
            <!-- Load Sidebar -->
            <div class="sidebar">
                <?php include 'sidebar.php' ?>
            </div>
            <!-- End Sidebar -->
            <!-- Konten Utama -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Mahasiswa</h1>
                </div>
            </main>
            <!-- End Konten Utama -->
        </div>
    </div>
    <script src="assets/js/vendor/jquery.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery.slim.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>