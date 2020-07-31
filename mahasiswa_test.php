<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mahasiswa</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sidebar_test.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sisip Sidebar -->
        <?php include 'sidebar_test.php' ?>
        <!-- End Sidebar -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Sisip Nav -->
            <?php include 'nav_test.php' ?>
            <!-- End Nav -->
            <div class="container-fluid">
                <h1 class="mt-4">Mahasiswa</h1>
                <p>The starting state of the menu will appear collapsed on smaller screens,
                    and will appear non-collapsed on larger screens. When toggled using the button
                    below, the menu will change.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The
                    top navbar is optional,
                    and just for demonstration. Just create an element with the
                    <code>#menu-toggle</code>ID which will toggle the menu when clicked.</p>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        }

    );
    </script>
</body>

</html>