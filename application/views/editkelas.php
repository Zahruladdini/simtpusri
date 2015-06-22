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
                        FORM PEMBUATAN KELAS & KEGIATAN BARU
                    </div>
                    <div class="panel-body">
                        <?php
                        $id = $this->uri->segment(4);
                        $id_mt = $this->uri->segment(3);
                        ?>
                        <form method="post" action="<?php echo base_url()?>index.php/kegiatan/updatekelas/<?php echo $id_mt;?>/<?php echo $id; ?>">
                            <?php
                            $no = 1;
                            foreach($hasil as $value):
                            ?>
                            <div class="form-group">
                                <label for="exampleInputNama">Id Kegiatan</label>
                                <input type="text" disabled class="form-control" id="exampleInputEmail1" name="namakelas" placeholder="Nama" value="<?php echo $id ; ?>" required />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama">Nama Kelas</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="namakelas" placeholder="Nama" value="<?php echo $value->nama_kegiatan; ?> " required />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal mulai</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="tanggalawal" value="<?php echo $value->tanggal_mulai; ?>" placeholder="MM/DD/YYYY" required />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal selesai</label>
                                <input type="date"  class="form-control" id="exampleInputPassword1" name="tanggalakhir" value="<?php echo $value->tanggal_akhir; ?>" placeholder="MM/DD/YYYY" required />
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                            <hr>
                            <?php

                            endforeach;
                            ?>
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
