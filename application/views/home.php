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
   <?php session_start() ;?>
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                    
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="logout">Logout</a></li>
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
                    
                </div>

            </div>
            <div class="row">
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="fa fa-venus dashboard-div-icon" ></i>
                        
                         <h5><a class="klik" href="<?php echo base_url()?>index.php/daftarmt">MANAJEMEN TRAINEE</a></h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa-edit dashboard-div-icon" ></i>
                        
                         <h5><a class="klik" href="<?php echo base_url()?>index.php/kegiatan">KEGIATAN DAN <br/>MATERI</a></h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-cogs dashboard-div-icon" ></i>
                        
                         <h5><a class="klik" href="">PENEMPATAN <br/> CAKAR </a></h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <i  class="fa fa-bell-o dashboard-div-icon" ></i>
                        
                         <h5><a class="klik" href="">KIRIM<br/>PEMBERITAHUAN </a> </h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-five">
                        <i  class="fa fa-cogs dashboard-div-icon" ></i>
                        
                         <h5><a class="klik" href="">DAFTAR<br/>USER </a></h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-six">
                        <i  class="fa fa-edit dashboard-div-icon" ></i>
                        
                         <h5><a class="klik" href="">REPORT <br/>MT</a></h5>
                    </div>
                </div>
                

            </div>
           
            <div class="row">
                <div class="col-md-6">
                      <div class="notice-board">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                          Pencarian peserta
                                
                            </div>
                            <div class="panel-body">
                               
                                <ul >
                                   
                                     <li>
                                          
                                     <span class="glyphicon glyphicon-align-left text-success" ></span> 
                                                  Mencari peserta beserta informasi tahap yang telah diikuti calon karyawan
                                                 
                                           
                                    </li>
                                    
                                   </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-footer">
                                <input type="text" class="form-control" id="namauser" placeholder="Masukkan nama calon karyawan">
                                <center><button class="btn btn-default">Cari</button></center>
                            </div>
                        </div>
                    </div>
                   
                     <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID Cakar</th>
                                            <th>Nama Cakar</th>
                                            <th>Jalur</th>
                                            <th>Status</th>
                                            <th>Delivery On </th>
                                            <th># #</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <td># 2501</td>
                                            <td>01/22/2015 </td>
                                            <td>
                                                <label class="label label-info">300 USD </label>
                                            </td>
                                            <td>
                                                <label class="label label-success">Delivered</label></td>
                                            <td>01/25/2015</td>
                                             <td> <a href="#"  class="btn btn-xs btn-danger"  >View</a> </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
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
