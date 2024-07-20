<!doctype html>
<html lang="en">

<?php
include 'components/head.php';
?>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <?php
    include 'components/sidebar.php';
    ?>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <?php
      include 'components/navbar.php';
      ?>

      <section id="main-content">
        <section class="wrapper">
          <!--overview start-->
          <div class="row">
            <div class="col-lg-12">
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="home.php"> Beranda</a></li>
              </ol>
            </div>
          </div>

          <div class="p-5">
            <h1 class="text-info text-center p-3">Selamat Datang!</h1>

            <h5 class="text-secondary text-center p-3">Website ini menggunakan metode Simple Additive Weighting (SAW) untuk Sistem Pengambilan Keputusan (SPK)</h5>

            <div class="section-content">
              <h2>Metode SAW</h2>
              <p>Metode SAW adalah salah satu metode yang digunakan dalam proses pengambilan suatu keputusan. Konsep dasar metode SAW adalah mencari penjumlahan terbobot dari rating kinerja pada setiap alternatif pada semua atribut.</p>

              <h3>Tahapan</h3>
              <ol class="steps">
                <li>Menentukan kriteria yang akan dijadikan acuan dalam pengambilan keputusan</li>
                <li>Menentukan rating kecocokan setiap alternatif pada setiap kriteria</li>
                <li>Menentukan bobot preferensi atau tingkat kepentingan masing-masing kriteria</li>
                <li>Melakukan normalisasi matriks keputusan</li>
                <li>Menghitung nilai terbobot dari setiap alternatif</li>
                <li>Menentukan peringkat atau urutan setiap alternatif berdasarkan nilai terbobot</li>
                <li>Memilih alternatif terbaik yang memiliki nilai tertinggi</li>
              </ol>

              <h3>Studi Kasus</h3>
              <p>Pada kasus ini terdapat 7 kriteria yaitu harga, suasana, kebersihan, jarak, variasi menu, pelayanan, dan kenyamanan guna mengambil keputusan
                untuk <b>Memilih Tempat Makan Terbaik Sekitar Kampus.</b> Perhitungan bobot disini kami isi berdasarkan <b>Kuisioner dari Responden Mahasiswa CCIT 4A</b>.
              </p>
            </div>
          </div>
        </section>
      </section>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
