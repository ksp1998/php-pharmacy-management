<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Purchase</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/suggestions.js"></script>
    <script src="js/add_new_purchase.js"></script>
    <script src="js/manage_purchase.js"></script>
    <script src="js/validateForm.js"></script>
  </head>
  <body>
    <!-- including side navigations -->
    <?php include("sections/sidenav.html"); ?>

    <div class="container-fluid">
      <div class="container">

        <!-- header section -->
        <?php
          require "php/header.php";
          createHeader('bar-chart', 'Manage Purchase', 'Manage Existing Purchase');
        ?>
        <!-- header section end -->

        <!-- form content -->
        <div class="row">
          <div class="col-md-12 form-group form-inline">
            <label class="font-weight-bold" for="">Search :&emsp;</label>
            <input type="number" class="form-control" id="by_voucher_number" placeholder="By Voucher Number" onkeyup="searchPurchase(this.value, 'VOUCHER_NUMBER');">
            &emsp;<input type="text" class="form-control" id="by_suppliers_name" placeholder="By Supplier Name" onkeyup="searchPurchase(this.value, 'SUPPLIER_NAME');">
            &emsp;<input type="number" class="form-control" id="by_invoice_number" placeholder="By Invoice" onkeyup="searchPurchase(this.value, 'INVOICE_NUMBER');">
            &emsp;<label class="font-weight-bold" for="">By Purchase Date :&emsp;</label>
            <input type="date" class="form-control" id="by_purchase_date" onchange="searchPurchase(this.value, 'PURCHASE_DATE');">
            &emsp;
            <select id="payment_status" class="form-control" onchange="searchPurchase(this.value, 'PAYMENT_STATUS');">
              <option value="DUE">DUE</option>
              <option value="PAID">PAID</option>
            </select>
            &emsp;<button class="btn btn-success font-weight-bold" onclick="cancel();"><i class="fa fa-refresh"></i></button>
          </div>

          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #02b6ff;">
          </div>

          <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
            		<thead>
            			<tr>
            				<th>SL.</th>
                    <th>Voucher Number</th>
                    <th>Supplier Name</th>
            				<th>Invoice Number</th>
                    <th>Purchase Date</th>
                    <th>Total Amount</th>
                    <th>Payment Status</th>
                    <th>Action</th>
            			</tr>
            		</thead>
                <tbody id="purchases_div">
                  <?php
                    require 'php/manage_purchase.php';
                    showPurchases(0);
                  ?>
            		</tbody>
            	</table>
            </div>
          </div>

        </div>
        <!-- form content end -->
        <hr style="border-top: 2px solid #ff5252;">
      </div>
    </div>
  </body>
</html>
