<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/assets/images/favicon.png"/>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <?php
                if (!empty($success_msg)) {
                    echo '<p class="statusMsg">' . $success_msg . '</p>';
                } elseif (!empty($error_msg)) {
                    echo '<p class="statusMsg">' . $error_msg . '</p>';
                }
                ?>
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <?php echo form_open(base_url().'users/login'); ?>
                        <div class="form-group">
                            <label class="label">Usuario</label>
                            <div class="input-group">
                                <input type="text" name="email" class="form-control" placeholder="Nombre de usuario">
                                <?php echo form_error('email', '<span class="help-block">', '</span>'); ?>
                                <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label">Contraseña</label>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" placeholder="******">
                                <?php echo form_error('password', '<span class="help-block">', '</span>'); ?>
                                <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button name="loginSubmit" class="btn btn-primary submit-btn btn-block">Iniciar sesión
                            </button>
                        </div>
                        <!--<div class="form-group d-flex justify-content-between">
                           <div class="form-check form-check-flat mt-0">
                               <label class="form-check-label">
                                   <input type="checkbox" class="form-check-input" checked> Keep me signed in
                               </label>
                           </div>
                           <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                       </div>
                       -->

                        <div class="text-block text-center my-3">
                            <span class="text-small font-weight-semibold">¿No eres miembro?</span>
                            <a href="/users/registration" class="text-black text-small">Crea una nueva cuenta</a>
                        </div>
                        <?php echo form_close(); ?>

                    </div>
                    <ul class="auth-footer">
                        <li>
                            <a href="#">Conditions</a>
                        </li>
                        <li>
                            <a href="#">Help</a>
                        </li>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                    </ul>
                    <p class="footer-text text-center">copyright © 2018. All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="/assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="/assets/js/off-canvas.js"></script>
<script src="/assets/js/misc.js"></script>
<!-- endinject -->
</body>

</html>