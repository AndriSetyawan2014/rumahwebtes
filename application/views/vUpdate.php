<div class="container">
  <h2><?php echo $title; ?></h2>
        
  <?php echo form_open('home/updateUser');?>
  <?php foreach ($allUser as $data_item): ?>
    <div class="form-group">
      <label for="FirstName">First Name:</label>
      <input type="text" name="firstName" value=<?php echo $data_item->first_name; ?> />
    </div>

    <div class="form-group">
      <label for="LastName">Last Name:</label>
      <input type="text" name="lastName" value=<?php echo $data_item->last_name; ?> />
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" name="email" value=<?php echo $data_item->email; ?> />
    </div>

    
    <?php echo form_submit('submit', 'Update User');?>

    <?php endforeach; ?>
    <?php echo form_close();?>

</div>