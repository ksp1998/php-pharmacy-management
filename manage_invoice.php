<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Invoice</title>
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
          createHeader('address-book', 'Manage Invoice', 'Manage Existing Invoice');
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
          						<label class="font-weight-bold" for="">Search :&emsp;</label>
          						<input type="text" class="form-control" id="" placeholder="Search Customer">
          					</div>
          				</form>
          			</div>
          		</div>
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
            				<th>Invoice No</th>
            				<th>Customer Name</th>
            				<th>Date</th>
                    <th>Total Amount</th>
                    <th>Action</th>
            			</tr>
            		</thead>
            		<tbody>
                  <tr class="odd">
                    <td>1</td>
              			<td>1011</td>
              			<td>Walking Customer</td>
              			<td>2020-05-03</td>
              			<td class=" total_sale">550.00</td>
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
                  <tr class="even">
                    <td>2</td>
              			<td>1011</td>
              			<td>Walking Customer</td>
              			<td>2020-05-03</td>
              			<td class=" total_sale">550.00</td>
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
                  <tr class="odd">
                    <td>3</td>
              			<td>1011</td>
              			<td>Walking Customer</td>
              			<td>2020-05-03</td>
              			<td class=" total_sale">550.00</td>
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
                <tfoot>
            			<tr style="text-align: right; font-size: 24px;">
            				<td colspan="4" style="color: green;">&nbsp; <b>Total Amount</b></td>
            				<td style="color: red;"><b>$427.82</b></td>
            			</tr>
            		</tfoot>
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
