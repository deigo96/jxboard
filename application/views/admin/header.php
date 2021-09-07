<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jxboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- <link rel="stylesheet" href="<?php echo base_url()?>/assets/font-awesome/all.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/adminlte.min.css">
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper overflow-hidden">
        <nav class="main-header navbar navbar-expand navbar-primary navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" data-widget="pushmenu" role="button" class="nav-link"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-widget="fullscreen" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url().'admin/logOut'; ?>" class="btn btn-outline-light">Logout</a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-light-primary elevation-4 overflow-hidden">
            <a href="<?php echo base_url('admin'); ?>" class="brand-link navbar-light">
                <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="jxboard logo" style="opacity: .8" class="brand-image elevation-3">
                <span class="brand-text font-weight-light">jxboard</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url('assets/images/admin.png'); ?>" alt="" class="img-circle elevation-2">
                    </div>
                </div>
                
    
