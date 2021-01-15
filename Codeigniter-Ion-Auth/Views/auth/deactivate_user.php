<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo lang('Auth.deactivate_heading');?></title>

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
        <h1 class="mt-5 text-center"><?php echo lang('Auth.deactivate_heading');?></h1>
            <p class="text-center"><?php echo sprintf(lang('Auth.deactivate_subheading'), $user->username);?></p>
            <br>
            <div id="infoMessage"><?php echo $message;?></div>

            <?php echo form_open('auth/deactivate/' . $user->id);?>
            <div class="form-group text-center">
                <?php echo form_label(lang('Auth.deactivate_confirm_y_label'), 'confirm');?>
                <input type="radio" name="confirm" value="yes" checked="checked" />
                <?php echo form_label(lang('Auth.deactivate_confirm_n_label'), 'confirm');?>
                <input type="radio" name="confirm" value="no" />
            </div>
            <?php echo form_hidden('id', $user->id); ?>
            <div class="form-group text-center">
                <?php echo form_submit('submit', lang('Auth.deactivate_submit_btn'));?>
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
    $('#group_name').addClass('form-control');
    $('#group_description').addClass('form-control');
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