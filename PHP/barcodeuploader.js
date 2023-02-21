$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        itemname: $("#itemname").val(),
        itembarcode: $("#itembarcode").val(),
        companyname: $("#companyname").val(),
        ourbarcode: $("#ourbarcode").val(),
        inventoryCount: $("#inventoryCount").val(),
        detailsonitem: $("#detailsonitem").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "Barcode.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
      });
  
      event.preventDefault();
    });
  });