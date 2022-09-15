<?php

session_start();
if(!(isset($_SESSION['user'])))
{
  header("location: ../login/form-login.php");
}

include '../connect.php';

$query = "select * from dosen";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>

<body>
    <table border = '1'>
    <h2>Data dosen</h2>
    <tr>
        <th>No.</th>
        <th>Nama Dosen</th>
        <th>Telepon</th>
        <th>Aksi</th>
        <th>delete</th>
    </tr>
    <?php
      if($num>0){
        $no = '1';
        while($data = mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>" . $no . "</td>";
          echo "<td>" . $data['nama_dosen'] . "</td>";
          echo "<td>" . $data['telp'] . "</td>";
          echo "<td><a href='form-update.php?id_dosen= " . $data['id_dosen'] . "'>Edit</a> | </td>";
          echo "<td><a href ='delete.php?id_dosen=" . $data['id_dosen'] ."'onclick ='return confirm(\"apakah anda yakin ingin menghapus data?\")'>Hapus</a></td>";
          echo "</tr>";
          $no++;
        }
      }
      else{
        echo "<td colspan ='3'> Tidak ada data</td>";
      }
    ?>
    </table><br>
    <a href="form-create.php">
    <button>Tambah data baru</button>
    </a>
    <br>
    <br>
    <a href="../login/logout.php">
    <button>logout</button>
    </a>
</body>