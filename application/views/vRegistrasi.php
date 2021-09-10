<div class="container">
  <h2><?php echo $title; ?></h2>
        
  <?php echo form_open('home/addUser');?>
    <div class="form-group">
      <label for="email">Email:</label>
      <?php echo form_input('email');?>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <?php echo form_input('paswd');?>
    </div>

    <div class="form-group">
      <label for="dob">Date of Birth:</label>
      <input id="datepicker" width="276" />
      <script>
          $('#datepicker').datepicker({
              uiLibrary: 'bootstrap4'
          });
      </script>
    </div>

    <?php echo form_submit('submit', 'Add User');?>
    <?php echo form_close();?>

</div>