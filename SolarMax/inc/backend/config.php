<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           =  false;
$cb->inc_sidebar                = 'SolarMax/inc/backend/views/inc_sidebar.php';
$cb->inc_header                 = 'SolarMax/inc/backend/views/inc_header.php';
$cb->inc_footer                 = 'SolarMax/inc/backend/views/inc_footer.php';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

if($_SESSION['admin'] > 0){

$cb->main_nav                   = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Dashboard</span>',
        'icon'  => 'si si-home',
        'url'   => 'dashboard.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Users</span>',
        'icon'  => 'si si-user',
        'url'   => 'usersmenu.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Database</span>',
        'icon'  => 'si si-book-open',
        'url'   => 'Barcodes.php'
    ),
);
}else{

$cb->main_nav                   = array(
        array(
            'name'  => '<span class="sidebar-mini-hide">Dashboard</span>',
            'icon'  => 'si si-home',
            'url'   => 'dashboard.php'
        ),

    );
};