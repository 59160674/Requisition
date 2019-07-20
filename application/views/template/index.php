<!DOCTYPE html>
<html>

<head>
    <!-- my script and syles goes here -->
    <meta charset="utf-8">
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

    <link type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link type="text/css" href="<?php echo base_url();?>assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">
    <!-- Themify Icons -->
    <link type="text/css" href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
    <!-- Core CSS with all styles -->

    <link type="text/css" href="<?php echo base_url();?>assets/plugins/codeprettifier/prettify.css" rel="stylesheet">
    <!-- Code Prettifier -->
    <link type="text/css" href="<?php echo base_url();?>assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
    <!-- iCheck -->
    <link type="text/css" href="<?php echo base_url();?>assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link type="text/css" href="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link type="text/css" href="<?php echo base_url();?>assets/plugins/switchery/switchery.css" rel="stylesheet">
    <!-- Switchery -->
    <!-- /Switcher -->
    <!-- Load site level scripts -->

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script>
    <!-- Load jQuery -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jqueryui-1.10.3.min.js"></script>
    <!-- Load jQueryUI -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- Load Bootstrap -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/enquire.min.js"></script>
    <!-- Load Enquire -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/velocityjs/velocity.min.js"></script>
    <!-- Load Velocity for Animated Content -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/velocityjs/velocity.ui.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/wijets/wijets.js"></script>
    <!-- Wijet -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/codeprettifier/prettify.js"></script>
    <!-- Code Prettifier  -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>
    <!-- Swith/Toggle Button -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>
    <!-- Bootstrap Tabdrop -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
    <!-- iCheck -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/application.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/demo/demo.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/demo/demo-switcher.js"></script>

    <!-- End loading site level scripts -->

    <!-- Load page level scripts-->
    <!--<script type="text/javascript" src="<?php echo base_url();?>assets/demo/demo-index.js"></script>-->
    <!-- Initialize scripts for this page-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <!-- add export data table (Jirayus Edit) -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/buttons.flash.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/jszip.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="-->
    <?php //echo base_url();?>
    <!--assets/plugins/datatables/buttons.dataTables.min.css">-->
    <!-- end add export data table (Jirayus Edit)-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/demo/demo-datatables.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/quicksearch/jquery.quicksearch.min.js"></script>

    <link type="text/css" href="<?php echo base_url();?>assets/plugins/form-select2/select2.css" rel="stylesheet">
    <!-- Select2 -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/form-select2/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/form-select2/select2.min.js"></script>
    <!-- Advanced Select Boxes -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/form-autosize/jquery.autosize-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/form-multiselect/js/jquery.multi-select.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/form-jasnyupload/fileinput.min.js"></script>
    <!-- File Input -->
    <!-- Charts -->
    <!--<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/charts-flot/jquery.flot.min.js"></script>             	 Flot Main File -->
    <!--<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/charts-flot/jquery.flot.pie.min.js"></script>              Flot Pie Chart Plugin -->
    <!--<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/charts-flot/jquery.flot.stack.min.js"></script>       	 Flot Stacked Charts Plugin -->
    <!--<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/charts-flot/jquery.flot.orderBars.min.js"></script>   	 Flot Ordered Bars Plugin-->
    <!--<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/charts-flot/jquery.flot.resize.min.js"></script>           Flot Responsive -->
    <!--<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/charts-flot/jquery.flot.tooltip.min.js"></script> 		 Flot Tooltips -->
    <!--<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/charts-flot/jquery.flot.spline.js"></script> 				 Flot Curved Lines -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/sparklines/jquery.sparklines.min.js"></script>
    <!-- Sparkline -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <!-- jVectorMap -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jVectorMap -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/switchery/switchery.js"></script>
    <!-- Switchery -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/easypiechart/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/fullcalendar/moment.min.js"></script>
    <!-- Moment.js Dependency -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/fullcalendar/fullcalendar.min.js"></script>
    <!-- Calendar Plugin -->

    <!--<script type="text/javascript" src="<?php echo base_url();?>assets/demo/demo-index.js"></script> 									 Initialize scripts for this page-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootbox/bootbox.js"></script>
    <!-- Bootbox -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/demo/demo-modals.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pines-notify/pnotify.min.js"></script>
    <!-- PNotify -->
    <link type="text/css" href="<?php echo base_url() ?>assets/plugins/pines-notify/pnotify.css" rel="stylesheet">

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/form-jasnyupload/fileinput.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/form-daterangepicker/daterangepicker.js"></script>
    <!-- Date Range Picker -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <!-- Datepicker -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js"></script>
    <!-- Timepicker -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <!-- DateTime Picker -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Color Picker -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/clockface/js/clockface.js"></script>
    <!-- Clockface -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/demo/demo-pickers.js"></script>
    <!-- End loading page level scripts-->
    <!-- number and validate js-->
    <script type="text/javascript" src="<?php echo base_url();?>js/number.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/validate.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/global_js.js"></script>

    <!-- OPEN ARMs -->
    <!--<script type="text/javascript" src="<?php echo base_url();?>js/rs_js/jquery.MultiFile.js"></script>    -->
    <!--<script type="text/javascript" src="<?php echo base_url();?>js/rs_js/fcbkcomplete/jquery.fcbkcomplete.js"></script> -->
    <!-- END OPEN ARMs -->

    <!-- fancy box -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/fancybox/jquery.fancybox.js"></script>
    <!--<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/form-validation/jquery.validate.min.js"></script>-->


    <!-- End loading page level scripts-->


    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.js"></script>
    <link type="text/css" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.themify.css" rel="stylesheet">

    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/progress-skylo/skylo.js"></script>
    <link type="text/css" href="<?php echo base_url() ?>assets/plugins/progress-skylo/skylo.css" rel="stylesheet">

    <!-- Custom Validate & Sweetalert -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/validate.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/cds.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/gridforms/gridforms/gridforms.js"></script><!-- Gridforms -->
    <link type="text/css" href="<?php echo base_url();?>assets/plugins/gridforms/gridforms/gridforms.css" rel="stylesheet"> 									<!-- Gridforms -->


</head>
    
    <?php
    if($this->session->userdata('use_name') == NULL){
        redirect();
    }else{
     if($header) echo $header ;
     if($middle) echo $middle ;
     if($footer) echo $footer ;
    }
    ?>

</html>
