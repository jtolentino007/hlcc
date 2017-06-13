<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/HisLife.png">
    <title><?php echo $title ?></title>
    <?php echo $_css_files ?>
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
                        <h4 class="page-title text-primary">Network</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0)">Master Files</a></li>
                            <li class="active">Network</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- CONTENT -->
                <!-- ============================================================== -->
                <div id="div_tbl_network">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title m-b-0 text-primary b-b">View Network</h3><br>
                                <!-- <p class="text-muted m-b-30">Data table example</p> -->
                                <button id="btn_new" class="btn btn-primary waves-effect waves-light" type="button"><span class="btn-label"><i class="mdi mdi-account-plus fa-fw"></i></span>Add New Network</button>
                                <div class="table-responsive">
                                    <table id="tbl_network" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Network</th>
                                                <th>Network Leader</th>
                                                <th style="text-align: center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->
                <div id="div_add_network">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box p-l-20 p-r-20">
                                <h3 class="box-title m-b-0 text-primary b-b">Add New Network</h3>
                                <br><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="frm_network" class="floating-labels" data-toggle="validator">
                                            <div class="form-group m-b-40">
                                                <input type="text" class="form-control tooltip-info" name="network_name" id="name" data-toggle="tooltip" data-placement="bottom" title="Network Name" data-error="Please put the Network Name." required><span class="highlight"></span> <span class="bar"></span>
                                                <label for="name">Network Name</label>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group m-b-40">
                                                <input type="text" class="form-control tooltip-info" name="network_leader" id="leader" data-toggle="tooltip" data-placement="bottom" title="Network Leader" data-error="Oh, there should be a Network Leader." required><span class="highlight"></span> <span class="bar"></span>
                                                <label for="leader">Network Leader</label>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9" align="left" style="margin-left: 0px;">
                                                                <button type="submit" id="btn_save" class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-check"></i></span>Submit</button>
                                                                <button id="btn_cancel" class="btn btn-danger waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-times"></i></span>Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->
                <button alt="alert" class="hidden img-responsive model_img btn btn-primary" id="sa-warning"></button>
                <button alt="alert" class="hidden img-responsive model_img btn btn-primary" id="sa-success"></button>
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




    <?php echo $_js_files ?>    

    <script type="text/javascript">   
        $(document).ready(function(){
            var _txnMode; var dt;  var _selectRowObj; var _selectedID;

            (function () {
                    [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                    new CBPFWTabs(el);
                });
            })();

            var initializeControls=function() {

                dt=$('#tbl_network').DataTable({
                    "dom": '<"toolbar">frtip',
                    "bLengthChange":false,
                    "pageLength":15,
                    "language": {
                         searchPlaceholder: "Search Network"
                     },
                    "ajax" : "Network/transaction/list",
                    "columns": [
                        { targets:[0],data: "network_name" },
                        { targets:[1],data: "network_leader" },
                        {
                            targets:[2],
                            render: function (data, type, full, meta){
                                var btn_edit='<button class="btn btn-primary btn-circle btn-sm" name="edit_info" data-toggle="tooltip" data-placement="top" title="Edit" style="margin-left:-5px;"><i class="fa fa-pencil"></i> </button>';
                                var btn_trash='<button class="btn btn-danger btn-circle btn-sm" id="remove_info" name="remove_info" data-toggle="tooltip" data-placement="top" title="Move to trash" style="margin-right:-5px;"><i class="fa fa-trash-o"></i></button>';

                                return '<center>'+btn_edit+'&nbsp;'+btn_trash+'</center>';
                            }
                        }
                    ]
                });
                // $('.numeric').autoNumeric('init',{mDec:4});
                // $('#contact_no').keypress(validateNumber);                
            }();
            // END OF DATATABLE

            

            $('#div_add_network').hide();

            // To show the adding form
            $('#btn_new').click(function(){
                _txnMode="new";
                showForm(true);
                clearFields($('#frm_network'));
            });

            // To close adding form and show datatable
            $('#btn_cancel').click(function(){
                showForm(false);
            });

            // To edit form
            $('#tbl_network tbody').on('click','button[name="edit_info"]',function(){
                _txnMode="edit";
                _selectRowObj=$(this).closest('tr');
                var data=dt.row(_selectRowObj).data();
                _selectedID=data.network_id;
                
                $('input,textarea,select').each(function(){
                    var _elem=$(this);
                    $.each(data,function(name,value){
                        if(_elem.attr('name')==name){
                            _elem.val(value);
                        }
                    });
                });
                showForm(true);
            });

            // To delete row from datatable
            $('#tbl_network tbody').on('click','button[name="remove_info"]',function(){
                _selectRowObj=$(this).closest('tr');
                var data=dt.row(_selectRowObj).data();
                _selectedID=data.network_id;
                
                $('#sa-warning').click();
            });

            $('#sa-warning').click(function(){
                swal({   
                    title: "Are you sure?",   
                    text: "You will not be able to recover this!",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "Yes, delete it!",   
                    closeOnConfirm: false 
                }, function(){
                    swal("Deleted!", "Network information successfully deleted.", "success")
                    removeNetwork().done(function(response){
                        showNotification(response)
                        dt.row(_selectRowObj).remove().draw();
                    })                       
                });
            });

            // To save and add form
            $('#btn_save').click(function(){
                if(validateRequiredFields($('#frm_network'))){
                    if(_txnMode=="new"){
                        createNetwork().done(function(response){
                            showNotification(response);
                            dt.row.add(response.row_added[0]).draw();
                        }).always(function(){
                            showForm(false);
                            showSpinningProgress($('#btn_save'));
                        });
                        return;
                    }
                    if(_txnMode==="edit"){
                        updateNetwork().done(function(response){
                            showNotification(response);
                            dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                        }).always(function(){
                            showForm(false);
                            showSpinningProgress($('#btn_save'));
                        });
                        return;
                    }
                }
            });

            var validateRequiredFields=function(f){
                var stat=true;

                $('div.form-group').removeClass('has-error');
                $('input[required],textarea[required],select[required]',f).each(function(){

                        if($(this).is('select')){
                        if($(this).val()==0){
                            showNotification({title:"Attention!",stat:"error",msg:"Please complete the form."});
                            $(this).closest('div.form-group').addClass('has-error');
                            $(this).focus();
                            stat=false;
                            return false;
                        }
                    
                        }else{
                        if($(this).val()==""){
                            showNotification({title:"Attention!",stat:"error",msg:"Please complete the form."});
                            $(this).closest('div.form-group').addClass('has-error');
                            $(this).focus();
                            stat=false;
                            return false;
                        }
                    }
                });

                return stat;
            };

            //  USER DEFINE 

            var createNetwork=function(){
                var _data=$('#frm_network').serializeArray();

                return $.ajax({
                    "dataType":"json",
                    "type":"POST",
                    "url":"Network/transaction/create",
                    "data":_data,
                    "beforeSend": showSpinningProgress($('#btn_save'))
                });
            };

            var updateNetwork=function() {
                var _data=$('#frm_network').serializeArray();
                _data.push({name : "network_id" ,value : _selectedID});

                return $.ajax({
                    "dataType":"json",
                    "type":"POST",
                    "url":"Network/transaction/update",
                    "data":_data,
                    "beforeSend": showSpinningProgress($('#btn_save'))
                });
            };

            var removeNetwork=function() {
                return $.ajax({
                    "dataType":"json",
                    "type":"POST",
                    "url":"Network/transaction/delete",
                    "data":{network_id : _selectedID}
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

            var showForm=function(b){
                if(b){
                    $('#div_add_network').show();
                    $('#div_tbl_network').hide();
                }else{
                    $('#div_add_network').hide();
                    $('#div_tbl_network').show();
                }
            };

            var clearFields=function(f){
                $('input,textarea,select',f).val('');
                //$(f).find('input:first').focus();
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


        // END OF DOCUMENT READY  
        });
    </script>
</body>

</html>