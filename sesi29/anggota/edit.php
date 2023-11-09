<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<?php
include "../config/config.php";

$id_anggota = $_GET['id_anggota'];

$anggotaa = mysqli_query($con, "SELECT * FROM `anggota` WHERE id_anggota='$id_anggota'");

foreach ($anggotaa as $anggota) {
    $nama = $anggota['nama'];
    $username = $anggota['username'];
    $password = $anggota['password'];
    $sex = $anggota['sex'];
    $telp = $anggota['telp'];
    $alamat = $anggota['alamat'];
    $email = $anggota['email'];
    $tgl_entry = $anggota['tgl_entry'];
    $role = $anggota['role'];
}
?>

<body>
    <div class="row">
        <div class="col-md-6">
            <h3 class="mt-5">Edit Data Anggota</h3>
            <form action="proses_edit.php?id_anggota=<?php echo $id_anggota; ?>" method="post">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" class="form-control" autocomplete="off" value="<?php echo $nama; ?>"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" class="form-control" value="<?php echo $username; ?>"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="password" class="form-control" value="<?php echo $password; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td style="display: flex;">
                            <div class="form-check">
                                <?php
                                if ($sex == 'L') {
                                    echo '<input class="form-check-input " type="radio" name="sex" value="L" checked="">';
                                } else {
                                    echo '<input class="form-check-input" type="radio" name="sex" value="L">';
                                }
                                ?>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki - Laki
                                </label>
                            </div>
                            <div class="form-check" style="margin-left: 20px;">
                                <?php
                                if ($sex == 'P') {
                                    echo '<input class="form-check-input " type="radio" name="sex" value="P" checked="">';
                                } else {
                                    echo '<input class="form-check-input" type="radio" name="sex" value="P">';
                                }
                                ?>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Perempuan
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td><input type="number" name="telp" class="form-control" value="<?php echo $telp; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <textarea name="alamat" class="form-control" rows="5"><?php echo $alamat; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" class="form-control" value="<?php echo $email; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Entry</td>
                        <td><input type="date" name="tgl_entry" value="<?php echo date('Y-m-d', strtotime($tgl_entry)); ?>"></td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>
                            <select name="role" class="form-select" aria-label="Default select example">
                            <?php 
                                if ($role == 'ADMIN') {
                                    echo "<option value='ADMIN' selected >ADMIN</option>";
                                } else {
                                    echo "<option value='ADMIN'>ADMIN</option>";
                                }
                            ?>

                            <?php 
                                if ($role == 'USER') {
                                    echo "<option value='USER' selected >USER</option>";
                                } else {
                                    echo "<option value='USER'>USER</option>";
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input class="btn btn-primary" type="submit" name="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>