<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Asset | Yayasan CKB</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <div class="card-header bg-transparent pb-5">
    <h2 class="text-center">Ubah Data Program Kerja</h2>
  </div>
  <div class="card-body px-lg-5 py-lg-5">
    <form action="{{url('/dataproker/update')}}" enctype="multipart/form-data" method ="POST">
      @csrf
      <input name="id" type="hidden" value="{{ $proker->id_program }}"/>
      <div class="form-group mb-3">
        <div class="input-group input-group-merge input-group-alternative">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-briefcase-24"></i></span>
            </div>
            <input class="form-control" placeholder="Nama Program" type="text" name="NamaProgramWebs" value ="{{$proker->nama_program}}">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group input-group-merge input-group-alternative">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
            </div>
            <input class="form-control" placeholder="Budget" type="text" name="BudgetWeb" value ="{{$proker->besar_anggaran}}">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group input-group-merge input-group-alternative">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-paper-diploma"></i></span>
            </div>
            <input class="form-control" placeholder="Pencapaian" type="text" name="PencapaianWeb" value ="{{$proker->pencapaian}}">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group input-group-merge input-group-alternative">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-settings-gear-65"></i></span>
            </div>
            <input class="form-control" placeholder="Kendala" type="text" name="KendalaWeb" value ="{{$proker->kendala}}">
        </div>
    </div>
    <div>
      <select class="form-control" name="roleidWeb" aria-labelledby="role">
        @foreach($role as $rl)
        <option value="{{$rl->role_id}}">{{$rl->role_name}}</option>
        @endforeach
      </select>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary my-4">Perbaharui Data</button>
    </div>
  </form>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>