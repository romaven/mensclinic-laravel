<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MensClinic | Панель управления</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="/admin/dist/css/skins/skin-green.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>M</b>C</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Mens</b>Clinic</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Администратор</span>
                        </a>
                        <ul class="dropdown-menu">

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">Меню</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Главная</span></a></li>
                <li><a href="#"><i class="fa fa-hospital-o"></i> <span>Департаменты</span></a></li>
                <li><a href="#"><i class="fa fa-user-md"></i> <span>Врачи</span></a></li>
                <li><a href="#"><i class="fa fa-pencil-square"></i> <span>Новости</span></a></li>
                <li><a href="#"><i class="fa fa-play"></i> <span>Видео</span></a></li>
                <li><a href="#"><i class="fa fa-pencil"></i> <span>Статьи</span></a></li>
                <li><a href="#"><i class="fa fa-sticky-note"></i> <span>Услуги</span></a></li>
                <li><a href="#"><i class="fa fa-money"></i> <span>Прайс</span></a></li>
                <li><a href="#"><i class="fa fa-file-text"></i> <span>Учет записи через сайт</span></a></li>
                <li><a href="#"><i class="fa fa-users"></i> <span>О клинике</span></a></li>
                <li class="header">Навигация</li>
                <li><a href="/" target="_blank"><i class="fa fa-desktop"></i> <span>Перейти на сайт</span></a></li>
                {{--<li class="treeview">--}}
                    {{--<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>--}}
                        {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
                    {{--</a>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--<li><a href="#">Link in level 2</a></li>--}}
                        {{--<li><a href="#">Link in level 2</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                MensClinic
                <small>управление сайтом</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Your Page Content Here -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
