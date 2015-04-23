<style type="text/css">
    .form-signin {
        margin: 0 auto;
        max-width: 330px;
        padding: 15px;
    }
</style>




<?php echo form_open("auth/login", array('class' => 'form-signin'));?>

  <h1><?php echo lang('login_heading');?></h1>
  <p><?php echo lang('login_subheading');?></p>

  <div id="infoMessage"><?php echo $message;?></div>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit(array('name' => 'submit', 'class' => 'btn btn-lg btn-primary btn-block'), lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<!--<p><a href="forgot_password"><?php /*echo lang('login_forgot_password');*/?></a></p>-->