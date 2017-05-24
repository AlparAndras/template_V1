<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TLT</title>
    <link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

    <style>



      .tbl {
        /*width: 1458px;*/
        border-top-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-left-width: 0px;
        -webkit-border-horizontal-spacing: 10px;
        -webkit-border-vertical-spacing: 10px;
      }

      tbody {
        display: table-row-group;
        vertical-align: middle;
        border-color: inherit;
      }

      tr {
        display: table-row;
        vertical-align: inherit;
        border-color: inherit;
      }

      td {
        
        padding: 7px 7px;
        display: table-cell;
        vertical-align: inherit;
      }


      .navbar-nav {
        width: 100%;
        text-align: center;
      }
      .navbar-nav > li {
        display: inline-block;
        float: none;
      }
      .navbar-nav > li > a {
        padding-left: 30px;
        padding-right: 30px;
      }
      footer {
        background-color: transparent;
        width: 100%;
        color: black;
        text-align: center;
        height: 50px;
      }
    </style>


  </head>
  <body>

    <header role="banner">
        <nav id="navbar-primary" class="navbar" role="navigation">
          <div class="container">
            <!-- <div class="navbar-header">
              <a class="navbar-brand" href="<?php echo base_url(); ?>">Toth Larisa Tanc Studio</a>
            </div> -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-primary-collapse">
              <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#">Link</a></li> -->
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>about">About</a></li>
                <li><a href="#"><img id="logo-navbar-middle" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/32877/logo-thing.png" width="200" alt="Toth Larisa Tanc Studio"></a></li>
                <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
                <li><a href="<?php echo base_url(); ?>posts/create">Create</a></li>
              </ul>
            </div>
            <!-- <div id = "navbar">
              <ul class="nav navbar-nav">

              </ul>
            </div> -->
          </div>
        </nav>
    </header>
    <div class="container">
