<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <!-- Form Tambah Mahasiswa -->
    <div class="container">
        <div class="card">
            <div class="card-header bg-success text-white">Tambah Mahasiswa</div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group row">
                        <label for="no" class="col-sm-2 col-form-label">NO</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no" id="no">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                        <div class="col-sm-10">
                            <select name="angkatan" id="angkatan" class="form-control">
                                <option selected>Pilih Angkatan</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Form -->
</body>

</html>