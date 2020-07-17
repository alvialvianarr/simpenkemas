<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- CSS Bootstrap Datepicker -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- jQuery -->
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>

    <!-- Javascript Bootstrap -->
    <script src="assets/js/bootstrap.js"></script>

    <!-- Javascript Bootstrap Datepicker -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

</head>

<body>
    <!-- Form Input Nilai -->
    <div class="container">
        <div class="card">
            <div class="card-header bg-success text-white">Nilai</div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="blok">Blok</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="blok" id="blok">
                                <option selected>Pilih Blok</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="topik">Topik</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="topik" id="topik">
                                <option selected>Pilih Topik</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="tgl_kegiatan">Tanggal Kegiatan</label>
                        <div class="col-sm-10">
                            <input class="form-control datepicker" type="text" width="276" name="tgl_kegiatan"
                                id="datepicker">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Penilaian</legend>
                            <div class="col-sm-10">
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_penilaian" id="tutorial"
                                        value="tutorial" checked>
                                    <label class="form-check-label" for="tutorial">
                                        Tutorial
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_penilaian" id="mentoring"
                                        value="mentoring">
                                    <label class="form-check-label" for="mentoring">
                                        Mentoring
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <button class="btn btn-primary mb-2" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Form -->
    <!-- Datepicker -->
    <script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
    </script>
    <!-- End Datepicker -->
</body>

</html>