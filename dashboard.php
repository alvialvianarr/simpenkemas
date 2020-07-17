<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="assets/img/logo_umy.png" sizes="32x32" type="image/png">

    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
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
                    <h1 class="h2">Dashboard</h1>
                </div>
                <div class="container">
                    <div class="card">
                        <div class="card-header bg-success text-white">Selamat Datang di SIMPENKEMAS</div>
                        <div class="card-body">
                            <h2 class="card-title">Selamat Datang di SIMPENKEMAS</h2>
                        </div>
                        <div class="card-footer bg-success text-white">UNIVERISTAS MUHAMMADIYAH YOGYAKARTA</div>
                    </div>
                </div>
            </main>
            <!-- End Konten Utama -->
        </div>
    </div>
    <!-- <script src="assets/js/vendor/jquery.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery.slim.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script> -->

</body>

</html>