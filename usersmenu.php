<?php require 'solarmax/inc/_global/config.php'; ?>
<?php require 'solarmax/inc/backend/config.php'; ?>
<?php require 'solarmax/inc/_global/views/head_start.php'; ?>
<?php require 'solarmax/inc/_global/views/head_end.php'; ?>
<?php require 'solarmax/inc/_global/views/page_start.php'; ?>
<link rel="stylesheet" href="Solarmax/js/plugins/datatables/dataTables.bootstrap4.css">
<?php 
require 'solarmax/inc/_classes/server.php';
require 'PHP/login.php';

if($_SESSION['admin'] > 0){
echo 'Admin';
    }else{  echo 'Not Admin ';};
?>
<!-- Page Content -->
<div class="content">
    <h2 class="content-heading">Admin<small> Panel</small></h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">User Table <small></small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            
                <?php
                $logged_id = $_SESSION['logged_id'];
                $query = "SELECT * FROM `users` WHERE `id` <> '$logged_id'";
                $run = mysqli_query($con, $query);
                    if(mysqli_num_rows($run) > 0){
                        while($row = mysqli_fetch_assoc($run)){
                            $user_id = $row['id'];
                            $username = $row['username'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $email = $row['email'];
                            $activated = $row['activated'];
                }
            }

                ?>
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell">Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th class="text-center" style="width: 15%;">Profile</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $user_id; ?></td>
                        <td class="font-w600"><?php echo $username;?></td>
                        <td class="d-none d-sm-table-cell"><?php echo $email; ?></td>
                        <td class="d-none d-sm-table-cell">
                            <?php echo $activated; ?>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                <i class="fa fa-user"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END Page Content -->
<script type="text/javascript" src="SolarMax/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="SolarMax/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="SolarMax/js/pages/be_tables_datatables.min.js"></script>
<?php require 'solarmax/inc/_global/views/page_end.php'; ?>
<?php require 'solarmax/inc/_global/views/footer_start.php'; ?>
<?php require 'solarmax/inc/_global/views/footer_end.php'; ?>