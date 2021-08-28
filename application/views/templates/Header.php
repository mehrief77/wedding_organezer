<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E_SERVICES</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/css/dashboard.css" rel="stylesheet">

<!-- utk layar menjadi responsif -->
<style type="text/css">
  @media screen and (max-width: 520px) {
  table {
    width: 100%;
  }
  thead th.column-primary {
    width: 100%;
  }

  thead th:not(.column-primary) {
    display:none;
  }
  
  th[scope="row"] {
    vertical-align: top;
  }
  
  td {
    display: block;
    width: auto;
    text-align: right;
  }
  thead th::before {
    text-transform: uppercase;
    font-weight: bold;
    content: attr(data-header);
  }
  thead th:first-child span {
    display: none;
  }
  td::before {
    float: left;
    display: block !important; 
    text-transform: uppercase;
    font-weight: bold;
    font-size: 13px;
    /*margin-right: 40px !important;*/
    content: attr(data-header);
  }

  .main{
    display: inline-block !important;
  }

  

      .tag-responsive{
      display: none !important;
    }

    

}
</style>

</head>


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <nav class="navbar navbar-dark bg-dark">
    <nav class="navbar navbar-expand-lg bg-light bg-dark">
      <a class="navbar-brand" href="#">Pencari Kerja</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarText" style="color: red">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("navbar/pendaftarkerja"); ?>">Pendaftar Kerja</a></li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("navbar/daftar"); ?>">Daftar Kerja</a></li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("navbar/tentang"); ?>">Tentang</a></li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("navbar/contact"); ?>">Kontak</a></li>
        </ul>
      </div>
    </nav>
  </nav>
</nav> -->