<?php require 'solarmax/inc/_global/config.php'; ?>
<?php require 'solarmax/inc/_global/views/head_start.php'; ?>
<?php require 'solarmax/inc/_global/views/head_end.php'; ?>
<?php require 'solarmax/inc/_global/views/page_start.php'; ?>
<?php require 'PHP/registerbackend.php';?>

<!-- Page Content -->
<div class="bg-gd-emerald">
    <div class="hero-static content content-full bg-white" data-toggle="appear">
        <!-- Header -->
        <div class="py-30 px-5 text-center">
            <a class="link-effect font-w700" href="index.php">
                <i class="si si-fire"></i>
                <span class="font-size-xl text-primary-dark">Solar</span><span class="font-size-xl">Max</span>
            </a>
            <h1 class="h2 font-w700 mt-50 mb-10">Create New Account</h1>
            <h2 class="h4 font-w400 text-muted mb-0">Please add your details</h2>
        </div>
        <!-- END Header -->

        <!-- Sign Up Form -->
        <div class="row justify-content-center px-5">
            <div class="col-sm-8 col-md-6 col-xl-4">
                <!-- jQuery Validation functionality is initialized with .js-validation-signup class in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-validation-signup" action="" method="post">
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="text" class="form-control" id="firstname" name="firstname">
                                <label for="username">First Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="text" class="form-control" id="lastname" name="lastname">
                                <label for="username">Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="text" class="form-control" id="username" name="username">
                                <label for="username">Username</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="email" class="form-control" id="email" name="email">
                                <label for="email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="password1" class="form-control" id="password1" name="password1">
                                <label for="password1">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="password2" class="form-control" id="password2" name="password2">
                                <label for="password2">Password Confirmation</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row text-center">
                        <div class="col-12">
                            <label class="css-control css-control-primary css-checkbox">
                                <input type="checkbox" class="css-control-input" id="terms" name="terms">
                                <span class="css-control-indicator"></span>
                                I agree to Terms &amp; Conditions
                            </label>
                        </div>
                    </div>
                    <div class="form-group row gutters-tiny">
                        <div class="col-12 mb-10">
                            <button type="submit" id="register_user" name="register_user" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-success">
                                <i class="si si-user-follow mr-10"></i> Sign Up
                            </button>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="#" data-toggle="modal" data-target="#modal-terms">
                                <i class="si si-book-open text-muted mr-10"></i> Read Terms
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="signin.php">
                                <i class="si si-login text-muted mr-10"></i> Sign In
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Sign Up Form -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'solarmax/inc/_global/views/page_end.php'; ?>

<!-- Terms Modal -->
<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('medium', 3); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Terms Modal -->

<?php require 'solarmax/inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_auth_signup.min.js'); ?>

<?php require 'solarmax/inc/_global/views/footer_end.php'; ?>