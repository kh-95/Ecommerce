<!DOCTYPE html>

<html dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
     @include ('inc.style')
    <!-- END HEAD -->






    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        @include('inc.header')
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
  @include('inc.footer')
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        @include('inc.script')
    </body>

</html>