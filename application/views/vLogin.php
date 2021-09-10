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
  
  <?php echo form_open('home/cekLogin');?>
  <table >
        <tr>
            <div class="form-group">
                <td><label for="exampleInputEmail1">Email address</label></td>
                <td><?php echo form_input('email');?></td>
            </div>
        </tr>
        <tr>
            <div class="form-group">
                <td><label for="exampleInputPassword1">Password</label></td>
                <td><?php echo form_input('paswd');?></td>
            </div>
        </tr>
        <tr>
            <td></td>
            <td><?php echo form_submit('submit', 'Sign in');?></td>
        <tr>
  </table>
  <?php echo form_close();?>
  
</div>
</body>
</html>
