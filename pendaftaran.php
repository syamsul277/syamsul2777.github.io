<?php

  $koneksi = mysqli_connect('localhost', 'root', '', 'db_crud');

?>
<html>
<head>
<title>layanan berhenti merokok</title>
<body bgcolor="#B3E3F9">
<table align="center" border="0" width="900px">
<!--header-->
    <tr bgcolor="grey">
    <td colspan="2" height="90px"><img src="image/02_E.png.jpeg" alt='header klinik' width="1000" height="250">
    </td>
<!-- tag dihilangkan-->
</tr>

    <!--body-->
    <tr>
    <td width="700px" height="400px" bgcolor="#50EAE7" valign="top">
    <!--kolom body1-->
        <table align="middle" border="0">
        <tr bgcolor="#389EF8">
        <td width="200px" align="center"><a href="home.html">home</a></td>
        <td width="200px" align="center"><a href="profil.html">profil</a></td>
        <td width="200px" align="center"><a href="pendaftaran.php">pendaftaran</a></td>
        <td width="200px" align="center"><a href="saran.html">saran</a></td>
        <td width="200px" align="center"><a href="https://p2ptm.kemkes.go.id/artikel-penyakit/ingin-berhenti-merokok-hubungi-layanan-konseling-bebas-biaya-0-800-177-6565">layanan</a></td>
        </tr>
        </table>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

            <section class="row">
              <div class="col-md-6 offset-md-3 align-self-center"> 
                <h1 class="text-center mt-4">Form Tambah Data</h1>
                <form method="POST">
                  <div class="mb-3">
                    <label for="inputnama" class="form-label">nama</label>
                    <input type="text" class="form-control" id="inputnama" name="nama" placeholder="Masukan Nama pasien">
                  </div>
                  <div class="mb-3">
                    <label for="inputtanggal" class="form-label">tanggal_lahir</label>
                    <input type="date" class="form-control" id="inputtangggal" name="tanggal" placeholder="Masukan agama pasien">
                  </div>
                  <div class="mb-3">
                    <label for="inputruang" class="form-label">ruang</label>
                    <input type="text" class="form-control" id="inputruang" name="ruang" placeholder="Masukan ruang pasien">
                  </div>
                  <div class="mb-3">
                    <label for="inputNis" class="form-label">telepon</label>
                    <input type="number" class="form-control" id="inputtelepon" name="telepon" placeholder="Masukan telepon pasien">
                  </div>
                  <div class="mb-3">
                    <label for="inputdiagnosa" class="form-label">diagnosa</label>
                    <input type="text" class="form-control" id="inputdiagnosa" name="diagnosa" placeholder="Masukan diagnosa pasien">
                  </div>
                  <div class="mb-3">
                    <label for="inputalamat" class="form-label">alamat</label>
                    <input type="text" class="form-control" id="inputalamat" name="alamat" placeholder="Masukan alamat pasien">
                  </div>
                  <input name="daftar" type="submit" class="btn btn-primary" value="Tambah">
                  <a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
                </form>
              </div>
            </section>
          
            <?php
              
              // Buat kondisi jika tombol data di klik
              if(isset($_POST['daftar'])){
                // Membuat variable setiap field inputan agar kodingan lebih rapi.
                $nama = $_POST['nama'];
                $tanggal = $_POST['tanggal'];
                $ruang = $_POST['ruang'];
                $telepon = $_POST['telepon'];
                $diagnosa = $_POST['diagnosa'];
                $alamat = $_POST['alamat'];
          
                // Membuat Query
                $query = "INSERT INTO tb_siswa (nama, tanggal, ruang, telepon, diagnosa, alamat) VALUES('".$nama."', '".$tanggal."', '".$ruang."', '".$telepon."', '".$diagnosa."', '".$alamat."')";
          
                $result = mysqli_query($koneksi, $query);
          
                if($result){
                  header("location: index.php");
                } else {
                  echo "<script>alert('Data Gagal di tambahkan!')</script>";
                }
          
              }    
          
            ?>
    <td width="200px" bgcolor="#6FCCF8">
        <table>
        <hr>
        <marquee>BERHENTI MEROKOK,MEROKOK MEMBAHAYKAN KESEHATAN</marquee>
        <hr>
            <tr>
                <td>
                    <img src="image/body2.jpg" valign="center" height="200" width="300" alt="">
                </td>
            </tr>
        </table>
        <hr width="200">
        <marquee>CALL CENTER BERHENTI MEROKOK 0-800-177-6565</marquee>
        <hr width="200">
        <table align="center" height="100">
            <tr>
                <td bgcolor="white" width="200" height="30" align="center" valign="middle"><A href="https://krakataumedika.com/info-media/artikel/berhenti-merokok-motivasi-cara-dan-manfaatnya">MOTIVASI</A></td>
            </tr>
            <tr>
                <td bgcolor="white" width="200" height="30" align="center" valign="middle"><A href="http://rsprespira.jogjaprov.go.id/berhenti-merokok-sekarang-dan-selamanya-commit-to-quit-hari-tanpa-tembakau-sedunia-2021/">AYO BERHENTI</A></td>
            </tr>
            <tr>
                <td bgcolor="white" width="200" height="30" align="center" valign="middle"><A href="https://www.kompas.id/baca/humaniora/2023/01/04/berhenti-merokok-tidak-mustahil">MANFAAT</A></td>
            </tr>
           
        </table>
        <hr>
        <p align="center">
            berikut artikel yang dapat anda baca untuk menguatkan ketugahan hati anda untuk berhenti merokok
        </p>
        <hr>
    </td>
    </tr>

    <!--footer-->
    <tr bgcolor="#6FCCF8">
        <td align="middle" colspan="2" height="120px">
            <br>
            <marquee behavior="" direction="">LAYANAN KAMI DAPAT ANDA KUNJUNGI DARI HARI SENIN - JUM'AT JAM 08:00-02:00 WIB</marquee>
            <p>
                <img src="image/istockphoto-1392992222-612x612.jpg" width="220" height="150" alt="">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2521698374744!2d106.83009827340108!3d-6.230449661012675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3d8ab8fe919%3A0x6e17e1328d1bcba3!2sKementerian%20Kesehatan%20Republik%20Indonesia!5e0!3m2!1sid!2sid!4v1696666189924!5m2!1sid!2sid" width="220" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">lokasi kami</iframe>
                <iframe width="220" height="150" valign="middle" src="https://www.youtube.com/embed/GUveVGjjt1I?si=c00eZk4nzxqdsIwq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="220" height="150" src="https://www.youtube.com/embed/dV7Gr-_ouko?si=T58yOqv4Ocgrs-7S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    
            </p>
    
      
        <p align="center">&copy; copyright by D22.2022.03403 - syamsul nur</p>
        </tr>
        <!-- tag dihilangkan-->
        </td>
    
</body>
</head>
</html>
