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
<!-- Calendar JavaScript -->
<script src="assets/plugins/bower_components/moment/moment.js"></script>
<script src='assets/plugins/bower_components/calendar/dist/fullcalendar.min.js'></script>
<script src="assets/plugins/bower_components/calendar/dist/cal-init.js"></script>
<!-- Custom Theme JavaScript -->
<script src="assets/js/custom.min.js"></script>
<script src="assets/plugins/bower_components/switchery/dist/switchery.min.js"></script>
<script src="assets/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
<script src="assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="assets/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="assets/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="assets/plugins/bower_components/multiselect/js/jquery.multi-select.js" type="text/javascript"></script>
<!-- Custom tab JavaScript -->
<script src="assets/js/cbpFWTabs.js"></script>
<!-- DataTable -->
<script src="assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/bower_components/datatables/dataTables.bootstrap.js"></script>
<<!-- Plugin JavaScript -->
<script src="assets/plugins/bower_components/moment/moment.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="assets/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="assets/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="assets/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="assets/plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="assets//plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="assets/plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Sweet-Alert  -->
<script src="assets/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script src="assets/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
<!-- Toast Master -->
<script src="assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<script src="assets/js/toastr.js"></script>
<!-- Style Switcher -->
<script src="assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<!-- Validator -->
<script src="assets/js/validator.js"></script>
<!-- PNotify -->
<script src="assets/plugins/resources/notify/pnotify.core.js"></script>
<script src="assets/plugins/resources/notify/pnotify.buttons.js"></script>
<script src="assets/plugins/resources/notify/pnotify.nonblock.js"></script>
<script src="assets/plugins/resources/pines-notify/pnotify.min.js"></script>

   




<script>
	// Clock pickers
	$('#single-input').clockpicker({
	    placement: 'bottom'
	    , align: 'left'
	    , autoclose: true
	    , 'default': 'now'
	});
	$('.clockpicker').clockpicker({
	    donetext: 'Done'
	, }).find('input').change(function () {
	    console.log(this.value);
	});
	$('#check-minutes').click(function (e) {
	    // Have to stop propagation here
	    e.stopPropagation();
	    input.clockpicker('show').clockpicker('toggleView', 'minutes');
	});
	if (/mobile/i.test(navigator.userAgent)) {
	    $('input').prop('readOnly', true);
	}
	// Colorpicker
	$(".colorpicker").asColorPicker();
	$(".complex-colorpicker").asColorPicker({
	    mode: 'complex'
	});
	$(".gradient-colorpicker").asColorPicker({
	    mode: 'gradient'
	});
	// Date Picker
	jQuery('.mydatepicker, #datepicker').datepicker();
	jQuery('#datepicker-autoclose, #datepicker-bday').datepicker({
	    autoclose: true
	    , todayHighlight: true
	});
	jQuery('#date-range').datepicker({
	    toggleActive: true
	});
	jQuery('#datepicker-inline').datepicker({
	    todayHighlight: true
	});
	// Daterange picker
	$('.input-daterange-datepicker').daterangepicker({
	    buttonClasses: ['btn', 'btn-sm']
	    , applyClass: 'btn-danger'
	    , cancelClass: 'btn-inverse'
	});
	$('.input-daterange-timepicker').daterangepicker({
	    timePicker: true
	    , format: 'MM/DD/YYYY h:mm A'
	    , timePickerIncrement: 30
	    , timePicker12Hour: true
	    , timePickerSeconds: false
	    , buttonClasses: ['btn', 'btn-sm']
	    , applyClass: 'btn-danger'
	    , cancelClass: 'btn-inverse'
	});
	$('.input-limit-datepicker').daterangepicker({
	    format: 'MM/DD/YYYY'
	    , minDate: '06/01/2015'
	    , maxDate: '06/30/2015'
	    , buttonClasses: ['btn', 'btn-sm']
	    , applyClass: 'btn-danger'
	    , cancelClass: 'btn-inverse'
	    , dateLimit: {
	        days: 6
	    }
	});
</script>




<!--Morris JavaScript -->
<!-- <script src="assets/plugins/bower_components/raphael/raphael-min.js"></script>
<script src="assets/plugins/bower_components/morrisjs/morris.js"></script> -->

<!-- chartist chart -->
<!-- <script src="assets/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
<script src="assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script> -->

<!-- DataTable -->
<!-- <script type="text/javascript" src="assets/plugins/resources/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/plugins/resources/datatables/dataTables.bootstrap.js"></script> -->





















<!-- START Do not alter, change, or modify this -->
<!-- <div class="hidden" id="morris-area-chart2" style="height:208px"></div> -->
<!-- END Do not alter this -->