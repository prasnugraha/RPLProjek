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
  <div class="navbar-dark">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="/logout">
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
            <a class="nav-link " aria-current="page" href="/dashboardMahasiswa">
                <span data-feather="home"></span>
                Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="plus-circle"></span>
              Manajemen Surat
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " href="/buatSuratTugasMHS">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
              Surat Tugas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/buatSuratKKMMHS">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
              Surat KKM
            </a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span data-feather="mail"></span>
            &nbsp&nbsp&nbsp&nbsp Surat
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/suratMasukMHS">Surat Masuk</a></li>
            <li><a class="dropdown-item" href="/suratKeluarMHS">Surat Keluar</a></li>
            <li><a class="dropdown-item" href="/arsipSuratMHS">Arsip Surat</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="nav-link active">
        <a class="h6" href="#" type="button" style="text-decoration:none">Manajemen Surat</a>
        <a> &nbsp > &nbsp</a>
        <a class="h6" href="/buatSuratTugasMHS" type="button" style="text-decoration:none">Mengelolah Surat Tugas</a>
        <a> &nbsp > &nbsp</a>
        <a class="h6" href="/buatSuratTugasMHS/suratTugasMHS" type="button" style="text-decoration:none">Surat Tugas</a>
      </div>
            <form method="post" action="/buatSuratMHS/simpanST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="row">
                <div class="mb-3">
                    <input type="hidden" class="form-control" id="jenis_surat" name="jenis_surat" value ="Surat Tugas">
                    <input type="hidden" class="form-control" id="id" name="id" value ="{{ Auth::user()->id }}">
                </div>
                <div class="row">
                    <div class="col-4">
                        <label class="form-label">Nomor Induk</label>
                        <input type="text" class="form-control " onkeyup="isi_otomatis()" id="nomor_induk" name="no_induk[]"  placeholder="Masukkan Nomor Induk" >
                    </div>
                    <div class="col-6">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_user"  name="name[]" >
                    </div>
                    <div class="col-2">
                        <div >
                            <label for="nama_pengaju" class="form-label">Action</label>
                            <a href="#" class="tambahPengaju btn btn-info form-control">Tambah</a>
                        </div>
                    </div>
                </div>
                <div class="suratTugas"></div>
                <div class="mb-3">
                    <label class="form-label"> Keterangan Tugas Sebagai</label>
                    <input type="text" class="form-control" id="kgt_tugas" name="kgt_tugas" placeholder="Masukkan Keterangan Tugas">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tema kegiatan</label>
                    <input type="text" class="form-control" id="tema_kgt" name="tema_kgt" placeholder="Masukkan Tema kegiatan" >
                </div>
                <div class="mb-3">
                    <label class="form-label"> Penyelenggara kegiatan</label>
                    <input type="text" class="form-control" id="pyng_kgt" name="pyng_kgt" placeholder="Masukkan Penyelenggara kegiatan">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Tanggal pelaksanaan kegiatan</label>
                    <input type="date" class="form-control" id="tgl_laksanakan" name="tgl_laksanakan" placeholder="Masukkan Tanggal pelaksanaan kegiatan">
                </div>
                <input class="btn btn-primary mt-4" type="submit" value="Kirim">

        </div></form>
    </main>
</div>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
                <script type="text/javascript">

                    $(' .tambahPengaju').on('click', function() {
                        tambahPengaju();
                    });

                    function tambahPengaju(){
                        var suratTugas = '<div class="row"><div class="col-4 mt-2"><input type="text" class="form-control " onkeyup="isi_otomatis()" id="nomor_induk" name="no_induk[]"  placeholder="Masukkan Nomor Induk" ></div><div class="col-6 mt-2"><input type="text"  class="form-control" id="nama_user" name="name[]"></div><div class="col-1 mt-2"><div ><a href="#" class="hapus btn btn-danger form-control">Hapus</a></div></div></div>';
                        $(' .suratTugas').append(suratTugas);
                        return suratTugas;
                    };
                    $(' .hapus').live('click', function(){
                        $(this).parent().parent().parent().remove();
                    });
                    function isi_otomatis(){
                            var nomor_induk = $("#nomor_induk").val();
                            $.ajax({
                                url: '/ajax',
                                data:"nomor_induk="+nomor_induk ,
                            success: function (data) {
                                var json = data,
                                obj = JSON.parse(json);
                                $('#nama_user').val(obj.nama_user);
                            }
                            });
                    }



                    // $(document).ready(function(){

                    //     $(document).on('keydown', '.username', function() {

                    //     var id = this.id;
                    //     var splitid = id.split('_');
                    //     var index = splitid[1];

                    //     // Initialize jQuery UI autocomplete
                    //     $( '#'+id ).autocomplete({
                    //     source: function( request, response ) {
                    //     $.ajax({
                    //         url: "getDetails.php",
                    //         type: 'post',
                    //         dataType: "json",
                    //         data: {
                    //         search: request.term,request:1
                    //         },
                    //         success: function( data ) {
                    //         response( data );
                    //         }
                    //     });
                    //     },
                    //     select: function (event, ui) {
                    //     $(this).val(ui.item.label); // display the selected text
                    //     var userid = ui.item.value; // selected value

                    //     // AJAX
                    //     $.ajax({
                    //         url: 'getDetails.php',
                    //         type: 'post',
                    //         data: {userid:userid,request:2},
                    //         dataType: 'json',
                    //         success:function(response){

                    //         var len = response.length;

                    //         if(len > 0){
                    //         var id = response[0]['id'];
                    //         var nomor_induk = response[0]['nomor_induk'];
                    //         var nama_user = response[0]['nama_user'];

                    //         // Set value to textboxes
                    //         document.getElementById('nomor_induk'+index).value = nomor_induk;
                    //         document.getElementById('nama_user'+index).value = nama_user;

                    //         }

                    //         }
                    //     });

                    //     return false;
                    //     }
                    //     });
                    //     });

                    //     // Add more
                    //     $('#addmore').click(function(){

                    //     // Get last id
                    //     var lastname_id = $('.tr_input input[type=text]:nth-child(1)').last().attr('id');
                    //     var split_id = lastname_id.split('_');

                    //     // New index
                    //     var index = Number(split_id[1]) + 1;

                    //     // Create row with input elements
                    //     var html = "<tr class='tr_input'><td><input type='text' class='username' id='username_"+index+"' placeholder='Enter username'></td><td><input type='text' class='name' id='name_"+index+"' ></td><td><input type='text' class='age' id='age_"+index+"' ></td><td><input type='text' class='email' id='email_"+index+"' ></td><td><input type='text' class='salary' id='salary_"+index+"' ></td></tr>";

                    //     // Append data
                    //     $('tbody').append(html);

                    //     });
                    //     });

                </script>
<!--End JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
  </body>
</html>
