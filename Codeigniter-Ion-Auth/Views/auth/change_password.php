<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo lang('Auth.change_password_heading');?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="/">Codeigniter 4</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/auth">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/auth/logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container" id="formcontainer" style="display:none;">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-8 col-10 mx-auto">
        <h1 class="mt-5 text-center"><?php echo lang('Auth.change_password_heading');?></h1>
            <br>
            <div id="infoMessage"><?php echo $message;?></div>

            <?php echo form_open('auth/change_password');?>
            <div class="form-group">
                <?php echo form_label(lang('Auth.change_password_old_password_label'), 'old_password');?> <br />
                <?php echo form_input($old_password);?>
            </div>
            <div class="form-group">
                <label for="new_password"><?php echo sprintf(lang('Auth.change_password_new_password_label'), $minPasswordLength);?></label> <br />
                <?php echo form_input($new_password);?>
            </div>
            <div class="form-group">
                <?php echo form_label(lang('Auth.change_password_new_password_confirm_label'), 'new_password_confirm');?> <br />
                <?php echo form_input($new_password_confirm);?>
            </div>
            <?php echo form_input($user_id);?>

            <div class="form-group text-right">
            <?php echo form_submit('submit', lang('Auth.change_password_submit_btn'));?>
            </div>
            <?php echo form_close();?>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>/jquery/jquery.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $('#old').addClass('form-control');
    $('#new').addClass('form-control');
    $('#new_confirm').addClass('form-control');
    $('input[name|="submit"]').addClass('btn btn-primary');
    $('input[name|="submit"]').css('margin-top','16px');
    $('.errors').addClass('alert alert-danger');
    $('.errors').css('padding','10px');
    $('ul').addClass('list-unstyled');
    $('ul').css('margin','0');
    $('#formcontainer').show();
  </script>

</body>

</html>
