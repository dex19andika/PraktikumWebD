<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'biodata');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagination</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
table, tr, td{
    border: 2px solid #000000;
}
</style>
<body>
<div class="tubuh">
<h1>Biodata Mahasiswa</h1>
    <table border="1" cellpadding="8px">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
        <?php
        $halaman = 5;
        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
        $total = mysqli_num_rows(mysqli_query($koneksi, "SELECT* FROM tb_biodata ORDER BY nim"));
        $pages = ceil($total/$halaman);            
        $query = mysqli_query($koneksi,"SELECT * FROM tb_biodata LIMIT $mulai, $halaman");
        $no =$mulai+1;

        while ($user = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$user['nama']."</td>";
            echo "<td>".$user['nim']."</td>";
            echo "<td>".$user['email']."</td>";
            echo "<td>".$user['alamat']."</td>"; 
        }
        ?>
    </table>
    <div class="">
      <?php for ($i=1; $i<=$pages ; $i++){ ?>
      <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
     
      <?php } ?>
    </div>
</div>   
</body>
</html>