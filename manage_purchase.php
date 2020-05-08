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

          <div class="row col col-md-12">
            <div class="col-md-1">
              <label class="font-weight-bold" for="">Search :</label>
            </div>
            <div class="row col-md-2 form-group">
              <input type="number" class="form-control" id="" placeholder="By Invoice No.">
            </div>&emsp;
            <div class="row col-md-2 form-group">
              <input type="text" class="form-control" id="" placeholder="By Supplier Name">
            </div>&emsp;
            <div class="row col-md-2 form-group">
              <input type="number" class="form-control" id="" placeholder="By Voucher No.">
            </div>&emsp;
            <div class="row col-md-2 form-group">
              <input type="date" class="form-control" id="" placeholder="By Purchase Date">
            </div>
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
                    <th>Supplier Name</th>
            				<th>Invoice Number</th>
            				<th>Voucher Number</th>
                    <th>Purchase Date</th>
                    <th>Total Amount</th>
                    <th>Payment Status</th>
                    <th>Action</th>
            			</tr>
            		</thead>
            		<tbody>
                  <tr class="odd">
                    <td>1</td>
                    <td>BDPL</td>
              			<td>4363</td>
                    <td>56</td>
              			<td>12-03-2020</td>
              			<td>500.00</td>
                    <td>Due</td>
                    <td>
                      <a href="" class="btn btn-warning btn-sm">
              					<i class="fa fa-fax"></i>
              				</a>
              				<a href="" class="btn btn-info btn-sm">
              					<i class="fa fa-pencil"></i>
              				</a>
              				<a href="" class="btn btn-danger btn-sm">
              					<i class="fa fa-trash"></i>
              				</a>
              			</td>
                  </tr>
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
