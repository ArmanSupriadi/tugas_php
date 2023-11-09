<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-md-6">
            <h3 class="mt-5">Tambah Data Anggota</h3>
            <form action="proses_tambah.php" method="post">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" class="form-control" autocomplete="off" id="nama"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username"  class="form-control" id="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="password"  class="form-control" id="password"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td  style="display: flex;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" value="L" id="sex">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Laki - Laki
                                    </label>
                            </div>
                            <div class="form-check" style="margin-left: 20px;">
                                <input class="form-check-input" type="radio" name="sex" value="P">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Perempuan
                                    </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td><input type="number" name="telp"  class="form-control" id="telp"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <textarea name="alamat"  class="form-control" rows="5" id="alamat"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email"  class="form-control" id="email"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Entry</td>
                        <td><input type="date" name="tgl_entry" id="tgl_entry"></td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>
                        <select id="role" name="role" class="form-select" aria-label="Default select example">
                            <option selected>Pilih Role</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="USER">USER</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input id="submit"  class="btn btn-primary" type="submit" name="submit" disabled></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $("#nama").on("keyup", function(){
            $("#submit").prop('disabled', false);
        });
    });
</script>