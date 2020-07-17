<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <!-- Form Tambah Penilaian Mahasiswa -->
    <div class="container">
        <div class="card">
            <div class="card-header bg-success text-white">Tambah Penilaian Mahasiswa</div>
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
                        <label class="col-sm-2 col-form-label" for="topik">Topik</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="topik" id="topik">
                                <option selected>Pilih Topik</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="sks" id="sks" placeholder="Masukkan SKS">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 pt-0">Jenis Penilaian</label>
                        <div class="col-sm-10">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="tutorial" id="tutorial" checked>
                                <label class="form-check-label" for="tutorial">Tutorial</label>
                                <input class="form-check-input" type="radio" name="mentoring" id="mentoring">
                                <label class="form-check-label" for="mentoring">Mentoring</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tugas1" class="col-sm-2 col-form-label">Tugas 1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tugas1" id="tugas1"
                                placeholder="Masukkan Nilai Tugas 1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tugas2" class="col-sm-2 col-form-label">Tugas 2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tugas2" id="tugas2"
                                placeholder="Masukkan Nilai Tugas 2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mini_quiz" class="col-sm-2 col-form-label">Mini Quiz</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mini_quiz" id="mini_quiz"
                                placeholder="Masukkan Nilai Mini Quiz">
                        </div>
                    </div>
                    <button class="btn btn-primary mb-2 type=" submit"">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Form -->
</body>

</html>