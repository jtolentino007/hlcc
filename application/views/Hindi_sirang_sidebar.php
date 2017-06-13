<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2017 02:56:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="assets/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="assets/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- animation CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="assets/css/colors/megna-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
        </svg>
    </div> -->
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
    <?php echo $_top_navigation ?>
    <?php echo $_side_bar_navigation ?>
    <?php echo $_right_side_bar_navigation ?>
        
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard 1</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard 1</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- CONTENT -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Data Table</h3>
                            <p class="text-muted m-b-30">Data table example</p>
                            <div class="table-responsive">
                                <table id="tbl_visitors" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date Visited</th>
                                            <th>Address</th>
                                            <th>Age</th>
                                            <th>Contact Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
            </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- START Do not alter, change, or modify this -->
    <div class="hidden" id="morris-area-chart2" style="height:208px"></div>
    <!-- END Do not alter this -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Counter js -->
    <script src="assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="assets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="assets/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="assets/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- chartist chart -->
    <script src="assets/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Calendar JavaScript -->
    <script src="assets/plugins/bower_components/moment/moment.js"></script>
    <script src='assets/plugins/bower_components/calendar/dist/fullcalendar.min.js'></script>
    <script src="assets/plugins/bower_components/calendar/dist/cal-init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/dashboard1.js"></script>
    <!-- Custom tab JavaScript -->
    <script src="assets/js/cbpFWTabs.js"></script>
    <script type="text/javascript">
        






        $(document).ready(function(){
            var _txnMode; var dt;

            (function () {
                    [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                    new CBPFWTabs(el);
                });
            })();

            
            
            

            $('#btn_new').click(function(){
                _txnMode="new";
                $('#modal_create_visitor').modal('show');
                //$('#date_visited').datepicker('setDate', 'today');
                clearFields($('#frm_visitor'));
            });

            var validateRequiredFields=function(f){
                var stat=true;

                $('div.form-group').removeClass('has-error');
                $('input[required],textarea[required],select[required]',f).each(function(){

                        if($(this).is('select')){
                        if($(this).val()==0){
                            showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                            $(this).closest('div.form-group').addClass('has-error');
                            $(this).focus();
                            stat=false;
                            return false;
                        }
                    
                        }else{
                        if($(this).val()==""){
                            showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                            $(this).closest('div.form-group').addClass('has-error');
                            $(this).focus();
                            stat=false;
                            return false;
                        }
                    }
                });

                return stat;
            };

            $('#btn_save').click(function(){
                if(validateRequiredFields($('#frm_visitor'))){
                    if(_txnMode=="new"){
                        createVisitor().done(function(response){
                            showNotification(response);
                            dt.row.add(response.row_added[0]).draw();
                            clearFields($('#frm_visitor'));
                            //showList(true);
                        }).always(function(){
                            alert('dsfsdfdsf');
                            $('#modal_create_visitor').modal('toggle');
                            showSpinningProgress($('#btn_save'));
                        });
                        return;
                    }
                    if(_txnMode==="edit"){
                        updateVisitor().done(function(response){
                            showNotification(response);
                            dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                        }).always(function(){
                            $('#modal_create_visitor').modal('toggle');
                            showSpinningProgress($('#btn_save'));
                        });
                        return;
                    }
                }
            });

            //  USER DEFINE 

            var createVisitor=function(){
                var _data=$('#frm_visitor').serializeArray();

                return $.ajax({
                    "dataType":"json",
                    "type":"POST",
                    "url":"Visitors/transaction/create",
                    "data":_data,
                    "beforeSend": showSpinningProgress($('#btn_save'))
                });
            };

            var showNotification=function(obj){
                PNotify.removeAll();
                new PNotify({
                    title:  obj.title,
                    text:  obj.msg,
                    type:  obj.stat
                });
            };

            var showSpinningProgress=function(e){
                $(e).find('span').toggleClass('glyphicon glyphicon-refresh spinning');
            };

            var showList=function(b){
                if(b){
                    $('#div_product_list').show();
                    $('#div_product_fields').hide();
                }else{
                    $('#div_product_list').hide();
                    $('#div_product_fields').show();
                }
            };

            var clearFields=function(f){
                $('input,textarea,select',f).val('');
                $(f).find('input:first').focus();
                //$('#img_user').attr('src','assets/img/anonymous-icon.png');
            };

            function validateNumber(event) {
                var key = window.event ? event.keyCode : event.which;

                if (event.keyCode === 8 || event.keyCode === 46
                    || event.keyCode === 37 || event.keyCode === 39) {
                    return true;
                }
                else if ( key < 48 || key > 57 ) {
                    return false;
                }
                else return true;
            };



        });
    </script>
    <script src="assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!--Style Switcher -->
    <script src="assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>


<!-- Mirrored from wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2017 02:56:55 GMT -->
</html>