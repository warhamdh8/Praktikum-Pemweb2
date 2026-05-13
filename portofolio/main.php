<?php
$page = $_GET['page'] ?? 'home';

if ($page == 'home') {
?>

<h3 class="mb-3">Home</h3>

<div class="card mb-3 shadow">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/me.jpeg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Wardah Hamidah</h5>
        <p class="card-text">
          Saya merupakan mahasiswa Program Studi Sistem Informasi di Sekolah Tinggi Teknologi Terpadu Nurul Fikri. Selain aktif dalam perkuliahan, saya juga aktif mengikuti kegiatan organisasi untuk mengembangkan kemampuan komunikasi, kepemimpinan, serta kerja sama tim. Saya dikenal sebagai pribadi yang disiplin, bertanggung jawab, dan memiliki semangat belajar yang tinggi.

        </p>
      </div>
    </div>
  </div>
</div>

<?php
} elseif ($page == 'about') {
?>

<h3 class="mb-3">About Me</h3>

<div class="accordion">

  <div class="accordion-item">
    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#hobby">
      Hobby
    </button>
    <div id="hobby" class="accordion-collapse collapse show">
      <div class="accordion-body">
        Saya suka bersepeda, olahraga, jalan-jalan, dan belajar hal baru.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#hobby">
      Favorite menu
    </button>
    <div id="hobby" class="accordion-collapse collapse show">
      <div class="accordion-body">
        Makanan favorit saya bakso dan minuman favorit saya es coklat.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#hobby">
      Pengalaman Organisasi
    </button>
    <div id="hobby" class="accordion-collapse collapse show">
      <div class="accordion-body">
        Semasa SMA Aktif dalam organisasi IRMA, OSIS, dan Paskibra. Saat ini, saya aktif dalam organisasi LDK Senada, yang semakin membantu saya mengembangkan kemampuan manajemen waktu, serta memperluas relasi dan pengalaman dalam lingkungan organisasi.
      </div>
    </div>
  </div>

</div>

<?php
} elseif ($page == 'studies') {

  include 'studies.php';

} elseif ($page == 'level') {

  include 'level.php';

} elseif ($page == 'project') {
?>

<!-- PROJECT -->
<h3 class="mb-4 text-center">My Activity</h3>

<div class="row justify-content-center g-4">

  <!-- Project 1 -->
  <div class="col-md-4 d-flex">
    <div class="card shadow w-100 h-100">
      <img src="img/2.jpeg" class="card-img-top project-img" alt="Project 1">
      <div class="card-body text-center">
        <p class="card-text">ORMIK</p>
      </div>
    </div>
  </div>

  <!-- Project 2 -->
  <div class="col-md-4 d-flex">
    <div class="card shadow w-100 h-100">
      <img src="img/3.jpeg" class="card-img-top project-img" alt="Project 2">
      <div class="card-body text-center">
        <p class="card-text">ANGKATAN 25</p>
      </div>
    </div>
  </div>

  <!-- Project 3 -->
  <div class="col-md-4 d-flex">
    <div class="card shadow w-100 h-100">
      <img src="img/4.jpeg" class="card-img-top project-img" alt="Project 3">
      <div class="card-body text-center">
        <p class="card-text">APMI</p>
      </div>
    </div>
  </div>

  <!-- Project 4 -->
  <div class="col-md-4 d-flex">
    <div class="card shadow w-100 h-100">
      <img src="img/5.jpeg" class="card-img-top project-img" alt="Project 4">
      <div class="card-body text-center">
        <p class="card-text">GO MAGANG SENADA</p>
      </div>
    </div>
  </div>

  <!-- Project 5 -->
  <div class="col-md-4 d-flex">
    <div class="card shadow w-100 h-100">
      <img src="img/6.jpeg" class="card-img-top project-img" alt="Project 5">
      <div class="card-body text-center">
        <p class="card-text">CLOSING MAGANG SENADA</p>
      </div>
    </div>
  </div>

  <!-- Project 6 -->
  <div class="col-md-4 d-flex">
    <div class="card shadow w-100 h-100">
      <img src="img/7.jpeg" class="card-img-top project-img" alt="Project 6">
      <div class="card-body text-center">
        <p class="card-text">LDMKM</p>
      </div>
    </div>
  </div>

  <!-- Project 7 -->
  <div class="col-md-4 d-flex">
    <div class="card shadow w-100 h-100">
      <img src="img/8.jpeg" class="card-img-top project-img" alt="Project 7">
      <div class="card-body text-center">
        <p class="card-text">KHOLID ACADEMY</p>
      </div>
    </div>
  </div>

  <!-- Project 8 -->
  <div class="col-md-4 d-flex">
    <div class="card shadow w-100 h-100">
      <img src="img/9.jpeg" class="card-img-top project-img" alt="Project 8">
      <div class="card-body text-center">
        <p class="card-text">PELANTIKAN PENGURUS LDK SENADA</p>
      </div>
    </div>
  </div>

  <!-- Project 9 -->
  <div class="col-md-4 d-flex">
    <div class="card shadow w-100 h-100">
      <img src="img/10.jpeg" class="card-img-top project-img" alt="Project 9">
      <div class="card-body text-center">
        <p class="card-text">BIRO KEMUSLIMAHAN</p>
      </div>
    </div>
  </div>

</div>
</div>

<?php
} elseif ($page == 'contact') {
?>

<h3 class="mb-3">Contact Me</h3>

<div class="row text-center">

  <div class="col-md-4">
    <div class="card p-3 shadow h-100">
      <img src="img/ig.jpeg" width="50" class="mx-auto mb-2">
      <h5>Instagram</h5>
      <p>@wmxrd</p>
      <a href="https://www.instagram.com/wmxrd/" target="_blank" class="btn btn-primary btn-sm">
        Kunjungi
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card p-3 shadow h-100">
      <img src="img/wa.jpeg" width="50" class="mx-auto mb-2">
      <h5>Whatsapp</h5>
      <a href="https://chat.whatsapp.com/CVKwGSsyngV3SYZATlN5li" target="_blank" class="btn btn-primary btn-sm">
        Kunjungi
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card p-3 shadow h-100">
      <img src="img/email.png" width="50" class="mx-auto mb-2">
      <h5>Email</h5>
      <p>Hamidahhah55@gmail.com</p>
      <a href="https://warhamidahh55@gmail.com" target="_blank" class="btn btn-primary btn-sm">
        Kunjungi
      </a>
    </div>
  </div>
</div>

<?php
} elseif ($page == 'login') {
?>

<h3 class="mb-3">Login</h3>

<form>
  <input class="form-control mb-2" placeholder="Username">
  <input type="password" class="form-control mb-2" placeholder="Password">
  <button class="btn btn-primary">Login</button>
</form>

<?php
}
?>