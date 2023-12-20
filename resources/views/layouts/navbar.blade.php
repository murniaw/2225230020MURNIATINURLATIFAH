<!doctype html>
<html lang="en">
  <head>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">murniaw</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-link" href="{{ route('welcome') }}">Home <span class="sr-only">(current)</span></a>
              </div>
            </div>
        </div>
      </nav>
    <!-- Akhir Navbar -->
    
    <!-- Jumbroton -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><span>Meriahkan </span>Gemuruh FKIP <br>Dengan <span>Suaramu!</span>
        </h1>
        <li class="nav-item"
        >
        <a class="nav-link" href="{{ route('sing.index') }}"><span>DAFTAR SEKARANG!</span></a>
        </li>
      </div>
    </div>
    <!-- Akhir Jumbotron -->
    
    <!-- Container -->
    <div class="container">
      <!-- Info Panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="img/sertif.png" alt="certificate" class="float-left">
              <h4>Sertifikat</h4>
              <p>Penghargaan bersertifikasi resmi dari FKIP Universitas Sultan Ageng Tirtayasa</p>
            </div>
            <div class="col-lg">
              <img src="img/fund.png" alt="High Res" class="float-left">
              <h4>Uang Pembinaan</h4>
              <p>Pendampingan sekaligus pembiayaan bootcamp berkelanjutan untuk ajang tarik suara</p>
            </div>
            <div class="col-lg">
              <img src="img/people.png" alt="Security" class="float-left">
              <h4>Networking</h4>
              <p>Relasi yang luas dengan orang-orang yang menekuni bidang tarik suara</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Info Panel -->
      
    </div>
    <!-- Akhir Container -->
    
  </body>
</html>
