<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h3>Form Tambah Data Mahasiswa</h3>
                <form method="post" action="<?= base_url('mahasiswa/tambah'); ?>">
                     <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <?= form_error('nama'); ?>
                    </div>   
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control" id="nrp" name="nrp">
                    </div> 
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div> 
                    <div class="form-group">
					<label for="jurusan">Jurusan</label>
					<select class="form-control" id="jurusan" name="jurusan">
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Teknik Industri">Teknik Industri</option>
					<option value="Teknologi Pangan">Teknologi Pangan</option>
					<option value="Teknik Mesin">Teknik Mesin</option>

					</select>
  				    </div>

                    <button type="submit" class="btn btn-primary">Tambah Data</button>

                </form>
            </div>       
        </div>    
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>