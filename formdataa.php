<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Nilai</title>
  </head>
  <body>
    <div class="container">
    <h2 class="alert alert-secondary text-center mt-3">FORM NILAI</h2>
    <form method="POST" action="form_nilai.php">

        <div class="form-group">
        <label for="nama_siswa">Nama:</label>
        <input type="text" name="nama_siswa" class="form-control" placeholder="Masukan Nama Anda">
        </div>

    <div class="input-group mb-3"> 
    <label class="input-group-text" for="matkul">Mata Kuliah</label>
    <select class="form-select" id="matkul" name="matkul">
    <option selected>Choose...</option>
    <option value="PW">Dasar-Dasar Pemrograman</option>
    <option value="BD">Basis Data</option>
    <option value="PW">Pemrograman Web</option>
  </select>
</div>

    <div class="form-group">
        <label>Nilai UTS:</label>
        <input type="text" name="nilai_uts" class="form-control" placeholder="Masukan Nilai UTS Anda">
        </div>

        <div class="form-group">
        <label>Nilai UAS:</label>
        <input type="text" name="nilai_uas" class="form-control" placeholder="Masukan Nilai UAS Anda">
        </div>

        <div class="form-group">
        <label>Nilai Tugas:</label>
        <input type="text" name="nilai_tugas" class="form-control" placeholder="Masukan Nilai Tugas Anda">
        </div>

        <div class="col-12">
    <button class="btn btn-primary" value="Simpan" type="submit"  name="proses">Submit</button>
  </div>
        </form>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>