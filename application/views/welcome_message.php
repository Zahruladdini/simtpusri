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
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>info@yourdomain.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    
    <!-- LOGO HEADER END-->
   
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><img src="<?php echo base_url()?>/assets/img/pusri.png" width="80"></center>
                    <center><h2 class="page-head-line">Sistem Informasi Manajemen Trainee PT PUSRI</h2></center>

                </div>
                <?php
                $id = $this->uri->segment(3);
                ?>
            </div>
            <div class="row">
                <div class="col-md-6"><br/>
                    <div class="alert alert-info">
                      
                         <h3><strong> PEMBUKAAN MANAJEMEN TRAINEE PT PUPUK SRIWIDJAJA</strong></h3>
                        <ul>
                            <li>
                                Manajemen Trainee Tamatan SMA Batch 2 Tahun 2015 <a href="index.php/form/<?php $id;?>" class="daftar">REGISTRASI</a>
                            </li>
                          
                            <li>
                                Manajemen Trainee Roadshow Kampus Batch 2 Tahun 2015 <a href="" class="daftar">REGISTRASI</a>
                            </li>
                        </ul>
                       
                    </div>
                    
                </div>
                <div class="col-md-6">
                   <div class="alert alert-warning">
                        Untuk dapat masuk ke sistem anda harus mendaftar Manajemen Trainee terlebih dahulu. <br/><strong>Telah mendaftar ? <h4><a href="index.php/auth">Klik Disini untuk login</a></h4></strong>
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
