<?php require 'solarmax/inc/_global/config.php'; ?>
<?php require 'solarmax/inc/backend/config.php'; ?>
<?php require 'solarmax/inc/_global/views/head_start.php'; ?>
<?php require 'solarmax/inc/_global/views/head_end.php'; ?>
<?php require 'solarmax/inc/_global/views/page_start.php'; ?>
<?php require 'SolarMax\inc\_classes\server.php';?>
<link rel="stylesheet" href="solarmax/js/plugins/datatables/dataTables.bootstrap4.css">
<link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

<?php require 'vendor/autoload.php';
require 'PHP\barcodeuploader.php';
// This will output the barcode as HTML output to display in the browser
$generator = new Picqer\Barcode\BarcodeGeneratorJPG();


$location = '11515';

$itembarcode ='';

$gereratedcode = '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($location, $generator::TYPE_CODE_128)) . '">';


$rerite = substr($itembarcode, -4);


$combinedBarcode = $location. $rerite;


?>
<!-- Page Content -->
<div class="content">
    <h2 class="content-heading">Data Entry Forms</h2>
    <div class="row">
        <div class="col-xl-12">
            <!-- Bootstrap Contact -->
            <div class="block block-themed">
                <div class="block-header bg-info">
                    <h3 class="block-title">Data entry form</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>                

                <div class="block-content">
                    <?php echo $gereratedcode;
                    echo $location . $rerite;
                    ?>

                </div>
                <div class="block-content">
                    <form action="" method="post" >
                        <div class="form-group row">
                            <div class="col-4">
                                <label for="contact1-firstname">Item Name</label>
                                <input type="text" class="form-control" id="itemname" name="itemname" required placeholder="Enter Product Name">
                            </div>
                            <div class="col-4">
                                <label for="contact1-firstname">Item Barcode</label>
                                <input type="text" class="form-control" id="itembarcode" name="itembarcode" required onmouseover="this.focus();" placeholder="Scan Item Barcode Here">
                            </div>
                            <div class="col-4">
                                <label for="contact1-firstname">Company Name</label>
                                <input type="text" class="form-control" id="company" name="companyname"  required placeholder="Company We Buy From">
                            </div>
                            <div class="col-4">
                                <label for="contact1-lastname">Company Barcode</label>
                                <input type="text" class="form-control" id="ourbarcode" name="ourbarcode"  required placeholder="Scan Comapny Barcode Here">
                            </div>
                            <div class="col-4">
                                <label for="contact1-lastname">Stock Amount</label>
                                <input type="text" class="form-control" id="inventoryCount" name="inventoryCount" required placeholder="input amount counted">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="detailsonitem">Details of Item</label>
                            <div class="col-12">
                                <textarea class="form-control" id="detailsonitem" name="detailsonitem" required rows="4" placeholder="Enter your details.."></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" name="inputdata" id="inputdata" class="btn btn-alt-info">
                                    <i class="fa fa-send mr-5"></i> Insert Data
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php 

$query = "SELECT * FROM `items` ORDER by id LIMIT 10;";
$result = $con->query($query);
$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
            $item['id'] = $row['id'];
            $item['name'] = $row['ItemName'];
            $item['barcode'] = $row['ItemBarcode'];
            $item['companyname'] = $row['CompanyName'];
            $item['ourbarcode'] = $row['OurBarcode'];
            $item['detailsonitem'] = $row['DetailsOnItem'];
            $item['barcodeimg'] = $row['barcodeimg'];
            $item['invcount'] = $row['count'];
            $item['combinedBarcode'] = $row['combindedBarcode'];
            

}?>
                        <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Inventory Count <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Originl Barcode #</th>
                        <th scope="col">Compnay Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Details On Item</th>
                        <th scope="col">Barcode Image</th>
                        <th scope="col">inventory Count</th>
                        <th scope="col">Labeled Barcode</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#<?php echo $item['id']; ?></a></th>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['barcode'] ; ?></td>
                        <td><?php echo $item['companyname']; ?></td>
                        <td><?php echo $item['ourbarcode']; ?></td>
                        <td><?php echo $item['detailsonitem']; ?></td>
                        <td><?php echo $item['barcodeimg']; ?></td>
                        <td><?php if($item['invcount']< 10){ echo $item['invcount'];}else{echo $item['invcount'];}; ?></td>
                        <td><?php echo $item['combinedBarcode']; ?></td>
                      </tr>
                    </tbody>
                    
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#<?php echo $item['id']; ?></a></th>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['barcode'] ; ?></td>
                        <td><?php echo $item['companyname']; ?></td>
                        <td><?php echo $item['ourbarcode']; ?></td>
                        <td><?php echo $item['detailsonitem']; ?></td>
                        <td><?php echo $item['barcodeimg']; ?></td>
                        <td><?php if($item['invcount']< 10){ echo $item['invcount'];}else{echo $item['invcount'];}; ?></td>
                        <td><?php echo $item['combinedBarcode']; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div><!-- End Recent Sales -->

            <?php 
            $logged_id = $_SESSION['logged_id'];                
            $query = "SELECT * FROM `items` ORDER by id LIMIT 10";
            $run = mysqli_query($con, $query);
                    while($row = mysqli_fetch_assoc($run)){
                        $itemid = $row['id'];
                        $itemname = $row['ItemName'];
                        $itembarcode = $row['ItemBarcode'];
                        $companyname = $row['CompanyName'];
                        $ourbarcode = $row['OurBarcode'];
                        $detailsonitem = $row['DetailsOnItem'];
                        $barcodeimg = $row['barcodeimg'];
                        $invcount = $row['count'];
                        $combinedBarcode = $row['combindedBarcode'];
                        
            }
            ?>

    
            <!-- Bootstrap Contact -->
            <div class="block block-themed">
                <div class="block-header bg-info">
                    <h3 class="block-title">Data entry form</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>                
                <div class="block-content">
                <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped js-dataTable-full-pagination table-vcenter ">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">ID</th>
                        <th class="d-none d-sm-table-cell">Item Name</th>
                        <th class="text-center" style="width: 15%;">Originl Barcode</th>
                        <th class="text-center" style="width: 15%;">Company Name</th>
                        <th class="text-center" style="width: 15%;">Details On Item</th>
                        <th class="text-center" style="width: 15%;">Barcode Image</th>
                        <th class="text-center" style="width: 15%;">Inventory Count</th>
                        <th class="text-center" style="width: 15%;">Labeled Barcode</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $itemid; ?></td>
                        <td class="font-w600"><?php echo $itemname;?></td>
                        <td class="d-none d-sm-table-cell"><?php echo $itembarcode; ?></td>
                        <td class="d-none d-sm-table-cell"> <?php echo $companyname; ?></td>
                        <td class="d-none d-sm-table-cell"> <?php echo $ourbarcode; ?></td>
                        <td class="d-none d-sm-table-cell"> <?php echo $detailsonitem; ?></td>
                        <td class="d-none d-sm-table-cell"> <img src="<?php echo $barcodeimg; ?>"></td>
                        <td class="d-none d-sm-table-cell"> <?php echo $invcount; ?></td>
                        <td class="d-none d-sm-table-cell"> <?php echo $combinedBarcode; ?></td>


                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Data">
                                <i class="fa fa-user"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
                </div>
            </div>
            <!-- END Bootstrap Contact -->
        </div>
    
</div>

<!-- END Page Content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="SolarMax\assets\_es6\pages\be_tables_datatables.js"></script>

<script type="text/javascript" language="javascript">
$('').click(
    function() {
	if ($('#inputdata').is(':disabled')) {
    	$('#inputdata').removeAttr('disabled');
    } else {
    	$('#inputdata').attr('disabled', 'disabled');
    }
});
</script> 
<script type="text/javascript" src="SolarMax/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="SolarMax/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="SolarMax/js/pages/be_tables_datatables.min.js"></script>



<!-- Page JS Code -->
<?php require 'solarmax/inc/_global/views/page_end.php'; ?>
<?php require 'solarmax/inc/_global/views/footer_start.php'; ?>
<?php require 'solarmax/inc/_global/views/footer_end.php'; ?>
