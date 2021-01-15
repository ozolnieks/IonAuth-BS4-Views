<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo lang('Auth.index_heading');?></title>

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
                        <a class="nav-link" href="/auth/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container" id="formcontainer" style="display:none;">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                <h1 class="mt-5 text-center"><?php echo lang('Auth.index_heading');?></h1>
                        <p class="text-center"><?php echo lang('Auth.index_subheading');?></p>
                        <br>
                        <div id="infoMessage"><?php echo $message;?></div>
                        <table class="table table-bordered table-responsive-sm">
                            <thead class="thead-dark">
                            <tr>
                                <th><?php echo lang('Auth.index_fname_th');?></th>
                                <th><?php echo lang('Auth.index_lname_th');?></th>
                                <th><?php echo lang('Auth.index_email_th');?></th>
                                <th><?php echo lang('Auth.index_groups_th');?></th>
                                <th><?php echo lang('Auth.index_status_th');?></th>
                                <th><?php echo lang('Auth.index_action_th');?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user):?>
                                <tr>
                                    <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                                    <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                                    <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                                    <td>
                                        <?php foreach ($user->groups as $group):?>
                                            <?php echo anchor('auth/edit_group/' . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br />
                                        <?php endforeach?>
                                    </td>
                                    <td><?php echo ($user->active) ? anchor('auth/deactivate/' . $user->id, lang('Auth.index_active_link')) : anchor("auth/activate/". $user->id, lang('Auth.index_inactive_link'));?></td>
                                    <td><?php echo anchor('auth/edit_user/' . $user->id, lang('Auth.index_edit_link')) ;?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                        <p><?php echo anchor('auth/create_user', lang('Auth.index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('Auth.index_create_group_link'))?></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>/jquery/jquery.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $('.errors').addClass('alert alert-danger');
        $('.errors').css('padding','10px');
        $('ul').addClass('list-unstyled');
        $('ul').css('margin','0');
        $('#formcontainer').show();
    </script>

</body>

</html>
