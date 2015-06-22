<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Sistem Informasi Manajemen Trainee</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url()?>/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url()?>/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<section class="menu-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">

                    <ul id="menu-top" class="nav navbar-nav navbar-right">

                        <li><a class="menu-top-active" href="<?php echo base_url()?>">Logout</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- MENU SECTION END-->
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center><img src="<?php echo base_url()?>/assets/img/pusri.png" width="80"></center>
                <center><h4 class="page-head-line">Sistem Informasi Manajemen Trainee PT PUSRI</h4></center>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                Home > Manajemen Trainee > Create
                <br/>
                <br/>

            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        FORM PEMBUATAN MATERI BARU
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url()?>index.php/daftarmt/add">

                            <div class="form-group">
                                <label for="exampleInputNama">Nama Materi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama" required />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama">Deskripsi materi</label>
                                <textarea class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama" required /></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal </label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="tanggalawal" placeholder="MM/DD/YYYY" required />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jam Mulai</label>
                                <input type="time"  class="form-control" id="exampleInputPassword1" name="tanggalakhir"  required />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jam Selesai</label>
                                <input type="time"  class="form-control" id="exampleInputPassword1" name="tanggalakhir"  required />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Instruktur</label>
                                <input type="text"  class="form-control" id="exampleInputPassword1" name="tanggalakhir" placeholder="Instruktur"  required />
                            </div>


                            <button type="submit" class="btn btn-default">Submit</button>
                            <hr>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">



        </div>
    </div>

</div>
</div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
            </div>

        </div>
    </div>
</footer>
<!-- FOOTER SECTION END-->
<!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS  -->
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
