<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran siswa smk 1 jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style (2).css"  >

  

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <img src="tut.png" height="100px">
    <a class="navbar-brand fs-2" href="#" style="padding: 10px;">MIS JERUKSARI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item fs-5">
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item fs-5">
          <a class="nav-link" href="#">Profil</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="hero"></div>
<div class="text p-3">
  <h1 class="">SELAMAT DATANG DI SMK 1 JAKARTA</h1>
</div>
<br><br>
    <div class="menu p-3">
      <div class="d-grid gap-2 d-md-block">
      <a class="btn btn-primary" href="form-daftar.php" role="button">Daftar disini</a>
      <a class="btn btn-primary" href="list-siswa.php" role="button">Lihat Pendaftaran</a>
      </div>
    </div>
    <div class="kuri p-5">
      <img src="kuri.png">
    </div>
    <div class="container p-5">
      <section class="mx-auto my-5" style="max-width: 23rem;">
    
        <div class="card map-card">
          <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7261643051907!2d106.83440207395124!3d-6.167412560438682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5c894859df1%3A0x7107711c2d6b0651!2sSMK%20Negeri%201%20Jakarta!5e0!3m2!1sid!2sid!4v1718285450339!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="card-body closed px-0">
            <div class="button px-2 mt-3">
              <a data-mdb-ripple-init class="btn btn-floating btn-lg living-coral text-white float-end"
                style="margin-right: .75rem;"><i class="fas fa-bicycle"></i></a>
            </div>
            <div class="bg-white px-4 pb-4 pt-3-5">
              <h5 class="card-title h5 living-coral-text">SMK 1 JAKARTA</h5>
              <div class="d-flex justify-content-between living-coral-text">
                <h6 class="card-subtitle font-weight-light">SMK 1 JAKARTA</h6>
              </div>
              <hr>
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <th scope="row" class="px-0 pb-3 pt-2">
                      <i class="fas fa-map-marker-alt living-coral-text"></i>
                    </th>
                    <td class="pb-3 pt-2">JL</td>
                  </tr>
                  <tr class="mt-2">
                    <th scope="row" class="px-0 pb-3 pt-2">
                      <i class="far fa-clock living-coral-text"></i>
                    </th>
                    <td class="pb-3 pt-2"><span class="deep-purple-text me-2">Buka 24 jam</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    
      </section>
    </div>
    <section class="main text-light">
      <h4>PENDAFTARAN DIMULAI PADA TANGAL 1 JANUARI 2024...</h4>
    </section>
    <?php if(isset($_GET['status'])): ?>
  



        <p>
            <?php
            if($_GET['status'] == 'sukses') {
                echo "Pendaftaran siswa baru berhasil";
            } else {
                echo "Pendaftaran gagal";
            }
            ?>
        </p>
        <?php endif; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>
