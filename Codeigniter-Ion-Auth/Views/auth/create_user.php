<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo lang('Auth.create_user_heading');?></title>

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
        <h1 class="mt-5 text-center"><?php echo lang('Auth.create_user_heading');?></h1>
            <p class="text-center"><?php echo lang('Auth.create_user_subheading');?></p>
            <br>
            <div id="infoMessage"><?php echo $message;?></div>

            <?php echo form_open('auth/create_user');?>
            <div class="form-group">
                <?php echo form_label(lang('Auth.create_user_fname_label'), 'first_name');?> <br />
                <?php echo form_input($first_name);?>
            </div>
            <div class="form-group">
                <?php echo form_label(lang('Auth.create_user_lname_label'), 'last_name');?> <br />
                <?php echo form_input($last_name);?>
            </div>
            <?php
              if ($identity_column !== 'email') {
                  echo '<div class="form-group">';
                  echo form_label(lang('Auth.create_user_identity_label'), 'identity');
                  echo '<br />';
                  echo \Config\Services::validation()->getError('identity');
                  echo form_input($identity);
                  echo '</div>';
              }
              ?>
            <div class="form-group">
                <?php echo form_label(lang('Auth.create_user_company_label'), 'company');?> <br />
                <?php echo form_input($company);?>
            </div>
            <div class="form-group">
                <?php echo form_label(lang('Auth.create_user_phone_label'), 'phone');?> <br />
                <?php echo form_input($phone);?>
            </div>
            <div class="form-group">
                <?php echo form_label(lang('Auth.create_user_email_label'), 'email');?> <br />
                <?php echo form_input($email);?>
            </div>
            <div class="form-group">
                <?php echo form_label(lang('Auth.create_user_password_label'), 'password');?> <br />
                <?php echo form_input($password);?>
            </div>
            <div class="form-group">
                <?php echo form_label(lang('Auth.create_user_password_confirm_label'), 'password_confirm');?><br />
                <?php echo form_input($password_confirm);?>
            </div>
            <div class="form-group text-right">
                <?php echo form_submit('submit', lang('Auth.create_user_submit_btn'));?>
            </div>
                <?php echo form_close();?>
            <br><br>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>/jquery/jquery.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $('#identity').addClass('form-control');
    $('#first_name').addClass('form-control');
    $('#last_name').addClass('form-control');
    $('#company').addClass('form-control');
    $('#phone').addClass('form-control');
    $('#email').addClass('form-control');
    $('#password').addClass('form-control');
    $('#password_confirm').addClass('form-control');
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