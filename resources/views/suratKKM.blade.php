<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SI Surat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>




    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-Info flex-md-nowrap p-0 shadow-sm">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSIRAMEN-FTI</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-dark">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">
      <span data-feather="log-out"></span></a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/dashboardAdmin">
                <span data-feather="home"></span>
                Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/buatSurat">
              <span data-feather="plus-circle"></span>
              Buat Surat
            </a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span data-feather="mail"></span>  
            &nbsp&nbsp&nbsp&nbsp Surat
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/suratMasuk">Surat Masuk</a></li>
            <li><a class="dropdown-item" href="/suratKeluar">Surat Keluar</a></li>
            <li><a class="dropdown-item" href="/arsipSurat">Arsip Surat</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="nav-link active">
      <a class="h5" href="/buatSurat" type="button" style="text-decoration:none">Jenis-Surat</a>
        <a> &nbsp > &nbsp</a>
        <a class="h5" href="/buatSurat/suratKKM" type="button" style="text-decoration:none">Surat Keterangan Kegiatan Mahasiswa</a>
      </div>
      <div class="row">
            <form>
                <div class="mb-3">
                    <label class="form-label">Tema kegiatan</label>
                    <input type="text" class="form-control" id="Temakegiatan" placeholder="Masukkan Tema kegiatan" >
                </div>
                <div class="mb-3">
                    <label class="form-label"> Penyelenggara kegiatan</label>
                    <input type="text" class="form-control" id="Penyelenggarakegiatan" placeholder="Masukkan Penyelenggara kegiatan">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Tempat kegiatan</label>
                    <input type="text" class="form-control" id="Tempatkegiatan" placeholder="Masukkan Tempat kegiatan">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Hari kegiatan</label>
                    <input type="text" class="form-control" id="Harikegiatan" placeholder="Masukkan Hari kegiatan">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Tanggal pelaksanaan kegiatan</label>
                    <input type="date" class="form-control" id="tanngalkegiatan" placeholder="Masukkan Tanggal pelaksanaan kegiatan">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
  </body>
</html>
