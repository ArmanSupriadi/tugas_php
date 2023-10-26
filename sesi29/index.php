<?php 
    include "config.php";
    $query = mysqli_query($con, "SELECT * FROM anggota");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota Perpustakaan</title>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            color: #666;
            text-shadow: 1px 1px 0px #fff;
            background: #eaebec;
            border: #ccc 1px solid;

            }
 
        table th {
             padding: 15px 35px;
             border-left:1px solid #e0e0e0;
             border-bottom: 1px solid #e0e0e0;
             background: #ededed;
             }
 
        table th:first-child{  
             border-left:none;  
             }
 
        table tr {
             text-align: center;
             padding-left: 20px;
        }
 
        table td:first-child {
             text-align: left;
             padding-left: 20px;
             border-left: 0;
        }
 
        table td {
            padding: 15px 35px;
            border-top: 1px solid #ffffff;
            border-bottom: 1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;
            background: #fafafa;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
            background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
        }
 
        table tr:last-child td {
            border-bottom: 0;
        }
 
        table tr:last-child td:first-child {
            -moz-border-radius-bottomleft: 3px;
            -webkit-border-bottom-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }
 
        table tr:last-child td:last-child {
            -moz-border-radius-bottomright: 3px;
            -webkit-border-bottom-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }
 
        table tr:hover td {
            background: #f2f2f2;
            background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
            background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
        }
    </style>
</head>
<body>
    <center><h1>Data Anggota Perpustakaan</h1></center>
    <table align ="center" border="1">
      <thead>
        <tr>
            <th>No</th>
            <th>Nama</th`>
            <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <?php if(mysqli_num_rows($query)>0) { ?>
            <?php $no = 1;
                while ($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["username"];?></td>
            </tr>
        <?php $no++; }?>
        <?php }  ?>
      </tbody>
    </table>
</body>
</html>