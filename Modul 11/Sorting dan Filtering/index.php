<!DOCTYPE html>
<html>
<head>
	<title>Sorting dan Filtering</title>
	<style>
    	body {
			background-color: white;
			margin: 0;
			padding: 0;
		}
		h1 {
			font-family: monospace;
			color: black;
			font-style: bold;
			font-size: 38px;
			text-align: center;
		}
		h2 {
			font-family: monospace;
			color: white;
			font-style: bold;
			text-align: center;
			font-size: 20px;
			margin-top: 1px;
		}
		a {
			font-family: monospace;
			font-size: 20px;
			color: white;
		}
		.header {
			height:50px;
			background-color:rgba(2,2,2,0.8);
			padding-top:10px;
			padding-right: 20px;
			text-align: right;
		}
		.isi {
			height:552px;
		}
		.formulir {
			width:90%;
			padding:20px;
			margin-left:50px;
			border-radius: 20px;
			background-color:rgba(2,2,2,0.8);
		}
		.btn {
			margin-top: 5px;
			width: 80%;
			height:30px;
			margin-left: 10%;
			text-align: center;
			font-size: 14px;
			font-family: 'Open Sans',sans-serif;
			font-weight: bold;
			letter-spacing: 0;
			-webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
			-moz-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
			box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
			color: #fff;
			background-color: #f2672e;
			text-shadow: none;
			text-transform: uppercase;
			border: none;
			cursor: pointer;
			position: relative;
			margin-bottom: 20px;
			-webkit-animation: shadowFadeOut 0.4s;
			-moz-animation: shadowFadeOut 0.4s;
			border-radius: 9px;
		}
		.btn:hover,.btn:focus{
  			color: #fff;
  		-webkit-box-shadow: inset 0px 54px 0px 0px rgba(204,86,15,1);
  		-moz-box-shadow:    inset 0px 54px 0px 0px rgba(204,86,15,1);
  		box-shadow:         inset 0px 54px 0px 0px rgba(204,86,15,1);
  		-webkit-animation: shadowFade 0.4s;
  		-moz-animation: shadowFade 0.4s;
		}
		#select {
			opacity: 1;
			color: rgba(255,255,255,1);
		}
		.select::-webkit-input-placeholder{
			text-align: center;
			font-family: Poppins;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(2,2,2,1);
		}
		.select {
			width: 8%;
			height: 30px;
			border:0px;
			border-radius: 9px;
			text-align: center;
			font-family: Poppins;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(2,2,2,1);
			background-color: rgba(255,255,255,1);
			padding-left: 8px;
		}	
		.tabel{
			width: 100%;
		}
		.tabel th {
			background-color: rgba(66,62,62,1);
			color: rgba(255,255,255,1);
			padding: 1em;
			text-align: left;
			text-transform: uppercase;
			font-family: Poppins;
			font-size: 10px;
		}
		.tabel td {
			border-bottom: 1px solid #ddd;
			padding: 1em;
			font-family: Poppins;
			font-size: 10px;
		}
		.tabel tr:nth-child(even) {
			background-color: rgba(173,173,173,1);
			font-family: Poppins;
			font-size: 10px;
		}
		.tabel tr:nth-child(odd) {
			background-color: rgba(255,255,255,1);
			font-family: Poppins;
			font-size: 10px;
		}
	</style>
</head>
<body>
<div class="isi">
<h1>Sorting dan Filtering</h1>
<div class="formulir">

<b><a>NIM</a></b>
    <select id="nim" class="select">
        <option value="asc">Semua</option>
        <option value="asc">Urutkan Ascending</option>
        <option value="desc">Urutkan Descending</option>
    </select>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<b><a>Nama</a></b>
    <select id="nama" class="select">
        <option value="asc">Semua</option>
        <option value="asc">Urutkan A-Z</option>
        <option value="desc">Urutkan Z-A</option>
    </select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<b><a>Jenis Kelamin</a></b>
	<select id="jk" class="select">
        <option value="all">Semua</option>
        <option value="Perempuan">Perempuan</option>
        <option value="Laki-laki">Laki-laki</option>
    </select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<b><a>Pencarian</a></b>
    <input type="text" class="select" id="cari" style="width:225px;" placeholder="Cari Nama/NIM"><br><br>
<?php

$koneksi = mysqli_connect("localhost","root","","simak") or die(mysqli_error());

	echo "<table class='tabel'>";
	echo "<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Fakultas</th>
		  </tr>";?>
	<tbody id="tabel">
	<?php
	$sql = "SELECT * FROM tb_mahasiswa";
	$query = mysqli_query($koneksi, $sql);
	while($data = mysqli_fetch_array($query)){?>
			<tr>
				<td><?php echo $data['nim']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jk']; ?></td>
				<td><?php echo $data['tempat_lahir']; ?></td>
				<td><?php echo $data['tanggal_lahir']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><?php echo $data['fakultas']; ?></td>
			</tr>
		<?php
	}
	echo "</table>";?></tbody>
 
</div></div></div><br><br>
</body>
<script src="jquery.js"></script>
    <!-- Pencarian -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#cari").keyup(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var nama  = $("#nama").val();
          if (cari != ""){
            $("#tabel").html("<tr><td colspan=10></td></tr>") 
            $.ajax({
              type:"get",
              url:"pencarian.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          }
          else
          {
            $.ajax({
              url:"pencarian.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&nama="+nama,
              cache: false,
              success: function(msg){
                $("#tabel").html(msg);
              }
            });
          }
        });
      });
    </script>
    <!-- Filter -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#jk").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10></td></tr>")  
          $.ajax({
              type:"get",
              url:"filter.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nama -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#nama").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10></td></tr>")  
          $.ajax({
              type:"get",
              url:"nama.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nim -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#nim").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10></td></tr>")  
          $.ajax({
              type:"get",
              url:"nim.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
</html>
