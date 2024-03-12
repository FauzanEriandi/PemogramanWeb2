<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-control:focus {
            box-shadow: none;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <h2>Form Pendaftaran Mahasiswa</h2>
        <form action="proses_form.php" method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div> 
                        <input id="nim" name="nim" type="text" class="form-control" placeholder="Masukkan NIM">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="laki_laki" type="radio" class="custom-control-input" value="laki - laki"> 
                        <label for="laki_laki" class="custom-control-label">Laki - laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="perempuan" type="radio" class="custom-control-input" value="perempuan"> 
                        <label for="perempuan" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label">Prodi</label> 
                <div class="col-8">
                    <select id="program_studi" name="program_studi" class="custom-select">
                        <option selected>Pilih Program Studi</option>
                        <option value="teknik_informatika">Teknik Informatika</option>
                        <option value="sistem_informasi">Sistem Informasi</option>
                        <option value="bisnis_digital">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web & Programming</label> 
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="html" type="checkbox" class="custom-control-input" value="html"> 
                        <label for="html" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="css" type="checkbox" class="custom-control-input" value="css"> 
                        <label for="css" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="javascript" type="checkbox" class="custom-control-input" value="javascript"> 
                        <label for="javascript" class="custom-control-label">JavaScript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="rwd_bootstrap" type="checkbox" class="custom-control-input" value="rwd_bootstrap"> 
                        <label for="rwd_bootstrap" class="custom-control-label">RWD Bootstrap</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="php" type="checkbox" class="custom-control-input" value="php"> 
                        <label for="php" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="python" type="checkbox" class="custom-control-input" value="python"> 
                        <label for="python" class="custom-control-label">Python</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill" id="java" type="checkbox" class="custom-control-input" value="java"> 
                        <label for="java" class="custom-control-label">Java</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select">
                        <option selected>Pilih Tempat Domisili</option>
                        <option value="bogor">Bogor</option>
                        <option value="bandung">Bandung</option>
                        <option value="parung">Parung</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" placeholder="Masukkan Email">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>