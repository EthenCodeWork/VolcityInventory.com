<?php require 'solarmax/inc/_global/config.php'; ?>
<?php require 'solarmax/inc/backend/config.php'; ?>
<?php require 'solarmax/inc/_global/views/head_start.php'; ?>
<?php require 'solarmax/inc/_global/views/head_end.php'; ?>
<?php require 'solarmax/inc/_global/views/page_start.php'; ?>
<?php require 'vendor/autoload.php';?>

<!-- Page Content -->
<div class="content">

<div class="row invisible" data-toggle="appear">
        <!-- Row #1 -->
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-bar-chart fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Inventory</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600">$<span data-toggle="countTo" data-speed="1000" data-to="">0</span></div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-envelope-open fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Messages</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-users fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
</div>
<!-- END Page Content -->
<!-- Page JS Plugins -->
<?php require 'solarmax/inc/_global/views/page_end.php'; ?>
<?php require 'solarmax/inc/_global/views/footer_start.php'; ?>
<?php require 'solarmax/inc/_global/views/footer_end.php'; ?>