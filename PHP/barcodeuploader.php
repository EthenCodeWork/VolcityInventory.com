<?php 
require 'SolarMax\inc\_classes\server.php';
$generator = new Picqer\Barcode\BarcodeGeneratorJPG();

$errors = [];

if (isset($_POST['inputdata'])){


$itemname = htmlspecialchars(mysqli_real_escape_string($con, $_POST['itemname']));

$itembarcode = htmlspecialchars(mysqli_real_escape_string($con, $_POST['itembarcode']));

$companyname = htmlspecialchars(mysqli_real_escape_string($con, $_POST['companyname']));

$ourbarcode = htmlspecialchars(mysqli_real_escape_string($con, $_POST['ourbarcode']));

$rerite = substr($itembarcode, -4);

$combinedBarcode = $ourbarcode .  $rerite;


$detailsonitem = htmlspecialchars(mysqli_real_escape_string($con, $_POST['detailsonitem']));

$inventoryCount = htmlspecialchars(mysqli_real_escape_string($con, $_POST['inventoryCount']));

//Checking if input was enter per section
//////////////////////////////////////////////////////////////////////*


if(empty($_POST['itemname'])){
    array_push($errors, 'Item Name is Required.');
}

if(empty($_POST['itembarcode'])){
    array_push($errors, 'Item barcode needs to be scanned.');
}

if(empty($_POST['companyname'])){
    array_push($errors, 'Compnay Names Needs to be inputed.');

}

if(empty($_POST['ourbarcode'])){
    array_push($errors, 'Only our companys barcode should be entered here.');

}
if(empty($_POST['detailsonitem'])){
    array_push($errors, 'Details Needed for data entry.');

}
if(empty($_POST['inventoryCount'])){
    array_push($errors, 'How Many Items are in the package?');

}
//////////////////////////////////////////////////////////////////////*//

  // first check the database to make sure 
  // a barcode does not already exist with the same barcode and/or email
  $barcode_check_query = "SELECT * FROM items WHERE `combindedBarcode`='$combinedBarcode' LIMIT 1";
  $result = mysqli_query($con, $barcode_check_query);

  if(mysqli_num_rows($result) > 0) {
      array_push($errors, "Barcode already exists");
  }

  if(count($errors) == false){
    $combinedBarcode = $ourbarcode .  $rerite;

    $placement = 'Barcodes/'.$combinedBarcode.'barcode.jpg';
    file_put_contents('Barcodes/'.$combinedBarcode.'barcode.jpg', $generator->getBarcode($combinedBarcode, $generator::TYPE_CODE_128));
    $query = "INSERT INTO `items`(`id`, `ItemName`, `ItemBarcode`, `CompanyName`, `OurBarcode`, `DetailsOnItem`, `barcodeimg`,`count`, `combindedBarcode`) VALUES (NULL,'$itemname','$itembarcode','$companyname','$ourbarcode','$detailsonitem','$placement','$inventoryCount','$combinedBarcode');";
    mysqli_query($con, $query) or die(mysqli_error($con));
    
    $redirect = '/Barcodes.php';
        echo "<script>window.location = '$redirect';</script>";
        return $redirect;
        

  }
}

?>