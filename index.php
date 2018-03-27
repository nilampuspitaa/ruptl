<?php
     include 'proses/koneksi.php';
     session_start();
     if(empty($_SESSION['username']))
     {
          echo "<script type='text/javascript'> window.location.href='login.html'</script>"; 
     }
     else
     {
         $namalogin = $_SESSION['nama'];
         $user= $_SESSION['username'];

     }

?>

<!DOCTYPE html>
<html class=" ">

<head>
    <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 4.1
         * This file is part of Ultra Admin Theme.
        -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Ultra Admin : Default Layout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">
    <!-- For iPad Retina display -->




    <!-- CORE CSS FRAMEWORK - START -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <link href="assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

    <link href="assets/plugins/messenger/css/messenger.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/messenger/css/messenger-theme-future.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/messenger/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


    <!-- CORE CSS TEMPLATE - START -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" ">
     <!-- START TOPBAR -->
    <div class='page-topbar '>
        <div class='logo-area'>
        <!-- <img src="ruptl kecil.png" >         -->
        </div>
        <div class='quick-area'>
            <div class='pull-left'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li> 
                </ul>
            </div>
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="profile">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <img src="data/profile/profile.png" alt="user-image" class="img-circle img-inline">
                            <span><?php echo $namalogin;?>
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">
                            <li>
                                <a href="#settings">
                                    <i class="fa fa-wrench"></i>
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="#profile">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="#help">
                                    <i class="fa fa-info"></i>
                                    Help
                                </a>
                            </li>
                            <li class="last">
                                <a href="login.html">
                                    <i class="fa fa-lock"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- END TOPBAR -->

    <!-- START CONTAINER -->
    <div class="page-container row-fluid">

        <!-- SIDEBAR - START -->
        <div class="page-sidebar ">
        
                    <!-- MAIN MENU - START -->
                    <div class="page-sidebar-wrapper" id="main-menu-wrapper">
        
                        <!-- USER INFO - START -->
                        <div class="profile-info row">
        
                            <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                                <a href="ui-profile.html">
                                    <img src="data/profile/profile.png" class="img-responsive img-circle">
                                </a>
                            </div>
        
                            <div class="profile-details col-md-8 col-sm-8 col-xs-8">
        
                                <h3>
                                    <a href="ui-profile.html"><?php echo $namalogin;?></a>
        
                                    <!-- Available statuses: online, idle, busy, away and offline -->
                                    <span class="profile-status online"></span>
                                </h3>
        
                                <p class="profile-title">Web Developer</p>
        
                            </div>
        
                        </div>
                        <!-- USER INFO - END -->
        
        
        
                        <ul class='wraplist'>
        
        
                            <li class="">
                                <a href="index.php?p=home">
                                    <i class="fa fa-home"></i>
                                    <span class="title">Home</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="index.php?p=gardu_induk">
                                    <i class="fa fa-database" ></i>
                                    <span class="title">GARDU INDUK</span>
                                    
                                </a>
                                
                            </li>
                            <li class="">
                                <a href="index.php?p=gardu_hubung">
                                    <i class="fa fa-database" ></i>
                                    <span class="title">GARDU HUBUNG</span>
                                    
                                </a>
                                
                            </li>
                            <li class="">
                                <a href="index.php?p=transmisi150">
                                    <i class="fa fa-database" ></i>
                                    <span class="title">TRANSMISI 150 KV</span>
                                    
                                </a>
                                
                            </li>
                            <li class="">
                                <a href="javascript:;">
                                    <i class="fa fa-line-chart"></i>
                                    <span class="title">PROYEK</span>
                                    <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                   
                                    <li>
                                        <a class="" href="index.php?p=cod_gi">COD Gardu Induk</a>
                                    </li>
                                    <li>
                                        <a class="" href="index.php?p=ext_trafo">Extention Trafo</a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                        </ul>
        
                    </div>
                    <!-- MAIN MENU - END -->
        </div>
        <!--  SIDEBAR - END -->
         <!-- START CONTENT -->
       <section id="main-content" class=" ">
       <section class="wrapper main-wrapper" style=''>
           <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
               <!-- MAIN CONTENT -->
               <?php
                       $pages_dir = 'pages';
                       if(!empty($_GET['p'])){
                           $pages = scandir($pages_dir, 0);
                           unset($pages[0], $pages[1]);
                           $p = $_GET['p'];
                           if(in_array($p.'.php', $pages))
                               include($pages_dir.'/'.$p.'.php');
                           else
                               echo 'Halaman tidak ditemukan! :(';
                       }
                       else
                       {
                           include($pages_dir.'/home.php');
                       }
               ?>
               <!-- END MAIN CONTENT -->
           </div>
       </section>
   </section>
   <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


    <!-- CORE JS FRAMEWORK - START -->
    <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>
    <!-- CORE JS FRAMEWORK - END -->


    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script src="assets/plugins/messenger/js/messenger.min.js" type="text/javascript"></script>
    <script src="assets/plugins/messenger/js/messenger-theme-future.js" type="text/javascript"></script>
    <script src="assets/plugins/messenger/js/messenger-theme-flat.js" type="text/javascript"></script>
    <script src="assets/js/messenger.js" type="text/javascript"></script>
    
    <script src="assets/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


    <!-- CORE TEMPLATE JS - START -->
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS - END -->

    <!-- Sidebar Graph - START -->
    <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
    <!-- Sidebar Graph - END -->

</body>

</html>