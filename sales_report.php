<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sales Report</title>
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
          createHeader('book', 'Sales Report', 'Showing Sales Report');
        ?>
        <!-- header section end -->

        <!-- form content -->
        <div class="row">

          <div class="row">
          	<div class="col-sm-12">
          		<div class="panel panel-default">
          			<div class="panel-body">
          				<form action="" class="form-inline" method="post" accept-charset="utf-8">
                    &emsp;
          					<div class="form-group">
          						<label class="" for="from_date">Start Date :&emsp;</label>
          						<input type="text" name="from_date" class="form-control datepicker hasDatepicker" id="from_date" placeholder="Start Date">
          					</div>
                    &emsp;
          					<div class="form-group">
          						<label class="" for="to_date">End Date :&emsp;</label>
          						<input type="text" name="to_date" class="form-control datepicker hasDatepicker" id="to_date" placeholder="End Date" value="<?php echo date('Y-m-d');?>" autocomplete="off">
          					</div>
                    &emsp;
          					<button type="submit" class="btn btn-success">Search</button>
          				</form>
          			</div>
          		</div>
          	</div>
          </div>

          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #02b6ff;">
          </div>

          <div class="col col-md-12 table-responsive">
          	<table class="table table-bordered table-striped table-hover">
          		<thead>
          			<tr>
          				<th>Sales Date</th>
          				<th>Medicine Name</th>
                  <th>Batch ID</th>
                  <th>Expiry</th>
          				<th>Customer Name</th>
          				<th>Sale Price</th>
          				<th>Total Amount</th>
          			</tr>
          		</thead>
          		<tbody>
          			<tr>
          				<td>14 - NOV - 2019</td>
          				<td>Atonul 50</td>
          				<td>Mr Johnson</td>
                  <td></td>
                  <td></td>
          				<td style="text-align: right;">$15.00</td>
          				<td style="text-align: right;">$45.00</td>
          			</tr>
          		</tbody>
          		<tfoot>
          			<tr style="text-align: right; font-size: 24px;">
          				<td colspan="6" style="color: green;">&nbsp; <b>Total Amount</b></td>
          				<td style="color: red;"><b>$427.82</b></td>
          			</tr>
          		</tfoot>
          	</table>
          </div>

        </div>
        <!-- form content end -->
        <hr style="border-top: 2px solid #ff5252;">
      </div>
    </div>
  </body>
</html>
