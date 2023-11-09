<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pengarang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="row">
        <div class="col-md-6">
            <h3 class="mt-5">Tambah Pengarang</h3>
            <form action="proses_tambah_pengar.php" method="post">
                <table class="table">
                    <tr>
                        <td>ID Pengarang</td>
                        <td><input type="text" name="id_pengarang" class="form-control" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td>Nama Pengarang</td>
                        <td><input type="text" name="nama_pengarang" class="form-control" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td><input type="number" name="telp"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <textarea name="alamat"  class="form-control" rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><input  class="btn btn-primary" type="submit" name="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>