<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2017 02:56:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Dashboard - HisLife City Church</title>
    <?php echo $_css_files; ?>
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php echo $_top_navigation; ?>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php echo $_side_bar_navigation ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-primary">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                             <div class="row row-in">
                                  <div class="col-lg-4 col-sm-12 row-in-br">
                                    <ul class="col-in">
                                            <li>
                                                <span class="circle circle-md bg-danger"><i class="fa fa-male"></i></span>
                                            </li>
                                            <li class="col-last"><h3 class="counter text-right m-t-15">0</h3></li>
                                            <li class="col-middle">
                                                <h4>Total <br>Visitors</h4>
                                                <div class="progress">
                                                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> 
                                                      <span class="sr-only">40% Complete (success)</span> 
                                                  </div>
                                                </div>
                                            </li>
                                            
                                    </ul>
                                  </div>
                                  <div class="col-lg-4 col-sm-12 row-in-br  b-r-none">
                                    <ul class="col-in">
                                            <li>
                                                <span class="circle circle-md bg-info"><i class="fa fa-users"></i></span>
                                            </li>
                                            <li class="col-last"><h3 class="counter text-right m-t-15">0</h3></li>
                                            <li class="col-middle">
                                                <h4>Total <br>Members</h4>
                                                <div class="progress">
                                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> 
                                                      <span class="sr-only">40% Complete (success)</span> 
                                                  </div>
                                                </div>
                                            </li>
                                            
                                    </ul>
                                  </div>
                                  <div class="col-lg-4 col-sm-12  b-0">
                                    <ul class="col-in">
                                            <li>
                                                <span class="circle circle-md bg-warning"><i class="fa fa-object-group"></i></span>
                                            </li>
                                            <li class="col-last"><h3 class="counter text-right m-t-15">0</h3></li>
                                            <li class="col-middle">
                                                <h4>Total Lifegroup</h4>
                                                <div class="progress">
                                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> 
                                                      <span class="sr-only">40% Complete (success)</span> 
                                                  </div>
                                                </div>
                                            </li>
                                            
                                    </ul>
                                  </div>
                                </div>   
                        </div>
                    </div>
                </div>

                
                
               
                <!-- ============================================================== -->
                <!-- start right sidebar -->
                <!-- ============================================================== -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme working">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; RJC & JKT </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <?php echo $_js_files; ?>
    <script src="assets/js/dashboard1.js"></script>
    <script type="text/javascript">
        (function () {
                [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                new CBPFWTabs(el);
            });
        })();
    </script>
</body>


<!-- Mirrored from wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2017 02:56:55 GMT -->
</html>