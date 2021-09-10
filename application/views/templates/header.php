<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo "RumahWebTes-".$title;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>  
  <body>
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-2" style="background-color:lavenderblush;"></div>
    <div class="col-sm-8" style="background-color:lavenderblush;">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <?php
            $active1 = "";
            $active2 = "";
            $active3 = "";
            $active4 = "";

            if($title == "List All User"){
                $active1 = "active";
            }
            if($title == "Registrasi"){ 
                $active2 = "active";
            }
            if($title == "Halaman Login"){
                $active3 = "active";
            }
        ?>
        <ul class="navbar-nav">
            <li class="nav-item <?php echo $active1;?>">
            <a class="nav-link" href=<?php echo site_url('home/alluser/1');?>>List All User</a>
            </li>
            <li class="nav-item <?php echo $active2;?>">
            <a class="nav-link" href=<?php echo site_url('home/registrasi');?>>Registrasi</a>
            </li>
            <li class="nav-item <?php echo $active3;?>">
            <a class="nav-link" href=#>.   .</a>
            </li>
            <li class="nav-item <?php echo $active4;?>">
            <a class="nav-link" href=<?php echo site_url('home/logout');?>>Logout</a> 
            </li>
        </ul>
    </nav>
 