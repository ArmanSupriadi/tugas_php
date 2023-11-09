<?php 
    include "../config/config.php";
    $query = mysqli_query($con, "SELECT * FROM pengarang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengarang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center  mb-5 mt-5">
            <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Data Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../buku/buku.php">Data Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pengarang.php">Data Pengarang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../penerbit/penerbit.php">Data Penerbit</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <h3>Data Pengarang</h3>
                <a href="tambah_pengar.php" class="btn btn-primary bi bi-plus-square mb-2" style="margin-left: 96%;" ></a>
                    <table id="myTable" class="table table-striped" >
                        <thead>
                            <tr>
                                <td width="50px">No</td>
                                <td width="100px">ID Pengarang</td>
                                <td width="100px">Nama Pengarang</td>
                                <td width="100px">Email</td>
                                <td width="100px">Telepon</td>
                                <td width="100px">Alamat</td>
                                <td width="10px">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(mysqli_num_rows($query)>0) { ?>
                                <?php $no = 1;
                                    while ($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $data["id_pengarang"];?></td>
                                    <td><?php echo $data["nama_pengarang"];?></td>
                                    <td><?php echo $data["email"];?></td>
                                    <td><?php echo $data["telp"];?></td>
                                    <td><?php echo $data["alamat"];?></td>
                                    <td>
                                    <a class="btn btn-success bi bi-pencil-square btn-sm" href="edit_pengarang.php?id_pengarang=<?php echo $data['id_pengarang'];?>"></a>
                                    <a class="btn btn-danger bi bi-x-square btn-sm " href="delete_pengarang.php?id_pengarang=<?php echo $data['id_pengarang'];?>"></a>
                                    </td>
                                </tr>
                            <?php $no++; }?>
                            <?php }  ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });

</script>
