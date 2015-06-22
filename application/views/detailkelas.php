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
                Home > Manajemen Trainee
                <br/>
                <br/>

            </div>

            <div class="col-md-6">

                <?php if ($this->session->flashdata('category_success')) { ?>

                <?php } ?>
                <!--   Kitchen Sink -->

                <div class="alert-success"></div>
                <button class="btn btn-danger"><i class="fa fa-pencil"></i><a class="klik" href="http://localhost/simtpusri/index.php/kegiatan/formmateri"> Tambah materi</a></button><br/><br/>
                <div class="panel panel-default">

                    <div class="panel-heading">
                        Daftar Materi
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>

                                    <th>Hari & Tanggal</th>

                                    <th>Jam </th>
                                    <th>Materi Pelatihan</th>

                                    <th>Instruktur</th>
                                    <th colspan="3"></th>

                                </tr>
                                </thead>
                                <?php
                                $no = 1;
                                foreach($hasil as $data):
                                    ?>
                                    <tr>

                                        <td> <?php echo $data->tanggal; ?> </td>
                                        <td> <?php echo $data->jam_mulai; ?> <?php echo $data->jam_akhir; ?> </td>
                                        <td> <?php echo $data->deskripsi; ?> </td>
                                        <td> <?php echo $data->instruktur; ?> </td>
                                        <td><a href="../tambahmateri/<?= $data->id;?>">Tambah Materi</a></td>
                                        <td><a href="">Update</a></td>
                                        <td><a href="">Delete</a></td>
                                    </tr>
                                    <?php
                                    $no++;
                                endforeach;
                                ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End  Kitchen Sink -->
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
