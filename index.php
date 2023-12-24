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
    <td colspan="2" height="90px"><img src="image/02_E.png.jpeg" alt='header klinik' width="1050" height="250">
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
        <table>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
        <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center">form daftar pasien </h1>
      <a href="tambah.php" class="btn btn-primary mb-2">Tambah</a>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">nama</th>
            <th scope="col">tanggal lahir</th>
            <th scope="col">ruang</th>
            <th scope="col">telepon</th>
            <th scope="col">diagnosa</th>
            <th scope="col">alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
          <?php
              // variable no digunakan untuk meng-increments field no pada table. Karena nanti kita akan melooping data hasil query select kita. 
              $no = 1;
              // Simpan query kita kedalam variable agar lebih rapi, dan bisa reusable.
              // Arti dari query di bawah adalah pilih semua data dari table tb_siswa.
              $query = "SELECT * FROM tb_siswa";
              // Eksekusi Query
              // Simpan hasil eksekusi query kita ke dalam variable. Di sini variable nya saya kasih nama result.
              $result = mysqli_query($koneksi, $query);
              // Done. Waktunya Looping
          ?>
        <tbody>
          <?php
            foreach ($result as $data){
              echo "
                <tr>
                  <th scope='row'>". $no++ ."</th>
                  <td>". $data["nama"] ."</td>
                  <td>". $data["tanggal"] ."</td>
                  <td>". $data["ruang"] ."</td>
                  <td>". $data["telepon"] ."</td>
                  <td>". $data["diagnosa"] ."</td>
                  <td>". $data["alamat"] ."</td>
                  <td> 
                    <a href='update.php?id=".$data["id"]."' type='button' class='btn btn-success'>Update</a>
                    <a href='delete.php?id=".$data["id"]."' type='button' class='btn btn-danger' onlick='return confirm('Yakin ingin menghapus data?')'>Delete</a>
                  </td>
                </tr>  
              ";
            }
          ?>
        </tbody>  
      </table>
    </div>
  </section>
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
            <img src="image/istockphoto-1392992222-612x612.jpg" width="250" height="150" alt="">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2521698374744!2d106.83009827340108!3d-6.230449661012675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3d8ab8fe919%3A0x6e17e1328d1bcba3!2sKementerian%20Kesehatan%20Republik%20Indonesia!5e0!3m2!1sid!2sid!4v1696666189924!5m2!1sid!2sid" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">lokasi kami</iframe>
            <iframe width="250" height="150" valign="middle" src="https://www.youtube.com/embed/GUveVGjjt1I?si=c00eZk4nzxqdsIwq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe width="250" height="150" src="https://www.youtube.com/embed/dV7Gr-_ouko?si=T58yOqv4Ocgrs-7S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        </p>

  
    <p align="center">&copy; copyright by D22.2022.03403 - syamsul nur</p>
    </tr>
    <!-- tag dihilangkan-->
    </td>
</body>
</head>
</html>
