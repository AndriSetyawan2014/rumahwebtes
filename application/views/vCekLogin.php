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

<div class="container">
  <h2><?php echo $title; ?></h2>
   
  <table >
        <tr> 
          <?php foreach ($myResponse as $data_item): ?>
            <?php $data_item; ?>
          <?php endforeach; ?>                        
        <td>
            <?php
              if(strlen($data_item)>= 17 && strlen($data_item)<= 18){
                echo "Login Sukses";?>
          </td></tr><tr></tr>
          <tr><td>
                <a href=<?php echo site_url('home/alluser/1');?> class="btn btn-info" role="button">Lanjut ke Halaman Berikutnya >> </a>
              <?php
              $data_session = array(
                'token' => $data_item,
                'status' => "login"
                );
        
              $this->session->set_userdata($data_session);
                } else {?>
          </td></tr>
          <tr><td> <?php
                echo $data_item;
          ?>
          </td></tr><tr></tr>
          <tr><td> 
          <a href=<?php echo site_url('home/login');?> class="btn btn-info" role="button"><< Kembali ke Halaman Login  </a>
          <?php
              };
            ?> 
        </td>
          </tr>
               
  </table>
 
</div>
</body>
</html>