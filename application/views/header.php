<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMİN PANEL ANASAYFA</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?=base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="<?=base_url()?>assets/admin/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="<?=base_url()?>assets/admin/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='<?=base_url()?>assets/admin/http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ORGANİK ÜRÜNLER</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" class="btn btn-info" title="Yeni Mesaj"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="Yeni Görev"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="<?=base_url()?>admin/login/login_cik" class="btn btn-danger" title="Çıkış"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>